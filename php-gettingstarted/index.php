<?php
//all your code
// $myName = "Nathaniel Kung'u"; 
// echo $myName;

//arrays
$students = array("Purity","Annet","Roy","Jamal","Diana");
echo $students[2];

//Associative array
$myMarks = array("Assessments" => 25,
                 "CAT" => 15,
                 "Projects" => 35,
                 "Attendance" => 8
                );
echo "My Project Marks: " .$myMarks["Projects"];

//Multi-dimentional arrays
$webDevTechnologies = array(
    'frontend' => array('HTML','CSS','JS','Bootstrap'),
    'backend' =>  array('PHP','Python','Java','JS'),
    'frameworks' =>  array('Laravel','Django','Springboot','Flutter'),
    'databases' =>  array('MySQL','PostgreSQL','MongoDB','Firebase')
);
echo $webDevTechnologies['frontend'][3];
echo $webDevTechnologies['frameworks'][2];
echo $webDevTechnologies['databases'][0];
?>