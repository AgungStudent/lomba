<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" /> 
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
</head>
<body >
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Selamat datang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menuadmin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-rekabdata.php">Rekab data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-rekabdata.php">Summery</a>
        </li>
      <!-- -->
      
      </ul>
      
    </div>
  </div>
</nav>

<!-- masuk desain ( masukan data baru )-->
<div class="container">
<h1>Masukan Data Baru</h1>
</div>
<div class="container">
<table class="table">
        <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Image</th>
                </tr>
        </thead>
  <tbody>
    <form action="#" method="post" enctype="multipart/form-data">
        <tr>
            <th scope="row">1</th>
            <td><input type="text" name="add-id" ></td>
            <td><input type="nama" name="add-nama"></td>
            <td><input type="email" name="add-email"></td>
            <td><input type="password" name="add-password"></td>
            <td> <input type="file" name="add-image" accept="image/png, image/gif, image/jpeg" /></td>
        </tr>
  </tbody>
</table>
</div>
 
 <div class="container">
 <a class="btn btn-primary" href="#" role="button">Tambah</a>
 </div>
     <!-- masuk desain ( update data )-->
     <div class="container">
            <h1>Update Data Pekerja</h1>
    </div>
<div class="container">
<table class="table">
        <thead>
                <tr>
                    
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Image</th>
                </tr>
        </thead>
  <tbody>
    <form action="#" method="post" enctype="multipart/form-data">
        <tr>
           
            <td><input type="text" name="add-id" ></td>
            <td><input type="nama" name="add-nama"></td>
            <td><input type="email" name="add-email"></td>
            <td><input type="password" name="add-password"></td>
            <td> <input type="file" name="add-image" accept="image/png, image/gif, image/jpeg" /></td>
        </tr>
  </tbody>
</table>
</div>
 
 <div class="container">
 <a class="btn btn-primary" href="#" role="button">Update</a>
 </div>

  <!-- masuk desain ( delete data )-->
  <div class="container">
            <h1>Hapus Data Pekerja</h1>
    </div>
<div class="container">
<table class="table">
        <thead>
                <tr>
                    <th scope="col">id</th>
                </tr>
        </thead>
  <tbody>
    <form action="#" method="post" enctype="multipart/form-data">
        <tr>
            <td><input type="text" name="add-id" ></td>
        </tr>
  </tbody>
</table>
</div>
 
 <div class="container">
 <a class="btn btn-primary" href="#" role="button">Delete Data</a>
 </div>
 


</body>
</html>