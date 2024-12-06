<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    
        $alert = session()->get('alert'); // Get the alert value
        session()->forget('alert'); // Remove the alert from the session

        $inst = Institution::all(); // Fetch institutions

        return view('index', [
            'alert' => $alert,
            'inst' => $inst
        ]);
    }
}
