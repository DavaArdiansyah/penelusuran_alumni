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
        return view('alumni.dashboard');
    }
}
