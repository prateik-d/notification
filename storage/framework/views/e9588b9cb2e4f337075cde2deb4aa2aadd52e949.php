<?php echo Form::open(['route' => 'home', 'class' => 'd-flex', 'method' => 'GET']); ?>

  <div class="input-group mr-sm-3">
    <?php echo Form::text('q', null, ['class' => 'form-control', 'placeholder' => __('posts.search')]); ?>

  </div>

  <button type="submit" class="btn btn-primary">
    <i class="fa fa-search" aria-hidden="true"></i>
  </button>
<?php echo Form::close(); ?>

<?php /**PATH /var/www/html/notification/resources/views/posts/_search_form.blade.php ENDPATH**/ ?>