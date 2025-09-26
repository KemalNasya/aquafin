<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = [
            [
                'title' => 'Tech Conference 2024',
                'date' => '2024-03-01',
                'time' => '09:00 - 17:00',
                'location' => 'Jakarta Convention Center',
                'description' => 'Konferensi teknologi terbesar di Indonesia'
            ],
            [
                'title' => 'Developer Workshop',
                'date' => '2024-03-15',
                'time' => '13:00 - 16:00',
                'location' => 'Online',
                'description' => 'Workshop pengembangan aplikasi modern'
            ]
        ];

        return view('agenda', compact('agendas'));
    }
}
