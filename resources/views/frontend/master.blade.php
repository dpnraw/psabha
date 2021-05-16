<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Gandaki Province Assembly</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('blog/assets/dist/css/bootstrap.css')}}" rel="stylesheet">

    {{-- faicon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      body {
          background-image: url("{{asset('blog/images/bgimage.png')}}");
          background-color: #cccccc;
        }

      .icon-bar {
        position: fixed;
        top:50%;
        left: 30px;
      }

      .icon-bar a {
        display: block;
        text-align: center;
        padding: 16px;
        transition: all 0.3s ease;
        color: white;
        font-size: 20px;
      }

      .icon-bar a:hover {
        background-color: #e60000;
      }
      .icon-bar1 {
        position: fixed;
        top:60%;
        left: 30px;
      }

      .icon-bar1 a {
        display: block;
        text-align: center;
        padding: 16px;
        transition: all 0.3s ease;
        color: white;
        font-size: 20px;
      }

      .icon-bar1 a:hover {
        background-color: #e60000;
      }


      .webmail {
        background: #093d63;
        color: white;
      }

      @media only screen and (max-width: 600px) {
        .icon-bar{
          visibility: hidden;
        }
      }
      
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('blog/css/blog.css')}}" rel="stylesheet">
    @yield('css')
  </head>
  <body>
    <div class="icon-bar1">
      <a href="#" class="webmail" title="check Web mail"><i class="fa fa-envelope"></i>

      </a>

    </div>
  
    
    <div class="container main_box">
  @include('frontend.header')
  @include('frontend.navbar')
    
  
{{-- end of nav bar --}}
@yield('content')



  

@include('frontend.footer')
</div>
      <script src="{{asset('bootstrap/jquery-3.5.1.min.js')}}">
      </script>
      <script>window.jQuery || document.write('<script src="{{asset('blog/assets/js/vendor/jquery.slim.min.js')}}"><\/script>')
      </script>
      <script src="{{asset('blog/assets/dist/js/bootstrap.bundle.js')}}">
      </script>
@yield('scripts')
</body>
</html>
