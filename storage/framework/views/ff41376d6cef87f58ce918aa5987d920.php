

<?php $__env->startSection('title', 'Edit Category'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="mb-0">Edit Category</h1>
    <hr />
    
    <form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo e($category->name); ?>" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Start</label>
                <input type="text" name="start" class="form-control" placeholder="Start" value="<?php echo e($pivotData->start); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">End</label>
                <input type="text" name="end" class="form-control" placeholder="End" value="<?php echo e($pivotData->end); ?>" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/categories/edit.blade.php ENDPATH**/ ?>