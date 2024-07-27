
<?php $__env->startSection('title'); ?>
<?php echo e($logedinuser['name']); ?> home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('user'); ?>
    <a href="<?php echo e(route('userhome')); ?>" class="nav-link" ><?php echo e($logedinuser['name']); ?> home</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('userimage'); ?>
<img src="<?php echo e($logedinuser['image']); ?>" alt="user" width="50" height="44">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link2'); ?>

    <a href="<?php echo e(route('logout')); ?>" class="nav-link">logout</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link1'); ?>
    <a href="<?php echo e(route('updateuser_form',$logedinuser['id'])); ?>" class="nav-link">update my data</a>
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
<div class="container m-4 ">
    <p>
        exams
    </p>
    <div class="row">
        <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6">
            <div class="card bg-light m-2">
                <h6>title :<?php echo e($exam['title']); ?></h6>
                <p>starts at: <?php echo e($exam['start']); ?>   ,  ends at: <?php echo e($exam['end']); ?></p>
                <p>lasts from: <?php echo e($exam['sDate']); ?>   ,to <?php echo e($exam['eDate']); ?></p>
                <a href="<?php echo e(route('exam.show',$exam['id'])); ?>" class="btn btn-success input mt-1 form-control loginPass" >دحيح وهحل الامتحان</a>
                <a href="<?php echo e(route('show_student_ans',$exam['id'])); ?>" class="btn btn-success input mt-1 form-control loginPass">درجتي كام يا عالم</a>
            </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
</div>
<hr>
<div class="container m-4 ">
    <p>
        future exams
    </p>
    <div class="row">
        <?php $__currentLoopData = $futureExams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $futureExam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6  ">
            <div class="card bg-light m-2">
                <h6>title :<?php echo e($futureExam['title']); ?></h6>
                <p>started at: <?php echo e($futureExam['start']); ?>   ,  ended at: <?php echo e($futureExam['end']); ?></p>
                <p>lasted from: <?php echo e($futureExam['sDate']); ?>   ,to <?php echo e($futureExam['eDate']); ?></p>
                
            </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
</div>
<hr>
<div class="container m-4 ">
    <p>
        past exams
    </p>
    <div class="row">
        <?php $__currentLoopData = $pastExams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pastExam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6  ">
            <div class="card bg-light m-2">
                <h6>title :<?php echo e($pastExam['title']); ?></h6>
                <p>started at: <?php echo e($pastExam['start']); ?>   ,  ended at: <?php echo e($pastExam['end']); ?></p>
                <p>lasted from: <?php echo e($pastExam['sDate']); ?>   ,to <?php echo e($pastExam['eDate']); ?></p>
                <a href="<?php echo e(route('show_student_ans',$pastExam['id'])); ?>" class="btn btn-success input mt-1 form-control loginPass">
                show my answers details
                </a>
            </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
</div>
<hr>
    <p>your progress</p>

    <table class="table">
        <thead>
           <tr>
           <th scope="col">Student name</th>
           <th scope="col">Exam title</th>
           <th scope="col">Student mark</th>
           
           </tr>
       </thead>
       <tbody>
        <?php $__currentLoopData = $degrees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $degree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($degree['student_name']); ?></th>
            <td><?php echo e($degree['exam_title']); ?></td>
            <td><?php echo e($degree['total_mark']); ?></td>     
        </tr>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
           
       </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    var msg = '<?php echo e(Session::get('alert')); ?>';
    var exist = '<?php echo e(Session::has('alert')); ?>';
    if(exist){
      alert(msg);
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\control_portal\resources\views/user/home.blade.php ENDPATH**/ ?>