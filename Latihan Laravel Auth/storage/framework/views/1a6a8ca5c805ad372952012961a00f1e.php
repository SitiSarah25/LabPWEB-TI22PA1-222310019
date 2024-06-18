<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <h3 class="text-center fw-bold">Sign In</h3>

        <?php if(session()->has('loginError')): ?>
            <div class="container d-flex w-50 mt-3">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo e(session('loginError')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        <?php endif; ?>

        <form action="/login" method="POST" class="mt-4 container d-flex flex-column w-50">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    id="email" placeholder="npm@student.ibik.ac.id" value="<?php echo e(old('email')); ?>">
            </div>

            <label for="password" class="form-label">Password</label>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password">
                <span class="input-group-text">
                    <i class="bi bi-eye" id="btn-eye"></i>
                </span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-auth\resources\views/auth/signIn.blade.php ENDPATH**/ ?>