<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfrastructureController extends Controller
{
    public function index()
    {
        $infrastructures = [
            [
                'title' => 'Cloud Server',
                'description' => 'Infrastruktur cloud yang scalable dan reliable',
                'icon' => 'bi-cloud'
            ],
            [
                'title' => 'Data Center',
                'description' => 'Data center tier-3 dengan uptime 99.9%',
                'icon' => 'bi-building'
            ],
            [
                'title' => 'Network Security',
                'description' => 'Sistem keamanan jaringan terintegrasi',
                'icon' => 'bi-shield-check'
            ]
        ];

        return view('infrastructure', compact('infrastructures'));
    }
}
