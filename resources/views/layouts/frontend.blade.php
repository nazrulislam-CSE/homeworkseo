<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="description" content="" />
      <meta name="keywords" content="content" />
      <title>SEO Content</title>
      <!-- Bootstrap CSS -->
      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
         crossorigin="anonymous"
         />
      <!-- Google Font -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700;800&display=swap"
         rel="stylesheet"
         />
      <!-- Custom CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css ') }}" />
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('frontend/assets/images/icons/favicon.ico') }}" />

      <!-- Toastr css -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

   </head>
   <body>
      <!-- Header Area -->
      @include('frontend.common.header')
      <!-- Main Content Section -->
      @yield('content')
      <!-- Footer Area -->
      @include('frontend.common.footer')

      <!-- Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
         crossorigin="anonymous" ></script>

        <!-- Toastr js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <!-- toastr message show -->
        <script>
          @if(Session::has('message'))
          var type = "{{ Session::get('alert-type','info') }}"
          switch(type){
              case 'info':
              toastr.info(" {{ Session::get('message') }} ");
              break;

              case 'success':
              toastr.success(" {{ Session::get('message') }} ");
              break;

              case 'warning':
              toastr.warning(" {{ Session::get('message') }} ");
              break;

              case 'error':
              toastr.error(" {{ Session::get('message') }} ");
              break;
            }
          @endif
    </script>

   </body>
</html>