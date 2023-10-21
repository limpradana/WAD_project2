<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator niii</title>
</head>
<body>
    <form method="post" action="">
        <label for="angka">Masukkan Angka:</label>
        <input type="number" name="angka" id="angka" required><br><br>

        <label for="operasi">Pilih Operasi:</label>
        <select name="operasi" id="operasi">
            <option value="tambah">ditambah</option>
            <option value="kurang">dikurang</option>
            <option value="kali">dikali</option>
            <option value="bagi">dibagi</option>
        </select><br><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    
    if (isset($_POST['hitung'])) {
        
        $angka = $_POST['angka'];
        $operasi = $_POST['operasi'];

        
        if ($operasi == 'tambah') {
            $hasil = $angka + $angka;
        } elseif ($operasi == 'kurang') {
            $hasil = $angka - $angka;
        } elseif ($operasi == 'kali') {
            $hasil = $angka * $angka;
        } elseif ($operasi == 'bagi') {
            $hasil = $angka / $angka;
        }

        
        echo "Hasil perhitungan: $angka $operasi $angka = $hasil";
    }
    ?>
</body>
</html>