<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adi_soyadi = $_POST['adi_soyadi'];
    $eposta = $_POST['eposta'];
    $telefon = $_POST['telefon'];
    $cinsiyet = $_POST['cinsiyet'];
    $durum = $_POST['durum'];

    // SQL sorgusunu hazırla
    $sql = "INSERT INTO kullanıcılar (adi_soyadi, eposta, telefon, cinsiyet, durum) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $adi_soyadi, $eposta, $telefon, $cinsiyet, $durum);

    // Sorguyu çalıştır
    if ($stmt->execute()) {
        header("Location: kullanıcılar.php"); // Ekleme işleminden sonra kullanıcılar sayfasına dön
    } else {
        echo "Kullanıcı eklenirken bir hata oluştu: " . $conn->error;
    }

    // Bağlantıyı kapat
    $stmt->close();
    $conn->close();
}
?>
