
<?php
@session_start();
include "connect.php";
$direktori="../../images/";
	if(isset($_POST["id"])){
		foreach($_POST["id"] as $id){
			$query = "delete from admin WHERE id_admin='".$id."'";
			$dewan1 = $db->prepare($query);
			$dewan1->execute();

            $query1 = "delete from login WHERE code='".$id."'";
			$dewan11 = $db->prepare($query1);
			$dewan11->execute();
            unlink($direktori .@$_GET['nama_file']);
		}
	}

	echo '<script language="javascript">  
 window.location="../admin/production/data-admin.php?page=hapus"
 </script>';
?>
