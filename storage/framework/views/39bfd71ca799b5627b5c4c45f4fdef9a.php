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
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4><?php echo e(trans('all.add_category')); ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('categories.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3 lg-gutters-20 text-center">
                                <label for="name"><strong><?php echo e(trans('all.Name')); ?></strong></label>
                                <input type="text" placeholder="<?php echo e(trans('all.Name')); ?>" name="title" class="form-control" required>
                            </div>

                            <div class="form-group mb-3 lg-gutters-25 text-center">
                                <label for="order"><strong><?php echo e(trans('all.order')); ?></strong></label>
                                <input type="number" name="order" class="form-control" placeholder="<?php echo e(trans('all.order')); ?>" value="1">
                            </div>

                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary"><?php echo e(trans('all.Save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\iwan\resources\views/backend/categories/create.blade.php ENDPATH**/ ?>