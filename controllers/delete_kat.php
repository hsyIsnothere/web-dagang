
<?php
@session_start();
include "connect.php";
	if(isset($_POST["id"])){
		$direktori="../images/";
		foreach($_POST["id"] as $id){
			$query = "DELETE FROM kategori WHERE id_kategori='".$id."'";
			$foto="SELECT files FROM kategori where id_kategori='".$id."'";
			$dewan1 = $db->prepare($query);
			
			unlink($direktori .@$foto);
			$dewan1->execute();
		}
	}

	echo '<script language="javascript">  
 window.location="../admin/production/kategori.php?page=hapus"
 </script>';
?>
