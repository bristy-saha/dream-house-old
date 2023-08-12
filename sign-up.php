<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- LInk To CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Box Icons -->
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="nav container">
            <!-- Logo -->
            <a href="index.php" class="logo"><i class='bx bx-home'></i>Dream House</a>
           
            <!-- Log In Button -->
            <a href="login.php" class="btn">Log In</a>
        </div>

    </header>
    <!-- Sign Up -->
    <div class="login container">
        <div class="login-container" style="padding-top: 100px;">
            <h2>Welcome , Let's get started</h2>
            <p>Already have account <a href="login.php">Log In</a></p>
            <!-- Login Form -->
            <form action="">
                <span>Full Name</span>
                <input type="text" name="" id="" placeholder="Your Name" required>
                <span>Date of Birth</span>
                <input type="date" name="" id="" placeholder="Birth date" required>
                <span>Enter your email address</span>
                <input type="email" name="" id="" placeholder="yourmail@gmail.com" required>
                <span>Phone</span>
                <input type="tel" name="" id="" placeholder="Enter your number" required>
                <span>NId copy</span>
                <input type="file" accept=".jgp,.jpeg,.png,.pdf" name="" id="" placeholder="Enter Your NID copy" required>
                <span>Enter your password</span>
                <input type="password" name="" id="" placeholder="At least 8" required>
                <input type="submit" value="Sign Up" class="buttom">
                <a href="login.php">Already have account</a>
            </form>
            <a href="login.php" class="btn">Log In</a>
        </div>
        <!-- Log In Image -->
        <div class="login-image">
            <img src="img/sign-up.png" alt="">
        </div>
    </div>
    
    <!-- Footer -->
    <section class="footer">
        <div class="footer-container container">
            <h2>Dream House</h2>
            <div class="footer-box">
                <h3>Quick Links</h3>
                <a href="#">Agency</a>
                <a href="#">Building</a>
                <a href="#">Rates</a>
            </div>
            <div class="footer-box">
                <h3>Locations</h3>
                <a href="#">Dhaka</a>
                <a href="#">Bangladesh</a>
            </div>
            <div class="footer-box">
                <h3>Contact</h3>
                <a href="#">+8017653986586</a>
                <a href="#">yourmail@gmail.com</a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; CarpoolVenom All Right Reserved</p>
    </div>

    
</body>
</html>