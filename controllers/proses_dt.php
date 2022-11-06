<?php
@session_start();
include "connect.php";

$judul=@$_POST['judul_t'];
$keterangan=@$_POST['ckeditor'];
$link=@$_POST['video'];


if(@$_POST['edit'])
{		
	

		
		$sql ="update testimoni set judul_t='".$judul."', keterangan_t='".$keterangan."', video='".$link."'";
			
				mysqli_query($db,$sql);
			echo '<script language="javascript">window.location="../admin/production/ed-testimoni.php?page=edit"</script>';
			
}
		
