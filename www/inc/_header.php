<?php require "_functions.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo getPageTitle(); ?> - Lina Ávila</title>
    <link href="styles.css" rel="stylesheet">
    <link href="favicon.ico" rel="shortcut icon">
</head>
<body>


    <div class="h-14 relative z-10">

        <div id="header" class="fixed w-full backdrop-blur border-b border-neutral-800 h-14 shadow-md">

            <button class="btn" data-toggle="modal" data-target="#subscribe">SUSCRÍBETE</button>

            <div id="btn-menu" class="menu btn2">
                <div class="icon"></div>
            </div>

            <div class="menu-desktop">

                <ul class="flex flex-col justify-center grow h-screen text-center text-2xl">

                    <?php foreach ($menuItems as $key => $value): ?>
                        <li class="my-2">
                            <a class="<?php render_is_current($key) ?>" href="<?php echo route($key) ?>"><?php echo $value ?></a>
                        </li>
                    <?php endforeach; ?>

                </ul>

            </div>

            <div class="alt flex left-1/2 top-full align-middle justify-center w-1/2 left-1/2">
                <figure>
                    <img class="sm:px-16 md:px-0" src="http://via.placeholder.com/1200x1800">
                </figure>
            </div>

            <img src="img/logo.png" class="h-10 justify-self-center mx-auto" style="position:fixed; top:6px; z-index: 5000; left: 50%; transform: translateX(-50%);">

        </div>

    </div>
