
<?php $__env->startSection('title','απαντησεις'); ?>
<?php $__env->startSection('content'); ?>



<div class="container">
    <h1>Αποτέλεσμα ερωτησεων  Οδήγησης</h1>
    <p>Το σκορ σας: <?php echo e($score); ?></p>
    <a href="<?php echo e(route('quizindexblade')); ?>" class="btn btn-primary">Κάνε click για άλλη δοκιμή</a>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/Quizquestionsfordrivers/results.blade.php ENDPATH**/ ?>