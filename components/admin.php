<form>
    <p class="text-xl font-medium leading-7">Halaman Login</p>
    <div class="space-y-4 flex flex-col">
        <?php
            $connect = mysqli_connect('localhost','root','123');
            mysqli_select_db($connect,'crud');
            session_start();
            $username = $_POST['username'];
            $password = $_POST['password'];
            $submit = $_POST['submit'];

            if (isset($submit)) {
                $sql = mysqli_query($connect,"SELECT * FROM admin WHERE 
                username='.$username.' AND password='.$password.'");
                $hasil = mysqli_fetch_array($sql);
                if ($hasil['username']!="") {
                    $_SESSION['username'] = $hasil['username'];
                    $_SESSION['password'] = $hasil['password'];
                    $_SESSION['id'] = $hasil['id'];

                    ?>
                    <script language script="JavaScript">
                        document.location='home.php?id=<?php echo $_SESSION['id'];?>';
                    </script>
                    <?php
                } else {
                    ?>
                    <script language script="JavaScript">
                        alert('Gagal Login');
                        document.location='login.php';
                    </script>
                    <?php
                }
            }
            ?>
            <form action="index.php" method="POST" style="padding-top: 25px; padding-bottom: 25px;">
                <div class="login-logo">
                    <a href="index.php">
                        <img class="align-content" src="images/car.png" alt="">
                        <!-- <h2 style="font-weight: bold; color: black; font-family: Times;">MARNO JAYA MOTOR</h2> -->
                    </a>
                </div>
                <div class="form-group">
                    <label>USERNANE</label>
                    <input type="text" class="form-control" placeholder="Masukkan Username" name="username" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Masukkan Password" name="password" autocomplete="off">
                </div>
                <input type="submit" class="btn btn-flat m-b-30 m-t-30" style="background-color: #0066ff; color: white; font-weight: bold; margin-top: 10px;" value="LOGIN" name="submit"></input>
            </form>
        ?>
    </div>
    </div>
    <div class="pt-8 text-base font-semibold leading-7">
        <button type="submit" class="bg-sky-500 hover:bg-sky-600 px-4 py-1 text-white rounded">
            Login
        </button>
    </div>
</form>