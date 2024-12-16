<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $__env->yieldPushContent('head'); ?>
    <style>
        @import  url('https://fonts.googleapis.com/css2?family=Delius&display=swap');

        body {
            background: linear-gradient(45deg, #F9A8D4, #A7F3D0);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
            font-family: "Delius", cursive;
            width: 99%;
            height: 100vh;
        }

        .allTitle {
            font-size: 3rem;
            padding: 1rem;
            border-radius: 50px;
            text-align: center;
            border: 2px solid grey;
        }

        .btn {
            text-decoration: none;
            font-size: 1.5rem;
            color: #000;
            border-radius: 10px;
            padding: 0.5rem;
            transition: all ease 0.3s;
        }

        .newBtn {
            background: linear-gradient(45deg, #4facfe, #00f2fe);

            &:hover {
                transform: scale(1.2);
            }
        }

        .updateBtn,
        .actionBtn {
            border: none;
            background: linear-gradient(145deg, #00C853, #00796B);
        }

        .actionBtn:hover {
            transform: scale(1.2);
        }

        .deleteBtn {
            background: linear-gradient(145deg, #FF1744, #D50000);
        }

        form {
            width: 90%;
            height: auto;
            margin: 3rem 0 0 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .addTodoTable {
            width: 100%;
            border-collapse: collapse;
        }

        .viewTodoTable {
            height: auto;
            margin: 3rem 0 0 0;
            width: 100%;
            border-collapse: collapse;
        }

        .titleTxt {
            font-size: 1.5rem;
            font-weight: 700;
            background: #23c26a;
        }

        td {
            font-size: 1.3rem;
            height: 50px;
            padding: 0.5rem;
            text-align: center;
        }

        .input {
            background: transparent;
            outline: none;
            border: 1px solid purple;
            border-radius: 10px;
            padding: 0.5rem;
            font-size: 1.3rem;
            width: 90%;
            height: 50px;
        }

        .actionSection {
            margin-top: 2rem;
            width: 30%;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
    </style>
</head>

<body>
    <h1 class="allTitle">Simple Todo list app</h1>
    <?php echo $__env->yieldContent('main-container'); ?>
</body>

</html>
<?php /**PATH /Applications/www/Jeenish/todos/resources/views/layouts/main.blade.php ENDPATH**/ ?>