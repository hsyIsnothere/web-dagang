<?php
@session_start();
include "connect.php";



$judul=@$_POST['judul_f'];

$kategori=@$_POST['kategori_f'];
$link=@$_POST['link_f'];


if(@$_POST['tambah']){


	$sql ="insert into footer(judul_f,kategori_f,link_f) values('".$judul."','".$kategori."','".$link."')";
        mysqli_query($db,$sql);
    echo '<script language="javascript">  
 window.location="../admin/production/footer-ui.php?page=tambah";
 </script>';
    
     
}

if(@$_POST['edit'])
{

		$sql ="update footer set judul_f='".$judul."', kategori_f='".$kategori."', link_f='".$link."' where id_footer='".@$_GET['id_footer']."'";
		
		
			mysqli_query($db,$sql);
		echo '<script language="javascript">  
	 window.location="../admin/production/footer-ui.php?page=edit";
	 </script>';
		
		
		
	
}

