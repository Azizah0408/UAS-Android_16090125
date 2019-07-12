<?php  
 require_once 'koneksi.php'; 
 
 if($_SERVER['REQUEST_METHOD'] == 'POST') 
 { 
  $nama = $_POST['nama']; 
  $kelas = $_POST['noHp']; 
  $alamat = $_POST['alamat']; 
  $jenis_kelamin = $_POST['jenis_kelamin']; 
 
  $query = "INSERT INTO tb_haji (nama, noHp, alamat, jenis_kelamin) VALUES ('$nama','$noHp','$alamat',$'jenis_kelamin')"; 
 
  $exeQuery = mysqli_query($konek, $query);  
 
  echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'berhasil menambahkan data')) :  json_encode(array('kode' =>2, 'pesan' => 'data gagal ditambahkan')); 
 } 
 else 
 { 
 	 echo json_encode(array('kode' =>101, 'pesan' => 'request tidak valid')); 
 } 
 
 ?> 