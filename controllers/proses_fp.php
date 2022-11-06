<?php
@session_start();
include "connect.php";

$username=@$_POST['username'];
$passwordnew=@$_POST['passwordnew'];
$passwordret=@$_POST['passwordret'];

$login=mysqli_query($db,"select*from login where username='".$username."'");
$l=mysqli_fetch_array($login);
$jl=mysqli_num_rows($login);

if($jl>0){
    if($passwordnew==$passwordret){
        $sql ="update login set password='".$passwordnew."' where username='".@$_POST['username']."'";
        mysqli_query($db,$sql);
        echo '<script language="javascript">  
 window.location="../admin/login/index.php?page=password"
 </script>';
    }else{
    ?>
        <script language="javascript">  
 window.location="../admin/login/fp.php?page=password&username=<?= @$_POST['username'];?>"
 </script>
 <?php
    }
}else{
    echo '<script language="javascript">  
 window.location="../admin/login/fp.php?page=username"
 </script>';
}
?>

