<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <section class="">
                      <div class="container">
                        <?php echo $__env->make('pages.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('pages.partials.success', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <div class="row justify-content-center">
                          <div class="col-12 text-left">
                            <h1>User Edit</h1>
                            <p class="lead"><p>Management User System</p>.</p>
                          </div>
                        </div>
                        
                        <?php echo $__env->make('pages.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    
                        <div class="row text-left mt-3">
                          <div class="container">
                            <div class="row justify-content-center">
                              <div class="col-12 col-md-12 col-lg-12 text-center">
                                <form method="POST" action="<?php echo e(route('user.store')); ?>"><?php echo csrf_field(); ?>
                                  <div class="fdb-box fdb-touch">
                                    <div class="row">
                                      <div class="col text-right">
                                        <h3>Form</h3>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name"  value="<?php echo e($user->name); ?>" placeholder="Name">
                                        <?php if($errors->has('name')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('telpon') ? ' is-invalid' : ''); ?>" name="telpon"  value="<?php echo e($user->telpon); ?>" placeholder="Telpon">
                                        <?php if($errors->has('telpon')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('telpon')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <div class="row mt-4">
                                      <div class="col">
                                        <input type="text" class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email"  value="<?php echo e($user->email); ?>" placeholder="Email">
                                        <?php if($errors->has('email')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <div class="row mt-4">
                                      <div class="col">
                                        <textarea class="form-control <?php echo e($errors->has('ket') ? ' is-invalid' : ''); ?>" cols="3" name="ket" placeholder="Keterangan"><?php echo e($user->ket); ?></textarea>
                                        <?php if($errors->has('ket')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('ket')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('desa_kelurahan') ? ' is-invalid' : ''); ?>" name="desa_kelurahan"  value="<?php echo e($user->desa_kelurahan); ?>" placeholder="Desa">
                                        <?php if($errors->has('desa_kelurahan')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('desa_kelurahan')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('kecamatan') ? ' is-invalid' : ''); ?>" name="kecamatan"  value="<?php echo e($user->kecamatan); ?>" placeholder="Kecamatan">
                                        <?php if($errors->has('kecamatan')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('kecamatan')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('kabutpaten') ? ' is-invalid' : ''); ?>" name="kabutpaten"  value="<?php echo e($user->kabutpaten); ?>" placeholder="Kabupaten">
                                        <?php if($errors->has('kabutpaten')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('kabutpaten')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('provinsi') ? ' is-invalid' : ''); ?>" name="provinsi"  value="<?php echo e($user->provinsi); ?>" placeholder="Provinsi">
                                        <?php if($errors->has('provinsi')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('provinsi')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('negara') ? ' is-invalid' : ''); ?>" name="negara"  value="<?php echo e($user->negara); ?>" placeholder="Negara">
                                        <?php if($errors->has('negara')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('negara')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('rt') ? ' is-invalid' : ''); ?>" name="rt"  value="<?php echo e($user->rt); ?>" placeholder="RT">
                                        <?php if($errors->has('rt')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('rt')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('rw') ? ' is-invalid' : ''); ?>" name="rw"  value="<?php echo e($user->rw); ?>" placeholder="RW">
                                        <?php if($errors->has('rw')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('rw')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <div class="row mt-4">
                                      <div class="col">
                                        <button class="btn btn-primary btn-block" type="submit">Edit</button>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>