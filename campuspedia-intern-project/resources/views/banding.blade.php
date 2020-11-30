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
       <legend class="m-b-2 text-center text-head"> <strong>Bandingkan Kampus</strong></legend>
       &nbsp;&nbsp;&nbsp;
   </div>
    <div class="container-fluid container-banding text-center">
      <div class="row">
        <div class="form-group" style="width: 100%">
            <div class="row">
                <div class="col-sm-5 text-center">
                  <h5>Kampus 1</h5>
                </div>
                <div class="col-sm-5 text-center">
                  <h5>Kampus 2</h5>
                </div>
                <div class="col-sm-1">
                    &nbsp;
                </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group" style="width: 100%">
          <form action="/comparison" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-5">
                    <select class="form-control" name="pilihan1">
                      <option value="">--Nama Kampus--</option>
                      @foreach ($listkampus as $item)
                          <option value="{{$item->id}}">{{$item->nama_kampus}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="col-sm-5">
                  <select class="form-control" name="pilihan2">
                    <option value="">--Nama Kampus--</option>
                    @foreach ($listkampus as $item)
                        <option value="{{$item->id}}">{{$item->nama_kampus}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-sm-1">
                    <button type="submit" name="filter" class="btn btn-light tambah">Compare</button>
                </div>
              </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="form-group" style="width: 100%">
            <div class="row">
                <div class="col-sm-5 item-banding">
                  <div class="row">
                    <div class="col-sm-1">
                        &nbsp;
                    </div>
                    <div class="col">
                        <h5> <b>{{$kampus1->nama_kampus}}</b> </h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                        <p>Akronim: </p>
                    </div>
                    <div class="col-sm-5 text-left">
                        <h5>{{$kampus1->akronim}}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                        <p>Akreditasi: </p>
                    </div>
                    <div class="col-sm-5 text-left">
                        <h5>{{$kampus1->akreditasi}}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                        <p>Status: </p>
                    </div>
                    <div class="col-sm-5 text-left">
                        <h5>{{$kampus1->status}}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                        <p>Peringkat Asia: </p>
                    </div>
                    <div class="col-sm-5 text-left">
                        <h5>{{$kampus1->peringkat_asia}}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                        <p>Peringkat Asia: </p>
                    </div>
                    <div class="col-sm-5 text-left">
                        <h5>{{$kampus1->peringkat_lokal}}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                        <p>Lokasi: </p>
                    </div>
                    <div class="col-sm-10 text-left">
                        <h5>{{$kampus1->lokasi}}</h5>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5 item-banding" style="margin-left: 15px">
                  <div class="row">
                    <div class="col-sm-1">
                      &nbsp;
                    </div>
                    <div class="col">
                        <h5> <b>{{$kampus2->nama_kampus}}</b> </h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                        <p>Akronim: </p>
                    </div>
                    <div class="col-sm-5 text-left">
                        <h5>{{$kampus2->akronim}}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                        <p>Akreditasi: </p>
                    </div>
                    <div class="col-sm-5 text-left">
                        <h5>{{$kampus2->akreditasi}}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                        <p>Status: </p>
                    </div>
                    <div class="col-sm-5 text-left">
                        <h5>{{$kampus2->status}}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                        <p>Peringkat Asia: </p>
                    </div>
                    <div class="col-sm-5 text-left">
                        <h5>{{$kampus2->peringkat_asia}}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                        <p>Peringkat Lokal: </p>
                    </div>
                    <div class="col-sm-5 text-left">
                        <h5>{{$kampus2->peringkat_lokal}}</h5>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-2">
                        <p>Lokasi: </p>
                    </div>
                    <div class="col-sm-10 text-left">
                        <h5>{{$kampus2->lokasi}}</h5>
                    </div>
                  </div>
                </div>
                </div>
                <div class="col-sm-1">
                    &nbsp;
                </div>
            </div>
        </div>
      </div>
        
    </div>

</body>
</html>