<?php
    session_start();
    //if (isset($_SESSION['usr']) && isset($_SESSION['pwd'])){
    //    header("location:tampil_admin.php");
    //}
?>
<html>
<head>
    <title>Little Nightmare</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <nav>
        <div class="bannerabout">
            <div class="headernav">
                <img src="gambar/logo-white.png" class="logo">
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="deskripsi.html">Description</a></li>
                    <li><a href="story.html">Story</a></li>

                    <div class="dropdown">
                        <button class="dropbtn">Content</button>
	                    <div class="dropdown-content">
        	                <a href="#">Location</a>
                            <div class="dropdown">
                	            <a href="themaw.html"> -> The Maw</a>
                            </div>
                            <a href="#">Levels</a>
                            <div class="dropdown">
                                <a href="prison.html"> -> Prison</a>
                                <a href="thelair.html"> -> The Lair</a>
                                <a href="kitchen.html"> -> Kitchen</a>
                	            <a href="guestarea.html"> -> Guest Area</a>
                                <a href="ladyroom.html"> -> The Lady's Quarter</a>
                            </div>
               	            <a href="#">Items</a>
                            <div class="dropdown">
                                <a href="statue.html"> -> Statue</a>
                                <a href="lantern.html"> -> Lantern</a>
                            </div>
                        </div>
                    </div>

                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div id="bglogin">
            <img src="gambar/logo-white.png">

            <div id="judullogin">
                <h1>Login</h1>
            </div>

            <div id="formlogin">
                <form method="post" action="">
                    <label>Username</label><br>
                    <input type="text" name="uid"><br>
                    <label for="lname">password</label><br>
                    <input type="password" name="pw"><br><br>
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                        <a href="contact.html">Forgot Password? Contact our support!</a><br>
                    <button type="submit" name="vlogin"> Login</button>
                </form>
                <?php
                    require_once('koneksi.php');

                    if (isset($_POST['vlogin'])){
                        $user = $_POST['uid'];
                        $pass = $_POST['pw'];

                        $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$user' and password = '$pass'");
                        $check = mysqli_num_rows($query);

                        if ($check > 0){
                            $_SESSION['usr']=$user;
                            $_SESSION['pwd']=$pass;
                            header("location:tampil_admin.php");
                        }else{
                            echo "Wrong Username and Password!";
                        }
                    }
                ?>
            </div>

            <div id="signuplgin">
                <p>Don't have an account?   It's only for admin</p> 
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="kotak">
            <div class="row">
                <div class="footer-col">
                    <h4>About us</h4>
                    <p>Our team was founded to create a friendly
                    knowledge and sharing about HORROR GAME
                    CALLED "LITTLE NIGHTMARE". Our team, strives 
                    to provide a review of various aspects as well 
                    as general introductions about this game &
                    will explore everything to increase insight. 
                    </p>
                </div>
            <div class="footer-col">
                <h4>Content</h4>
                <ul>
                            <li><a href="themaw.html">Location</a></li>
                            <li><a href="prison.html">Levels</a></li>
                            <li><a href="statue.html">Items</a></li>
                </ul>
            </div>

            <div class="footer-col">
            </div>

            <div class="footer-col">
                <h4>Contact</h4>
                <ul>
                    <li><p>0851-5545-8847</p></li>
                    <li><p>0851-5545-8847</p></li>
                    <li><p>erlanggasetiawan231@gmail.com</p></li>
                </ul>
            </div>
    </footer>
</body>
</html>