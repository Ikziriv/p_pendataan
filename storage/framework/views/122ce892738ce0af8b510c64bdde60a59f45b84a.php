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
                            <h1>Galeri Create</h1>
                            <p class="lead"><p>Management Galeri System</p>.</p>
                          </div>
                        </div>
                        
                        <?php echo $__env->make('pages.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    
                        <div class="row text-left mt-3">
                          <div class="container">
                            <div class="row justify-content-center">
                              <div class="col-12 col-md-12 col-lg-12 text-center">
                                <form method="POST" action="<?php echo e(route('galeri.store')); ?>" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                                  <div class="fdb-box fdb-touch">
                                    <div class="row">
                                      <div class="col text-right">
                                        <h3>Form</h3>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <img src="<?php echo e(asset($galeri->path.$galeri->filename)); ?>" height="200px" />
                                        <input type="file" class="form-control <?php echo e($errors->has('picture') ? ' is-invalid' : ''); ?>" name="picture" placeholder="Gambar">
                                        <?php if($errors->has('picture')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('picture')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('caption') ? ' is-invalid' : ''); ?>" name="caption" value="<?php echo e($galeri->caption); ?>" placeholder="Caption">
                                        <?php if($errors->has('caption')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('caption')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('tautan') ? ' is-invalid' : ''); ?>" name="tautan" value="<?php echo e($galeri->tautan); ?>" placeholder="Tautan">
                                        <?php if($errors->has('tautan')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('tautan')); ?></strong>
                                            </span>
                                        <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>