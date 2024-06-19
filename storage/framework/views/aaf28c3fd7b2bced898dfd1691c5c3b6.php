

<?php $__env->startSection('content'); ?>
<div class="container">
    <input type="text" id="searchInput" placeholder="Search...">
    <div id="searchResults">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Categories</th>
                    <th>Cat_created_at</th>
                    <th>Cat_updated_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($us->id); ?></td>
                    <td><?php echo e($us->name); ?></td>
                    <td><?php echo e($us->email); ?></td>
                    <td><?php echo e($us->categories_name); ?></td>
                    <td><?php echo e($us->categories_created_at); ?></td>
                    <td><?php echo e($us->categories_updated_at); ?></td>
                    <td class="btn-group" role="group" ariel-label="Basic example">
                        <a href="<?php echo e(route('show')); ?>" type="button" class="btn btn-info">Detail</a>
                        <a href="<?php echo e(route("create")); ?>" type="button" class="btn btn-warning">Create</a>
                        <a href="<?php echo e(route("edit")); ?>" type="button" class="btn btn-success">Update</a>
                        <a href="" type="button" class="btn btn-danger">Delete</a>
                            
                    </td>   
                </tr>    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            </tbody>
        </table>
       
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function(){
        $('#searchInput').on('input', function(){
            var searchText = $(this).val();

            // Make AJAX call
            $.ajax({
                url: '<?php echo e(route('search.get')); ?>',
                type: 'POST',
                data: {search: searchText},
                success: function(response){
                    $('#tableBody').html(response);
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/categories/search.blade.php ENDPATH**/ ?>