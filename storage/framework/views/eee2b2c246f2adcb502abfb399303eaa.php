
<?php $__env->startSection('title','diploma'); ?>
<?php $__env->startSection('contents'); ?>



<div class="container">
    <h2>File Records</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>start</th>
                <th>Created At</th>
                <th>Action</th> <!-- New column for download button -->
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->name); ?></td>
                
                <td><?php echo e($user->created_at); ?></td>
                
                  
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
</div>




<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/diplomainfo/DiplomaInfo.blade.php ENDPATH**/ ?>