<?php

namespace App\Http\Controllers;

use App\Models\Ask;
use App\Models\Program;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function __invoke()
    {
        $programs = Program::all();
        $asks = Ask::all();
        return view('pages.kelas', compact('programs', 'asks'));
    }
}
