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
}
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="navbar">
        <img src="{{url('/image/IPBEvent.png')}}" alt="IPB EVENT">
            <div class="left">
            </div>
            <div class="right">
                <ul>
                    <li><a href="{{route('regist')}}"><button class="btn btn-outline-light" type="button" style="font-weight:bold">Register</button></li></a>
                </ul>
            </div>
    </div>

    <div class="container1">
    <section class="Form">
        <div class="container">
            <div class="row no-gutters">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>Selamat Datang</h2>
                        <img src="{{url('/image/pana.png')}}" class="img" alt="">
                    </div>
                    <div class="col-lg-7">

                    @if(isset(Auth::user()->email))
                                <div class="alert alert-danger success-block">
                                    <strong>Selamat Datang {{ Auth::user()->email }}</strong>
                                    <br />
                                    <a href= "{{ url ('/login/logout') }}">Logout</a>
                                </div>
                            else
                                <script>window.location = "/login";</script>
                            @endif

                    @if(isset(Auth::user()->email))
                        <script>window.location="/homeAdmin";</script>
                    @endif
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>      
                    @endif
                        <form method='post' action="{{ url('/login/checklogin')}}">
                        {{ csrf_field() }}
                            <div class="form-row">
                                <h2>IPB Universitys Event</h2>
                                <h3>LOGIN</h3>
                            </div>
                            <div class="form-row">
                                <div class="input-div one">
                                    <div class="i">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                        <h5>Email</h5>
                                        <input class="input" type="email" name="email">
                                    </div>
                                </div>
                                <div class="input-div two">
                                    <div class="i">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    <div>
                                        <h5>Kata Sandi</h5>
                                        <input class=" input" type="password" name="password">
                                    </div>
                                </div>
                            </div>
                           
                            <button type="submit" class="btn1" name="login" value="Login">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    </div>
        
    <script>
        const inputs = document.querySelectorAll(".input");

        function addcl(){
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        }

        function remcl(){
            let parent = this.parentNode.parentNode;
            if(this.value == ""){
                parent.classList.remove("focus");
            }
        }

        inputs.forEach(input => {
            input.addEventListener("focus", addcl);
            input.addEventListener("blur", remcl);
        });

        //  function relocate_home()
        //  {
        //      location.href = "/homeMhs";
        //  } 
    </script>
    <!-- <script type="text/javascript" src="login page main.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>