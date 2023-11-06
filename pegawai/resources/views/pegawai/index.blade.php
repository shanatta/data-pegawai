<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <style>
    .opsi {
    display: flex;
}
.header-basic {
	background-color: #292c2f;
	box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.15);
	padding: 20px 40px;
	height: 80px;
	box-sizing: border-box;
}

.header-basic .header-limiter {
	max-width: 1200px;
	text-align: center;
	margin: 0 auto;
}

/* Logo */

.header-basic .header-limiter h1 {
	float: left;
	font: normal 28px Cookie, Arial, Helvetica, sans-serif;
	line-height: 40px;
	margin: 0;
}

.header-basic .header-limiter h1 span {
	color: #5383d3;
}

/* The header links */

.header-basic .header-limiter a {
	color: #ffffff;
	text-decoration: none;
}

.header-basic .header-limiter nav{
	font:16px Arial, Helvetica, sans-serif;
	line-height: 40px;
	float: right;
}

.header-basic .header-limiter nav a{
	display: inline-block;
	padding: 0 5px;
	text-decoration:none;
	color: #ffffff;
	font-size: 16px;
	opacity: 0.9;
}

.header-basic .header-limiter nav a:hover{
	opacity: 1;
}

.header-basic .header-limiter nav a.selected {
	color: #608bd2;
	pointer-events: none;
	opacity: 1;
}

/* Making the header responsive */

@media all and (max-width: 600px) {

	.header-basic {
		padding: 20px 0;
		height: 75px;
	}

	.header-basic .header-limiter h1 {
		float: none;
		margin: -8px 0 10px;
		text-align: center;
		font-size: 24px;
		line-height: 1;
	}

	.header-basic .header-limiter nav {
		line-height: 1;
		float:none;
	}

	.header-basic .header-limiter nav a {
		font-size: 13px;
	}

}
</style>
</head>
<body class="bg-light">
  <main class="container">
     
      <header class="header-basic">

          <div class="header-limiter">

              <h1><a href="#">DATA<span>KU</span></a></h1>

              <nav>
                  <a href="#" class="selected">Data</a>
                  <a href="https://smkn2semarang.sch.id/">Blog</a>
                  <a href="https://smkn2semarang.sch.id/read/2/profil">About</a>
              </nav>
          </div>

      </header>

      <!-- START DATA -->
      <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="/pegawai" method="GET">
                
        <input class="form-control me-1" type="text" name="search" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Cari</button>
    </form>
        </div>

          <!-- TOMBOL TAMBAH DATA -->
          <div class="pb-3">
            <a href='/pegawai/create' class="btn btn-primary">+ Tambah Data</a>
          </div>

        <table class="table table-striped">
        <thead>
        <tr>
            <th class="col-md-1">No</th>
            <th class="col-md-3">Nama</th>
            <th class="col-md-2">Jabatan</th>
            <th class="col-md-2">Tanggal Lahir</th>
            <th class="col-md-2">Alamat</th>
            <th class="col-md-2">Opsi</th>

        </tr>
        </thead>

        @php
            $no = $pegawai->firstItem();
        @endphp
        @foreach ($pegawai as $peg)
        <tbody>
            <tr>
                <td>{{ $no++ }}</td>
                <td><a href="/pegawai/{{ $peg->id }}">{{ $peg->nama}}</a></td>

                <td>{{ $peg->jabatan }}</td>
                <td>{{ $peg->tgl_lahir }}</td>
                <td>{{ $peg->alamat }}</td>
                <td class="opsi"><a class="btn p-0 text-primary" href="/pegawai/{{ $peg->id }}/edit">Edit</a> <p class="px-2">|</p>
   
                    <form action ="/pegawai/{{ $peg->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn p-0 text-primary" type="submit" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
        <tbody>
        @endforeach

    </table>
      
    {{ $pegawai->links() }}
      </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html> 
