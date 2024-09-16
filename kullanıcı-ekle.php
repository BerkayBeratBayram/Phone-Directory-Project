<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kullanıcı Ekle</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include 'header.php'; ?>

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Yeni Kullanıcı Ekle</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        <form action="kullanıcı-ekle-islem.php" method="post">
          <div class="form-group">
            <label for="adi_soyadi">Adı Soyadı</label>
            <input type="text" class="form-control" id="adi_soyadi" name="adi_soyadi" required>
          </div>
          <div class="form-group">
            <label for="eposta">Eposta</label>
            <input type="email" class="form-control" id="eposta" name="eposta" required>
          </div>
          <div class="form-group">
            <label for="telefon">Telefon</label>
            <input type="text" class="form-control" id="telefon" name="telefon">
          </div>
          <div class="form-group">
            <label for="cinsiyet">Cinsiyet</label>
            <select class="form-control" id="cinsiyet" name="cinsiyet">
              <option value="erkek">Erkek</option>
              <option value="kadın">Kadın</option>
              <option value="diğer">Diğer</option>
            </select>
          </div>
          <div class="form-group">
            <label for="durum">Durum</label>
            <select class="form-control" id="durum" name="durum">
              <option value="aktif">Aktif</option>
              <option value="pasif">Pasif</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Ekle</button>
        </form>
      </div>
    </div>
</div>

<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
      <h5>Yan Panel Başlığı</h5>
      <p>Yan panel içeriği</p>
    </div>
</aside>

</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
