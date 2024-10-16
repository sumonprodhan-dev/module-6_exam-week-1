<?php

function calculateResult($marks) {
    $totalMarks = 0;
    $numSubjects = count($marks);

    foreach ($marks as $subject => $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Your marks is invalid in $subject. Thank you! <br>";
            return; 
        }
        if ($mark < 33) {
            echo "Your marks is fail in $subject. You got less than 33 in $subject. Thank you! <br>";
            return; 
        }
        $totalMarks = $totalMarks + $mark;
    }
    
    $averageMarks = $totalMarks / $numSubjects;
    
    $grade = "";
    switch (true) {
        case ($averageMarks >= 80):
            $grade = "A+";
            break;
        case ($averageMarks >= 70):
            $grade = "A";
            break;
        case ($averageMarks >= 60):
            $grade = "A-";
            break;
        case ($averageMarks >= 50):
            $grade = "B";
            break;
        case ($averageMarks >= 40):
            $grade = "C";
            break;
        case ($averageMarks >= 33):
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }

    echo "Total Marks: $totalMarks <br>";
    echo "Average Marks: " . number_format($averageMarks, 1) . "<br>";
    echo "Grade: $grade <br>";
}

$marks = [
    'Math' => 60,
    'English' => 55,
    'Science' => 75,
    'History' => 78,
    'Geography' => 40
];

calculateResult($marks);
