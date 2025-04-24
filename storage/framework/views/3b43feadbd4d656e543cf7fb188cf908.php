<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Courses Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : <?php echo e($courses->name); ?></h5>
        <p class="card-text">Syllabus : <?php echo e($courses->syllabus); ?></p>
        <p class="card-text">Duration : <?php echo e($courses->duration()); ?></p>
  </div>
       
    </hr>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Studentmanagement\studentmanagement-app\resources\views/courses/show.blade.php ENDPATH**/ ?>