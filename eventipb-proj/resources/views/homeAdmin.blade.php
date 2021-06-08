<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ URL::asset('css/homeADMIN.css') }}">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;800&display=swap" rel="stylesheet">   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg></script>
        <title>Homepage Admin</title>
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
                      <li><a href="#">Verifikasi Sukses</a></li>
                      <li><a href="#">Permintaan Verifikasi</a></li>
                  </ul>
                </div>
                <div class="right">
                    <ul>
                      <li>
                      <a href="#">
                        <p>Admin Ambisius<br> <span>IPB Univeristy</span></p><img src="{{url('/image/user.svg')}}" alt="Admin" width="40"><i class="fas fa-angle-down"></i>
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

        <div class="products">  
            <section>  
                <p class="upperjudul">Verifikasi Sukses</p>
                <div class = "product-items">
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "{{url('/image/poster1.png')}}"  alt = "product image">
                            </div>
                        </div>
    
                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">Rabu, 16 Agustus 2021</h2>
                            </div>
                            <a href = "#" class = "product-name">Webinar menjadi Tukul Arwana</a>
                            <p class = "product-price">Rp 1.000.000</p>
                        </div>
    
                        <div class = "off-info">
                            <h2 class = "sm-title">Webinar</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
    
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                            <img src = "{{url('/image/poster1.png')}}"  alt = "product image">
                        
                            </div>
                        </div>
    
                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">Rabu, 16 Agustus 2021</h2>
                            </div>
                            <a href = "#" class = "product-name">Webinar menjadi Tukul Arwana</a>
                            <p class = "product-price">Rp 1.000.000</p>
                        </div>
                        <div class = "off-info">
                            <h2 class = "sm-title">Webinar</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
    
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                            <img src = "{{url('/image/poster1.png')}}"  alt = "product image">
                        
                            </div>
                        </div>
    
                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">Rabu, 16 Agustus 2021</h2>
                            </div>
                            <a href = "#" class = "product-name">Webinar menjadi Tukul Arwana</a>
                            <p class = "product-price">Rp 1.000.000</p>
                        </div>
    
                        <div class = "off-info">
                            <h2 class = "sm-title">Webinar</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
    
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                            <img src = "{{url('/image/poster1.png')}}"  alt = "product image">
                        
                            </div>
                        </div>
    
                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">Rabu, 16 Agustus 2021</h2>
                            </div>
                            <a href = "#" class = "product-name">Webinar menjadi Tukul Arwana</a>
                            <p class = "product-price">Rp 1.000.000</p>
                        </div>
    
                        <div class = "off-info">
                            <h2 class = "sm-title">Webinar</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
    
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                            <img src = "{{url('/image/poster1.png')}}"  alt = "product image">
                        
                            </div>
                        </div>
    
                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">Rabu, 16 Agustus 2021</h2>
                            </div>
                            <a href = "#" class = "product-name">Webinar menjadi Tukul Arwana</a>
                            <p class = "product-price">Rp 1.000.000</p>
                        </div>
    
                        <div class = "off-info">
                            <h2 class = "sm-title">Webinar</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
    
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                            <img src = "{{url('/image/poster1.png')}}"  alt = "product image">
                        
                            </div>
                        </div>
    
                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">Rabu, 16 Agustus 2021</h2>
                            </div>
                            <a href = "#" class = "product-name">Webinar menjadi Tukul Arwana</a>
                            <p class = "product-price">Rp 1.000.000</p>
                        </div>
    
                        <div class = "off-info">
                            <h2 class = "sm-title">Webinar</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
    
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                            <img src = "{{url('/image/poster1.png')}}"  alt = "product image">
                        
                            </div>
                        </div>
    
                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">Rabu, 16 Agustus 2021</h2>
                            </div>
                            <a href = "#" class = "product-name">Webinar menjadi Tukul Arwana</a>
                            <p class = "product-price">Rp 1.000.000</p>
                        </div>
    
                        <div class = "off-info">
                            <h2 class = "sm-title">Webinar</h2>
                        </div>
                    </div>
                    <!-- end of single product -->
    
                    <!-- single product -->
                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "{{url('/image/poster1.png')}}"  alt = "product image">
                        
                            </div>
                        </div>
    
                        <div class = "product-info">
                            <div class = "product-info-top">
                                <h2 class = "sm-title">Rabu, 16 Agustus 2021</h2>
                            </div>
                            <a href = "#" class = "product-name">Webinar menjadi Tukul Arwana</a>
                            <p class = "product-price">Rp 1.000.000</p>
                        </div>
    
                        <div class = "off-info">
                            <h2 class = "sm-title">Webinar</h2>
                        </div>
                    </div>
                    <!-- end of single product -->

            </section>
            
        </div>


    <script>
        document.querySelector(".right ul li").addEventListener("click", function(){
            this.classList.toggle("active");
        });
    </script>
    </body>
</html>