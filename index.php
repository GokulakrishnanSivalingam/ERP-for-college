<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>/* css/home.css */
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&family=Roboto&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css');

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

header {
    background-color: rgb(4, 4, 161);
    color: white;
    padding: 10px 0;
    text-align: center;
}

h1 {
    margin: 0;
    font-size: 2.5em;
}

 ul {
    list-style-type: none;
    padding: 0;
    
}

nav ul li {
    display: inline;
    margin: 0 10px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 1.2em;
}

nav ul li a:hover {
    text-decoration: underline;
}

.wrapper img {
    width: 800px;
    height: 175px;
    margin-right: 15px;
    border-radius: 10px;
}

.container {
    width: 215vmin;
    position: absolute;
    transform: translate(-50%, -50%);
    overflow: hidden;
    border: none;
    left: 50%;
    margin-top: 7.5%;
}

.container .wrapper {
    width: 100%;
    display: flex;
    animation: slide 25s infinite;
    transition: 2s;
}

@keyframes slide {
    0% {
        transform: translateX(0);
    }
    10% {
        transform: translateX(-20%);
    }
    20% {
        transform: translateX(-40%);
    }
    30% {
        transform: translateX(-60%);
    }
    40% {
        transform: translateX(-80%);
    }
    50% {
        transform: translateX(-100%);
    }
    60% {
        transform: translateX(-80%);
    }
    70% {
        transform: translateX(-60%);
    }
    80% {
        transform: translateX(-40%);
    }
    90% {
        transform: translateX(-20%);
    }
    100% {
        transform: translateX(0%);
    }}
    .dep{
        display:flex;
        flex-wrap:wrap;
        margin-left:50px
        
    }
    .principle{
        display:flex;
        
    }
    .dep fieldset{
      width: min-content;
      margin:30px;
      border:1px solid white;
      box-shadow: 0 3px 5px rgba(0, 0, 0, 0.9);
      border-radius:8px;
      

    }
    h2{
        color: orangered;
    }
    .dep img{
        width: 300px;
        height: 250px;
        margin: 0px;
        border-radius:10px;
    }
    p{
        font-family: "Roboto", sans-serif;
        font-weight: 300;
    }
    .principle img{
        width: 500px;
        height:400px;
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.9);
        margin: 60px;
        border-radius:10px
    }
    .principle p{
        font-size:24px;
        margin-top:80px ;
        margin-left:40px;
        font-family: "Roboto", sans-serif;
        font-weight: 300;
        
    }.ceo{
        display: flex;
        
    }
    .ceo img{
        width: 500px;
        height:250px;
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.9);
        margin: 60px;
        border-radius:10px
    }
    .ceo p{
        font-size:24px;
        margin-top:80px ;
        margin-right:40px;
        font-family: "Roboto", sans-serif;
        font-weight: 300;
        
    }
     h2{
        margin-left:20px;
        
    }
    span{
        font-size:30px;
        font-weight:bold;
        color: orangered;
        margin-left: 25px;
        margin-bottom:-40px
    }
    .title{
        margin-top:200px;
    }
    .title p{
        margin-left:25px;
        margin-right:20px;
        font-size:20px;
        margin-bottom:20px;
    }


    footer {
  background-color: #333;
  color: #fff;





  font-family: "Roboto", serif;
}

.footer-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: auto;
  padding: 0 20px;
}

.footer-section {
  flex: 1;
  padding: 20px;
}

.footer-section h1 {
  font-size: 28px;
  margin-bottom: 10px;
  font-weight: bold;
  font-family: "Roboto", serif;
}

.footer-section p {
  font-size: 16px;
  color: #ccc;
  margin-bottom: 20px;
  font-family: "Roboto", serif;
}

.footer-section h2 {
  font-size: 20px;
  margin-bottom: 20px;
  color: #f9f9f9;
  font-family: "Roboto", serif;
}

.footer-section a {
  text-decoration: none;
  color: #ccc;
  display: block;
  margin-bottom: 10px;
  transition: color 0.3s;
  font-family: "Roboto", serif;
}

.footer-section a:hover {
  color: #fff;
}

.socials {
  display: flex;
  margin-top: 20px;
}

.socials a {
  color: #ccc;
  font-size: 20px;
  margin-right: 15px;
  transition: color 0.3s;
}

.socials a:hover {
  color: #fff;
}

.newsletter input[type="email"] {
  width: 80%;
  padding: 10px;
  margin-bottom: 10px;
  border: none;
  border-radius: 25px;
  background-color: white;
  color: #000;
}

.newsletter button {
  padding: 10px 25px;
  border: none;
  border-radius: 25px;
  background-color: #e91e63;
  color: #fff;
  cursor: pointer;
  font-family: 'Roboto', sans-serif;
  transition: background-color 0.3s;
}

.newsletter button:hover {
  background-color: #c2185b;
}

.footer-bottom {
  text-align: center;
  padding: 20px;
  background-color: #000;
  font-family: "Roboto", serif;
  
}

.footer-bottom p {
  margin: 0;
  font-size: 14px;
  color: #888;
  font-family: "Roboto", serif;
}
ul li a{
    font-family: 'Roboto', sans-serif;
}

</style>
</head>
<body>
    <header>
        <h1>Av art & science college</h1>
        <nav>
            <ul>
            <li><a href="index.php">home</a></li>
                <li><a href="student-login.php">Student Login</a></li>
                <li><a href="teacher-login.php">Teacher Login</a></li>
                <li><a href="resultss.php">Result</a></li>
                <li><a href="revaluation.php">Revaluation</a></li>
                <li><a href="payment.html">Fee Payment</a></li>
             
            </ul>
        </nav>
    </header>
    <marquee behavior="" direction=""><p>A college management system is an ERP solution that enables the institutes to conduct online admissions, generate reports, create ID cards, enable online communication, manage curriculum, time tables and conduct online evaluations, track student progress, conduct data analysis, teach remotely, and handle enquiries and leads for admissions in the college.</p></marquee>
    </div>
        <div class="container">
            <div class="wrapper">
                <img src="e1.jpeg" alt="">
                <img src="e2.jpeg" alt="">
                <img src="e7.jpeg" alt="">
                <img src="e8.jpeg" alt="">
                <img src="e6.jpeg" alt="">
                <img src="e3.jpeg" alt="">
                <img src="e4.jpeg" alt="">
                

            </div>

        </div>
        <div class="title">
            <center>
        <h1>AV College of Engineering</h1>
        <h2>An Autonomous Institution</h2>
        </center>
        <p>
        The AV Trust is a registered non-minority service organization established in the year 2030 by Thiru. S.Gokulakrishnan inculcates among the youth a sense of discipline which is important to mould them into useful and capable citizens. The watchwords of the Trust are “Dedication, Determination, and Distinction”.<br> 
        <br>
        AV College was established in the year 2029-30 to impart quality education. It is a self-financing non-minority institution, affiliated to Anna University and approved by the All India Council for Technical Education (AICTE) and also an ISO-certified institution.
        </p>
     <center>   <h2>Explore courses</h2> </center>  
</div><div class="dep">
        <fieldset>
            <img src="cse.jpeg" alt="">
            <h2>Computer Science and Engineering</h2>
            <p>Higher Studies in top universities with a record of 81 students in the last 5 years.
            Extracurricular and Technical activities like Symposium, Conference Entrepreneurship cell events for students.</p>
        </fieldset>
        <fieldset>
            <img src="eie.jpeg" alt="">
            <h2>Electrical & Electronics Engineering</h2>
            <p>Regular industrial Visit to Core Industries and field visit to TNEB and treatment plants
            Well equipped and sophisticated fully functional laboratories</p>
        </fieldset>
        <fieldset>
            <img src="eee.jpeg" alt="">
            <h2>Electrical instrumental Engineering</h2>
            <p>Well trained, highly qualified and eminent Faculty members.
            Industrial visit to both Government and private sectors like BSNL, RLT Instruments, Chennai Metro, Hyundai, Hatsun Agro Product Ltd., Kamarajar Port to name a few.</p>
        </fieldset>
        <fieldset>
            <img src="civil.jpeg" alt="">
            <h2>Civil Engineering</h2>
            <p>Construction of a Real House through EWB Students ‘ Chapter at a Village for Hands-on Training in Field
            An average of 3 to 5 students secure university ranks in every batch few.</p>
        </fieldset>
        <fieldset>
            <img src="it.jpeg" alt="">
            <h2>Information technology</h2>
            <p>Experienced and well-qualified faculty with four Ph.D qualified and four pursuing Ph.Ds
            The Curriculum include Professional Core Courses, Soft Skills, Aptitude training (SKILL RACK Platform) and Elective Courses</p>
        </fieldset>
        <fieldset>
            <img src="mech.jpeg" alt="">
            <h2>Mechanical Engineering</h2>
            <p>Student Achievements in academic and co-curricular and extracurricular activities
            Innovative Teaching Methods are followed by faculty members to explain the difficult concepts to students</p>
        </div>
        <span>CEO message</span>
        <div class="ceo">
                
                <img src="photo1.jpg" alt=""><p>
                We are Committed to provide Quality Education to Enable the Student Community to achieve academic and professional excellence. We endeavour to upgrade the real-time academic competencies of students and educators through continual training, motivation and active involvement.</p>
                </div>
       <span> Principal's Message</span>
        <div class="principle">
                <p>
                
                VEC is one of the leading technical institutions delivering quality education in Tamil Nadu. The strengths of VEC are its proven teaching and learning ecosystem, research and knowledge creation culture and industry collaborations. We help students acquire the knowledge and skills required to become competent and excel in the broader field of Engineering, Technology and Business Administration. We keep our curricula up to date with the latest technological breakthroughs and industry best practises and provide a vibrant intellectual environment for students by fostering critical, reflective, and conceptual thinking, with the purpose of enriching their education and preparing them industry ready through innovative teaching methods.</p>
                <img src="p.png" alt=""></div>
                <footer>
  <div class="footer-container">
    <div class="footer-section logo">
      <h1>AV college</h1>
      <p>Elegance meets excellence. Discover the difference with us.</p>
      <div class="socials">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
    <div class="footer-section links">
      <h2>Explore</h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="footer-section newsletter">
      <h2>Newsletter</h2>
      <p>Subscribe to our newsletter to stay updated on our latest news and offers.</p>
      <form action="#" method="post">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
      </form>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 YourBrand. All rights reserved.</p>
  </div>
</footer>
<?php
echo "avs";
?>

</body>
</html>
