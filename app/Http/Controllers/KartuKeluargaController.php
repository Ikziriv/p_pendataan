<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KartuKeluarga;
use App\Warga;

class KartuKeluargaController extends Controller
{
    public function index()
    {
      $kks = KartuKeluarga::orderBy('id', 'desc')->get();
      return view('pages.kk.index',compact('kks'));
    }

    public function create()
    {
      $wargas = Warga::all();
      return view('pages.kk.create',compact('wargas'));
    }

    public function store(Request $request)
    {
      $this->validate(request(),[
        'nomor_keluarga'       => 'required',
      ]);

      KartuKeluarga::create([
        'user_id'     => $request->get('user_id'),
        'warga_id'   => $request->input('warga_id'),
        'nomor_keluarga'   => $request->get('nomor_keluarga'),
        'alamat'   => $request->get('alamat'),
        'desa_kelurahan'   => $request->get('desa_kelurahan'),
        'kecamatan'   => $request->get('kecamatan'),
        'kabutpaten'   => $request->get('kabutpaten'),
        'provinsi'   => $request->get('provinsi'),
        'negara'   => $request->get('negara'),
        'rt'   => $request->get('rt'),
        'rw'   => $request->get('rw'),
        'kodepos'   => $request->get('kodepos')
      ]);

      return redirect()->route('kk.index')->with('success','Kartu Keluarga successfully added');
    }

    //update data with model binding by Laravel Future
    public function edit($id)
    {
      $kk = KartuKeluarga::find($id);
      $wargas = Warga::all();
      return view('pages.kk.edit',compact('kk','wargas'));
    }

    public function update(KartuKeluarga $kk)
    {
      $this->validate(request(),[
        'nomor_keluarga'       => 'required',
      ]);

      $kk->update([
        'user_id'     => $request->get('user_id'),
        'warga_id'   => request('warga_id'),
        'nomor_keluarga'   => request('nomor_keluarga'),
        'alamat'   => request('alamat'),
        'desa_kelurahan'   => request('desa_kelurahan'),
        'kecamatan'   => request('kecamatan'),
        'kabutpaten'   => request('kabutpaten'),
        'provinsi'   => request('provinsi'),
        'negara'   => request('negara'),
        'rt'   => request('rt'),
        'rw'   => request('rw'),
        'kodepos'   => request('kodepos')
      ]);
      return redirect()->route('kk.index')->with('info','Kartu Keluarga successfully change');
    }

    public function show(KartuKeluarga $kk){
      $wargas = Warga::all();
      return view('pages.kk.show',compact('kk','wargas'));
    }

    public function destroy(KartuKeluarga $kk)
    {
      $kk->delete();
      return redirect()->route('kk.index')->with('danger','Kartu Keluarga successfully remove');
    }

    public function destrox()
    {
      $id = request('_id');
      $kk = KartuKeluarga::find($id);
      $kk->delete();
      $data['status'] = 'success';
      echo json_encode($data);
    }
}
