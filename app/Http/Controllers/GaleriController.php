<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
		$galeris = Galeri::orderBy('id', 'desc')->get();
		return view('pages.galeri.index',compact('galeris'));
    }

    public function create()
    {
    	return view('pages.galeri.create');
    }

    public function store(Request $request)
    {
		$this->validate(request(),[
			'picture'       => 'required',
		]);

		$upload_path =  'galeris/';
		$filename = date('ymdhis') . '_' . $request->file('picture')->getClientOriginalName();
		$request->file('picture')->move('galeris/', $filename);
		Galeri::create([
			'user_id'     =>auth()->id(),
			'path'   => $upload_path,
			'filename'   => $filename,
			'caption'   => $request->get('caption'),
			'tautan'   => $request->get('tautan')
		]);

		return redirect()->route('galeri.index')->with('success','Galeri successfully added');
    }

    //update data with model binding by Laravel Future
    public function edit($id)
    {
      $galeri = Galeri::where('id', $id)->first();
      return view('pages.galeri.edit',compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
		$this->validate(request(),[
			'picture'       => 'required',
		]);

		if (strlen($request->file('picture')) > 0 ){
			$upload_path =  'galeris/';
			$filename = date('ymdhis') . '_' . $request->file('picture')->getClientOriginalName();
			$request->file('picture')->move('galeris/', $filename);
		}
		$galeri->update([
			'user_id'     =>auth()->id(),
			'path'   => $upload_path,
			'filename'   => $filename,
			'caption'   => $request->get('caption'),
			'tautan'   => $request->get('tautan')
		]);
		return redirect()->route('galeri.index')->with('info','Galeri successfully change');
    }

    public function show(Galeri $galeri){
		return view('pages.galeri.show',compact('galeri'));
    }

    public function destroy(Galeri $galeri)
    {
		$galeri->delete();
		return redirect()->route('galeri.index')->with('danger','Galeri successfully remove');
    }

    public function destrox()
    {
		$id = request('_id');
		$galeri = Galeri::find($id);
		$galeri->delete();
		$data['status'] = 'success';
		echo json_encode($data);
    }
}
