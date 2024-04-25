<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>your vertification code</title>
</head>
<body>
welcome <?php echo e($user['name']); ?> some one is tring to log in to online examination with your email is that you???
<h5>your vertivication code is</h5>
<h3><?php echo e($vCode); ?></h3>
<form method="post" action="<?php echo e(route('vCode',[$user['id']])); ?>">
    <?php echo csrf_field(); ?>

    <div>
        <label htmlFor='password' class='text-white'>enter vertivication code</label>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="vertification code" name="userVCode" value=<?php echo e($vCode); ?> hidden>
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" name="vCode" value=<?php echo e($vCode); ?> hidden>
    </div>
    
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">yes it is me</button>
</form> 
    
</body>
</html><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/mail/forgetpassword.blade.php ENDPATH**/ ?>