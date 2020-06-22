<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AuthFrontController extends Controller
{
    public function login(Request $request)
    {
        $rules = array(
            'email' => 'required|email',
            'password' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $email = $request->input('email');
            $password = $request->input('password');
            if (Auth::attempt(['email' => $email, 'password' => $password, 'is_rt'=>1])) {
                return redirect()->route('index.dash.rt');
            } 
            if (Auth::attempt(['email' => $email, 'password' => $password, 'is_rw'=>1])) {
                return redirect()->route('index.dash.rw');
            } 
            if (Auth::attempt(['email' => $email, 'password' => $password, 'is_admin'=>1])){
                return redirect()->route('index.dash.admin');
            }
            return redirect()->route('login');
        }
    }
    
    public function getRtRegister()
    {
        return view('auth/register-rt');
    }

    public function getRwRegister()
    {
        return view('auth/register-rw');
    }

    public function storeRt(Request $request)
    {
         $rules = array(
            'name'      => 'required',
            'alamat'      => 'required'
         );

        $this->validate($request, $rules);

        $agent                 = new User;
        $agent->name           = $request->get('name');
        $agent->telpon         = $request->get('telpon');
        $agent->email          = $request->get('email');
        $agent->is_rt          = 1;
        $agent->password       = bcrypt($request->get('password'));
        $agent->save();

        return redirect('login');
    }

    public function storeRw(Request $request)
    {
         $rules = array(
            'name'      => 'required',
            'alamat'      => 'required'
         );

        $this->validate($request, $rules);

        $agent                 = new User;
        $agent->name           = $request->get('name');
        $agent->telpon         = $request->get('telpon');
        $agent->email          = $request->get('email');
        $agent->is_rw          = 1;
        $agent->password       = bcrypt($request->get('password'));
        $agent->save();

        return redirect('login');
    }
}
