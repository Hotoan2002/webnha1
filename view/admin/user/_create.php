<?php
$page_title = "users";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Create User</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="<?= asset('css/admin/nucleo-icons.css') ?>" rel="stylesheet" />
    <link href="<?= asset('css/admin/nucleo-svg.css') ?>" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="<?= asset('css/admin/soft-ui-dashboard-tailwind.css?v=1.0.4') ?>" rel="stylesheet" />

</head>

<body>
    <?php includeView('view/admin/inc/sideleft.php'); ?>
    <?php includeView('view/admin/inc/navbar.php', compact("page_title", "name")); ?>
    <form action="<?= url('admin.user.create') ?>" method="post" >
        <?= rollback() ?>
        <div class=" p-6 w-4/5 mx-auto pb-0 mb-0 bg-red border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex flex-row">
            <a href="<?= url('admin.user.index')?>" class="mt-2 ml-auto bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 border border-green-700 rounder">BACK</a>
        </div>
        <div class="mx-auto w-1/2">
            <div class="mb-6">
                <label for="" class="font-semibold uppercase">Email: </label>
                <input type="email" id="" value="<?= old('email', "") ?>" name="email" class="bg-gray-50 border border-gray-300 text-red-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-blue-100 dark:border-gray-600 dark:placeholder-gray-400 white:text-red dark:focus:ring-blue-500 dark:focus:border-red-500">
                <?= error('email')?>
            </div>
            
            <div class="mb-6">
                <label for="" class="font-semibold uppercase">Password: </label>
                <input type="number" id="" value="" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-blue-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <?= error('password')?>
            </div>
            <div class="mb-6">
                <label for="" class="font-semibold uppercase">Role: </label>
                <input type="text" id="" value="" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-blue-100 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <?= error('role')?>
            </div>
            
            <button class="bg-green-500 hover:bg-green-700 text-red font-bold py-2 px-3 border mx-80 rounded " type="submit">CREATE</button>
        </div>
    </form>

    
</body>

</html>