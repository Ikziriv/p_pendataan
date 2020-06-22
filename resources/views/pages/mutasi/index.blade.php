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
                            <h1>Mutasi</h1>
                            <p class="lead"><p>Management Mutasi System</p>.</p>
                          </div>
                        </div>
                        
                        @include('pages.partials.navbar')

                        <div class="row justify-content-end">
                          <section class="fdb-block p-0" id="navigator">
                            <div class="container-fluid">
                              <nav class="navbar navbar-expand-md">
                                <button class="navbar-toggler mr-auto ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav0" aria-controls="navbarNav0" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse mt-2 mt-md-0" id="navbarNav0">
                                  <p class="m-auto">
                                    <a class="btn btn-outline-primary m-1" href="{{route('mutasi.create')}}">Tambah</a>
                                    <a class="btn btn-outline-primary m-1" href="contacts.html">Cetak</a>
                                  </p>
                                </div>
                              </nav>
                            </div>
                          </section>
                        </div>
                    
                        <div class="row text-left">
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12 m-sm-auto mr-md-auto ml-md-0">
                            <table id="dt4" class="table table-sm">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col" class="text-center">NIK Mutasi</th>
                                  <th scope="col" class="text-center">Nama</th>
                                  <th scope="col" class="text-center">Alamat</th>
                                  <th scope="col" class="text-right">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @forelse($mutasis as $key => $v)
                                <tr>
                                  <th scope="row">{{$key+1}}</th>
                                  <td class="text-center">{{$v->nik_mutasi}}</td>
                                  <td class="text-center">{{$v->name}}</td>
                                  <td class="text-center">{{$v->alamat}}</td>
                                  <td class="text-right">
                                    <div class="dropdown">
                                      <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('mutasi.edit',$v->id) }}">Edit</a>
                                        <form id="delete-form-{{$v->id}}"
                                            method="post"
                                            action="{{route('mutasi.destroy', $v->id) }}"
                                            style="display: none;">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                        </form>
                                        <a class="dropdown-item" href="" onclick="
                                          if(confirm('Are You Sure?')) {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{$v->id}}').submit();
                                          } else {
                                            event.preventDefault();
                                          }
                                        ">
                                        Delete</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                @empty
                                <tr>
                                  <th scope="row">0</th>
                                  <td class="text-center">Not Found</td>
                                  <td class="text-center"></td>
                                  <td class="text-center"></td>
                                  <td class="text-right">
                                    <div class="dropdown">
                                      <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                @endforelse
                              </tbody>
                            </table>
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
