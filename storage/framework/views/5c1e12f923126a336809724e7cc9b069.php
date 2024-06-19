
<?php $__env->startSection('title', 'Displayfileuploads'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <h2>File Records</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Size</th>
                <th>Created At</th>
                <th>Action</th> <!-- New column for download button -->
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($file->id); ?></td>
                    <td><?php echo e($file->file); ?></td>
                    <td><?php echo e($file->size); ?></td>
                    <td><?php echo e($file->created_at); ?></td>
                    <td>
                        <a href="<?php echo e(route('file.download', ['id' => $file->id])); ?>" class="btn btn-primary">Download</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/displayfileupload.blade.php ENDPATH**/ ?>