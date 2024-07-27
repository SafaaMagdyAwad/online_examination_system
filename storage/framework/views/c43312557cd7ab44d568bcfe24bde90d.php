
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
       

        <select name="year_id" class="input mt-2 form-control loginPass "  aria-label="Example text with button addon" aria-describedby="button-addon1">
            <option selected disabled >search students by year</option>
            <option value=1 >first year</option>
            <option value=2 >second year</option>
            <option value=3 >third year</option>
            <option value=4 >forth year</option>
            
        </select>
        <button type="submit" style="display: inline"  class="btn btn-outline-secondary">search</button>

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


<table class="table">
    <thead>
       <tr>
       <th scope="col">student id</th>
       <th scope="col">name</th>
       <th scope="col">email</th>
       
       <th scope="col">year</th>
       <th scope="col">....</th>
       </tr>
   </thead>
   <tbody>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
            <th scope="row"><?php echo e($student['id']); ?></th>
            <td><?php echo e($student['name']); ?></td>
            <td><?php echo e($student['email']); ?></td>
            
            <td><?php echo e($student['year_id']); ?></td>
            
            <td>

                    
               
                <div class="row">
                    <a href="<?php echo e(route('updateuser_form',$student['id'])); ?>"  style="display: inline" class=" btn btn-warning input mt-1 form-control loginPass">update  data</a>
               
                <a href="<?php echo e(route('student_degrees',$student['id'])); ?>"  style="display: inline" class="btn btn-success input mt-1 form-control loginPass">show degrees </a>
                
                <form method="POST" style="display: inline" action="<?php echo e(route('destroyuser',$student['id'])); ?>"  >
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    
                    <td><button  onclick="return confirm('are you sure to delete ?')"  type="submit" class="btn btn-danger input mt-1 form-control loginPass">delete </button></td>
                </form>
                </div>
                
            </td>
       </tr>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
       
   </tbody>
</table>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/admin/allstudents.blade.php ENDPATH**/ ?>