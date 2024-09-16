<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ana Sayfa</title>

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

<!-- Ana içerik buraya -->
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ana Sayfa</h1> <!-- Başlık burada -->
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        <p>Hoş geldiniz! Telefon rehberinizi görmek için <a href="rehberim.php">Rehberim</a>'e tıklayın.</p>
        <p>Yeni kişi eklemek için <a href="kisi-ekle.php">Kişi Ekle</a>'ye tıklayın.</p>
      </div>
    </div>
</div>


</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
