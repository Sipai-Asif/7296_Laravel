<html?>
<body>

<h1> This is Fruit class</h1>

<?php
class Fruit {
    // Member variables
    public $fruit1 = "Apple";
    public $fruit2 = "Banana";
    public $fruit3 = "Mango";

    // Method to display fruit names
    public function printFruits() {
        echo "Fruit 1: " . $this->fruit1 . "<br>";
        echo "Fruit 2: " . $this->fruit2 . "<br>";
        echo "Fruit 3: " . $this->fruit3 . "<br>";
    }
}

// Instantiate object and call method
$fruits = new Fruit();
$fruits->printFruits();

?>

</body>
</html>
