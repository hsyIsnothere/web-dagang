<?php
@session_start();
include "connect.php";

$fileSizes = @$_FILES['foto']['size']; 
$fileError = @$_FILES['foto']['error'];
$foto_hh=@$_FILES['foto']['name'];
$judul=@$_POST['judul_if'];
$keterangan=@$_POST['keterangan_if'];
$link_hh=@$_POST['link_if'];
									
$tipe_file = @$_FILES['foto']['type'];
$namafolder="../images/";
$formatgambar = array("image/jpg", "image/jpeg", "image/gif", "image/png");
$gambar = $namafolder . basename($foto_hh);
$kosong=" ";	

if(@$_POST['tambah']){


	$move=move_uploaded_file(@$_FILES['foto']['tmp_name'], $gambar);
	if($move){
	$sql ="insert into isi_fasilitas(judul_if,keterangan_if,link_if,gambar_if) values('".$judul."','".$keterangan."','".$link_hh."','".$foto_hh."')";

    mysqli_query($db,$sql);
    
    echo '<script language="javascript">  
 window.location="../admin/production/fitur.php#step-2?page=simpan";
 </script>';
     
	
	
	
}else{

    $sql ="insert into isi_fasilitas(judul_if,keterangan_if,link_if,gambar_if) values('".$judul."','".$keterangan."','".$link_hh."','".$kosong."')";
	
	mysqli_query($db,$sql);

echo '<script language="javascript">  
 window.location="../admin/production/fitur.php#step-2?page=simpan";
 </script>'; 

}
}

if(@$_POST['edit'])
{

			
	if($fileSizes>0 && $fileError==0 && in_array($tipe_file, $formatgambar)){

		$move=move_uploaded_file(@$_FILES['foto']['tmp_name'], $gambar);
		if($move){
		$sql ="update isi_fasilitas set judul_if='".$judul."', keterangan_if='".$keterangan."', link_if='".$link_hh."', gambar_if='".$foto_hh."' where id_if='".@$_GET['id_if']."'";
		
		if(@$_GET['gambar_if']==$kosong){
			mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/fitur.php?page=edit";
	 </script>';
		}else{
		unlink($namafolder .@$_GET['gambar_if']);
		mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/fitur.php?page=edit";
	 </script>';
	 	}
		}
		
	}else{

		$sql ="update isi_fasilitas set judul_if='".$judul."', keterangan_if='".$keterangan."', link_if='".$link_hh."' where id_if='".@$_GET['id_if']."'";
		
		
			mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/fitur.php?page=edit";
	 </script>';
		
		
	}
}

