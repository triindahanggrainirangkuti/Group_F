<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" >
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

      <div class="container" style="margin-left: 100px">
        <h1>Halaman Laporan</h1>

        <div class="row">
            <div class="col-sm-6">
                <h4>Tabel Laporan</h4>
            </div>
            <div class="col-sm-6" style="text-align: right" >
                <a href="/laporan/create" class="btn btn-danger btn-sm">Tambah Laporan</a>
            </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Successfully</strong> {{ Session::get('success') }}.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
          </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped table-sm table-hover table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Pelapor</th>
                    <th>Jenis Laporan</th>
                    <th>Judul Laporan</th>
                    <th>Tanggal Kejadian</th>
                    <th>Isi Laporan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              
            @foreach ($laporan as $m)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $m->nik }}</td>
              <td>{{ $m->nama_pelapor }}</td>
              <td>{{ $m->jl }}</td>
              <td>{{ $m->judul_laporan }}</td>
              <td>{{ $m->tgl_kejadian }}</td>
              <td>{{ $m->isi_laporan  }}</td>
              <td>
                <a href="/laporan/{{$m->no}}/edit" class="btn btn-outline-primary btn-sm">Edit</a>
                <a href="/laporan/{{$m->no}}/delete" class="btn btn-outline-primary btn-sm">Delete</a>
              </td>
              </tr>
            </div>
          @endforeach

            </tbody>
        </table>
            </div>
            
        </div>

        </div>

        

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>