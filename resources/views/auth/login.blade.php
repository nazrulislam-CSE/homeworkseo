<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="" />
    <meta name="keywords" content="content" />

    <title>Log In | SEO Content</title>

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

    <!-- Bootstrap Icon CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css ') }}" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/icons/favicon.ico ') }}" />

    <!-- toastr css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  </head>

  <body>
    <main class="section-login">
      <section class="section-login--logo">
        <a href="{{ route('home') }}">
          <img src="{{ asset('frontend/assets/images/logo.png ')}}" alt="logo" class="img-fluid" />
        </a>
      </section>

      <section class="section-login--form">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="card">
                <div class="card-title">Sign In</div>
                <div class="card-body">
                  <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="mt-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control u-box-shadow-1" name="email" />
                        @error('email')
                            <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control u-box-shadow-1" name="password" />
                        @error('password')
                            <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-green btn-lg btn-block">Sign in</button>
                    </div>
                  </form>
                  <div class="links">
                    <p>
                      <a href="{{ route('register') }}">Need an account?</a>
                      <a href="{{ route('password.request') }}">Forgot Password?</a>
                    </p>
                  </div>
                  <div class="back-button">
                    <a href="{{ route('home') }}">
                      <i class="bi bi-arrow-left-circle"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>


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
