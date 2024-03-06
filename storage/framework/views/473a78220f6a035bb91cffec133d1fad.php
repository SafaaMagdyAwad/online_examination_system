
<?php $__env->startSection('title'); ?>
    all students
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('adminhome')); ?>" class="btn btn-success" ><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="btn btn-success input mt-1 form-control loginPass">logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<p>all old passwords are 123456</p>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
    <form style="display: inline"  method="post" action="<?php echo e(route('search_student')); ?>">
        <?php echo csrf_field(); ?>
        <select name="year_id" class="input mt-2 form-control loginPass " >
            <option selected disabled >search students by year</option>
            <option value=1 >first year</option>
            <option value=2 >second year</option>
            <option value=3 >third year</option>
            <option value=4 >forth year</option>
            
        </select>
        <button type="submit" style="display: inline" class="btn btn-warning  mb-2  ">search</button>

     </form>
</div>
</div>
        <div class="col-6">
            <form style="display: inline"  method="post" action="<?php echo e(route('search_student')); ?>">
                <?php echo csrf_field(); ?>
                <input type="search" class="input mt-2 form-control loginPass " name="name" placeholder="search students by name">
        
             </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="container">
        
        <div class="row">
                <?php $__currentLoopData = $degrees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $degree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-4 bg-dark text-light m-2">
                    <h4><?php echo e($degree['exam_title']); ?></h4>
                    <p><?php echo e($degree['total_mark']); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        
    </div>
</div>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/admin/all_student_degrees.blade.php ENDPATH**/ ?>