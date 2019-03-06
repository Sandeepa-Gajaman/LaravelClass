<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if(Session::has('success')): ?>
                    <p class="alert" style="border: 1px solid green; padding: 5px; background: rgba(0,128,0,0.59); color: #fff"><?php echo e(Session::get('success')); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(route('user.create')); ?>" class="add-btn pull-right"><i class="fa fa-plus-circle"></i>&nbsp;Add
                    User</a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(route('form.create')); ?>" class="add-btn pull-right"><i class="fa fa-plus-circle"></i>&nbsp;Add
                    Form</a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th width="1%"></th>
                                <th width="1%"></th>
                                <th width="1%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><a href="#" class="action-btn"><i class="fa fa-bars"></i></a></td>
                                    <td><a href="#" class="action-btn"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="#" class="action-btn"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>