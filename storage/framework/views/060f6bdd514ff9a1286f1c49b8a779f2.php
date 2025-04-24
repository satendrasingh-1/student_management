<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">payments</div>
  <div class="card-body">
      
  <form action="<?php echo e(url('payments')); ?>" method="post">
    <?php echo csrf_field(); ?>

    <label>Enrollment No</label></br>

    <select name="enrollment_id" id="enrollment_id" class="form-control">
        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $enroll_no): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <option value="<?php echo e($id); ?>"><?php echo e($enroll_no); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <label>Paid Date</label></br>
    <input type="date" name="paid_date" id="paid_date" class="form-control"></br>

    <label>Amount</label></br>
    <input type="text" name="amount" id="amount" class="form-control"></br>

    <input type="submit" value="Submit" class="btn btn-primary">
</form>


   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Studentmanagement\studentmanagement-app\resources\views/payments/create.blade.php ENDPATH**/ ?>