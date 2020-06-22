@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <section class="">
                      <div class="container">
                        @include('pages.partials.errors')
                        @include('pages.partials.success')

                        <div class="row justify-content-center">
                          <div class="col-12 text-left">
                            <h1>User Create</h1>
                            <p class="lead"><p>Management User System</p>.</p>
                          </div>
                        </div>
                        
                        @include('pages.partials.navbar')
                    
                        <div class="row text-left mt-3">
                          <div class="container">
                            <div class="row justify-content-center">
                              <div class="col-12 col-md-12 col-lg-12 text-center">
                                <form method="POST" action="{{ route('user.store') }}">@csrf
                                  <div class="fdb-box fdb-touch">
                                    <div class="row">
                                      <div class="col text-right">
                                        <h3>Form</h3>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Name">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('telpon') ? ' is-invalid' : '' }}" name="telpon" placeholder="Telpon">
                                        @if ($errors->has('telpon'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('telpon') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="row mt-4">
                                      <div class="col">
                                        <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="row mt-4">
                                      <div class="col">
                                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Ulangi Password">
                                      </div>
                                    </div>
                                    <div class="row mt-4">
                                      <div class="col">
                                        <textarea class="form-control {{ $errors->has('ket') ? ' is-invalid' : '' }}" cols="3" name="ket" placeholder="Keterangan"></textarea>
                                        @if ($errors->has('ket'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('ket') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('desa_kelurahan') ? ' is-invalid' : '' }}" name="desa_kelurahan" placeholder="Desa">
                                        @if ($errors->has('desa_kelurahan'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('desa_kelurahan') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('kecamatan') ? ' is-invalid' : '' }}" name="kecamatan" placeholder="Kecamatan">
                                        @if ($errors->has('kecamatan'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('kecamatan') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('kabutpaten') ? ' is-invalid' : '' }}" name="kabutpaten" placeholder="Kabupaten">
                                        @if ($errors->has('kabutpaten'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('kabutpaten') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('provinsi') ? ' is-invalid' : '' }}" name="provinsi" placeholder="Provinsi">
                                        @if ($errors->has('provinsi'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('provinsi') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('negara') ? ' is-invalid' : '' }}" name="negara" placeholder="Negara">
                                        @if ($errors->has('negara'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('negara') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('rt') ? ' is-invalid' : '' }}" name="rt" placeholder="RT">
                                        @if ($errors->has('rt'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('rt') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('rw') ? ' is-invalid' : '' }}" name="rw" placeholder="RW">
                                        @if ($errors->has('rw'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('rw') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="row mt-4">
                                      <div class="col">
                                        <button class="btn btn-primary btn-block" type="submit">Save</button>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
