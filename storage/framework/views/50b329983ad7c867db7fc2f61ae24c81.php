

<?php $__env->startSection('title', 'Profile Management'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-0">Profile Management</h1>
    <hr />
    <div class="mb-3">
        <a href="<?php echo e(route('profile.create')); ?>" class="btn btn-primary">Create New Profile</a>
        <a href="<?php echo e(route('Dashboard')); ?>" class="btn btn-primary">Dashboard</a>
        <a href="<?php echo e(route('profile.index')); ?>" class="btn btn-primary">refersh</a>
    </div>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>AFM</th>
                <th>Location</th>
                <th>Age</th>
                <th>Actions</th>
                <th>categories</th>
                <th>start</th>
                <th>end</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($profile->id); ?></td>
                    <td><?php echo e($profile->FirstName); ?></td>
                    <td><?php echo e($profile->LastName); ?></td>
                    <td><?php echo e($profile->phone); ?></td>
                    <td><?php echo e($profile->afm); ?></td>
                    <td><?php echo e($profile->location); ?></td>
                    <td><?php echo e($profile->age); ?></td>
                    <td>
                        <a href="<?php echo e(route('profile.edit', $profile->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('profile.delete', $profile->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <u>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <ul><?php echo e($cat->name); ?></ul>
                                    <td><?php echo e($cat->start); ?></td>
                                    <td><?php echo e($cat->end); ?></td>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </u>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/profile/profile.blade.php ENDPATH**/ ?>