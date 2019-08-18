<?php

include_once "classes/Student.php";
$student = new Student();

if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $grades = preg_split('/[\s,]+/', $_POST['grades']);
    $insert_data = implode(" ", $grades);
    $countGrades = count($grades);
    $array = array($grades);
    $maxGrade = max($array);

    $sum = 0;
    //regular expression for name
    $regName = "/^[A-Z][a-z]{2,30}$/";
    $errors = [];

	if(!preg_match($regName, $name)){
		$errors[] = "Check name";
	}
	if(!array_filter($grades)){
		$errors[] = "Insert grade for students";
	}
	if($countGrades > 4)
	{
		$errors[] = "A student can have 1 to 4 grades";
	}

	foreach($grades as $grade)
	{
	 if($grade < 5 || $grade > 10)
	 {
		 $errors[] = "the grade can not be less than 5 or higher than 10";
	 }
	}



    if(count($errors) > 0)
	{
		# show error
		echo "<ol>";

		foreach($errors as $error){
			echo "<li> $error </li>";
		}

		echo "</ol>";
	}
	else {
		foreach($grades as $grade)
			{
				$sum += $grade;
			}
		$average = ($sum / $countGrades);
    $board = "";
    if($average >= 7)
		{
			$board = "CSM";
		}
		elseif($average > 8)
		{
			$board = "CSMD";
		}else{
      $board = "";
    }
    $student = new Student();
    $student->createStudent($name,$insert_data,$average,$board);


	}
}



 ?>
