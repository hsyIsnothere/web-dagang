<?php
@session_start();
include "connect.php";


$fileSizes = @$_FILES['foto']['size']; 
$fileError = @$_FILES['foto']['error'];
$filename_a=@$_FILES['foto']['name'];
$namaperusahaan=@$_POST['namaperusahaan'];
$keterangan=@$_POST['keterangan'];
$alamat=@$_POST['alamat_a'];
$mail_a=@$_POST['mail_a'];
$telp_a=@$_POST['telp_a'];
$password=@$_POST['password'];
$username=@$_POST['username'];

									
									$max_id=mysqli_query($db,"select*from admin order by id_admin desc limit 1");
									while($id=mysqli_fetch_array($max_id)){
									
									$hasil = $id['id_admin'] + 1;
									}
								

$tipe_file = @$_FILES['foto']['type'];
$namafolder="../admin/production/images/";
$formatgambar = array("image/jpg", "image/jpeg", "image/gif", "image/png");
$gambar = $namafolder . basename($filename_a);
$kosong=" ";	

if(@$_POST['tambah']){

if($fileSizes>0 && $fileError==0 && in_array($tipe_file, $formatgambar)){

	$move=move_uploaded_file(@$_FILES['foto']['tmp_name'], $gambar);
	if($move){
	$sql ="insert into admin(id_admin,namaperusahaan,keterangan,alamat_a,email_a,telp_a,foto_a) values('".$hasil."','".$namaperusahaan."','".$keterangan."','".$alamat."','".$mail_a."','+62".$telp_a."','".$filename_a."')";
	$sql2="insert into login(username,password,level,code) values('".$username."','".$password."','admin','".$hasil."')";
	mysqli_query($db,$sql);
	mysqli_query($db,$sql2);
	echo '<script language="javascript">  
 window.location="../admin/production/data-admin.php?page=simpan"
 </script>';
	}
	
}else{

$sql ="insert into admin(id_admin,namaperusahaan,keterangan,alamat_a,email_a,telp_a,foto_a) values('".$hasil."','".$namaperusahaan."','".$keterangan."','".$alamat."','".$mail_a."','+62".$telp_a."','".$kosong."')";
$sql2="insert into login(username,password,level,code) values('".$username."','".$password."','admin','".$hasil."')";
mysqli_query($db,$sql);
mysqli_query($db,$sql2);
echo '<script language="javascript">  
 window.location="../admin/production/data-admin.php?page=simpan";
 </script>'; 
}
}

if(@$_POST['edit'])
{			
	if($fileSizes>0 && $fileError==0 && in_array($tipe_file, $formatgambar)){

		$move=move_uploaded_file(@$_FILES['foto']['tmp_name'], $gambar);
		if($move){
		$sql ="update admin set namaperusahaan='".$namaperusahaan."', alamat_a='".$alamat."', keterangan='".$keterangan."', email_a='".$mail_a."', telp_a='".$telp_a."', foto_a='".$filename_a."' where id_admin='".@$_GET['id_admin']."'";
		$sql2="update login set username='".$username."', password='".$password."' where code='".@$_GET['id_admin']."'";
		if(@$_GET['foto_a']==$kosong){
			mysqli_query($db,$sql);
		mysqli_query($db,$sql2);
		echo '<script language="javascript">  
	 window.location="../admin/production/data-admin.php?page=edit";
	 </script>';
		}else{
		unlink($namafolder .@$_GET['foto_a']);
		mysqli_query($db,$sql);
		mysqli_query($db,$sql2);
		echo '<script language="javascript">  
	 window.location="../admin/production/data-admin.php?page=edit";
	 </script>';
	 	}
		}
		
	}else{

		$sql ="update admin set namaperusahaan='".$namaperusahaan."', alamat_a='".$alamat."', keterangan='".$keterangan."', email_a='".$mail_a."', telp_a='".$telp_a."' where id_admin='".@$_GET['id_admin']."'";
		$sql2="update login set username='".$username."', password='".$password."' where code='".@$_GET['id_admin']."'";
		mysqli_query($db,$sql);
		mysqli_query($db,$sql2);
		echo '<script language="javascript">  
	 window.location="../admin/production/data-admin.php?page=edit";
	 </script>';
	}
}

