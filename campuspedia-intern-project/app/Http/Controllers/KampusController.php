<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampus;

class KampusController extends Controller
{
    public function store(Request $request)
    {
       Kampus::create([
           'nama_kampus' => $request->nama,
           'akronim' => $request->akronim,
           'akreditasi' => $request->akre,
           'status' => $request->status,
           'peringkat_asia' => $request->p_asia,
           'peringkat_lokal' => $request->p_lokal,
           'lokasi' => $request->lokasi,
       ]);
       return redirect('/');
    }

    public function viewKampus()
    {
        $kampus = Kampus::all();
        return view('kampus', compact('kampus'));
    }

    public function viewKampusList()
    {
        $kampus = Kampus::all();
        return view('kampus', compact('kampus'));
    }

    public function viewCompare($id1 = 1 , $id2 = 2)
    {
        $listkampus = Kampus::all();
        $kampus1 = Kampus::where('id', $id1)->first();
        $kampus2 = Kampus::where('id', $id2)->first();
        return view('banding', compact('kampus1', 'kampus2','listkampus'));
    }

    public function comparison(Request $request)
    {
        $listkampus = Kampus::all();
        $kampus1 = Kampus::where('id', $request->pilihan1)->first();
        $kampus2 = Kampus::where('id', $request->pilihan2)->first();
        return view('banding', compact('kampus1', 'kampus2','listkampus'));
    }

    public function edit($id)
    {
        $kampus = Kampus::where('id', $id)->first();
        return view('edit', compact('kampus'));
    }

    public function update(Request $request, $id)
    {
        Kampus::where('id', $id)->update([
            'nama_kampus' => $request->nama,
            'akronim' => $request->akronim,
            'akreditasi' => $request->akre,
            'status' => $request->status,
            'peringkat_asia' => $request->p_asia,
            'peringkat_lokal' => $request->p_lokal,
            'lokasi' => $request->lokasi,
        ]);
        return redirect('/');
    }

    public function delete($id)
    {
        Kampus::destroy($id);
        return back();
    }
}
