<?php
// Sample data (Replace with your database later)
$students = [
    [
        'name' => 'sanjeev',
        'password' => '2004',
        'subjects' => [
            ['name' => 'Mathematics', 'grade' => 'A+'],
            ['name' => 'Physics', 'grade' => 'A'],
            ['name' => 'Chemistry', 'grade' => 'B+'],
            ['name' => 'Computer Science', 'grade' => 'A+'],
            ['name' => 'English', 'grade' => 'B']
        ]
        ], [
            'name' => 'gokulraj',
            'password' => '2005',
            'subjects' => [
                ['name' => 'Mathematics', 'grade' => 'A'],
                ['name' => 'Physics', 'grade' => 'A'],
                ['name' => 'Chemistry', 'grade' => 'B'],
                ['name' => 'Computer Science', 'grade' => 'A'],
                ['name' => 'English', 'grade' => 'A']
            ]
        ]
];

// Grading system
$gradeToGPA = [
    'A+' => 10,
    'A' => 9,
    'B+' => 8,
    'B' => 7,
    'C+' => 6,
    'C' => 5,
    'D' => 4,
    'F' => 0
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $found = false;

    // Search for the student
    foreach ($students as $student) {
        if ($student['name'] === $name && $student['password'] === $password) {
            $found = true;
            $subjects = $student['subjects'];

            // Calculate GPA for each subject and CGPA
            $totalGPA = 0;
            $numSubjects = count($subjects);

            echo "<h2>Result for $name</h2>";
            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            echo "<tr><th>Subject</th><th>Grade</th><th>GPA</th></tr>";

            foreach ($subjects as $subject) {
                $grade = $subject['grade'];
                $gpa = $gradeToGPA[$grade];
                $totalGPA += $gpa;

                echo "<tr><td>{$subject['name']}</td><td>$grade</td><td>$gpa</td></tr>";
            }

            $cgpa = $totalGPA / $numSubjects;

            echo "</table>";
            echo "<h3>CGPA: " . round($cgpa, 2) . "</h3>";
            echo "<a href='revaluation.php?name=$name'>Apply for Revaluation</a>";
            break;
        }
    }

    if (!$found) {
        echo "<p>Invalid Name or Password.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Result</title>
    <link rel="stylesheet" href="resultt.css"> <!-- Link to your external stylesheet -->
</head>
<body>
    
    <div class="container">
        <h2>Enter Your Details to View Results</h2>
        <form method="POST" action="resultss.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Check Result</button>
        </form>
    </div>
</body>
</html>
