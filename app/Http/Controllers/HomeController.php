<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index () {

        $complains = Complain::where('user_id', auth()->id())->get();
        return Inertia::render('MyRequest/Index', ['complains' => $complains]);
    }

    public function wolcamePage () {
        $complains = Complain::all();
        return Inertia::render('Welcome', [
            'complains' => $complains
        ]);
    }
}
