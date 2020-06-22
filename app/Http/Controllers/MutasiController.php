<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mutasi;

class MutasiController extends Controller
{
    public function index()
    {
      $mutasis = Mutasi::orderBy('id', 'desc')->get();
      return view('pages.mutasi.index',compact('mutasis'));
    }

    public function create()
    {
      return view('pages.mutasi.create');
    }

    public function store(Request $request)
    {
      $this->validate(request(),[
        'nik_mutasi'       => 'required',
      ]);

      Mutasi::create([
        'user_id'     => $request->get('user_id'),
        'nik_mutasi'   => $request->get('nik_mutasi'),
        'nama'   => $request->get('nama'),
        'tempat_lahir'   => $request->get('tempat_lahir'),
        'tanggal_lahir'   => $request->get('tanggal_lahir'),
        'jk'   => $request->get('jk'),
        'alamat'   => $request->get('alamat'),
        'desa_kelurahan'   => $request->get('desa_kelurahan'),
        'kecamatan'   => $request->get('kecamatan'),
        'kabutpaten'   => $request->get('kabutpaten'),
        'provinsi'   => $request->get('provinsi'),
        'negara'   => $request->get('negara'),
        'rt'   => $request->get('rt'),
        'rw'   => $request->get('rw'),
        'agama'   => $request->get('agama'),
        'pendidikan_terakhir'   => $request->get('pendidikan_terakhir'),
        'pekerjaan'   => $request->get('pekerjaan'),
        'status_perkawinan'   => $request->get('status_perkawinan'),
        'status'   => $request->get('status')
      ]);

      return redirect()->route('mutasi.index')->with('success','Mutasi successfully added');
    }

    //update data with model binding by Laravel Future
    public function edit(Mutasi $mutasi)
    {
      return view('pages.mutasi.edit',compact('mutasi'));
    }

    public function update(Mutasi $mutasi)
    {
      $this->validate(request(),[
        'nik_mutasi'       => 'required',
      ]);

      $mutasi->update([
        'user_id'     => $request->get('user_id'),
        'nik_mutasi'   => $request->get('nik_mutasi'),
        'nama'   => $request->get('nama'),
        'tempat_lahir'   => $request->get('tempat_lahir'),
        'tanggal_lahir'   => $request->get('tanggal_lahir'),
        'jk'   => $request->get('jk'),
        'alamat'   => $request->get('alamat'),
        'desa_kelurahan'   => $request->get('desa_kelurahan'),
        'kecamatan'   => $request->get('kecamatan'),
        'kabutpaten'   => $request->get('kabutpaten'),
        'provinsi'   => $request->get('provinsi'),
        'negara'   => $request->get('negara'),
        'rt'   => $request->get('rt'),
        'rw'   => $request->get('rw'),
        'agama'   => $request->get('agama'),
        'pendidikan_terakhir'   => $request->get('pendidikan_terakhir'),
        'pekerjaan'   => $request->get('pekerjaan'),
        'status_perkawinan'   => $request->get('status_perkawinan'),
        'status'   => $request->get('status')
      ]);
      return redirect()->route('mutasi.index')->with('info','Mutasi successfully change');
    }

    public function show(Mutasi $mutasi){
      return view('pages.mutasi.show',compact('mutasi'));
    }

    public function destroy(Mutasi $mutasi)
    {
      $mutasi->delete();
      return redirect()->route('mutasi.index')->with('danger','Mutasi successfully remove');
    }

    public function destrox()
    {
      $id = request('_id');
      $Mutasi = Mutasi::find($id);
      $mutasi->delete();
      $data['status'] = 'success';
      echo json_encode($data);
    }
}
