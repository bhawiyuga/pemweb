<a href="form-mahasiswa.php">Tambah Mahasiswa</a>
<br/>
<br/>

<?php
require_once 'config.php';

$sql = "select * from mahasiswa";

// Pakai db::fetchAll
$query = $db->query($sql);
$rows = $query->fetchAll();
foreach($rows as $row){
    echo $row["nim"]." ".$row["nama"]."<br/>";
}

/*
//Pakai db::query
$query = $db->query($sql);
foreach($query as $row){
    echo $row["nim"]." ".$row["nama"]."<br/>";
}*/

?>