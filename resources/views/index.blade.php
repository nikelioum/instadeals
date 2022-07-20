<!doctype html>
<html lang="el">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{setting('site.title')}}</title>
    <meta name="description" content="{{setting('site.description')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

    <!--Navbar-->
     @include('partials.navbar')
    <!--End of Navbar-->

    <!--Main Slider-->
     @include('partials.main-slider')
    <!--End of Main Slider-->

    <!-- Top Deals -->
     @include('partials.top-deals')
    <!-- End of Top Deals -->

    <!--Latest Deals-->
     @include('partials.latest-deals')
    <!--End of Latest Deals-->

    <!--Footer-->
     @include('partials.footer')
    <!--End of Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>