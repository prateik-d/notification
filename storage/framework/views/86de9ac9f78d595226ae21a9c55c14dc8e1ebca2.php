<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php if(auth()->guard()->check()): ?>
        <meta name="api-token" content="<?php echo e(auth()->user()->api_token); ?>">
    <?php endif; ?>

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet">



    <!-- // ... // -->
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- This makes the current user's id available in javascript -->
    <?php if(!auth()->guest()): ?>
        <script>
            window.Laravel.userId = <?php echo auth()->user()->id; ?>
        </script>
    <?php endif; ?>
    <!-- // ... // -->
 

</head>
<body class="bg-light">
     <!-- // ... // -->
    <?php if(Auth::guest()): ?>
        <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
        <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
    <?php else: ?>
        <!-- // add this dropdown // -->
        <li class="dropdown" style="color: red; margin-top: 70px; text-decoration: none;">
            <a class="dropdown-toggle" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"  style="color: #red;">
                <span class="glyphicon glyphicon-user"></span>Notification
            </a> 
            <ul class="dropdown-menu" aria-labelledby="notificationsMenu" id="notificationsMenu">
                <li class="dropdown-header">No notifications</li>
            </ul>
        </li>
    <?php endif; ?>
    <!-- // ... // --> 

    <div id="app">
        <?php echo $__env->make('shared/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container">
            <?php echo $__env->make('shared/alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="row">
                <div class="col-md-12">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>

        <?php echo $__env->make('shared/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(mix('/js/app.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('inline-scripts'); ?>
</body>
</html>
<?php /**PATH /var/www/html/notification/resources/views/layouts/app.blade.php ENDPATH**/ ?>