<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/froala_blocks.min.css')); ?>" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
                <section class="fdb-block bg-dark" style="background-image: url(imgs/hero/purple.svg);">
                  <div class="container">
                    <div class="row">
                      <div class="col text-center">
                        <h1>Data Apps</h1>
                      </div>
                    </div>
                
                    <div class="row-70"></div>
                
                    <div class="row text-center justify-content-sm-center no-gutters">
                      <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-3 m-auto">
                        <div class="fdb-box fdb-touch">
                          <h2>Admin</h2>
                          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                          <p class="mt-4">
                            <?php if(auth()->guard()->check()): ?>
                                <?php if(Auth::user()->is_admin == 1): ?>
                                <a href="<?php echo e(url('/dashboard/admin')); ?>">Home <i class="fas fa-angle-right"></i></a>
                                <?php endif; ?>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>">Login <i class="fas fa-angle-right"></i></a>
                            <?php endif; ?>
                          </p>
                        </div>
                      </div>
                      <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-3 m-auto pt-5 pt-xl-0">
                        <div class="fdb-box fdb-touch">
                          <h2>RT</h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                          <p class="mt-4">
                            <?php if(auth()->guard()->check()): ?>
                                <?php if(Auth::user()->is_rt == 1): ?>
                                <a href="<?php echo e(url('/dashboard/rt')); ?>">Home <i class="fas fa-angle-right"></i></a>
                                <?php endif; ?>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>">Login <i class="fas fa-angle-right"></i></a>
                                |
                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('regis-rt')); ?>">Register <i class="fas fa-angle-right"></i></a>
                                <?php endif; ?>
                            <?php endif; ?>
                          </p>
                        </div>
                      </div>
                      <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-3 m-auto pt-5 pt-xl-0">
                        <div class="fdb-box fdb-touch">
                          <h2>RW</h2>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                          <p class="mt-4">
                            <?php if(auth()->guard()->check()): ?>
                                <?php if(Auth::user()->is_rw == 1): ?>
                                <a href="<?php echo e(url('/dashboard/rw')); ?>">Home <i class="fas fa-angle-right"></i></a>
                                <?php endif; ?>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>">Login <i class="fas fa-angle-right"></i></a>
                                |
                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('regis-rw')); ?>">Register <i class="fas fa-angle-right"></i></a>
                                <?php endif; ?>
                            <?php endif; ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
        </div>
    </body>
</html>
