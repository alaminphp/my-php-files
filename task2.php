<?php

//Create an array with categories and expenses.

$expenses = array(

    "food" => 250,
    "transport" => 180,
    "others" => 150,

     );

print_r ($expenses);


//Use array functions like array_push, array_pop, array_merge, and array_sum.


//array_push
array_push ($expenses,100);
echo "<pre>";
print_r($expenses);
echo "</pre>";

//array_pop
array_pop ($expenses); 
echo "<pre>";
print_r($expenses);
echo "</pre>";

//array_merge
$extraExpenses = array(
    "entertainment" => 120,
    "medical" => 200
);  
$allExpenses = array_merge($expenses, $extraExpenses);

echo "<pre>";
print_r($allExpenses);
echo "</pre>";


//array_sum

$totalExpense = array_sum($allExpenses);
    echo "Total Expense: " . $totalExpense . "<br> <br>"; 

   
   
 //Convert a string of expenses to array (explode) and back to string (implode).


//Convert a string of expenses to array (explode) and 

$expensesString = "250,180,150,120,200";

$explode = explode (",",$expensesString);
print_r($explode);
echo "<br> <br>" ;


//back to string (implode)

$implode = implode (",",$explode);
echo "implode:". $implode . "<br> <br>";

//strtoupper,

echo "Upper Case: " . strtoupper($expensesString) . "<br> <br>";

//strlen

echo "String Length:" . strlen ($expensesString) . "<br> <br>";

//substr

echo "Substring (first 10 chars): " . substr($expensesString, 0, 10) . "<br> <br>";


// str_replace
echo "After Replace 180 with 999: " . str_replace("180", "999",$expensesString ) . "<br>";


// Create a file named expenses.txt and write your expense data into it

$file = fopen ("expenses.tx","w");
fwrite ($file, $expensesString );
fclose($file);














