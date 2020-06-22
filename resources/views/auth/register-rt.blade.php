@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <section class="fdb-block">
                      <div class="container">
                        <form method="POST" action="{{ route('send-regis-rt') }}">
                        @csrf
                            <div class="row justify-content-center">
                              <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                                <div class="row">
                                  <div class="col text-right">
                                    <h1>Register RT</h1>
                                    <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
                                  </div>
                                </div>
                                <div class="row align-items-center">
                                  <div class="col mt-4">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama">

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                  </div>
                                </div>
                                <div class="row align-items-center mt-4">
                                  <div class="col">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                  </div>
                                </div>
                                <div class="row align-items-center mt-4">
                                  <div class="col">
                                    <input id="telpon" type="text" class="form-control{{ $errors->has('telpon') ? ' is-invalid' : '' }}" name="telpon" value="{{ old('telpon') }}" required placeholder="Telpon">

                                    @if ($errors->has('telpon'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('telpon') }}</strong>
                                        </span>
                                    @endif
                                  </div>
                                </div>
                                <div class="row align-items-center mt-4">
                                  <div class="col">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                  </div>
                                  <div class="col">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Ulangi Password">
                                  </div>
                                </div><hr>
                                <div class="row justify-content-start mt-4">
                                  <div class="col">
                                    <div class="form-check">
                                      <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input">
                                          I Read and Accept <a href="https://www.froala.com">Terms and Conditions</a>
                                        </label>
                                    </div>
                        
                                    <button type="submit" class="btn btn-block btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </form>
                      </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
