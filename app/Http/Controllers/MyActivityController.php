<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MyActivityController extends Controller
{
    public function show(): View
    {
        return view('activities.my-activities');
    }
}
