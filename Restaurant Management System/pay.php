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
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" required>
                    
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                    
                                <label for="phone">Phone:</label>
                                <input type="tel" id="phone" name="phone" required>
                               
                                <label for="numberOfTables">Number of Tables:</label>
                                <input type="number" id="numberOfTables" name="numberOfTables" min="1" required>

                                <label for="numberOfCard">Amount of money in your visa</label>
                                <input type="number" id="numberOfCard" name="numberOfCard" required>

                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" required>
                    
                                <label for="date">Date:</label>
                                <input type="date" id="date" name="date" required>
                    
                                <label for="time">Time:</label>
                                <input type="time" id="time" name="time" required>
                                <button type="submit" onclick="submitForm()" value="Login" name="login">Book Now</button><br><br>
                    
                                

                                <?php


if(isset($_POST["login"])){
   
include('db.php');
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$table=$_POST["numberOfTables"];
$money=$_POST["numberOfCard"];
$time=$_POST["time"];
$date=$_POST["date"];

$stm="INSERT INTO  bb(bbname,bbemail,bbpassword,bbphone,bbtables,bbmoney,bbdate,bbtime) values('$name','$email','$password','$phone','$table','$money','$date','$time')";
$m=mysqli_query($conn,$stm);
if($m){

echo "<h1>We sent the reset to you ,Please check your Email<h1/><br>";

}
else{
    echo "paied is failed";
}
}
    
?><br>
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