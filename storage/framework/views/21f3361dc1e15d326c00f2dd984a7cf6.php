
<?php $__env->startSection('title','createevent'); ?>
<?php $__env->startSection('content'); ?>

<style>
        form {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: green;
            color: white;
        }
</style>

    <form action="<?php echo e(route('add-post')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for='title'><?php echo e(__('title')); ?></label>
        <input type='text' class='form-control' id='title' name='title'>

        <label for="start"><?php echo e(__('Start')); ?></label>
        <input type='date' class='form-control' id='start' name='start' required value=''>

        <label for="end"><?php echo e(__('End')); ?></label>
        <input type='date' class='form-control' id='end' name='end' required value=''>


        <label for="description"><?php echo e(__('Description')); ?></label>
        <textarea id="description" name="description"></textarea>

        <label for="color"><?php echo e(__('Color')); ?></label>
        <input type="color" id="color" name="color" />

        
        <input type="submit" value="Save" class="btn btn-success" />
    </form>
    








<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/calendarevents/addevent.blade.php ENDPATH**/ ?>