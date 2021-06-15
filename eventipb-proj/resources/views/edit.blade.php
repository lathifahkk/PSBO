<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/buatevent.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/navbarMHS.css') }}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;800&display=swap" rel="stylesheet">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg></script>


    <title>Edit Event</title>
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
        <nav class="navbar ">
            <img src="{{url('/image/IPBEvent.png')}}" alt="IPB EVENT">
            <div class="left">
                <ul>
                  <li><a href="#">Beranda</a></li>
                  <li><a href="#">Buat Event</a></li>
              </ul>
            </div>
            <div class="right">
                <ul>
                  <li>
                    <a href="#">
                      <p name='nama_organisasi'>BEM<br> 
                        <span></span></p>
                    </a>
                  </li>
                  <li><a href="#"><button class="btnlogout">Keluar <i class="fas fa-sign-out-alt"></i></button> </a></li>
                </ul>               
            </div>
        </nav>
    </div>
    
    <form action="{{ route('org.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$event['id']}}">
        <div class="container register-form">
            <div class="form">
                <div class="row">
                    <h4>Edit Informasi Kegiatan</h4>
                        <div class="col-md-6">
                                <div class="form-field">
                                <label class="label">Pelaksana</label>
                                <input type="text" name="nama_organisasi" class="form-control" placeholder="Pelaksana" value="{{$event['nama_organisasi']}}" required/>
                            </div>
                            
                            <div class="form-field">
                                <label class="label">Kategori Kegiatan</label>
                                <input list="ktgs" name="kategori" id="ktg" class="form-control" placeholder="Pilih kategori kegiatan"   value="{{$event['kategori']}}">

                                <datalist id="ktgs">
                                    <option value="Lomba/Kompetisi">
                                    <option value="Webinar">
                                    <option value="Workshop">
                                </datalist>
                            </div>
                            
                            <div class="form-field">
                                
                                <label class="label">Nama Kegiatan</label>
                                <input type="text" name="nama_event" class="form-control" placeholder="Isi nama kegiatan yang diselenggarakan" value="{{$event['nama_event']}}" required/>
                            </div>
                            
                            <div class="form-field">
                                <label class="label">Tanggal Pelaksanaan</label>
                                <input type="date" name="tanggal_pelaksanaan" class="form-control" placeholder="Tanggal pelaksanaan" value="{{$event['tanggal_pelaksanaan']}}" required/>
                            </div>
                            <div class="form-field">
                                <label class="label">Waktu Pelaksanaan</label>
                                <input type="time" name="waktu_pelaksanaan" class="form-control" placeholder="Waktu pelaksanaan" value="{{$event['waktu_pelaksanaan']}}" required/>
                            </div>
                                    </div>
                        <div class="col-md-6">
                            <div class="form-field">
                                <label class="label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" placeholder="Deskripsikan kegiatan pada bagian ini" value="{{$event['deskripsi']}}" required></textarea>     
                            </div>
                            <div class="form-field">
                                <label class="label">Lokasi</label>
                                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi pelaksanaan" value="{{$event['lokasi']}}" required/>
                            </div>
                            <div class="form-field">
                                <label class="label">Jumlah Tiket</label>
                                <input type="number" name="jumlah_tiket" class="form-control" placeholder="0" value="{{$event['jumlah_tiker']}}" required/>
                            </div>
                            <div class="form-field">
                                <label class="label">Poster</label>
                                <input type="file" name="poster" class="form-control" placeholder="Tambahkan file" value="{{$event['poster']}}" required/>
                            </div>
                            <button type="submit" class="btn1">Simpan</button>
                            
                        </div>
                       
                </div>
                    
            </div>
        </div>

        </div> 

    </form>
    <script type="text/javascript" src="login page main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>