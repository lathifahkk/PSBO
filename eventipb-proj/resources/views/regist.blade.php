<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/registpage.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;800&display=swap" rel="stylesheet">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg></script>

    <title>Regist Page</title>

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
                    <li><a href="{{ route('login') }}"><button class="btn btn-outline-light" type="button" style="font-weight:bold">Login</button></li></a>
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
                        <form>
                            <div class="form-row">
                                <h4>IPB University's Event</h4>
                                <h5>Register</h5>
                            </div>
                            <div class="form-row">   
                                <div class="form-field">
                                    <label class="label">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Isi nama lengkap anda" value="" required/>
                                </div>                                
                                <div class="form-field">
                                    <label class="label" style="text-align: left;">Email</label>
                                    <input type="text" class="form-control" placeholder="Isi NIM/NRP anda" value="" required/>
                                </div>
                                <div class="form-field">
                                    <label class="label">Password</label>
                                    <input type="password" class="form-control" placeholder="Isi password" value="" required/>
                                </div>
                                <div class="form-field">
                                    <label class="label">Daftar sebagai</label>
                                    <input list="ktgs" name="ktg" id="ktg" class="form-control" placeholder="Pilih kategori kegiatan" required="">
    
                                    <datalist id="ktgs">
                                    <option value="Mahasiswa">
                                    <option value="Organisasi">
                                    
                                    </datalist>
                                </div>
                               
                            </div>
                            <div class="btn_regist">
                                <button type="button" class="btn1">Masuk</button>
                            </div>    
                            
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    </div>
    
    <script type="text/javascript" src="login page main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>