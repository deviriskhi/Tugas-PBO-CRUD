<?php
include 'database_mhs.php';
$db = new database();
$id = $_REQUEST['id'];
$delete = $db->delete($id);

if($delete){
    echo "<script>alert('Okkeee.. Data Telah Dihapus :)) ');</script>";
		echo "<script>window.location.href = 'home_mhs.php';</script>";
}
?>