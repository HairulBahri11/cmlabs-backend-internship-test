<!-- Hairul Bahri -->
<!-- FizzBuzz Test -->
<?php
foreach (range(1, 100) as $number) {
    if ($number % 3 == 0 && $number % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($number % 3 == 0) {
        echo "Fizz";
    } elseif ($number % 5 == 0) {
        echo "Buzz";
    } else {
        echo $number . ' ';
    }
    echo " ";
}
?>