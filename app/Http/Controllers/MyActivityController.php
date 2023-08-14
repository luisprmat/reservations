<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Response;
use Illuminate\View\View;

class MyActivityController extends Controller
{
    public function show(): View
    {
        $activities = auth()->user()->activities()->orderBy('start_time')->get();

        return view('activities.my-activities', compact('activities'));
    }

    public function destroy(Activity $activity)
    {
        abort_if(! auth()->user()->activities->contains($activity), Response::HTTP_FORBIDDEN);

        auth()->user()->activities()->detach($activity);

        return to_route('my-activity.show')->with('success', __('Activity removed.'));
    }
}
