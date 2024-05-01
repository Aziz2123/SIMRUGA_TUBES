<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BendaharaController extends Controller
{
    public function index()
    {
        $data['title'] = 'Bendahara';
        $data['breadcrumbs'] = [
            ['label' => 'Dashboard', 'url' => '#'],
            ['label' => 'Bendahara', 'url' => '#']
        ];
        return view('bendahara.index', $data);
    }
}
