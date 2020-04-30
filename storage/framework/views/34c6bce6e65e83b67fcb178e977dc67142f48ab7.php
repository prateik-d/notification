

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Following -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Users
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th>User</th>
                        <th> </th>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td clphpass="table-text"><div><?php echo e($user->name); ?></div></td>
                                <?php if(auth()->user()->isFollowing($user->id)): ?>
                                    <td>
                                        <form action="<?php echo e(URL::to('/')); ?>/users/<?php echo e($user->id); ?>/unfollow" method="POST">
                                            <?php echo e(csrf_field()); ?>

                                            <?php echo e(method_field('DELETE')); ?>


                                            <button type="submit" id="delete-follow-<?php echo e($user->id); ?>" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Unfollow
                                            </button>
                                        </form>
                                    </td>
                                <?php else: ?>
                                    <td>
                                        
                                        <form action="<?php echo e(URL::to('/')); ?>/users/<?php echo e($user->id); ?>/follow" method="POST">
                                            <?php echo e(csrf_field()); ?>


                                            <button type="submit" id="follow-user-<?php echo e($user->id); ?>" class="btn btn-success">
                                                <i class="fa fa-btn fa-user"></i>Follow
                                            </button>
                                        </form>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/notification/resources/views/users/index.blade.php ENDPATH**/ ?>