<?php
/*
Name: Mustafa Abdu
Student ID: 2236470
Lab 10 - Task 2: Diagram translation demo
*/

/*
This demo shows:
Client (Browser) -> HTML Form -> PHP (Server-side handler) -> Output back to client
*/
class Person {
    // attribute: -name: String  (private)
    private string $name;

    // constructor (not shown in diagram but needed to set name)
    public function __construct(string $name) {
        $this->name = $name;
    }

    // operation: +speak()
    public function speak(): void {
        echo $this->name . " is speaking.<br>";
    }

    // operation: +getName(): String
    public function getName(): string {
        return $this->name;
    }
}

class Professor extends Person {
    // attribute: -salary: Float (private)
    private float $salary;

    // constructor to set both inherited name and salary
    public function __construct(string $name, float $salary) {
        parent::__construct($name);
        $this->salary = $salary;
    }

    // operation: +Teach()
    public function teach(): void {
        echo $this->getName() . " is teaching.<br>";
    }

    // extra helper (optional) to show salary
    public function getSalary(): float {
        return $this->salary;
    }
}

/* DEMO CODE */

// Create a Person
$p = new Person("Mustafa");
echo "Person name: " . $p->getName() . "<br>";
$p->speak();

echo "<hr>";

// Create a Professor (inherits from Person)
$prof = new Professor("Dr. Baderaldeen", 20000.00);
echo "Professor name: " . $prof->getName() . "<br>";
echo "Professor salary: " . $prof->getSalary() . "<br>";
$prof->speak();   // inherited method
$prof->teach();   // professor method
?>