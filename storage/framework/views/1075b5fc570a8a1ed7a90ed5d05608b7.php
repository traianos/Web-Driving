;
<?php $__env->startSection('title','InstractorLogin'); ?>;
<?php $__env->startSection('content'); ?>;
<?php $__env->stopSection(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('admin/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="<?php echo e(asset('admin/css/sb-admin-2.min.css')); ?>" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">InstractorLogin</h1>
                </div>
                <div class="card-body">
                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo e(Session::get('error')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('instractorLoginpost')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control " id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(asset('admin/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(asset('admin/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('admin/js/sb-admin-2.min.js')); ?>"></script>
</body>

</html>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/instractor/InstractorLogin.blade.php ENDPATH**/ ?>