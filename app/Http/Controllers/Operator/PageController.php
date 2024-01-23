<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\Detail_alumni;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = Detail_alumni::all();
        return view('Operator.dashboard', compact('data'));
    }
}
