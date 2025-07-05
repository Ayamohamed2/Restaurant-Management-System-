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
                <section id="book" class="signup-form">
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

                            <form id="bookingForm" action="sign up.php" method="POST">
                                <label for="name">Full Name:</label>
                                <input type="text" id="name" name="name" required>
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                                
                     <label for="password">Password</label>
                                <input type="password" id="password" name="password" required>

                                <label for="phone">Phone:</label>
                                <input type="tel" id="phone" name="phone" required>
                               
                            
                                <button type="submit" onclick="submitForm()" value=submit name="submit">Sign Up</button
                                <?php


         if(isset($_POST["submit"])){
include('connect.php');
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$check="select * from users where usersName='$name'and usersEmail='$email'and usersPassword='$password'and usersPhone='$phone'";
$ch=mysqli_query($conn,$check);
$count=mysqli_num_rows($ch);
if($count==0){
    $stm="INSERT INTO users(usersName,usersEmail,usersPassword,usersPhone) values('$name','$email','$password','$phone')";
    $m=mysqli_query($conn,$stm);
    if($m){
        header("Location: log.php");
    }
    else{
      header("Location: sign up.php");
    }
}
else{
    header("Location: log.php");
}
}
else{
    echo"no";
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