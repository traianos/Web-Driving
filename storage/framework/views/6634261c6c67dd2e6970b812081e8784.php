

<?php $__env->startSection('title', 'Edit Profile'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mb-0">Edit Profile</h1>
    <hr />
    
    <form action="<?php echo e(route('profile.update', $profile->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
    
        <div class="form-group">
            <label for="FirstName">First Name:</label>
            <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?php echo e($profile->FirstName); ?>">
        </div>
    
        <div class="form-group">
            <label for="LastName">Last Name:</label>
            <input type="text" class="form-control" id="LastName" name="LastName" value="<?php echo e($profile->LastName); ?>">
        </div>
    
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e($profile->phone); ?>">
        </div>
    
        <div class="form-group">
            <label for="afm">AFM:</label>
            <input type="text" class="form-control" id="afm" name="afm" value="<?php echo e($profile->afm); ?>">
        </div>
    
        <div class="form-group">
            <label for="location">Location:</label>
            <select class="form-control" id="location" name="location">
                <?php $__currentLoopData = $greeceLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($location); ?>" <?php echo e($profile->location == $location ? 'selected' : ''); ?>><?php echo e($location); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" name="age" value="<?php echo e($profile->age); ?>">
        </div>
    
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/profile/edit.blade.php ENDPATH**/ ?>