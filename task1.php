<?php

//Create constants for app name and author.

define("APP_NAME", "Expense Calculator");
define("AUTHOR", "MD Alamin");

//Print them using echo, print, and printf.

echo "App name:". APP_NAME ."<br>";
echo "Author:" . AUTHOR ."<br>";


print ("App name:" . APP_NAME ."<br>");
print("Author:" . AUTHOR . "<br>");


printf ("App name: %s<br>" , APP_NAME);
printf("Author: %s<br> <br>" , AUTHOR);


//Create variables for food, transport, and other expenses.

$food = 200;
$transport = 233;
$others = 321;

echo("Food Expense:$food" . "<br>");
echo ("Transport Expense:$transport" . "<br>");
echo ("Others Expense: $others" . "<br> <br>");


//Calculate total 

$totalExpense = $food + $transport + $others;
echo ("Total Expense:" . $totalExpense . "<br>");

//average expense.

$avarage = $totalExpense / 3;
echo ("Avarage Expense:" . $avarage . "<br> <br>");
 
//If total > 1000, show “Budget Exceeded”, else “Within Budget”.

if ($totalExpense > 1000) {
    echo "Budget Exceeded";


} else {
    echo "Within Budget.<br> <br>";
}

//Use ternary and switch case for expense range message.


$message = ($totalExpense>1000) ? "Budget Exceeded" : "within Budget";
echo "Ternary Massage: " .$message . "<br> <br>";



//Use ternary and switch case for expense range message.


switch(true){
    case ($totalExpense>1000):
        $rangeMessage = "Budget Exceeded";
        break;
   default:
        $rangeMessage = "within Budget";

}
echo "Switch Message:" . $rangeMessage . "<br> <br>";


//  Write a function to calculate total expense.




function totalExpense ($food, $transport,$others){

    $total = $food + $transport +$others;
    
    echo $total . "<br> <br>";


}

 totalExpense(200,233,321);


 function CheckBudget ($food,$transport,$others){

      $total= $food + $transport +$others;

      if($total > 1000){

        echo "Budget Exceeded";
      } else {
        echo "within Budget";
      }

 }

CheckBudget(200,233,321);





    
