<?php
@session_start();
include "connect.php";

$fileSizes = @$_FILES['foto']['size']; 
$fileError = @$_FILES['foto']['error'];
$foto_hh=@$_FILES['foto']['name'];
$judul=@$_POST['judul_g'];
$jenis=@$_POST['jenis_g'];
$status=@$_POST['status'];

									
$tipe_file = @$_FILES['foto']['type'];
$namafolder="../images/foto/";
$gambar = $namafolder . basename($foto_hh);
$kosong=" ";	

if(@$_POST['tambah']){


	$move=move_uploaded_file(@$_FILES['foto']['tmp_name'], $gambar);
	if($move){
	$sql ="insert into galeri(judul_g,jenis_g,file_g,status) values('".$judul."','".$jenis."','".$foto_hh."','".$status."')";

    mysqli_query($db,$sql);
    
    echo '<script language="javascript">  
 window.location="../admin/production/foto.php?page=simpan";
 </script>';
     
	
	
	
}
}

if(@$_POST['edit'])
{



		$move=move_uploaded_file(@$_FILES['foto']['tmp_name'], $gambar);
		if($move){
		$sql ="update galeri set judul_g='".$judul."', jenis_g='".$jenis."', status='".$status."', file_g='".$foto_hh."' where id='".@$_GET['id']."'";
		
		
		unlink($namafolder .@$_GET['file_g']);
		mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/foto.php?page=edit";
	 </script>';
	 	
		
		
	}else{

		$sql ="update galeri set judul_g='".$judul."', jenis_g='".$jenis."', status='".$status."' where id='".@$_GET['id']."'";
		
		
			mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/foto.php?page=edit";
	 </script>';
		
		
	}

}

