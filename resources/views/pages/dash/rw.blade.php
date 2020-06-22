@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <section class="">
                      <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row justify-content-center">
                          <div class="col-12 text-left">
                            <h1>Dashboard</h1>
                            <p class="lead"><p>You are logged in! Welcome RW</p>.</p>
                          </div>
                        </div>
                        
                        @include('pages.partials.navbar')
                    
                        <div class="row text-left mt-5">
                          <div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto mr-md-auto ml-md-0">
                            <h3><strong>Feature One</strong></h3>
                            <p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                          </div>
                    
                          <div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto pt-5 pt-md-0">
                            <h3><strong>Feature Two</strong></h3>
                            <p> It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
                          </div>
                    
                          <div class="col-12 col-sm-8 col-md-4 col-lg-3 m-sm-auto ml-md-auto mr-md-0 pt-5 pt-md-0">
                            <h3><strong>Feature Three</strong></h3>
                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>
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
