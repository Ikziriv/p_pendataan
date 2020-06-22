<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
      $users = User::orderBy('id', 'desc')->get();
      return view('pages.user.index',compact('users'));
    }

    public function create()
    {
      return view('pages.user.create');
    }

    public function store(Request $request)
    {
      $this->validate(request(),[
        'telpon'       => 'required',
      ]);

      User::create([
        'name'   => $request->get('name'),
        'telpon'   => $request->get('telpon'),
        'email'   => $request->get('email'),
        'password'   => $request->get('password'),
        'ket'   => $request->get('ket'),
        'desa_kelurahan'   => $request->get('desa_kelurahan'),
        'kecamatan'   => $request->get('kecamatan'),
        'kabutpaten'   => $request->get('kabutpaten'),
        'provinsi'   => $request->get('provinsi'),
        'negara'   => $request->get('negara'),
        'rt'   => $request->get('rt'),
        'rw'   => $request->get('rw'),
        'is_admin'   => 1
      ]);

      return redirect()->route('user.index')->with('success','User successfully added');
    }

    //update data with model binding by Laravel Future
    public function edit($id)
    {
      $user = User::find($id);
      return view('pages.user.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
      $this->validate(request(),[
        'telpon'       => 'required',
      ]);

      $user->update([
        'name'   => $request->get('name'),
        'telpon'   => $request->get('telpon'),
        'email'   => $request->get('email'),
        'ket'   => $request->get('ket'),
        'desa_kelurahan'   => $request->get('desa_kelurahan'),
        'kecamatan'   => $request->get('kecamatan'),
        'kabutpaten'   => $request->get('kabutpaten'),
        'provinsi'   => $request->get('provinsi'),
        'negara'   => $request->get('negara'),
        'rt'   => $request->get('rt'),
        'rw'   => $request->get('rw'),
        'is_admin'   => 1
      ]);
      return redirect()->route('user.index')->with('info','User successfully change');
    }

    public function show(User $user){
      return view('pages.user.show',compact('user'));
    }

    public function destroy(User $user)
    {
      $user->delete();
      return redirect()->route('user.index')->with('danger','User successfully remove');
    }

    public function destrox()
    {
      $id = request('_id');
      $user = User::find($id);
      $user->delete();
      $data['status'] = 'success';
      echo json_encode($data);
    }
}
