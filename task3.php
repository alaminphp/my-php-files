<?php

//1.Start a session and take user name and budget from a simple form

session_start ();
if (isset($_POST['submit'])){

$_SESSION['name'] = $_POST['name'];
$_SESSION['budget'] = $_POST['budget'];

//2.Store the data in session and show “Welcome, (name)! Your budget is (amount).”

echo "Welcome, " . $_SESSION['name'] . "! Your budget is " . $_SESSION['budget'] . ".";

}

//3. Add a button to delete the session.

if(isset($_POST['delete'])){
    session_destroy();

}
//4. Create a recursive function to calculate sum from an array.

function budget ($number){
    if($number <= 5){
echo "$number <br>";
        budget ($number + 1);

    }
}
budget(1);

//5. Create a function that applies a discount using a callback.

function applyDiscount($price, $callback){
    $discounted = $callback($price);
    echo "Final Price: " . $discounted."<br>";
}
applyDiscount(1000, function($price){
    $discount = $price * 0.10; 
    return $price - $discount;
});


//6. Write a function that divides two numbers and handle errors with try-catch-finally.

    function divide($a, $b) {
    try {

        $result = $a / $b;
        if ($a % $b == 0) {
            echo "$a / $b = $result (Perfect division)<br>";
        } else {

             throw new Exception("$a / $b = $result (Fractional division)");
        }

    } catch (Exception $e) {
        echo "<pre>";
        print_r ($e);
    }
}
divide(10, 2); 
divide(10, 3);

?>

<form action="" method="post">

<input type="text" name="name" placeholder= "name" required>
<input type="number" name="budget" placeholder= "budget" required>
<input type="submit" name="submit" value= "Submit">
<button type="submit" name="delete">Delete Session</button>

</form> 



