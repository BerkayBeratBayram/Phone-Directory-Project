<?php
include 'db.php'; // Veritabanı bağlantısını yap

// ID al
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);

    // SQL sorgusunu hazırla
    $sql = "DELETE FROM kullanıcılar WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    // Sorguyu çalıştır
    if ($stmt->execute()) {
        header("Location: kullancılar.php"); // Silme işleminden sonra tekrar kullanıcılar sayfasına dön
    } else {
        echo "Kullanıcı silinirken bir hata oluştu: " . $conn->error;
    }

    // Bağlantıyı kapat
    $stmt->close();
    $conn->close();
}
?>
