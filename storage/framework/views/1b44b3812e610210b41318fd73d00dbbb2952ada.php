<div class="card-columns">
    <?php echo $__env->renderEach('posts/_show', $posts, 'post', 'posts/_empty'); ?>
</div>

<div class="d-flex justify-content-center">
    <?php echo e($posts->links()); ?>

</div>
<?php /**PATH /var/www/html/notification/resources/views/posts/_list.blade.php ENDPATH**/ ?>