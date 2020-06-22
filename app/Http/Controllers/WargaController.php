<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warga;
use Auth;

class WargaController extends Controller
{
    public function index()
    {
		$wargas = Warga::orderBy('id', 'desc')->get();
		return view('pages.warga.index',compact('wargas'));
    }

    public function create()
    {
		return view('pages.warga.create');
    }

    public function store(Request $request)
    {
		$this->validate(request(),[
			'nik_warga'       => 'required',
		]);

		Warga::create([
			'user_id'     => $request->get('user_id'),
			'nik_warga'   => $request->get('nik_warga'),
			'name'   => $request->get('name'),
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

		return redirect()->route('warga.index')->with('success','Warga successfully added');
    }

    //update data with model binding by Laravel Future
    public function edit($id)
    {
      	$warga = Warga::find($id);
		return view('pages.warga.edit',compact('warga'));
    }

    public function update(Warga $warga)
    {
		$this->validate(request(),[
			'nik_warga'       => 'required',
		]);

		$warga->update([
			'user_id'     => $request->get('user_id'),
			'nik_warga'   => $request->get('nik_warga'),
			'name'   => $request->get('name'),
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
		return redirect()->route('warga.index')->with('info','Warga successfully change');
    }

    public function show(Warga $warga){
		return view('pages.warga.show',compact('warga'));
    }

    public function destroy(Warga $warga)
    {
		$warga->delete();
		return redirect()->route('warga.index')->with('danger','Warga successfully remove');
    }

    public function destrox()
    {
		$id = request('_id');
		$warga = Warga::find($id);
		$warga->delete();
		$data['status'] = 'success';
		echo json_encode($data);
    }
}
