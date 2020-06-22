<div class="row justify-content-end">
    <div class="col-12">

        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group" role="group" aria-label="First group">
            <a class="btn btn-primary" href="
            @if(Auth::user()->is_rt == 1)
              {{url('dashboard/rt')}}
            @endif
            @if(Auth::user()->is_rw == 1)
              {{url('dashboard/rw')}}
            @endif
            @if(Auth::user()->is_admin == 1)
              {{url('dashboard/admin')}}
            @endif
            ">Dashboard <span class="sr-only">(current)</span></a>
            <a class="btn btn-primary" href="{{route('galeri.index')}}">Galeri</a>
            <a class="btn btn-primary" href="{{route('mutasi.index')}}">Mutasi</a>
            <a class="btn btn-primary" href="{{route('warga.index')}}">Warga</a>
            <a class="btn btn-primary" href="{{route('kk.index')}}">Kartu Keluarga</a>
            @if(Auth::user()->is_admin == 1)
            <a class="btn btn-primary" href="{{route('user.index')}}">User</a>
            @endif
          </div>
        </div>
    </div>
</div>