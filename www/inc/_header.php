<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_page_title(); ?></title>
    <link href="styles.css" rel="stylesheet">
    <link href="favicon.ico" rel="shortcut icon">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('#proyectos a').on('mouseover', function(e){
                let index = $(e.target).parent().index();
                let img = $('#proyects-img > img').eq(index);
                img.siblings().addClass('opacity-0').end().removeClass('opacity-0')
            })
        })
    </script>
</head>
<body>


    <div id="header" class="fixed z-10 top-0 w-full backdrop-blur border-b border-neutral-800 h-14 shadow-md">
        <a href="/">
            <img src="img/logo.png" class="fixed h-10 top-[6px] left-1/2 -translate-x-1/2">
        </a>
        <button class="btn-subscribe" data-toggle="modal" data-target="#subscribe">SUSCRÍBETE</button>
        <div id="btn-toggle-nav" class="btn-toggle-nav cursor-pointer">
            <div class="icon"></div>
        </div>
        <nav class="main-nav">
            <ul class="flex flex-col justify-center grow h-screen text-center font-serif text-2xl sm:text-3xl">
                <?php foreach ($routes as $key => $value): ?>
                    <li class="my-2">
                        <a href="<?php echo route($key) ?>" class="<?php echo is_current_page($key) ? '!border-neutral-800' : '' ?>"><?php echo $value ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <div class="menu-image bg-cover bg-center bg-[url('/img/instalacion-hilo-memoria-lina-avila.jpg')]"></div>
    </div>


<main class="py-16">
