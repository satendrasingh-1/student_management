<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : <?php echo e($teachers->name); ?></h5>
        <p class="card-text">Address : <?php echo e($teachers->address); ?></p>
        <p class="card-text">Mobile : <?php echo e($teachers->mobile); ?></p>
  </div>
       
    </hr>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saten\Desktop\studentmanagement-app\studentmanagement-app\resources\views/teachers/show.blade.php ENDPATH**/ ?>