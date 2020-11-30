<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kampus</title>
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
                  <a class="nav-link nav-item2" href="/">Pengaturan data kampus</a>
                </li>
              </ul>
            </div>
          </nav>
    </div>
    <div class="container-fluid">
        &nbsp;&nbsp;&nbsp;
       <legend class="m-b-2 text-center text-head"> <strong>Edit Data Kampus</strong></legend>
       &nbsp;&nbsp;&nbsp;
   </div>
    <div class="container-fluid warna-pesan ">
        <div class="form-tambah shadow-sm">
            <div>
                <form action="/update/{{$kampus->id}}" method="POST">
                  @csrf
                  @method('PATCH')
                    <div class="form-group">
                      <label for="nama">Nama Kampus</label>
                      <input value="{{$kampus->nama_kampus}}" type="text" class="form-control" name="nama" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group">
                        <label for="akronim">Akronim</label>
                        <input value="{{$kampus->akronim}}" type="text" class="form-control" name="akronim" placeholder="Masukkan akronim">
                      </div>
                    <div class="form-group">
                        <label for="akre">Akreditasi</label>
                        <input value="{{$kampus->akreditasi}}" type="text" class="form-control" name="akre" placeholder="Masukkan akreditasi">
                    </div>
                    <div class="form-group">
                      <label for="akre">Status</label>
                      <input value="{{$kampus->status}}" type="text" class="form-control" name="status" placeholder="Masukkan akreditasi">
                  </div>
                    <div class="form-group">
                        <label for="p_asia">Peringkat Asia</label>
                        <input value="{{$kampus->peringkat_asia}}" type="number" class="form-control" name="p_asia" placeholder="Masukkan peringkat">
                    </div>
                    <div class="form-group">
                        <label for="p_lokal">Peringkat Lokal</label>
                        <input value="{{$kampus->peringkat_lokal}}" type="number" class="form-control" name="p_lokal" placeholder="Masukkan peringkat">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input  value="{{$kampus->lokasi}}" type="text" class="form-control" name="lokasi" placeholder="Masukkan lokasi">
                    </div>
                    <div class="text-right">
                        <button type="submit" name="submit" class="btn shop shadow-sm">Edit</button>
                    </div>
                  </form>
            </div>
        </div>
   </div>
</body>
</html>