<?php $__env->startPush('head'); ?>
    <title>Todo List App</title>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-container'); ?>
    <a href="create" class="btn newBtn">+ Add new Task</a>
    <table border="1" class="viewTodoTable">
        <tr>
            <td class="titleTxt">Sr. no.</td>
            <td class="titleTxt">Task</td>
            <td class="titleTxt">Description</td>
            <td class="titleTxt">Due Date</td>
            <td class="titleTxt">Time Stamp</td>
            <td class="titleTxt" colspan="2">Action</td>
        </tr>
        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($detail->name); ?></td>
                <td><?php echo e($detail->desc); ?></td>
                <td><?php echo e($detail->due_date); ?></td>
                <td>
                    <?php if($detail->created_at == $detail->updated_at): ?>
                        Created at : <?php echo e($detail->created_at); ?>

                    <?php else: ?>
                        Updated at : <?php echo e($detail->updated_at); ?>

                    <?php endif; ?>
                </td>
                <td><a class="btn updateBtn" href="<?php echo e(route('update', $detail->id)); ?>">🔄 Update</a></td>
                <td><a class="btn deleteBtn" href="<?php echo e(route('delete', $detail->id)); ?>">🗑️ Delete</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/www/Jeenish/todos/resources/views/welcome.blade.php ENDPATH**/ ?>