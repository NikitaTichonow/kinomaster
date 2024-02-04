<?php

// class Human {
// 	private $name;

// 	public function __construct($name, $name1, $name2, $name3) {
// 		$this->name = $name;
// 		$this->name1 = $name1;
// 		$this->name2 = $name2;
// 		$this->name3 = $name3;
// 	}

// 	public function setName($name) {
// 		$this->name = $name;
// 	}

// 	public function say() {
// 		echo "Меня зовут ".$this->name." и "."<br>";
// 		echo "Меня зовут ".$this->name1." и "."<br>";
// 		echo "Меня зовут ".$this->name2." и "."<br>";
// 		echo "Меня зовут ".$this->name3." и "."<br>";
// 	}
// }

// $human = new Human("Nikita", "Vlad", "Vitalik", "Sergey");
// // $human->setName("Nikia");
// $human->say();


class Human {
 	private $name;

 	public function __construct($name) {
 		$this->name = $name;
}

	public function say() {
 		echo "Меня зовут ".$this->name." и ";
	}
}

class Man extends Human {
	public function beard() {
		echo "У меня растет борода";
	}
}

class Women extends Human {
	public function bearChildren() {
		echo "я рожаю детей";
	}
}

$man = new Man("Nikita");
$man->say();
$man->beard();

echo "<br>";

$women = new Women("Marina");
$women->say();
$women->bearChildren();


?>


