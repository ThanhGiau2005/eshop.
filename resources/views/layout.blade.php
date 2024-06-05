<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>
    <!-- Css Styles -->
     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

     <!-- Icon Font Stylesheet -->
     <link rel="stylesheet" href="{{ url('https://use.fontawesome.com/releases/v5.15.4/css/all.css') }}"/>
     <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}" rel="stylesheet">

     <!-- Libraries Stylesheet -->
     <link href="{{ url('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
     <link href="{{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


     <!-- Customized Bootstrap Stylesheet -->
     <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

     <!-- Template Stylesheet -->
     <link href="{{ url('css/style.css') }}" rel="stylesheet">
</head>
</head>
<body>
  

 
    @yield('content')

    @include('inc.footer')

    
</body>
</html>