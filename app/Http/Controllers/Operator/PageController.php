<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Models\Detail_alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        $data = Detail_alumni::where('status', 'Belum diverifikasi')->get();
        return view('Operator.dashboard', compact('data'));
    }

    public function status($idData)
    {
        $data = Detail_alumni::find($idData);
        Detail_alumni::where(['id_user' => $data->id_user, 'status' => 'Diverifikasi'])->delete();

        $data->user->id_role = 4;
        $data->status = 'Diverifikasi';
        $data->save();
        return redirect()->route('Operator.dashboard');
    }
    public function destroy($IdData)
    {
        $data = Detail_alumni::find($IdData);
        $data->delete();
        return redirect()->route('Operator.dashboard');
    }
}
