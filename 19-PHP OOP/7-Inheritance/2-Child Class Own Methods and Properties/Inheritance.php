<?php

declare(strict_types=1);
require_once "University.php";
require_once "Teacher.php";

$university = new University("Boston University", "Europe", "ABC123");
$teacher1 = new Teacher("John", 45, "Maths", $university);
$teacher2 = new Teacher("Jane", 60, "Physics", $university);

$teacher1->printTeacherDetails();
$teacher1->printUniversityDetails();
echo "------------------------------------" . PHP_EOL;
$teacher2->printTeacherDetails();
$teacher2->printUniversityDetails();

