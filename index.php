<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>E-Safra - Home</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <section class="Hero">
        <nav>
            <div>
                <span class="logo">
                    <img src="./assets/icon.png"/>
                    <span>
                        <span>E-</span>
                        <span>SAFRA</span>
                    </span>
                </span>
                <div>
                    <a href="#">Home</a>
                    <a href="#aboutus">About</a>
                    <a href="#">Courses</a>
                    <a href="#">Contact</a>
                    <a href="login.php" class="loginBtnInsideNav">Login</a>
                </div>
            </div>
        </nav>
        
        <section class="intro">
            <h2>Transform Your Future with E-Safra</h2>
            <p>E-Safra is an exclusive online learning platform for ESSTHS students. Our mission is to provide you with high-quality courses </p>
            <div>
                <a href="#about-us">Read More</a>
                <a href="signup.php">Join Now</a>
            </div>
        </section>
    </section>

    <section class="features" id="aboutus">
        <h2>Our Features </h2>
        <div class="featuresHolder">
            <div class="feature">
                <i class="fa-brands fa-readme"></i>
                <h3>Diverse Courses</h3>
                <p>Explore a wide range of courses to gain new skills and enhance your knowledge in specific areas.</p>
            </div>
            <div class="feature">
                <i class="fa-solid fa-unlock"></i>
                <h3>Lifetime Access</h3>
                <p>Once enrolled, you will have lifetime access to all courses and learning materials. Learn at your own pace.</p>
            </div>
            <div class="feature">
                <i class="fa-solid fa-certificate"></i>
                <h3>Certifications</h3>
                <p>Receive certificates for every course you complete, adding value to your resume and professional skills.</p>
            </div>
        </div>

        <div class="aboutus">
            <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad">
            <div>
                <h1>E-Safra: Connecting Students and Teachers Online</h1>
                <p>E-Safra is a dynamic e-learning platform designed to seamlessly connect students with qualified teachers in a modern, interactive virtual environment. Whether you're looking for help with school subjects, skill development, or exam preparation, E-Safra offers personalized learning experiences tailored to each student's needs. With real-time communication, flexible scheduling, and a user-friendly interface, E-Safra empowers learners to achieve their academic goals while giving teachers the tools to reach and inspire more students than ever before.</p>
                <a href="">Read More</a>
            </div>
        </div>
    </section>

    <section class="courses">
        <div>
            <input placeholder="Search Courses....">
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-filter"></i>
        </div>
    </section>

    <section class="how-it-works">
        <h2><i class="fa-solid fa-circle-info"></i> How It Works</h2>
        <p>Getting started with E-Safra is easy and quick! Sign up as a student, access free and paid courses, and start learning immediately.</p>
        <ul>
            <li><span>1</span>Sign up on our platform.</li>
            <li><span>2</span>Choose the courses that interest you.</li>
            <li><span>3</span>Follow the lessons and progress at your own pace.</li>
        </ul>
    </section>

    <footer>
        <p>© 2025 E-Safra. All rights reserved.</p>
        <div>
            <a href="#">About Us</a> | 
            <a href="#">Contact</a> | 
            <a href="#">Privacy Policy</a>
        </div>
    </footer>
</body>
</html>
