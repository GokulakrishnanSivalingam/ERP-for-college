<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Result</title>
    <style>body {
    font-family: Arial, sans-serif;
    background:url(result2.jpe) no-repeat;
    background-size:cover;
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
}

div {
    margin-top: 20px;
    text-align: center;
}

h3 {
    color: #333;
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
                <li><a href="resultt.php">Result</a></li>
                <li><a href="revaluation.php">Revaluation</a></li>
                <li><a href="payment.html">Fee Payment</a></li>
             
            </ul>
        </nav>
    </header>
  
    </div>
    <form method="POST" action="">
  
        <h2> Result</h2>
   
        <label for="studentID">Reg NO:</label>
        <input type="text" id="studentID" name="studentID" required>
        
        <label for="studentID">Password:</label>
        <input type="text" id="Password:" name="Password:" required>
        
        <button type="submit">Check Result</button>
    </form>
    
    <!-- Hardcoded Result -->
   
</body>
</html>
