<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
    <style>/* css/teacher-login.css */

body {
    font-family: Arial, sans-serif;
    background-color: #ffefef;
    margin: 0;
    padding: 0;
    
    height: 100vh;
}

header {
    text-align: center;
    margin-bottom: 20px;
}

form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width:fit-content;
    margin-left:500px
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

input {
    width: 94%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    width: 100%;
    padding: 10px;
    background-color:  rgb(4, 4, 161);;
    color: white;
    border: none;
    border-radius: 3px;
    font-size: 1em;
}

button:hover {
    background-color: #45a049;
}header {
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
</style>
</head>
<body>
<header>
        <h1>velammal college</h1>
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
   
    </div>
    <form method="POST" action="">
    
        <h2>Teacher Login</h2>
    
        <label for="teacherID">Teacher ID:</label>
        <input type="text" id="teacherID" name="teacherID" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>
    
</body>
</html>
