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
                            <h1>Kartu Keluarga Create</h1>
                            <p class="lead"><p>Management Kartu Keluarga System</p>.</p>
                          </div>
                        </div>
                        
                        @include('pages.partials.navbar')
                    
                        <div class="row text-left mt-3">
                          <div class="container">
                            <div class="row justify-content-center">
                              <div class="col-12 col-md-12 col-lg-12 text-center">
                                <form method="POST" action="{{ route('kk.store') }}">@csrf
                                  <div class="fdb-box fdb-touch">
                                    <div class="row">
                                      <div class="col text-right">
                                        <h3>Form</h3>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <select class="form-control {{ $errors->has('warga_id') ? ' is-invalid' : '' }}" name="warga_id" >
                                          <option selected disabled>Pilih Warga</option>
                                          @forelse($wargas as $key => $v)
                                          <option value="{{$v->id}}">{{$v->nik_warga}} - {{$v->name}}</option>
                                          @empty
                                          <option>Empty</option>
                                          @endforelse
                                        </select>
                                        @if ($errors->has('warga_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('warga_id') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('nomor_keluarga') ? ' is-invalid' : '' }}" name="nomor_keluarga" placeholder="Nomer KK (Kartu Keluarga)">
                                        @if ($errors->has('nomor_keluarga'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('nomor_keluarga') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="row mt-4">
                                      <div class="col">
                                        <textarea class="form-control {{ $errors->has('alamat') ? ' is-invalid' : '' }}" cols="3" name="alamat" placeholder="Keterangan"></textarea>
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
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('kodepos') ? ' is-invalid' : '' }}" name="kodepos" placeholder="Kode POS">
                                        @if ($errors->has('kodepos'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('kodepos') }}</strong>
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
