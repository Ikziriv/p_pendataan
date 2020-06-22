<?php if($errors->any()): ?>
<div class="row justify-content-start">
  <div class="col-12 text-left text-light">
	<div class="alert bg-danger" role="alert">
		<em class="fa fa-minus-circle mr-2"></em> Error 
		  <ul>
		      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		          <li><?php echo e($error); ?></li>
		      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		  </ul>
		<a href="#" class="float-right"><em class="fa fa-remove"></em></a>
	</div>
  </div>
</div>
<?php endif; ?>