<?php
@session_start();
include "connect.php";

$nama_kategori=@$_POST['nama_kategori'];
$deskripsi=@$_POST['deskripsi'];
$fileSizes = @$_FILES['foto']['size']; 
$fileError = @$_FILES['foto']['error'];
$foto=@$_FILES['foto']['name'];

$tipe_file = @$_FILES['foto']['type'];
$namafolder="../images/";
$formatgambar = array("image/jpg", "image/jpeg", "image/gif", "image/png");
$gambar = $namafolder . basename($foto);
$kosong=" ";
		

if(@$_POST['tambah']){
	$move=move_uploaded_file(@$_FILES['foto']['tmp_name'], $gambar);
	if($move){
	$sql ="insert into kategori(nama_kategori,deskripsi,files) values('".$nama_kategori."','".$deskripsi."','".$foto."')";
	mysqli_query($db,$sql);
	echo '<script language="javascript">  
 window.location="../admin/production/kategori.php?page=simpan"
 </script>';
	}
}

if(@$_POST['edit'])
{

			
	if($fileSizes>0 && $fileError==0 && in_array($tipe_file, $formatgambar)){

		$move=move_uploaded_file(@$_FILES['foto']['tmp_name'], $gambar);
		if($move){
		$sql ="update kategori set nama_kategori='".$nama_kategori."', deskripsi='".$deskripsi."', files='".$foto."' where id_kategori='".@$_GET['id_kategori']."'";
		
		if(@$_GET['foto']==$kosong){
			mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/kategori.php?page=edit";
	 </script>';
		}else{
		unlink($namafolder .@$_GET['foto']);
		mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/kategori.php?page=edit";
	 </script>';
	 	}
		}
		
	}else{

		$sql ="update kategori set nama_kategori='".$nama_kategori."', deskripsi='".$deskripsi."' where id_kategori='".@$_GET['id_kategori']."'";
		
		
			mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/kategori.php?page=edit";
	 </script>';
		
		
	}
}

