<?php $__env->startPush('head'); ?>
    <title>Update Todo List</title>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-container'); ?>
    <form action="<?php echo e(route('edit')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <table border="1" class="addTodoTable">
            <tr>
                <td>
                    <h2>Task name :</h2>
                </td>
                <td>
                    <input type="text" name="name" class="input name" value="<?php echo e($todo->name); ?>">
                    <br>
                    <span style="color: red">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Description :</h2>
                </td>
                <td>
                    <input type="text" name="desc" class="input desc" value="<?php echo e($todo->desc); ?>">
                    <br>
                    <span style="color: red">
                        <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <h2>Due date :</h2>
                </td>
                <td>
                    <input type="date" name="duedate" class="input duedate" value="<?php echo e($todo->due_date); ?>">
                    <br>
                    <span style="color: red">
                        <?php $__errorArgs = ['duedate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </span>
                </td>
            </tr>
        </table>
        <div class="actionSection">
            <input type="number" name="hidden" value="<?php echo e($todo->id); ?>" hidden>
            <a href="/" class="btn actionBtn">✘ Cancel</a>
            <button type="submit" class="btn actionBtn">🔄 Update</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/www/Jeenish/todos/resources/views/update.blade.php ENDPATH**/ ?>