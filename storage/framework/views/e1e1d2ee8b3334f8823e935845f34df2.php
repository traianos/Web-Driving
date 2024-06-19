
<?php $__env->startSection('title', 'Displayfordata'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <h2> DataFormRecords</h2>
    <a href="<?php echo e(route('Dashboardinstractor')); ?>"  class="btn btn-primary">back</a>
    <a href="<?php echo e(route('getfromdataindex')); ?>"  class="btn btn-primary">refresh</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>firstName</th>
                <th>lastname</th>
                <th>start</th>
                <th>categories</th>
                <th>description</th> 
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $dataformget; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dtget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($dtget->id); ?></td>
                    <td><?php echo e($dtget->fn); ?></td>
                    <td><?php echo e($dtget->LastName); ?></td>
                    <td><?php echo e($dtget->start); ?></td>
                    <td><?php echo e($dtget->ct); ?></td>
                    <td><?php echo e($dtget->desc); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div>
       
       </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/instractor/formdataindextable.blade.php ENDPATH**/ ?>