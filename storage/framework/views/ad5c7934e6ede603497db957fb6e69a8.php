
<?php $__env->startSection('title', 'Create Category'); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="mb-0">Create Category</h1>
    <hr />
    
    <form action="<?php echo e(route('categories.create')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Category</label>
                <select id="category" name="category" class="form-control">
                    <option value="AM">ΑΜ - Άδεια Οδήγησης Μοτοποδηλάτου έως 50 κ.ε.</option>
                    <option value="A1">Α1 - Άδεια Οδήγησης Μοτοσυκλέτας έως 125 κ.ε. μέγιστη ισχύς 11 kW</option>
                    <option value="A2">Α2 - Άδεια Οδήγησης Μοτοσυκλέτας έως 35 kW</option>
                    <option value="A"> Α - Άδεια Οδήγησης Μοτοσυκλέτας χωρίς περιορισμό ισχύος ή κυβικών</option>
                    <option value="B1">Β1 - Άδεια Οδήγησης για τετράκυλα</option>
                    <option value="B"> Β - Άδεια Οδήγησης Αυτοκινήτου έως 8+1 θέσεις & φορτηγό έως 3.500 kg μικτό βάρος</option>
                    <option value="BE">ΒΕ - Άδεια Οδήγησης συζευγμένων οχημάτων (ρυμουλκό Β κατ. & ρυμουλκούμενο έως 3.500 kg μικτό βάρος)</option>
                    <option value="C1">C1 - Άδεια Οδήγησης Φορτηγού έως 7.500 kg μικτό βάρος</option>
                    <option value="C1E">C1E - Άδεια Οδήγησης Νταλίκας Φορτηγού (συρμοί ή αρθρωτά οχήματα έως 12.000 kg μικτό βάρος)</option>
                    <option value="C">C - Άδεια Οδήγησης Φορτηγού </option>
                    <option value="CE">CE - Άδεια Οδήγησης Νταλίκας Φορτηγού (συρμοί ή αρθρωτά οχήματα)</option>
                    <option value="D1">D1 - Άδεια Οδήγησης Λεωφορείου έως 16+1 θέσεις & μέχρι 8 μέτρα μήκος </option>
                    <option value="D1E">D1E - Άδεια Οδήγησης Νταλίκας Λεωφορείου (συρμοί ή αρθρωτά οχήματα έως 16+1 θέσεις)</option>
                    <option value="D">D - Άδεια Οδήγησης Λεωφορείου</option>
                    <option value="DE">DE - Άδεια Οδήγησης Νταλίκας Λεωφορείου (συρμοί ή αρθρωτά οχήματα)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="start">Start Date:</label>
                <input type="date" class="form-control" id="start" name="start" required>
            </div>
            <div class="form-group">
                <label for="end">End Date:</label>
                <input type="date" class="form-control" id="end" name="end" required>
            </div>
            <div class="form-group">
                <label for="user_id">User:</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div>

            </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/categories/create.blade.php ENDPATH**/ ?>