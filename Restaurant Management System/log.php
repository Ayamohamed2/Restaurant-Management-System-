<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="about.css">
    <title>Document</title>
</head>
<body>
    

      <!-- Header Start -->
      <header>
        <div id="navbar">
            <h1>WILD GINGER</h1>
            <nav role="navigation">
                <ul>
              
                <li><a href="index.html">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="log.php">Sign In</a></li>
                    <li><a href="sign up.php">Sign Up</a></li>
                </ul>
            </nav>
        </div>
                <!-- Contact Section Start -->

             
                <section id="book">
                    <div class="container">
                        <div class="book-content">
                            <div class="book-info">
                                    <h3>#Select your location </h3>
                                    <h3>#Choose your meal</h3> 
                                    <h3>#Enjoy your food</h3><br><br><br><hr>
                                    <h3>WORKING HOURS</h3>
                                    <p>8:00 am to 11:00 pm on Weekdays</p>
                                    <p>11:00 am to 1:00 Am on Weekends</p>
                                    <br>
                                        <img src="mc.png" alt="">
                                        <img src="vi.png" alt="">
                                        <img src="pp.png" alt="">
                                    
                                </div>
                        
                                




                        <form action="" id="bookingForm" method="post">
                                
                    
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                    
                              

                                

                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" required>
                    
                                <button type="submit" onclick="submitForm()" value="Login" name="login">Sign In</button><br>
                                <?php
                                session_start();
                                if(isset($_POST['login'])){
                                    include ("connect.php");
                                    $email=$_POST['email'];
                                    $password=$_POST['password'];
                                    $stm="select * from users where usersEmail='$email' and  usersPassword ='$password'";
                                    $res=mysqli_query($conn,$stm);
                                    $count=mysqli_num_rows($res);
                                    
                                    if($count==1){
                                     $_SESSION['email']=$email;
                                     $_SESSION['password']=$password;
                                        header("Location: aftersign.php");

                                    }else{

                                        echo '<br>user email and password is invalid !<br>';
                                    }

                                }
                                
                                ?>

                            </form>
              
                      
                        </div>

                        </div>
                        </div>
                    </div>      
                </section>
               
                

    </header>
    <script src="script.js"></script>

</body>
</html>