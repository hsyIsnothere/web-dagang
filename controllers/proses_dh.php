<?php
@session_start();
include "connect.php";


$fileSizes = @$_FILES['foto']['size']; 
$fileError = @$_FILES['foto']['error'];
$foto_hh=@$_FILES['foto']['name'];
$judul=@$_POST['judul_hh'];
$keterangan=@$_POST['keterangan_hh'];
$tombol_hh=@$_POST['tombol_hh'];
$link_hh=@$_POST['link_hh'];
									
									
									
								

$tipe_file = @$_FILES['foto']['type'];
$namafolder="../images/";
$formatgambar = array("image/jpg", "image/jpeg", "image/gif", "image/png");
$gambar = $namafolder . basename($foto_hh);
$kosong=" ";	

if(@$_POST['tambah']){

if($fileSizes>0 && $fileError==0 && in_array($tipe_file, $formatgambar)){

	$move=move_uploaded_file(@$_FILES['foto']['tmp_name'], $gambar);
	if($move){
	$sql ="insert into header_home(judul_hh,keterangan_hh,tombol_hh,link_hh,foto_hh) values('".$judul."','".$keterangan."','".$tombol_hh."','".$link_hh."','".$foto_hh."')";
	
        mysqli_query($db,$sql);
    echo '<script language="javascript">  
 window.location="../admin/production/header.php?page=edit";
 </script>';
    }
	

	
}else{

    $sql ="insert into header_home(judul_hh,keterangan_hh,tombol_hh,link_hh,foto_hh) values('".$judul."','".$keterangan."','".$tombol_hh."','".$link_hh."','".$kosong."')";
	
	mysqli_query($db,$sql);

echo '<script language="javascript">  
 window.location="../admin/production/header.php?page=simpan";
 </script>'; 

}
}

if(@$_POST['edit'])
{

			
	if($fileSizes>0 && $fileError==0 && in_array($tipe_file, $formatgambar)){

		$move=move_uploaded_file(@$_FILES['foto']['tmp_name'], $gambar);
		if($move){
		$sql ="update header_home set judul_hh='".$judul."', keterangan_hh='".$keterangan."',tombol_hh='".$tombol_hh."',  link_hh='".$link_hh."', foto_hh='".$foto_hh."' where id_hh='".@$_GET['id_hh']."'";
		
		if(@$_GET['foto_hh']==$kosong){
			mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/header.php?page=edit";
	 </script>';
		}else{
		unlink($namafolder .@$_GET['foto_hh']);
		mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/header.php?page=edit";
	 </script>';
	 	}
		}
		
	}else{

		$sql ="update header_home set judul_hh='".$judul."', keterangan_hh='".$keterangan."', tombol_hh='".$tombol_hh."', link_hh='".$link_hh."' where id_hh='".@$_GET['id_hh']."'";
		
		
			mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/header.php?page=edit";
	 </script>';
		
		
	}
}

