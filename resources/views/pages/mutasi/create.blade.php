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
                            <h1>Mutasi Create</h1>
                            <p class="lead"><p>Management Mutasi System</p>.</p>
                          </div>
                        </div>
                        
                        @include('pages.partials.navbar')
                    
                        <div class="row text-left mt-3">
                          <div class="container">
                            <div class="row justify-content-center">
                              <div class="col-12 col-md-12 col-lg-12 text-center">
                                <form method="POST" action="{{ route('mutasi.store') }}">@csrf
                                  <div class="fdb-box fdb-touch">
                                    <div class="row">
                                      <div class="col text-right">
                                        <h3>Form</h3>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('nik_mutasi') ? ' is-invalid' : '' }}" name="nik_mutasi" placeholder="NIK Mutasi">
                                        @if ($errors->has('nik_mutasi'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nik_mutasi') }}</strong>
                                            </span>
                                        @endif
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
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}" name="tempat_lahir" placeholder="Tempat Lahir">
                                        @if ($errors->has('tempat_lahir'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <input type="date" class="form-control {{ $errors->has('tanggal_lahir') ? ' is-invalid' : '' }}" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                        @if ($errors->has('tanggal_lahir'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <select class="form-control {{ $errors->has('jk') ? ' is-invalid' : '' }}" name="jk" id="exampleFormControlSelect1">
                                          <option selected disabled>Jenis Kelamin</option>
                                          <option value="L">Laki</option>
                                          <option value="P">Perempuan</option>
                                        </select>
                                        @if ($errors->has('jk'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('jk') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <select class="form-control {{ $errors->has('agama') ? ' is-invalid' : '' }}" name="agama" id="exampleFormControlSelect1">
                                          <option selected disabled>Agama</option>
                                          <option value="Islam">Islam</option>
                                          <option value="Kristen">Kristen</option>
                                          <option value="Hindu">Hindu</option>
                                          <option value="Buddha">Buddha</option>
                                        </select>
                                        @if ($errors->has('agama'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('agama') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="row mt-4">
                                      <div class="col">
                                        <textarea class="form-control {{ $errors->has('alamat') ? ' is-invalid' : '' }}" cols="3" name="alamat" placeholder="Alamat"></textarea>
                                        @if ($errors->has('alamat'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('alamat') }}</strong>
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
                                    <div class="row">
                                      <div class="col mt-4">
                                        <select class="form-control {{ $errors->has('pendidikan_terakhir') ? ' is-invalid' : '' }}" name="pendidikan_terakhir" id="exampleFormControlSelect1">
                                          <option selected disabled>Pendidikan</option>
                                          <option value="S1">S1</option>
                                          <option value="D3">D3</option>
                                          <option value="D2">D2</option>
                                          <option value="D1">D1</option>
                                          <option value="SMA/SMK">SMA/SMK</option>
                                          <option value="SMP">SMP</option>
                                          <option value="SD">SD</option>
                                        </select>
                                        @if ($errors->has('pendidikan_terakhir'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('pendidikan_terakhir') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('pekerjaan') ? ' is-invalid' : '' }}" name="pekerjaan" placeholder="RW">
                                        @if ($errors->has('telpon'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('telpon') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <select class="form-control {{ $errors->has('status_perkawinan') ? ' is-invalid' : '' }}" name="status_perkawinan" id="exampleFormControlSelect1">
                                          <option selected disabled>Status Perkawinan</option>
                                          <option value="Lajang">Lajang</option>
                                          <option value="Duda">Duda</option>
                                          <option value="Janda">Janda</option>
                                          <option value="Kawin">Kawin</option>
                                        </select>
                                        @if ($errors->has('status_perkawinan'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('status_perkawinan') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <select class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="exampleFormControlSelect1">
                                          <option selected disabled>Status Mutasi</option>
                                          <option value="Tetap">Tetap</option>
                                          <option value="Kontrak">Kontrak</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('status') }}</strong>
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
