<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use App\Models\Detail_alumni;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = Detail_alumni::all();
        return view('alumni.dashboard', compact('data'));
    }
}
