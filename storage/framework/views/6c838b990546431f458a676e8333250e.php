
<?php $__env->startSection('title'); ?>
    all admins
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>

    <a href="<?php echo e(route('adminhome')); ?>" class="nav-link" ><?php echo e($logedinuser['name']); ?> home</a>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link1'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="nav-link">logout</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card">
   
</div>
</div>
        <div class="col-4">
            <form style="display: inline"  method="post" action="<?php echo e(route('search_admin')); ?>">
                <?php echo csrf_field(); ?>
                <input type="search" class="input mt-2 form-control loginPass " name="name" placeholder="search admin by name">
        
             </form>
        </div>
    </div>
</div>


<table class="table">
    <thead>
       <tr>
       <th scope="col"> id</th>
       <th scope="col">name</th>
       <th scope="col">email</th>
       
       
       <th scope="col">....</th>
       </tr>
   </thead>
   <tbody>
    <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
            <th scope="row"><?php echo e($admin['id']); ?></th>
            <td><?php echo e($admin['name']); ?></td>
            <td><?php echo e($admin['email']); ?></td>
            
            
            
            <td>

                    
                <a href="<?php echo e(route('updateuser_form',$admin['id'])); ?>" class="btn btn-warning input mt-1 form-control loginPass">update  data</a>
                
                <form method="POST" style="display: inline" action="<?php echo e(route('destroyuser',$admin['id'])); ?>"  >
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    
                    <td><button  onclick="return confirm('are you sure to delete ?')"  type="submit" class="btn btn-danger input mt-1 form-control loginPass">delete </button></td>
                </form>
                
            </td>
       </tr>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
       
   </tbody>
</table>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/admin/alladmins.blade.php ENDPATH**/ ?>