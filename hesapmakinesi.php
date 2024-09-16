<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hesap Makinesi</title>
</head>
<body>

<h1>PHP Hesap Makinesi</h1>

<form method="POST">
    <input type="number" name="num1" placeholder="Birinci Sayı" step="any" required>
    <input type="number" name="num2" placeholder="İkinci Sayı" step="any" required>
    
    <select name="operation" required>
        <option value="add">Toplama</option>
        <option value="subtract">Çıkarma</option>
        <option value="multiply">Çarpma</option>
        <option value="divide">Bölme</option>
    </select>
    
    <button type="submit" name="calculate">Hesapla</button>
</form>

<?php
if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    // Hesaplama Fonksiyonları
    function add($a, $b) {
        return $a + $b;
    }

    function subtract($a, $b) {
        return $a - $b;
    }

    function multiply($a, $b) {
        return $a * $b;
    }

    function divide($a, $b) {
        if ($b == 0) {
            return "Sıfıra bölünemez!";
        }
        return $a / $b;
    }

    // Sonuç Hesaplama
    if ($operation == 'add') {
        $result = add($num1, $num2);
    } elseif ($operation == 'subtract') {
        $result = subtract($num1, $num2);
    } elseif ($operation == 'multiply') {
        $result = multiply($num1, $num2);
    } elseif ($operation == 'divide') {
        $result = divide($num1, $num2);
    } else {
        $result = "Geçersiz işlem!";
    }

    echo "<h2>Sonuç: $result</h2>";
}
?>

</body>
</html>
