<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/froala_blocks.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/vendor/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <header>
          <div class="container">
            <nav class="navbar navbar-expand-md">
              <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(config('app.name', 'Laravel')); ?>

              </a>
        
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarNav1">
        
                <ul class="navbar-nav justify-content-end d-none d-lg-flex ml-md-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.froala.com"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.froala.com"><i class="fab fa-github"></i></a>
                  </li>
                </ul>
        
                <?php if(auth()->guard()->guest()): ?>
                    
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a class="btn btn-sm btn-outline-primary ml-md-3" href="#">
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span></a>

                        <a class="btn btn-sm btn-outline-primary ml-md-3" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?></a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </li>
                <?php endif; ?>
              </div>
            </nav>
          </div>
        </header>
        
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <footer class="fdb-block footer-small">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-12 col-md-6">
                <ul class="nav justify-content-center justify-content-md-start">
                  <li class="nav-item">
                    <a class="nav-link active" href="https://www.froala.com">Created By : <b>JADIKPN</b></a>
                  </li>
                </ul>
              </div>
        
              <div class="col-12 col-md-6 mt-4 mt-md-0 text-center text-md-right">
                <a href="https://www.froala.com" class="mx-2"><i class="fab fa-instagram" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </footer>
    </div>

    
    <!-- Scripts -->
    
    <script src="<?php echo e(asset('js/vendor/jquery-3.3.1.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/vendor/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/dataTables.bootstrap4.min.js')); ?>"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#dt4').DataTable();
      });
    </script>
</body>
</html>
