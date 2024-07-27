
<?php $__env->startSection('title'); ?>
<?php echo e($logedinuser['name']); ?> home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>
    <a href="<?php echo e(route('adminhome')); ?>" class="nav-link"  ><?php echo e($logedinuser['name']); ?> home</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('userimage'); ?>
<img src="<?php echo e($logedinuser['image']); ?>" alt="user" width="50" height="44">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link1'); ?>
<a href="<?php echo e(route('add_student_form')); ?>"  class="nav-link" >add student</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link2'); ?>
<a href="<?php echo e(route('add_admin_form')); ?>"  class="nav-link" >add admin</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link3'); ?>
<a href="<?php echo e(route('allstudents')); ?>"  class="nav-link" >all students</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link4'); ?>
<a href="<?php echo e(route('alladmins')); ?>"  class="nav-link" >all admins</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link5'); ?>
<a href="<?php echo e(route('exam.createForm')); ?>"  class="nav-link" >add exam</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link6'); ?>
<a href="<?php echo e(route('exam.all')); ?>"  class="nav-link" >all exams</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link7'); ?>
    <a href="<?php echo e(route('logout')); ?>"  class="nav-link" >logout</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



<section class="slick-slideshow">   
  <div class="slick-custom">
      <img src="images/slideshow/medium-shot-business-women-high-five.jpeg" class="img-fluid" alt="">

      <div class="slick-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-10">
                      <h1 class="slick-title">Cool Fashion</h1>

                      <p class="lead text-white mt-lg-3 mb-lg-5">Little fashion template comes with total 8 HTML pages provided by Tooplate website.</p>

                      <a href="about.html" class="btn custom-btn">Learn more about us</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="slick-custom">
      <img src="images/slideshow/team-meeting-renewable-energy-project.jpeg" class="img-fluid" alt="">

      <div class="slick-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-10">
                      <h1 class="slick-title">New Design</h1>

                      <p class="lead text-white mt-lg-3 mb-lg-5">Please share this Little Fashion template to your friends. Thank you for supporting us.</p>

                      <a href="product.html" class="btn custom-btn">Explore products</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="slick-custom">
      <img src="images/slideshow/two-business-partners-working-together-office-computer.jpeg" class="img-fluid" alt="">

      <div class="slick-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-10">
                      <h1 class="slick-title">Talk to us</h1>

                      <p class="lead text-white mt-lg-3 mb-lg-5">Tooplate is one of the best HTML CSS template websites for everyone.</p>

                      <a href="contact.html" class="btn custom-btn">Work with us</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

</section>





    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/admin/home.blade.php ENDPATH**/ ?>