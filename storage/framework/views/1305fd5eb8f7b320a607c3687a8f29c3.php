<?php $__env->startSection('content'); ?>
 
<div class="card">
  <div class="card-header">Enrollments page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('enrollments')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Enroll No</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control"></br>
        

        <label>Batch</label></br>
          <select name="batch_id" id="batch_id" class="form-control">
              <option value="">Select Batch</option>
              <?php $__currentLoopData = $batches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $batch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($batch->id); ?>"><?php echo e($batch->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select></br>

          <label>Student</label></br>
          <select name="student_id" id="student_id" class="form-control">
              <option value="">Select Student</option>
              <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($student->id); ?>"><?php echo e($student->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select></br>

        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saten\Desktop\studentmanagement-app\studentmanagement-app\resources\views/enrollments/create.blade.php ENDPATH**/ ?>