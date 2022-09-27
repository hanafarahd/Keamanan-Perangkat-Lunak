<html>
<head>
<title>Validasi Angka PHP</title>
<meta content="validasi angka php" name="description">
<meta content="validasi,angka,php" name="keyword">
<head>
<body>
<center>
<h3>DEMO VALIDASI ANGKA PHP</h3>
<form action="" method="POST">
NOMOR HP
<input type="text" name="nomor_hp">
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit'])){
 if(empty($_POST['nomor_hp'])) {
 $hp = 'NO HP tidak boleh kosong';
 } else if(!is_numeric($_POST['nomor_hp'])) {
 $hp = 'NO HP harus angka';
 } else if(strlen($_POST['nomor_hp']) != 12) {
 $hp = 'NO HP harus berjumlah 12 angka';
 } else {
 $hp = 'NO HP berhasil di input';
 }
 echo $hp;
}
?>
</center>
</body>
</html>