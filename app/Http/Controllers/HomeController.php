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

    public function wellcome () {

        $inProccess = Complain::where('status', 'pending')->get();
        $inResolved = Complain::where('status', 'resoleved')->get();
        return Inertia::render('Welcome', [
            'inProccess' => $inProccess,
            'inResolved' => $inResolved
        ]);
    }
}
