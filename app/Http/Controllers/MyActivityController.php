<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MyActivityController extends Controller
{
    public function show(): View
    {
        $activities = auth()->user()->activities()->orderBy('start_time')->get();

        return view('activities.my-activities', compact('activities'));
    }
}
