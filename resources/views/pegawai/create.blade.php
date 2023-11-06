<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
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
<body>
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

    <form action="/pegawai" method="POST">
        @csrf


        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' id="nama" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jabatan' id="jabatan" >
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl_lahir' id="tgl_lahir" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat' id="alamat" required>
                </div>
            </div>
                



            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                    
                        <a href='/pegawai' class="btn btn-primary">KEMBALI</a>
                      
            </div>
    </form>
</body>
</html> 
