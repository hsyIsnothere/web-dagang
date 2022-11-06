<?php
@session_start();
include '../../controllers/connect.php';
if (@$_SESSION['admin']) {
?>
    <script language="javascript">
        window.location = "../production/";
    </script>';
<?php
} else {
?>
    <!DOCTYPE html>
    <html lang="en">
    <?php
    $admin = show("web");
    foreach ($admin as $a);
    ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Admin</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <div class="main" style="margin-top:-100px; ">



            <!-- Sing in  Form -->
            <section class="sign-in" style="margin-bottom:-100px;">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><a href="../../index.php"><img src="../../assets2/img/<?= $a['logo']; ?>" alt="singin image"></a><br /><img src="images/login.jpg" /></figure>


                        </div>

                        <div class="signin-form">
                            <h2 class="form-title">Admin </h2>
                            <table bgcolor="red" width="100%" style="margin-top:-20px; margin-bottom:20px;">
                                <tr>
                                    <td>

                                        <font style="color:#FFF; font-weight:normal;">
                                            <?php
                                            if (@$_GET['notif'] == 'username') {
                                                echo "Maaf username anda tidak terdaftar";
                                            } else if (@$_GET['notif'] == 'password') {
                                                echo "Maaf password anda salah";
                                            }
                                            if (isset($_GET['username'])) {
                                                $username = $_GET['username'];
                                            } else {
                                                $username = "";
                                            }
                                            ?>
                                        </font>

                                    </td>
                                </tr>

                            </table>
                            <form method="GET" action="../../controllers/login_admin.php" class="register-form" id="login-form">

                                <div class="form-group">
                                    <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" value="" required name="username" id="your_name" placeholder="Masukkan Username" />
                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" placeholder="Password..." id="your_pass" required />
                                </div>

                                <div class="form-group form-button">
                                    <input type="submit" id="signin" class="form-submit" value="Log in" />
                                </div>
                                <div class="signup-image">

                                    <a href="" class="signup-image-link">Lupa Password / Forget Password</a>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </section>

        </div>

        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

    </html>

<?php
}
?>