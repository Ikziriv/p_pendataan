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
                            <h1>Kartu Keluarga Edit</h1>
                            <p class="lead"><p>Management Kartu Keluarga System</p>.</p>
                          </div>
                        </div>
                        
                        <?php echo $__env->make('pages.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    
                        <div class="row text-left mt-3">
                          <div class="container">
                            <div class="row justify-content-center">
                              <div class="col-12 col-md-12 col-lg-12 text-center">
                                <form method="POST" action="<?php echo e(route('kk.store')); ?>"><?php echo csrf_field(); ?>
                                  <div class="fdb-box fdb-touch">
                                    <div class="row">
                                      <div class="col text-right">
                                        <h3>Form</h3>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <select class="form-control <?php echo e($errors->has('warga_id') ? ' is-invalid' : ''); ?>" name="warga_id" >
                                          <option selected disabled>Pilih Warga</option>
                                          <?php $__empty_1 = true; $__currentLoopData = $wargas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                          <option value="<?php echo e($v->id); ?>"><?php echo e($v->nik_warga); ?> - <?php echo e($v->name); ?></option>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                          <option>Empty</option>
                                          <?php endif; ?>
                                        </select>
                                        <?php if($errors->has('warga_id')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('warga_id')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('nomor_keluarga') ? ' is-invalid' : ''); ?>" name="nomor_keluarga"  value="<?php echo e($kk->nomor_keluarga); ?>" placeholder="Nomer KK (Kartu Keluarga)">
                                        <?php if($errors->has('nomor_keluarga')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('nomor_keluarga')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <div class="row mt-4">
                                      <div class="col">
                                        <textarea class="form-control <?php echo e($errors->has('alamat') ? ' is-invalid' : ''); ?>" cols="3" name="alamat"  placeholder="Keterangan"> <?php echo e($kk->alamat); ?> </textarea>
                                        <?php if($errors->has('alamat')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('alamat')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('desa_kelurahan') ? ' is-invalid' : ''); ?>" name="desa_kelurahan"  value="<?php echo e($kk->desa_kelurahan); ?>" placeholder="Desa">
                                        <?php if($errors->has('desa_kelurahan')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('desa_kelurahan')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('kecamatan') ? ' is-invalid' : ''); ?>" name="kecamatan"  value="<?php echo e($kk->kecamatan); ?>" placeholder="Kecamatan">
                                        <?php if($errors->has('kecamatan')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('kecamatan')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('kabutpaten') ? ' is-invalid' : ''); ?>" name="kabutpaten"  value="<?php echo e($kk->kabutpaten); ?>" placeholder="Kabupaten">
                                        <?php if($errors->has('kabutpaten')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('kabutpaten')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('provinsi') ? ' is-invalid' : ''); ?>" name="provinsi"  value="<?php echo e($kk->provinsi); ?>" placeholder="Provinsi">
                                        <?php if($errors->has('provinsi')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('provinsi')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('negara') ? ' is-invalid' : ''); ?>" name="negara"  value="<?php echo e($kk->negara); ?>" placeholder="Negara">
                                        <?php if($errors->has('negara')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('negara')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('rt') ? ' is-invalid' : ''); ?>" name="rt"  value="<?php echo e($kk->rt); ?>" placeholder="RT">
                                        <?php if($errors->has('rt')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('rt')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('rw') ? ' is-invalid' : ''); ?>" name="rw"  value="<?php echo e($kk->rw); ?>" placeholder="RW">
                                        <?php if($errors->has('rw')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('rw')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                      </div>
                                      <div class="col mt-4">
                                        <input type="text" class="form-control <?php echo e($errors->has('kodepos') ? ' is-invalid' : ''); ?>" name="kodepos"  value="<?php echo e($kk->kodepos); ?>" placeholder="Kode POS">
                                        <?php if($errors->has('kodepos')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('kodepos')); ?></strong>
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