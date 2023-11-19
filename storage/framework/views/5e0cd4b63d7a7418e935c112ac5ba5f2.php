<div class="aiz-sidebar-wrap">
    <div class="aiz-sidebar left c-scrollbar">
        <div class="aiz-side-nav-logo-wrap">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="d-block text-left">
                <img class="mw-100" src="<?php echo e(asset('assets/images/logo.png')); ?>" class="brand-icon" alt="<?php echo e(env('APP_NAME')); ?>">
            </a>
        </div>
        <div class="aiz-side-nav-wrap">
            <div class="px-20px mb-3">
                <input class="form-control bg-soft-secondary border-0 form-control-sm text-white" type="text" name="" placeholder="<?php echo e(trans('all.Search in menu')); ?>" id="menu-search" onkeyup="menuSearch()">
            </div>
            <ul class="aiz-side-nav-list" id="search-menu">
            </ul>
            <ul class="aiz-side-nav-list" id="main-menu" data-toggle="aiz-side-menu">

                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="aiz-side-nav-link">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Dashboard')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('projects.index')); ?>" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Projects')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('projects.create')); ?>" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Add Project')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('categories.index')); ?>" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Categories')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('categories.create')); ?>" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Add Category')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('services.index')); ?>" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Services')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('services.create')); ?>" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Add Service')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('videos.index')); ?>" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Videos')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('videos.create')); ?>" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Add Video')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('collaborators.index')); ?>" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Collaborators')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('collaborators.create')); ?>" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Add Collaborator')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('benefits.index')); ?>" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Benefits')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('benefits.create')); ?>" class="aiz-side-nav-link">
                        <i class="las la-bolt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Add Benefit')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('contact_requests')); ?>" class="aiz-side-nav-link">
                        <i class="las la-tty aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Contact Requests')); ?></span>
                    </a>
                </li>
                
                <li class="aiz-side-nav-item">
                    <a href="<?php echo e(route('configs.index')); ?>" class="aiz-side-nav-link">
                        <i class="las la-cog aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text"><?php echo e(trans('all.Configurations')); ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH D:\Mariam\iwan\resources\views/backend/side_nav.blade.php ENDPATH**/ ?>