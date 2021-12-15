<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class KonsultasiController extends Controller
{
    public function konsultasi()
    {
        $user_id = Auth::id();
        $user_data = \App\Models\User::where('email', $user_id)
               ->get();

        $data_gejala = \App\Models\MasterGejala::all();

        $data_history = \App\Models\History::where('user_id', $user_id)
                ->first();

        return view('konsultasi', compact('user_data', 'data_gejala', 'data_history'));
    }

    public function konsultasiSubmitted(Request $request, $id)
    {
        $id_user = Auth::id();

        $data_history = \App\Models\History::where('user_id', $id_user)
                ->first();

        $add_history = \App\Models\History::where('user_id', $id_user)
               ->find($id);
        $add_history->update($request->all());

        $add_history->gejala = $request->input('gejala');

        $input_jenis = \App\Models\MasterDataKerusakan::whereIn('gejala_id', $add_history->gejala)
               ->get('jenis_id');

        $add_history->jenis_kerusakan = $input_jenis;

        $add_history->save();

        return redirect()->route('view.hasilkonsultasi', ['id' => $data_history->id_history]);
    }

    public function hasilkonsultasi($id)
    {
        $user_id = Auth::id();
        $user_data = \App\Models\User::where('email', $user_id)
               ->get();

        $data_history = \App\Models\History::where('user_id', $user_id)
               ->find($id);

        $history_data = \App\Models\History::where('user_id', $user_id);

        $data_history_gejala_id = $data_history->gejala;

        $gejala_ids = array();
        foreach($data_history_gejala_id as $id_gejala_master)
            $gejala_ids[] = $id_gejala_master;


        $data_gejala = \App\Models\MasterGejala::whereIn('id_gejala', $gejala_ids)
                ->get();

        $data_jenis_before = \App\Models\MasterDataKerusakan::join('master_jenis_kerusakan', 'master_jenis_kerusakan.id_jenis', '=', 'master_data_kerusakan.jenis_id')
                ->join('master_solusi', 'master_solusi.id_jk', '=', 'master_data_kerusakan.jenis_id')
                ->whereIn('master_data_kerusakan.gejala_id', $gejala_ids)
                ->get();
        $data_jenis = $data_jenis_before->unique('jenis_id');

        return view('hasilkonsultasi', compact('user_data', 'data_history', 'history_data', 'data_gejala', 'data_jenis'));
    }
}
