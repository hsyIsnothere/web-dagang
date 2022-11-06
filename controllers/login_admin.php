<?php
@SESSION_START();
include "connect.php";

if (isset($_GET['username'])) {
	$username = @$_GET['username'];
	$password = @$_GET['password'];
	$level = @$_POST['level'];
	$isi_form = "username=$username";
}

if ($username != '' && $password != '') {
	$sql_user = mysqli_query($db, "select*from login");
	$data_user = mysqli_fetch_array($sql_user);

	$sql_admin = mysqli_query($db, "select*from login, admin where username='$username' and password='$password' and code=id_admin");
	$data_admin = mysqli_fetch_array($sql_admin);
	$cek_admin = mysqli_num_rows($sql_admin);


	if ($cek_admin >= 1) {
		if ($data_admin['level'] == "admin") {
			@$_SESSION['admin'] = $data_admin['code'];

?>
			<script language="javascript">
				alert("Selamat Datang <?= $data_admin['username'] ?> \n Anda Login sebagai Admin.");
				window.location = "../admin/production/index.php";
			</script>;
		<?php

		}
	} else {
		if ($username != $data_user['username']) {

		?>
			<script type="text/javascript">
				window.location = "../admin/login/index.php?notif=username&<?php echo $isi_form; ?>";
			</script>

		<?php
		} else if ($password != $data_user['password']) {
		?>
			<script type="text/javascript">
				window.location = "../admin/login/index.php?notif=password&<?php echo $isi_form; ?>";
			</script>
<?php
		}
	}
}

?>