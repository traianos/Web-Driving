
<?php $__env->startSection('title','Ερωτησεις πολλαπλης'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Ερωτησεις πολλαπλης</h1>
    <a href="<?php echo e(route('Dashboard')); ?>" class="btn btn-primary">(επιστροφη στο menu)</a>
    <form action="<?php echo e(route('submitQuiz')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group">
                <label><?php echo e($question->question); ?></label>
                <?php $__currentLoopData = json_decode($question->options); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answers[<?php echo e($question->id); ?>]" value="<?php echo e($option); ?>">
                        <label class="form-check-label"><?php echo e($option); ?></label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="submit" class="btn btn-primary">Υποβολή</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/Quizquestionsfordrivers/quizquesions.blade.php ENDPATH**/ ?>