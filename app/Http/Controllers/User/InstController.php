<?php

namespace App\Http\Controllers\USer;

use App\Http\Controllers\Controller;
use App\Models\BasicJob;
use App\Models\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InstController extends Controller
{
    public function instu()
    {
        $userJobs = Auth::user()->jobs;
        $userSkills = Auth::user()->skills;

        $normalizedUserJobs = array_map(fn($job) => strtolower(trim($job)), $userJobs);
        $normalizedUserSkills = array_map(fn($skill) => strtolower(trim($skill)), $userSkills);

        $allJobs = BasicJob::whereIn(
            DB::raw('LOWER(title)'),
            $normalizedUserJobs
        )->get();

        $jobsByLevel = [
            'medium' => [], // Level 1: Insts associated with jobs only
            'good' => [], // Level 2: Insts associated with jobs and 1 skill
            'very matchy' => [], // Level 3: Insts associated with jobs and 2 skills
            'perfect' => []  
        ];

        $filteredJobIds = [];
        foreach ($allJobs as $job) {
            $normalizedJobSkills = array_map(fn($skill) => strtolower(trim($skill)), $job->skills ?? []);

            $commonSkills = array_intersect($normalizedUserSkills, $normalizedJobSkills);
            if (in_array(strtolower(trim($job->title)), $normalizedUserJobs)) {
                if (count($commonSkills) === 0) {
                    $jobsByLevel['medium'][] = $job; // Match only job title
                } elseif (count($commonSkills) === 1) {
                    $jobsByLevel['good'][] = $job; // Match job title and 1 skill
                } elseif (count($commonSkills) === 2) {
                    $jobsByLevel['very matchy'][] = $job; // Match job title and 2 skills
                } else {
                    $jobsByLevel['perfect'][] = $job; // Match job title and 3 or more skills
                }

                // Collect the filtered job IDs
                $filteredJobIds[] = $job->id;
            }
        }

        $instRecordsByLevel = [
            'medium' => [], // Level 1: Insts associated with jobs only
            'good' => [], // Level 2: Insts associated with jobs and 1 skill
            'very matchy' => [], // Level 3: Insts associated with jobs and 2 skills
            'perfect' => []  // Level 4: Insts associated with jobs and 3 or more skills
        ];

        foreach ($jobsByLevel as $level => $jobs) {
            if (!empty($jobs)) {
                $jobIdsForLevel = array_map(fn($job) => $job->id, $jobs);

                $instRecordsByLevel[$level] = Institution::whereIn('id', function ($query) use ($jobIdsForLevel) {
                    $query->select('inst_id')
                        ->from('inst_jobs')
                        ->whereIn('job_id', $jobIdsForLevel);
                })->get();
            }
        }

        // dd($instRecordsByLevel);
        return view('recomenditions', [
            'jobsByLevel' => $jobsByLevel,
            'instRecordsByLevel' => $instRecordsByLevel,
        ]);
    }
}
