<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $team = [
            ['name' => 'John Doe', 'position' => 'CEO', 'image' => 'team1.jpg'],
            ['name' => 'Jane Smith', 'position' => 'CTO', 'image' => 'team2.jpg'],
            ['name' => 'Mike Johnson', 'position' => 'Lead Developer', 'image' => 'team3.jpg']
        ];

        return view('about', compact('team'));
    }
}
