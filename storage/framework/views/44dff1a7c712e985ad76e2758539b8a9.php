<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Enrollment  Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enrollment no: <?php echo e($enrollments-> enroll_no); ?></h5>
        <p class="card-text"> Batch: <?php echo e($enrollments->batch->name); ?></p>
        <p class="card-text"> Student: <?php echo e($enrollments->student->name); ?></p>
        <p class="card-text"> Join Date: <?php echo e($enrollments->join_date); ?></p>
        <p class="card-text"> Fee: <?php echo e($enrollments->fee); ?></p>
  </div>      
    </hr>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Studentmanagement\studentmanagement-app\resources\views/enrollments/show.blade.php ENDPATH**/ ?>