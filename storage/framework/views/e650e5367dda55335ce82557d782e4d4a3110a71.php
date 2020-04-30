

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-2">
        <div class="card-body text-center">
          <h2 v-pre class="card-title mb-0"><?php echo e($user->name); ?></h2>
          <small class="card-subtitle mb-2 text-muted"><?php echo e($user->email); ?></small>

          <div class="card-text row mt-3">
            <div class="col-md-4">
              <span class="text-muted d-block"><?php echo app('translator')->get('comments.comments'); ?></span>
              <?php echo e($comments_count); ?>

            </div>

            <div class="col-md-4">
              <span class="text-muted d-block"><?php echo app('translator')->get('posts.posts'); ?></span>
              <?php echo e($posts_count); ?>

            </div>

            <div class="col-md-4">
              <span class="text-muted d-block"><?php echo app('translator')->get('likes.likes'); ?></span>
              <?php echo e($likes_count); ?>

            </div>
          </div>

          <?php if (\Illuminate\Support\Facades\Blade::check('profile', $user)): ?>
            <?php echo e(link_to_route('users.edit', __('users.edit'), [], ['class' => 'btn btn-primary btn-sm float-right'])); ?>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <h2><?php echo app('translator')->get('comments.last_comments'); ?></h2>
      <?php echo $__env->renderEach('users/_comment', $comments, 'comment'); ?>
    </div>

    <div class="col-md-6">
      <h2><?php echo app('translator')->get('posts.last_posts'); ?></h2>
      <?php echo $__env->renderEach('users/_post', $posts, 'post'); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/notification/resources/views/users/show.blade.php ENDPATH**/ ?>