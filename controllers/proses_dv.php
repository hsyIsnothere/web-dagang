<?php
@session_start();
include "connect.php";

$foto_hh=@$_POST['link_g'];
$judul=@$_POST['judul_g'];
$jenis=@$_POST['jenis_g'];
$status=@$_POST['status'];

									

if(@$_POST['tambah']){

	$sql ="insert into galeri(judul_g,jenis_g,link_g,status) values('".$judul."','".$jenis."','".$foto_hh."','".$status."')";

    mysqli_query($db,$sql);
    
    echo '<script language="javascript">  
 window.location="../admin/production/video.php?page=simpan";
 </script>';
     
	
	
	
}


if(@$_POST['edit'])
{



		
		$sql ="update galeri set judul_g='".$judul."', jenis_g='".$jenis."', status='".$status."', link_g='".$foto_hh."' where id='".@$_GET['id']."'";
		mysqli_query($db,$sql);
	
		echo '<script language="javascript">  
	 window.location="../admin/production/video.php?page=edit";
	 </script>';

}

