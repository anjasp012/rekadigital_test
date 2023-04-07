<?php

namespace App\Http\Controllers;

use App\Models\Ask;
use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $programs = Program::take(4)->get();
        $asks = Ask::all();
        return view('pages.home', compact('programs', 'asks'));
    }
}
