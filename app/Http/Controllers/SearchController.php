<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request){

        $jobs =Job::query()
            ->with(['employer','tags'])
            ->where('title', 'like', '%'.$request->get('q').'%')
            ->get();

        return view('results', ['jobs' => $jobs]);
    }
}