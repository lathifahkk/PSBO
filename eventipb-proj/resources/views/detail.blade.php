<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/deskevent.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;800&display=swap" rel="stylesheet">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg></script>

    <title>Deskripsi Event</title>
    <style>
        body{
            background:url('/image/bgIN.png') no-repeat;
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
                <ul>
                  <li><a href="#">Beranda</a></li>
              </ul>
            </div>
            <div class="right">
                <ul>
                  <li>
                    <a href="#">
                      <p>Mahasiswa Ambisius<br> <span>G61110067</span></p>
                      <img src="{{url('/image/user.svg')}}" alt="Admin" width="40">
                      <i class="fas fa-angle-down"></i>
                    </a>
                     
                    <div class="dropdown">
                        <ul>
                          <li><a href="#"><i class="fas fa-user" style="margin-right: 10px;"></i> Profile</a></li>
                          <li><a href="#"><i class="fas fa-sliders-h" style="margin-right: 10px;"></i> Settings</a></li>
                          <li><a href="#"><i class="fas fa-sign-out-alt" style="margin-right: 10px;"></i> Signout</a></li>
                      </ul>
                    </div>
                    
                  </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="desk">
        <div class="container">

            <div class="form">
                <div class="row">
                    <div class="col-md-7">
                        <div class="deskripsi">
                            <div class="card" style="width:600px;"> <!-- bisa ditambah (border: none;) buat ilangin bordernya*/-->
                                <img class="card-img-top" src="{{url('/image/poster2.png')}}" alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <h4 class="upperjudul1">Deskripsi Event</h4>
                                    <p class="card-text">{{$event['deskripsi']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-md-5">
                        <div class="event-detail">
                            <div class="detail-content">
                                <div class="top-detail">
                                    <h6>{{$event['kategori']}}</h6>
                                    <h4>{{$event['nama_event']}}</h4>
                                </div>
                                <div class="body-detail">
                                    <h6>Diselenggarakan oleh</h6>
                                    <div class="penyelenggara">
                                        <a>{{$event['nama_organisasi']}}</a>
                                    </div>

                                    <h6>Tanggal & Waktu</h6>
                                    <div class="date">
                                        <a><i class="fa fa-calendar" aria-hidden="true" style="margin-right: 10px;"></i>{{$event['tanggal_pelaksanaan']}}</a> <br>
                                        <a><i class="fa fa-clock" aria-hidden="true" style="margin-right: 10px;"></i>{{$event['waktu_pelaksanaan']}}</a>                                        
                                    </div>

                                    <h6>Lokasi</h6>
                                    <div class="loc">
                                        <a><i class="fas fa-map-marker-alt" aria-hidden="true" style="margin-right: 10px;"></i>{{$event['lokasi']}}</a>                                 
                                    </div>
                                    
                                    <div class="daftar">
                                        <div class="center">
                                            <button type="button" class="btn1">Daftar</button>
                                        </div>
                                    </div>
                                    

                                </div>
                                

                            </div>

                        </div>
                                                
                    </div>   
            </div>

        </div>
        </div>       
    </section>
    <script type="text/javascript" src="login page main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>