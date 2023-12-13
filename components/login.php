
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content" style="margin: 30px auto;">
                <div class="login-form" style="border-radius: 200px;">
                    <?php

                    $connect = mysqli_connect('localhost', 'root', '123');
                    mysqli_select_db($connect, 'crud');
                    session_start();

                    if (isset($submit)) {
                        $sql = mysqli_query($connect, "SELECT * FROM admin WHERE
                        username='" . $_POST['username'] . "' AND password='" . $_POST['password'] . "'");
                        $hasil = mysqli_fetch_array($sql);
                        if ($hasil['username'] != "") {
                            $_SESSION['username'] = $hasil['username'];
                            $_SESSION['password'] = $hasil['password'];
                            $_SESSION['status'] = $hasil['status'];

                    ?>
                            <script language script="JavaScript">
                                document.location='../layouts/login_page.php';
                            </script>
                        <?php
                        } else {
                        ?>
                            <script language="JavaScript">
                                alert('Gagal Login');
                                document.location='../layouts/login_page.php';
                            </script>
                    <?php
                        }
                    }
                    ?>
                    <form action="../layouts/home.php" method="POST" style="padding-top: 25px; padding-bottom: 25px;">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Masukkan Username"
                            name="username" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Masukkan Password" name="password" autocomplete="off">
                        </div>
                        <input type="submit" class="btn btn-flat m-b-30 m-t-30" style="background-color: #0066ff; color: white; font-weight: bold; margin-top: 10px;" value="LOGIN" name="submit"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>