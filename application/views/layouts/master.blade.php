<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zola Blog - {{$title}}</title>
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo asset('css/swiper.min.css');?>">
    <link rel="stylesheet" href="<?php echo asset('css/poppins.css');?>">
    <link rel="stylesheet" href="<?php echo asset('css/style.css');?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
        @yield('formLogin')
        
    <header>
        @yield('header')
    </header><!-- /header -->

    <main>
        @yield('homepage')
        @yield('postDetails')
        @yield('category')
        @yield('messageError')
    </main><!-- /main -->

    <footer>
        @yield('footer')
    </footer><!-- /footer -->

    <!-- Javascript & jQuery -->
    <script src="<?php echo asset('js/fontawesom.js');?>"></script>
    <script src="<?php echo asset('js/jquery.min.js');?>"></script>
    <script src="<?php echo asset('js/bootstrap.min.js');?>"></script>
    <script src="<?php echo asset('js/swiper.min.js');?>"></script>
    <script src="<?php echo asset('js/zola.js');?>"></script>
</body>
</html>