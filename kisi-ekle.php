<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adi_soyadi = $_POST['adi_soyadi'];
    $eposta = $_POST['eposta'];
    $telefon = $_POST['telefon'];
    $cinsiyet = $_POST['cinsiyet'];
    $durum = $_POST['durum'];
    $kullanici_id = $_POST['kullanici_id']; // Seçilen kullanıcı ID'si

    // SQL sorgusunu hazırla
    $sql = "INSERT INTO kisiler (adi_soyadi, eposta, telefon, cinsiyet, durum, kullanici_id) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $adi_soyadi, $eposta, $telefon, $cinsiyet, $durum, $kullanici_id);

    // Sorguyu çalıştır
    if ($stmt->execute()) {
        header("Location: rehberim.php?kullanici=" . $kullanici_id); // Ekleme işleminden sonra seçilen kullanıcının rehberine dön
    } else {
        echo "Kişi eklenirken bir hata oluştu: " . $conn->error;
    }

    // Bağlantıyı kapat
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kişi Ekle</title>

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
            <h1 class="m-0">Yeni Kişi Ekle</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        <form action="kisi-ekle.php" method="post">
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
          <div class="form-group">
            <label for="kullanici_id">Kullanıcı</label>
            <select class="form-control" id="kullanici_id" name="kullanici_id">
              <?php
                include 'db.php';
                $sql = "SELECT id, adi_soyadi FROM kullanıcılar";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . $row['adi_soyadi'] . "</option>";
                    }
                } else {
                    echo "<option value=''>Kullanıcı bulunamadı</option>";
                }

                $conn->close();
              ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Ekle</button>
        </form>
      </div>
    </div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
