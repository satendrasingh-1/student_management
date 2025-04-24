<?php $__env->startSection('content'); ?>
                <div class="card">
                    <div class="card-header">
                        <h2>Payment</h2>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/payments/create')); ?>" class="btn btn-success btn-sm" title="Add New batch">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Enrollment No</th>
                                        <th>Paid Date</th>
                                        <th>Amount</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                


                                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->enrollment->enroll_no ?? 'N/A'); ?></td>
                                        <td><?php echo e($item->paid_date); ?></td>
                                        <td><?php echo e($item->amount); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/payments/' . $item->id)); ?>" title="View payment"><button class="btn btn-info btn-sm">View</button></a>
                                            <a href="<?php echo e(url('/payments/' . $item->id . '/edit')); ?>" title="Edit payment"><button class="btn btn-primary btn-sm">Edit</button></a>
                                            <form method="POST" action="<?php echo e(url('/payments' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete payment" onclick="return confirm('Confirm delete?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\saten\Desktop\studentmanagement-app\studentmanagement-app\resources\views/payments/index.blade.php ENDPATH**/ ?>