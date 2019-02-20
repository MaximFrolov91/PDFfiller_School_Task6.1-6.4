<?php
class Student {
	public function __construct($firstName = "n/a", $lastName = "n/a", $gender = "n/a", $status = "freshman", $gpa = 0) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->status = $status;
		$this->gpa = $gpa;
	}
	public function showMyself() {
		echo $this->firstName . " " . $this->lastName . " " . $this->gender . " " . $this->status . " " . $this->gpa . PHP_EOL;
	}
	public function studyTime($studyTime = 0.0) {
		$this->gpa += log($studyTime);
		if ($this->gpa > 4) {
			$this->gpa = 4;
		}
		return $this->gpa;
	}
	public function __destruct() {
	}
}
$Mike = new Student("Mike", "Barnes", "male", "freshman", 4.0);
$Jim = new Student("Jim", "Nickerson", "male", "sophomore", 3.0);
$Jack = new Student("Jack", "Indabox", "male", "junior", 2.5);
$Jane = new Student("Jane", "Miller", "female", "senior", 3.6);
$Mary = new Student("Mary", "Scott", "female", "senior", 2.7);

$studentList = [$Mike, $Jim, $Jack, $Jane, $Mary];
foreach($studentList as $v) {
	$v->showMyself();
}
$studyTime = [60, 100, 40, 300, 1000];
for($i = 0; $i < 5; $i++) {
	$studentList[$i]->studyTime($studyTime[$i]);
	$studentList[$i]->showMyself();
}
