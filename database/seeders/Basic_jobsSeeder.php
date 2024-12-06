<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Basic_jobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('basic_jobs')->insert([
            // Jobs for Doctor, Nurse, Teacher
            [
                'title' => 'Doctor',
                'description' => 'Provide medical care and treatment.',
                'skills' => json_encode(['Medical Knowledge', 'Patient Care', 'Diagnosis', 'Communication']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Nurse',
                'description' => 'Assist doctors and care for patients.',
                'skills' => json_encode(['Patient Care', 'Medical Knowledge', 'First Aid', 'Communication']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Teacher',
                'description' => 'Educate students in various subjects.',
                'skills' => json_encode(['Teaching', 'Classroom Management', 'Communication', 'Patience']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Teacher Assistant',
                'description' => 'Assist teachers in the classroom.',
                'skills' => json_encode(['Teaching Support', 'Classroom Management', 'Patience', 'Communication']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'School Counselor',
                'description' => 'Provide guidance and support to students.',
                'skills' => json_encode(['Counseling', 'Communication', 'Emotional Support', 'Listening']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Physical Education Teacher',
                'description' => 'Teach physical education and promote fitness.',
                'skills' => json_encode(['Physical Education', 'Teaching', 'Teamwork', 'Motivation']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Jobs for Administrative roles
            [
                'title' => 'Office Administrator',
                'description' => 'Manage office tasks and administrative support.',
                'skills' => json_encode(['Organization', 'Communication', 'Time Management', 'Problem-Solving']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Receptionist',
                'description' => 'Handle front desk duties and customer service.',
                'skills' => json_encode(['Communication', 'Customer Service', 'Organization', 'Multitasking']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Jobs for General Support
            [
                'title' => 'Janitor',
                'description' => 'Maintain cleanliness of the facility.',
                'skills' => json_encode(['Cleaning', 'Organization', 'Attention to Detail', 'Time Management']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Security Guard',
                'description' => 'Ensure safety and security of the premises.',
                'skills' => json_encode(['Security', 'Surveillance', 'Emergency Response', 'Communication']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Jobs for Technology
            [
                'title' => 'Software Developer',
                'description' => 'Develop and maintain software applications.',
                'skills' => json_encode(['Programming', 'Software Development', 'Problem-Solving', 'Teamwork']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'System Administrator',
                'description' => 'Manage and maintain computer systems and networks.',
                'skills' => json_encode(['Networking', 'System Maintenance', 'Troubleshooting', 'Security']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Data Scientist',
                'description' => 'Analyze and interpret complex data.',
                'skills' => json_encode(['Data Analysis', 'Statistics', 'Machine Learning', 'Programming']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'UX/UI Designer',
                'description' => 'Design user interfaces and improve user experience.',
                'skills' => json_encode(['Design', 'User Research', 'Prototyping', 'Wireframing']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Jobs for Customer Service
            [
                'title' => 'Customer Support Specialist',
                'description' => 'Provide customer support and resolve inquiries.',
                'skills' => json_encode(['Customer Service', 'Problem-Solving', 'Communication', 'Empathy']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Call Center Agent',
                'description' => 'Handle incoming customer calls and resolve issues.',
                'skills' => json_encode(['Customer Service', 'Communication', 'Problem-Solving', 'Multitasking']),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
    
}
