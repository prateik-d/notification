

<?php $__env->startSection('content'); ?>
<div class="row justify-content-md-center">
    <div class="col-md-6">
        <h1><?php echo app('translator')->get('auth.login'); ?></h1>

        <?php echo Form::open(['route' => 'login', 'role' => 'form', 'method' => 'POST']); ?>

            <div class="form-group">
                <?php echo Form::label('email', __('validation.attributes.email'), ['class' => 'control-label']); ?>

                <?php echo Form::email('email', old('email'), ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'required', 'autofocus']); ?>


                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('password', __('validation.attributes.password'), ['class' => 'control-label']); ?>

                <?php echo Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'required']); ?>


                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <?php echo Form::checkbox('remember', null, old('remember')); ?> <?php echo app('translator')->get('auth.remember_me'); ?>
                    </label>
                </div>
            </div>

            <div class="form-group">
                <?php echo Form::submit(__('auth.login'), ['class' => 'btn btn-primary']); ?>

                <?php echo e(link_to('/password/reset', __('auth.forgotten_password'), ['class' => 'btn btn-link'])); ?>

            </div>
        <?php echo Form::close(); ?>


        <hr>

        <div class="d-flex justify-content-between flex-wrap">
            <?php if(env('GITHUB_ID')): ?>
                <a href="<?php echo e(route('auth.provider', ['provider' => 'github'])); ?>" class="btn btn-secondary mb-2">
                    <?php echo app('translator')->get('auth.services.github'); ?>
                    <i class="fa fa-github" aria-hidden="true"></i>
                </a>
            <?php endif; ?>

            <?php if(env('TWITTER_ID')): ?>
                <a href="<?php echo e(route('auth.provider', ['provider' => 'twitter'])); ?>" class="btn btn-secondary mb-2">
                    <?php echo app('translator')->get('auth.services.twitter'); ?>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/notification/resources/views/auth/login.blade.php ENDPATH**/ ?>