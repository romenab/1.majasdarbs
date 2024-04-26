<?php
//Foo Corporation needs a program to calculate how much to pay their hourly employees.
//The US Department of Labor requires that employees get paid time and a half for any
//hours over 40 that they work in a single week. For example, if an employee works 45 hours,
//they get 5 hours of overtime, at 1.5 times their base pay.
$hoursWorked = 60;
$basePay = 8;
$overtimeRate = 1.5;
if ($hoursWorked > 60 && $basePay < 8) {
    echo "Employee can not work more than 60 hours in a week and be paid less than $8.00 an hour.";
} elseif ($hoursWorked > 60) {
    echo "Employee can not work more than 60 hours in a week.";
} elseif ($basePay < 8) {
    echo 'Employees have to be paid at least $8.00 an hour.';
} elseif ($hoursWorked <= 40) {
    echo "$" . $total = $hoursWorked * $basePay;
} elseif ($hoursWorked > 40) {
    $overtime = $hoursWorked - 40;
    echo "$" . $total = (40 * $basePay) + ($overtime * $basePay * $overtimeRate);
}
