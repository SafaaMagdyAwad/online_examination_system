
<?php $__env->startSection('title'); ?>
Be healthy
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>
    <a href="<?php echo e(route('start')); ?>" class="nav-link" >return to the site</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container my-5 p-5">
    <h2 class="text-center fw-bold">BMI calculator</h2>
    <form method="post" action="<?php echo e(route('bmi')); ?>">
  
      <?php echo csrf_field(); ?>
      
      <div>
          <input type="text" class="input mt-1 form-control loginPass" placeholder="Height" name="Height">
      </div>
      <div>
          <input type="text" class="input mt-1 form-control loginPass" placeholder="Weight" name="Weight">
      </div>
     
      <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">calculate my BMI</button>
    </form>
    <table class="table table-striped mx-auto mt-4" style="width: 50%;">
   
      <tr>
        <th>BMI</th>
        <td class="text-end">
          <?php echo e($BMI); ?>

      </td>
      </tr>
    </table>
    <?php
    if($BMI>35){
    ?>
    <p class="mx-auto mt-4 alert alert-danger" style="width: 50%;">
      <strong>Obesity!!</strong> Your BMI above 35 you are in danger.
    </p>
    <?php }elseif($BMI<=35 && $BMI>25){?>
    <p class="mx-auto mt-4 alert alert-warning" style="width: 50%;">
      <strong>Overweight!!</strong> Your BMI is between 25 and 35 you need to lose som weight.
    </p>
    <?php }elseif($BMI<=25 && $BMI>18.5){?>
    <p class="mx-auto mt-4 alert alert-success" style="width: 50%;">
      <strong>Noraml!!</strong> Your BMI is between 18.5 and 25 keep  like this.
    </p>
    <?php }else{?>
    <p class="mx-auto mt-4 alert alert-primary" style="width: 50%;">
      <strong>Underweight!!</strong> Your BMI below 18.5 you need some more food.
    </p>
    <?php }?>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/health/bmi.blade.php ENDPATH**/ ?>