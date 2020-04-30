<?php if(auth()->guard()->check()): ?>
    <?php echo Form::open(['route' => 'newsletter-subscriptions.store', 'method' => 'post', 'class' => 'form-inline']); ?>

        <?php echo Form::text('email', null, ['class' => 'form-control mr-sm-1 mb-1', 'placeholder' => __('newsletter.placeholder')]); ?>

        <?php echo Form::submit(__('newsletter.subscribe'), ['class' => 'btn btn-outline-secondary mb-1']); ?>

    <?php echo Form::close(); ?>

<?php endif; ?>
<?php /**PATH /var/www/html/notification/resources/views/shared/newsletter-form.blade.php ENDPATH**/ ?>