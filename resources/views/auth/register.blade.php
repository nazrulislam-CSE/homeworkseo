<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="" />
    <meta name="keywords" content="content" />

    <title>Sign Up | SEO Content</title>

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
    <main class="section-register">
      <section class="section-register--left">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">Benefits of joining:</h1>
            <ul class="card-text">
              <li>Over 6,000 Proven Writers</li>
              <li>Powerful Content Creation Tools</li>
              <li>Easy-to-Use Platform</li>
              <li>Fast Turnaround</li>
              <li>Pay as You Go</li>
              <li>Quality Guaranteed!</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section-register--right">
        <h2 class="heading mb-5">Create Your Free Account</h2>
        <p class="heading--sub mb-4 d-inline">
          High-quality content written on demand by the
          <span class="green"> web's best writers. </span>
        </p>
        <p>
          Sign up is easy and free. You don't pay anything until you're ready to
          order content.
        </p>
        <form action="{{ route('register') }}" method="post">
        @csrf
          <div class="mt-3">
            <label for="" class="form-label">First Name</label>
            <input type="text" class="form-control u-box-shadow-1" name="name" />
            @error('name')
                <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
            @enderror
          </div>
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
          <div class="mt-3">
            <label for="" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control u-box-shadow-1" name="password_confirmation" />
            @error('password_confirmation')
                <div class="text-danger" style="font-weight: bold;">{{ $message }}</div>
            @enderror
          </div>
          <div class="mt-5">
            <button type="submit" class="btn btn-blue btn-lg btn-block">Sign Up</button>
          </div>
        </form>
        <p class="privacy-links mt-5">
          I agree to the
          <a href="#"> Terms & Conditions </a>
          and
          <a href="#"> Privacy Policy. </a>
        </p>
        <p class="login-link mt-5">
          Already have an account?
          <a href="{{ route('login') }}"> Sign in </a>
        </p>
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
