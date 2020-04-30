<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-md">
    <div class="container">
        <!-- Branding Image -->
        <?php echo e(link_to_route('home', config('app.name', 'Laravel'), [], ['class' => 'navbar-brand'])); ?>


        <!-- Collapsed Hamburger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php echo e(link_to_route('admin.dashboard', __('dashboard.dashboard'), [], ['class' => 'nav-link'])); ?>

                    </li>
                </ul>
            <?php endif; ?>

            <ul class="navbar-nav ml-auto">
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item"><?php echo e(link_to_route('login', __('auth.login'), [], ['class' => 'nav-link'])); ?></li>
                    <li class="nav-item"><?php echo e(link_to_route('register', __('auth.register'), [], ['class' => 'nav-link'])); ?></li>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a v-pre href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?>

                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php echo e(link_to_route('users.show', __('users.public_profile'), Auth::user(), ['class' => 'dropdown-item'])); ?>

                            <?php echo e(link_to_route('users.edit', __('users.settings'), [], ['class' => 'dropdown-item'])); ?>


                            <div class="dropdown-divider"></div>

                            <a href="<?php echo e(url('/logout')); ?>"
                                class="dropdown-item"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <?php echo app('translator')->get('auth.logout'); ?>
                            </a>

                            <form id="logout-form" class="d-none" action="<?php echo e(url('/logout')); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<?php /**PATH /var/www/html/notification/resources/views/shared/navbar.blade.php ENDPATH**/ ?>