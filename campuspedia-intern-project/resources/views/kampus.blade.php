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
       <legend class="m-b-2 text-center text-head"> <strong>Data Kampus</strong> </legend>
       &nbsp;&nbsp;&nbsp;
   </div>
    <div class="container-fluid warna-tambah">
        <div class="data-kampus">
           <a href="/tambah"><button class="btn tambah shadow-sm">Tambah Kampus</button></a> 
        </div>
        <div class="data-kampus shadow-sm">
            <table class="table table-sm">
                <tr>
                    <th scope="col">Nama Kampus</th>
                    <th scope="col">Akreditasi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Peringkat Asia</th>
                    <th scope="col">Peringkat Lokal</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">&nbsp;</th>
                </tr>
                @foreach ($kampus as $item)
                <tr>
                <td>{{$item->nama_kampus}}</td>
                    <td>{{$item->akreditasi}}</td>
                    <td>{{$item->status}}</td>
                    <td>{{$item->peringkat_asia}}</td>
                    <td>{{$item->peringkat_lokal}}</td>
                    <td>{{$item->lokasi}}</td>
                    <td><form action="" method="POST">
                    <a href="/edit/{{$item->id}}" class="btn btn-success">Edit</a>

                        <form action="/delete/{{$item->id}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger">Hapus</button></td>
                        </form>
                </tr>
                @endforeach
            </table>
        </div>
   </div>
</body>
</html>