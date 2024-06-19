
<?php $__env->startSection('title','forgot-password'); ?>
<?php $__env->startSection('content'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('admin/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('admin/css/sb-admin-2.min.css')); ?>" rel="stylesheet"> 
</head>
<body class="bg-gradient-primary">

    <main class="login-form">

        <div class="cotainer">
      
            <div class="row justify-content-center">
      
                <div class="col-md-8">
      
                    <div class="card">
      
                        <div class="card-header">Reset Password</div>
      
                        <div class="card-body">
      
        
      
                          <?php if(Session::has('message')): ?>
      
                               <div class="alert alert-success" role="alert">
      
                                  <?php echo e(Session::get('message')); ?>

      
                              </div>
      
                          <?php endif; ?>
      
        
      
                            <form action="<?php echo e(route('resetpassPost')); ?>" method="POST">
      
                                <?php echo csrf_field(); ?>
      
                                <div class="form-group row">
      
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
      
                                    <div class="col-md-6">
      
                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
      
                                        <?php if($errors->has('email')): ?>
      
                                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
      
                                        <?php endif; ?>
      
                                    </div>
      
                                </div>
      
                                <div class="col-md-6 offset-md-4">
      
                                    <button type="submit" class="btn btn-primary">
      
                                        Send Password Reset Link
      
                                    </button>
      
                                </div>
      
                            </form>
      
                              
      
                        </div>
      
                    </div>
      
                </div>
      
            </div>
      
        </div>
      
      </main>
      
      <?php $__env->stopSection(); ?>

    <script src="<?php echo e(asset('admin/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('admin/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('admin/js/sb-admin-2.min.js')); ?>"></script>
</body>
</html>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/forgot-password.blade.php ENDPATH**/ ?>