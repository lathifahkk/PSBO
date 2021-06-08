<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/login page style.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;800&display=swap" rel="stylesheet">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg></script>

    <title>Login Page</title>
    <style>
        
    body{
        /* overflow: hidden; */
        background:url('/image/bg.png') no-repeat;
        background-size: cover;
        padding-bottom: 500px;
        padding-top: 130px;
}
    </style>
</head>
<body>
    <section class="Form">
        <div class="container">
            <div class="row no-gutters">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>Selamat Datang</h2>
                        <img src="{{url('/image/pana.png')}}" class="img" alt="">
                    </div>
                    <div class="col-lg-7">
                        <form>
                            <div class="form-row">
                                <h2>IPB Universitys Event</h2>
                                <h3>LOGIN</h3>
                            </div>

                            @if(isset(Auth::user()->email))
                                <div class="alert alert-danger success-block">
                                    <strong>Selamat Datang {{ Auth::user()->email }}</strong>
                                    <br />
                                    <a href= "{{ url ('/login/logout') }}">Logout</a>
                                </div>
                            else
                                <script>window.location = "/login";</script>
                            @endif
                            
                           </form>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    
   
    <!-- <script type="text/javascript" src="login page main.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>