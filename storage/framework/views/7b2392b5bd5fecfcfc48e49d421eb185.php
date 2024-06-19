
<?php $__env->startSection('title','radmontest'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
       
        <form action="" method=">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Select Students:</label>
                <div class="checkbox">
                    <label><input type="checkbox" name="students[]" value="1"> Student 1</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="students[]" value="2"> Student 2</label>
                </div>
                <!-- Add more checkboxes for students as needed -->
            </div>
            <div class="form-group">
                <label>Select Teachers:</label>
                <div class="checkbox">
                    <label><input type="checkbox" name="teachers[]" value="1"> Teacher 1</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="teachers[]" value="2"> Teacher 2</label>
                </div>
                <!-- Add more checkboxes for teachers as needed -->
            </div>
            <!-- Add more checkboxes for students and teachers as needed -->
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/multichoicequestions/radmon.blade.php ENDPATH**/ ?>