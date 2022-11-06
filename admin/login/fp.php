<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main" style="margin-top:-100px;">

        <!-- Sign up form -->
        <section class="signup" style="margin-bottom:-100px;">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Forget Password</h2>
                        <table bgcolor="red" width="100%" style="margin-top:-20px; margin-bottom:20px;">
                                        <tr>
                                            <td>
                                                
                                    <font style="color:#FFF; font-weight:normal;">
                                        <?php
                                            if(@$_GET['page']=='username')
                                            {
                                                echo "Maaf username anda tidak terdaftar";
                                            }
                                            else if(@$_GET['page']=='password')
                                            {
                                                echo "Maaf Retype Password tidak sama dengan Password Baru";
                                            }

                                            if (isset($_GET['username']))
                                            {
                                                $username=$_GET['username'];
                                            }
                                            else
                                            {
                                                $username="";
                                            }
                                        ?>
                                    </font>
                                        
                                        </td>
                                        </tr>

                                        </table>
                        <form method="POST" action="../../controllers/proses_fp.php" class="register-form" id="register-form">
                            <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" value="<?php echo $username;?>" required id="name" placeholder="Masukkan Username"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="passwordnew" required id="pass" placeholder="Password Baru"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="passwordret" required id="pass" placeholder="Ulangi Password Baru"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" id="signup" class="form-submit" value="Simpan"/>
                            </div>
                        </form>
                        <br />
                        <a href="index.php" class="signup-image-link">Login / Sign In</a>
                    </div>
                    <div class="signup-image">
                        
                        <figure><img src="images/lupapassword.png" alt="forgetPassword"></figure>
                        
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