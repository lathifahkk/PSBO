<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/homeMHS.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/navbarMHS.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;800&display=swap" rel="stylesheet">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg></script>

    <title>Home Mahasiswa IPB</title>
    <style>
        body{
            background:url('/image/bgIN.png') no-repeat;
            background-size: cover;
            padding-bottom: 500px;
        }
    </style>
</head>
<body>
@csrf
<div class="wrapper">
        <nav class="navbar ">
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
                      <p>Mahasiswa Ambisius<br> 
                        <span>G61110067</span></p>
                    </a>
                  </li>
                  <li><a href="#"><button class="btnlogout">Keluar <i class="fas fa-sign-out-alt"></i></button> </a></li>
                </ul>               
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col-sm-9">
            <div class="topsection">
                <div class="search_wrap search_wrap_3">
                    <div class="search_box">
                        <input type="text" class="input" placeholder="Cari acara">
                        <div class="btn btn_common">
                            <i class="fas fa-search" style="color: #FFF;"></i>
                        </div>
                    </div>
                </div>

                <div class = "category-head">
                    <ul> 
                        <div class = "category-title active" id = "all">
                            <li>All</li>
                        </div>                       
                        <div class = "category-title" id = "culture">
                            <li>Culture</li>
                        </div>
                        <div class = "category-title" id = "politics">
                            <li>Politics</li>
                        </div>
                        <div class = "category-title" id = "finance">
                            <li>Finance</li>
                        </div>
                        <div class = "category-title" id = "business">
                            <li>Business</li>
                        </div>
                        <div class = "category-title" id = "sports">
                            <li>Sports</li>
                        </div>
                    </ul>
                </div>
            </div>

            
            <div class = "product-items">
                       
                @foreach($events as $event)
                <!-- single product -->
                <div class = "product">
                    <div class = "product-content">
                        <div class = "product-img">
                            <img src = "{{url('/image/poster1.png')}}" alt = "product image">
                        </div>
                    </div>

                    <div class = "product-info">
                        <div class = "product-info-top">
                            <h2 class = "sm-title">{{$event['tanggal_pelaksanaan']}}</h2>
                        </div>
                        <a href = "/deskEvent" class = "product-name">{{$event['nama_event']}}</a>
                        <p class = "lokasi">{{$event['lokasi']}}</p>
                    </div>

                    <div class = "off-info">
                        <h2 class = "sm-title">{{$event['kategori']}}</h2>
                    </div>
                </div>
                <!-- end of single product -->
                @endforeach

            </div>
                             
        </div>
        <div class="col-sm-3" >
            <div class="luaranjadwal">
                <div class="jadwalsaya">
                    <center>
                        <p>Jadwal saya</p>
                    </center>
                    <div class="events">
                        <div class="event">
                            <h6 class = "tglevent">Rabu, 16 Agustus 2021</h6>
                            <a href = "#" class = "namaevent">How to train your dragon?</a>
                        </div>    
                    </div>
    
                </div>
            </div>
            
        </div>
      </div>
    <script type="text/javascript" src="login page main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>