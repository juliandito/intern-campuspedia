<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BandingKampus</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/main.css')}}">
</head>
<body>
    <div class="container-fluid nav-ungu">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand nav-item2" href="/"> <h3>BandingKampus</h3></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link nav-item2" href="/banding">Bandingkan kampus</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link nav-item2" href="/kampus">Pengaturan data kampus</a>
                </li>
              </ul>
            </div>
          </nav>
    </div>
    <div class="container-fluid">
        &nbsp;&nbsp;&nbsp;
       <legend class="m-b-2 text-center text-head"> <strong> Daftar Kampus </strong></legend>
       &nbsp;&nbsp;&nbsp;
   </div>
   <div class="container-fluid container-items">
       <div class="grid-wrapper">  
           <div class="box pilih shadow-sm">
               <img src="./img/corn_dummy.png" alt="jagung" class="foto-items">
               <div class="row">
                   <div class="col text-center">
                       <h5>Institut Teknologi Sepuluh Nopember</h5>
                   </div>
               </div>
           </div>
           <div class="box pilih shadow-sm">
            <img src="./img/corn_dummy.png" alt="jagung" class="foto-items">
            <div class="row">
                <div class="col text-center">
                    <h5>Institut Teknologi Sepuluh Nopember</h5>
                </div>
            </div>
        </div>
       </div>
   </div>
</body>
</html>