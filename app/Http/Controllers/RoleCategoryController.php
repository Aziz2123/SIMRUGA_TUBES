<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleCategoryController extends Controller
{
    public function index() {
        $this->authorize('admin');
        return view('bendahara.index');
    }
}
