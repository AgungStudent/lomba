<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ID | Nama Pegawai</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="admin.php">Rekap</a>
        <a class="nav-link" href="absen.php">Absen</a>
        <a class="nav-link" href="#">Logout</a>
      </div>
    </div>
  </div>
</nav>
<br><h2 style="text-align:center;">Halaman Rekap</h2><div class="container">
<table class="table" cellpadding='10' style="margin-left:10px; margin-right:10px;">
    <tr style="background-color:cyan; ">
        <th>ID</th>
        <th>Nama</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Keterangan</th>
    </tr>
    <tr>
    <td colspan='5'><center>No result</td>
    </td>
    </tr>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>