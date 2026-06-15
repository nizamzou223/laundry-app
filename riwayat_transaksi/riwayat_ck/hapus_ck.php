<?php
$konek = mysqli_connect ("localhost","root","","laundry_app");

$id_ck = $_GET['id_ck'];

$hapus = mysqli_query($konek , "DELETE FROM tb_riwayat_ck WHERE id_ck=$id_ck");
if ($hapus)
?>
<?php
echo ("<script>
window.alert('Data Berhasil dihapus');
window.location.href='login.php';
</script>");
?>


