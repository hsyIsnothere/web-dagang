
<?php
@session_start();
include "connect.php";
	if(isset($_POST["id"])){
		foreach($_POST["id"] as $id){
			$query = "DELETE FROM files WHERE id_file='".$id."'";
			$dewan1 = $db->prepare($query);
			$dewan1->execute();
		}
	}

	echo '<script language="javascript">  
 window.location="../admin/production/ed-files.php?page=hapus"
 </script>';
?>
