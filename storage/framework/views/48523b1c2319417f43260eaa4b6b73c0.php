<?php $__env->startSection('content'); ?>
<?php if(session()->has('success') > 0): ?>
    <div class="row alert alert-success fade show" role="alert">
        <div class="col-10 text-lg-left" ><?php echo e(session()->get('success')); ?></div>
        <div class="col-1 close">
            <button type="button" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="la la-close"></i></span>
            </button>
        </div>
    </div>

<?php elseif(count($errors) > 0): ?>
    <div class="alert alert-danger" role="alert">
        <div class="alert-text">
            <h4 class="alert-heading">Input Errors !</h4>
            <p>Some Error has been happened with New Inputs as Follows :</p>
            <hr>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="mb-0"><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
<?php endif; ?>
<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="align-items-center">
        <h1 class="h3"><?php echo e(trans('all.All Services')); ?></h1>
    </div>
</div>


<div class="card">
    <form class="" id="sort_customers" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col">
                <h5 class="mb-0 h6"><?php echo e(trans('all.Services')); ?></h5>
            </div>

            <div class="col-md-3">
                <div class="form-group mb-0">
                    <input type="text" class="form-control" id="search" name="search"<?php if(isset($search)): ?> value="<?php echo e($search); ?>" <?php endif; ?> placeholder="<?php echo e(trans('all.search')); ?>">
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>

                        <th><?php echo e(trans('all.Title')); ?></th>
                        <th data-breakpoints="lg"><?php echo e(trans('all.Image')); ?></th>
                        <th data-breakpoints="lg"><?php echo e(trans('all.Description')); ?></th>
                        <th><?php echo e(trans('all.Order')); ?></th>
                        <th class="text-right"><?php echo e(trans('all.Options')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($service != null): ?>
                            <tr>
                                <td><?php echo e($service->title); ?></td>
                                <td><img src="<?php echo e(asset($service->image)); ?>"></td>
                                <td><?php echo e($service->description); ?></td>

                                <td><?php echo e($service->order); ?></td>
                                <td class="text-right">
                                    <a href="<?php echo e(route('services')); ?>" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="<?php echo e(trans('all.View')); ?>">
                                            <i class="las la-eye"></i>
                                    </a>
                                    <a href="<?php echo e(route('services.edit', $service->id)); ?>" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="<?php echo e(trans('all.Edit')); ?>">
                                            <i class="las la-edit"></i>
                                    </a>
                                    <a href="<?php echo e(route('services.destroy', $service->id)); ?>" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="<?php echo e(trans('all.Delete')); ?>">
                                            <i class="las la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    function sort_customers(el){
        $('#sort_customers').submit();
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iwan\resources\views/backend/services/index.blade.php ENDPATH**/ ?>