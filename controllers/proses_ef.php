<?php

include "connect.php";

$filesize = (@$_FILES['foto']['size']/1000)-2; 
$fileError = @$_FILES['foto']['error'];
$filename=@$_FILES['foto']['name'];
$id_file=@$_GET['id_file'];
$judul=@$_POST['judul_file'];	
$kat_file=@$_POST['kategori_file'];
$date=date('Y-m-d  h:i');
$tipe_file = @$_FILES['foto']['type'];
$namafolder="../images/";
$formatgambar = array("image/jpg", "image/jpeg", "audio/mp3", "video/mp4", "file/pdf");
$gambar = $namafolder . basename($filename);
$kosong=" ";	


	
		
		


		$sql="update files set judul_file='".$judul."', file_kategori='".$kat_file."' where id_file='".$id_file."'";
		
		
			mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/ed-files.php?page=edit";
	 </script>';
		
		
	


