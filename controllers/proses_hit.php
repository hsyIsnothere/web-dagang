<?php
@session_start();
include "connect.php";



if(@$_GET['page']=="tambah")
{	
    $files=mysqli_query($db,"select*from files where id_file='".@$_GET['id_file']."'");
    $f=mysqli_fetch_array($files);
	$hits=@$_GET['hits']+1;

				$sql ="update files set hits='".$hits."' where id_file='".@$_GET['id_file']."'";
				
				mysqli_query($db,$sql);
				?>
                <script language="javascript">  
			window.location="../images/<?= $f['nama_file']; ?>"
			</script>
				
<?php
}
?>

