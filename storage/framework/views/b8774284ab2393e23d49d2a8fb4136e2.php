
<?php $__env->startSection('title', 'Update Event'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Update Event</h1>
    <form method="post" action="<?php echo e(route('update-event')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($event->title); ?>" required>
        </div>
        <div class="form-group">
            <label for="start">Start Date and Time:</label>
            <input type="datetime-local" class="form-control" id="start" name="start" value="<?php echo e(date('Y-m-d\TH:i', strtotime($event->start))); ?>" required>
        </div>
        <div class="form-group">
            <label for="end">End Date and Time:</label>
            <input type="datetime-local" class="form-control" id="end" name="end" value="<?php echo e(date('Y-m-d\TH:i', strtotime($event->end))); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3"><?php echo e($event->description); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Event</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/calendarevents/updateevent.blade.php ENDPATH**/ ?>