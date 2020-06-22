<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <section class="">
                      <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if(session('status')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(session('status')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                          <div class="col-12 text-left">
                            <h1>Warga</h1>
                            <p class="lead"><p>Management Warga System</p>.</p>
                          </div>
                        </div>
                        
                        <?php echo $__env->make('pages.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <div class="row justify-content-end">
                          <section class="fdb-block p-0" id="navigator">
                            <div class="container-fluid">
                              <nav class="navbar navbar-expand-md">
                                <button class="navbar-toggler mr-auto ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav0" aria-controls="navbarNav0" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse mt-2 mt-md-0" id="navbarNav0">
                                  <p class="m-auto">
                                    <a class="btn btn-outline-primary m-1" href="<?php echo e(route('warga.create')); ?>">Tambah</a>
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
                                  <th scope="col" class="text-center">Nama</th>
                                  <th scope="col" class="text-center">Telpon</th>
                                  <th scope="col" class="text-center">Email</th>
                                  <th scope="col" class="text-right">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $wargas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                  <th scope="row"><?php echo e($key+1); ?></th>
                                  <td class="text-center"><?php echo e($v->nik_warga); ?></td>
                                  <td class="text-center"><?php echo e($v->name); ?></td>
                                  <td class="text-center"><?php echo e($v->alamat); ?></td>
                                  <td class="text-right">
                                    <div class="dropdown">
                                      <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="<?php echo e(route('warga.edit',$v->id)); ?>">Edit</a>
                                        <form id="delete-form-<?php echo e($v->id); ?>"
                                            method="post"
                                            action="<?php echo e(route('warga.destroy', $v->id)); ?>"
                                            style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('DELETE')); ?>

                                        </form>
                                        <a class="dropdown-item" href="" onclick="
                                          if(confirm('Are You Sure?')) {
                                            event.preventDefault();
                                            document.getElementById('delete-form-<?php echo e($v->id); ?>').submit();
                                          } else {
                                            event.preventDefault();
                                          }
                                        ">
                                        Delete</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
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
                                <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>