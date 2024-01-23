<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Lagos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 1 Lagos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="halaman.php">Home</a>
        <a class="nav-link" href="form-daftar.php">Pendaftaran</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>Formulir Pendaftaran Siswa SMK Negeri 1 Lagos</h2><br>
<form action="proses-pendaftaran.php" method="POST">
<div class="mb-3">
  <label for="nama" class="form-label">Nama: </label>
  <input type="text" class ="form-control" name="nama" placeholder="nama lengkap" />
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" name="alamat" rows="3"></textarea>
</div>
<div class="mb-3">
<div class="form-check">
<label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
  <label class="form-check-label" for="laki-laki">Laki-Laki</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
  <label class="form-check-label" for="laki-laki">Perempuan</label>
</div>
</div>
<div class="mb-3">
    <label for="agama" class="form-label">Agama: </label>
            <select name="agama" class="form-control">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
</div>
<div class="mb-3">
    <label for="sekolah_asal" class="form-label">Sekolah Asal: </label>
    <input type="text" class ="form-control" name="sekolah_asal" placeholder="nama sekolah" />
</div>
<div>
<label for="tanggal_lahir" class="form-label">Tanggal lahir: </label>
  <input type="date" class ="form-control" name="tanggal_lahir" placeholder="tanggal lahir" />
</div>
<div>
<label for="no_telepon" class="form-label">no telepon: </label>
  <input type="text" class ="form-control" name="no_telepon" placeholder="no telepon" />
</div>
<div>
<label for="email" class="form-label">Email: </label>
  <input type="text" class ="form-control" name="email" placeholder="email" />
</div>
<div>
<label for="desa" class="form-label">Desa: </label>
  <input type="text" class ="form-control" name="desa" placeholder="desa/kelurahan" />
</div>
<div>
<label for="kecamatan" class="form-label">Kecamatan: </label>
  <input type="text" class ="form-control" name="kecamatan" placeholder="Kecamatan" />
</div>
<div class="mb-3">
    <label for="kabupaten" class="form-label">Kabupaten: </label>
            <select name="kabupaten" class="form-control">
                <option>Bandung barat</option>
                <option>Bandung</option>
                <option>Pangandaran</option>
                <option>Purwakarta</option>
                <option>Subang</option>
                <option>Sukabumi</option>
                <option>Sumedang</option>
                <option>Majalengka</option>
                <option>Garut</option>
                <option>Cianjur</option>
                <option>Ciamis</option>
                <option>Cirebon</option>
            </select>
</div>
<div class="mb-3">
    <label for="provinsi" class="form-label">Provinsi: </label>
            <select name="provinsi" class="form-control">
                <option>Jawa barat</option>
                <option>Jawa tengah</option>
                <option>Dki jakarta</option>
                <option>Banten</option>
                <option>Jawa timur</option>
                <option>DI yogyakarta</option>
            </select>
</div>
<div>
<label for="kode_pos" class="form-label">Kode pos: </label>
  <input type="text" class ="form-control" name="kode_pos" placeholder="kode pos" />
</div>
<div class="mb-3">
   <input type="submit" class="btn btn-primary" value="Daftar" name="daftar" />
</div>
    </form>
</div>
    </body>
</html>
