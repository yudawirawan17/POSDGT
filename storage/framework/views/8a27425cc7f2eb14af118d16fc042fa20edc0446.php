<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo e(route('home')); ?>" class="brand-link">
        <img src="https://image.flaticon.com/icons/png/128/1169/1169902.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light"><?php echo e(config('app.name')); ?></span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
        </nav>
    </div>

</aside><?php /**PATH E:\DGTProyek\POSDGT\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>