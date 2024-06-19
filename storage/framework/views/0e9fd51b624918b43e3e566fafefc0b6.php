

<?php $__env->startSection('title', 'Create Profile'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mb-0">Create Profile </h1>
    <hr />

    <form action="<?php echo e(route('profile.post')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="FirstName" class="form-control" placeholder="First Name" value="<?php echo e(old('FirstName')); ?>" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="LastName" class="form-control" placeholder="Last Name" value="<?php echo e(old('LastName')); ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php echo e(old('phone')); ?>" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">AFM</label>
                <input type="text" name="afm" class="form-control" placeholder="AFM" value="<?php echo e(old('afm')); ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Location</label>
                <select id="location" name="location" class="form-control" required>
                    <?php $__currentLoopData = $greeceLocations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($location); ?>"><?php echo e($location); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control" placeholder="Age" value="<?php echo e(old('age')); ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/profile/create.blade.php ENDPATH**/ ?>