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
                            <h1>Galeri Create</h1>
                            <p class="lead"><p>Management Galeri System</p>.</p>
                          </div>
                        </div>
                        
                        @include('pages.partials.navbar')
                    
                        <div class="row text-left mt-3">
                          <div class="container">
                            <div class="row justify-content-center">
                              <div class="col-12 col-md-12 col-lg-12 text-center">
                                <form method="POST" action="{{ route('galeri.store') }}" enctype="multipart/form-data">@csrf
                                  <div class="fdb-box fdb-touch">
                                    <div class="row">
                                      <div class="col text-right">
                                        <h3>Form</h3>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="file" class="form-control {{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture" placeholder="Gambar">
                                        @if ($errors->has('picture'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('picture') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('caption') ? ' is-invalid' : '' }}" name="caption" placeholder="Caption">
                                        @if ($errors->has('caption'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('caption') }}</strong>
                                            </span>
                                        @endif
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control {{ $errors->has('tautan') ? ' is-invalid' : '' }}" name="tautan" placeholder="Tautan">
                                        @if ($errors->has('tautan'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('tautan') }}</strong>
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
