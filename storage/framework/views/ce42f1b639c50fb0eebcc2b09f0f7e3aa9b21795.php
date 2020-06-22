<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <section class="fdb-block py-0">
                      <div class="container py-5 my-5" style="background-image: url(imgs/shapes/4.svg);">
                        <div class=" row justify-content-end">
                          <div class="col-12 col-md-8 col-lg-6 col-xl-5 text-left">

                            <form method="POST" action="<?php echo e(route('front.login')); ?>"><?php echo csrf_field(); ?>
                                <div class="fdb-box">
                                  <div class="row">
                                    <div class="col">
                                      <h1>Log In</h1>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mt-4">
                                        <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                        <?php if($errors->has('email')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                  </div>
                                  <div class="row mt-4">
                                    <div class="col">
                                        <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                        <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                  </div>
                                  <div class="row mt-4 ml-3">
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                        <label class="form-check-label" for="remember">
                                            <?php echo e(__('Remember Me')); ?>

                                        </label>
                                    </div>
                                  </div>
                                  <div class="row mt-4">
                                    <div class="col">
                                      <button class="btn btn-block btn-secondary" type="submit">Submit</button>
                                    </div>
                                  </div>
                                </div>
                            </form>
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