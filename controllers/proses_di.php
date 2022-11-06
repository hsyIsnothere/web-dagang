<?php
@session_start();
include "connect.php";

$filesize = @$_FILES['foto']['size']; 
$fileError = @$_FILES['foto']['error'];
$filename=@$_FILES['foto']['name'];
$judul=@$_POST['judul_file'];	
$kategori=@$_POST['kategori_file'];
$date=date('Y-m-d  h:i');
$harga=@$_POST['harga'];
$keterangan=@$_POST['keterangan'];
$tipe_file = @$_FILES['foto']['type'];
$kontak= @$_POST['kontak'];
$namafolder="../images/";
$formatgambar = array("image/jpg", "image/jpeg", "audio/mp3", "video/mp4", "file/pdf");
$gambar = $namafolder . basename($filename);
$kosong="";	

if(@$_POST['tambah']){


	$move=move_uploaded_file(@$_FILES['foto']['tmp_name'], $gambar);
	if($move){
	$sql ="insert into files(judul_file,kategori_file,harga,keterangan,dates,file_kategori,kontak) values('".$judul."','".$kategori."','".$harga."','".$keterangan."','".$date."','".$filename."','".$kontak."')";

    mysqli_query($db,$sql);
    
    echo '<script language="javascript">  
 window.location="../admin/production/files.php?page=simpan";
 </script>';
	}
}

if(@$_POST['edit'])
{	
	
		
					
				$sql ="update files set judul_file='".$judul."', kategori_file='".$kategori."', harga='".$harga."', keterangan='".$keterangan."', dates='".$date."', kontak='".$kontak."' where id_file='".@$_GET['id_file']."'";

				mysqli_query($db,$sql);
				echo '<script language="javascript">  
			window.location="../admin/production/ed-files.php?page=edit";
			</script>';			
}

