<!-- a POST API that takes 3 inputs (a, b and c) and the API should return the result of this expression: a^3 + b*c - a/b.
 -->
<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    echo json_encode($a ** 3 + $b * $c - $a / $b);
?>