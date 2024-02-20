<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_page_title(); ?></title>
    <link href="/styles.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/favicon-lina-avila.png" sizes="180x180">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <?php isDev() ? include('_dev.php') : false ?>
    <script>
        $(function(){
            var btnUp = $('[data-scroll-up]').hide().on('click', function(e){
                window.scrollTo({ top: 0, behavior: 'smooth' });
                $(this).fadeOut();
            });

            $(window).scroll(function() {
                if(btnUp.is(':visible') && $(window).scrollTop() <= 300) {
                    btnUp.fadeOut();
                }
                if(btnUp.is(':hidden') && $(window).scrollTop() > 300) {
                    btnUp.fadeIn();
                }
            });
        });
    </script>
</head>
<body>

    <div id="header" class="fixed z-10 top-0 w-full backdrop-blur border-b border-neutral-800 h-14 shadow-md">
        <a href="/">
            <img src="/img/firma-logo-lina-avila.png" class="fixed h-12 top-[4px] left-1/2 -translate-x-1/2">
        </a>
        <button class="btn-subscribe float-right mr-4 mt-3 hidden sm:inline-block" data-toggle="modal" data-target="#subscribe">SUSCRÍBETE</button>
        <div id="btn-toggle-nav" class="btn-toggle-nav cursor-pointer">
            <div class="icon"></div>
        </div>
        <nav class="main-nav">
            <ul class="flex flex-col justify-center grow h-screen text-center font-serif text-2xl sm:text-3xl">
                <?php foreach ($routes as $key => $value): ?>
                    <li class="my-2">
                        <a href="<?php echo route($key) ?>" class="<?php echo is_current_page($key) ? '!border-neutral-800' : '' ?>"><?php echo $value[0] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <div class="menu-image bg-cover bg-center bg-[url('/img/instalacion-hilo-memoria-lina-avila.jpg')]"></div>
    </div>

    <button class="fixed z-10 bottom-4 right-4" data-scroll-up>
        <?php echo svg('up', 'w-8 h-8'); ?>
    </button>

    <main class="py-14">
