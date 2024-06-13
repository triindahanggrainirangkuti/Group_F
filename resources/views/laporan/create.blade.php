<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">LAPOR!</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
              <li class="nav-item">
                <a class="nav-link" href="/tentang">TENTANG LAPOR!</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/statistik">STATISTIK</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </nav>

      <div class="container" style="margin-left: 350px">
        <h1>Sampaikan Laporan Anda</h1>

        <div class="row">
            <div class="col-sm-12">
                <h4>Form Laporan</h4>

                @if ($errors->any())
                  <div class="pt3">
                    <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors-> all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                @endif

                <form action="/laporan" method="POST">
                  @csrf
                    <div class="row">
                      <div class="col-sm-4">
                      
                        <div class="col-sm-12">
                            <label for="">NIK Pelapor</label>
                            <input type="number" name="nik" class="form-control" placeholder="Input NIK" value="{{ Session::get('nik') }}">
                        </div>
                        <div class="col-sm-12">
                            <label for="">Nama Pelapor</label>
                            <input type="text" name="nama_pelapor" class="form-control" placeholder="Input Nama Pelapor" value="{{ Session::get('nama_pelapor') }}">
                        </div>

                        <label for="">Jenis Laporan</label>
                        <select name="jl" id="" class="form-control">
                            <option>Pengaduan</option>
                            <option>Aspirasi</option>
                        </select>
                        
                      <div class="row">
                        <div class="col-sm-12">
                          <label for="">Judul Laporan</label>
                          <input type="text" name="judul_laporan" class="form-control" placeholder="Input Judul Laporan" value="{{ Session::get('judul_laporan') }}">
                      </div>
                        </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="">Tanggal Kejadian</label>
                            <input type="date" name="tgl_kejadian" id="" class="form-control" value="{{ Session::get('tgl_kejadian') }}">
                        </div>
                    <div class="row">  
                        <div class="col-sm-12">
                            <label for="">Isi Laporan Anda</label>
                            <textarea name="isi_laporan" id="" cols="20" rows="5" class="form-control" placeholder="Input Isi Laporan"></textarea value="{{ Session::get('isi_laporan') }}">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-6">
                            <button class="btn btn-danger" style="width: 100%" type="submit">LAPOR!</button>
                        </div>
                        <div class="col-sm-6">
                        <a href="/laporan" class= "btn btn-secondary" style="width: 100%">KEMBALI</a>
                        </div>
                    </div>
                    

                </form>
            </div>
        </div>

        </div>

        

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>