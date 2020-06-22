<div class="row justify-content-end">
    <div class="col-12">

        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group" role="group" aria-label="First group">
            <a class="btn btn-primary" href="
            <?php if(Auth::user()->is_rt == 1): ?>
              <?php echo e(url('dashboard/rt')); ?>

            <?php endif; ?>
            <?php if(Auth::user()->is_rw == 1): ?>
              <?php echo e(url('dashboard/rw')); ?>

            <?php endif; ?>
            <?php if(Auth::user()->is_admin == 1): ?>
              <?php echo e(url('dashboard/admin')); ?>

            <?php endif; ?>
            ">Dashboard <span class="sr-only">(current)</span></a>
            <a class="btn btn-primary" href="<?php echo e(route('galeri.index')); ?>">Galeri</a>
            <a class="btn btn-primary" href="<?php echo e(route('mutasi.index')); ?>">Mutasi</a>
            <a class="btn btn-primary" href="<?php echo e(route('warga.index')); ?>">Warga</a>
            <a class="btn btn-primary" href="<?php echo e(route('kk.index')); ?>">Kartu Keluarga</a>
            <?php if(Auth::user()->is_admin == 1): ?>
            <a class="btn btn-primary" href="<?php echo e(route('user.index')); ?>">User</a>
            <?php endif; ?>
          </div>
        </div>
    </div>
</div>