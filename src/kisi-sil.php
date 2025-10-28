<?php
include 'db.php'; // Veritabanı bağlantısını ekle

// ID al
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    
    // SQL sorgusunu hazırla
    $sql = "DELETE FROM kisiler WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    // Sorguyu çalıştır
    if ($stmt->execute()) {
        header("Location: rehberim.php"); // Silme işleminden sonra tekrar aynı sayfaya dön
    } else {
        echo "Kişi silinirken bir hata oluştu: " . $conn->error;
    }

    // Bağlantıyı kapat
    $stmt->close();
    $conn->close();
}
?>
