
<?php $__env->startSection('title','Crud'); ?>
<?php $__env->startSection('contents'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!----Date Range Filter -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!---- end Date Range Filter  -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
   
    <div class="container">
        <h1 class="text-center text-info pt-4">Crud</h1>
        <hr>

    <div class="row py-2">
        <div class="col-md-6">
            <h4>List of Users And Categories </h4>
            <a href="<?php echo e(route('admin')); ?>" type="butoon" class="btn btn-primary ">Back Menu </a>
            <a  class="btn btn-primary" type="button" href="<?php echo e(route('index')); ?> ">refresh</a>
        </div>

        


        <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

            Welcome, <?php echo e(session('admin_name')); ?>

        </div>
        <?php endif; ?>


    <!----- table----->
    
    <div class="container">
        <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names..">
        <table class="table table-bordered table-hover" id="user_table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Categories</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Cat_created_at</th>
                    <th>Cat_updated_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="search_list">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td>
                            <?php $__currentLoopData = $user->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($category->name); ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td>
                            <?php $__currentLoopData = $user->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($category->pivot->start); ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td>
                            <?php $__currentLoopData = $user->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($category->pivot->end); ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td>
                            <?php $__currentLoopData = $user->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($category->pivot->created_at); ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td>
                            <?php $__currentLoopData = $user->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($category->pivot->updated_at); ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td class="btn-group" role="group" aria-label="Basic example">
                            <?php $__currentLoopData = $user->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('categories.edit', $category->id)); ?>" type="button" class="btn btn-success">Update</a>
                                <form action="<?php echo e(route('categories.delete', $category->id)); ?>" method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('categories.create')); ?>" type="button" class="btn btn-warning">Create</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo e($users->links()); ?>

    </div>

<div>
   
</div>
    <!----search--->
    <script>
        function searchTable() {
            var input, filter, userTable, categoriesTable, tr, tdName, tdEmail, tdCategories, i, txtValueName, txtValueEmail, txtValueCategories;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            userTable = document.getElementById("user_table");
            categoriesTable = document.getElementById("categories");
            tr = userTable.getElementsByTagName("tr");
        
            for (i = 0; i < tr.length; i++) {
                tdName = tr[i].getElementsByTagName("td")[1]; 
                tdEmail = tr[i].getElementsByTagName("td")[2]; 
                tdCategories = tr[i].getElementsByTagName("td")[3]; 
                if (tdName && tdEmail && tdCategories) {
                    txtValueName = tdName.textContent || tdName.innerText;
                    txtValueEmail = tdEmail.textContent || tdEmail.innerText;
                    txtValueCategories = tdCategories.textContent || tdCategories.innerText;
                    if (txtValueName.toUpperCase().indexOf(filter) > -1 || txtValueEmail.toUpperCase().indexOf(filter) > -1 || txtValueCategories.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }       
            }
        
            // Similar loop for categories table (if needed)
        }
        </script>
        


</body>
</html>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/categories/index.blade.php ENDPATH**/ ?>