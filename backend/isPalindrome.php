<!-- php page to handle GET request to this URL -->
<?php
function isPalindrome($str)
{
    $l = 0;
    $r = strlen($str) - 1;
    while ($l < $r) {
        if ($str[$l] != $str[$r]) {
            return False;
        }
        $l = $l + 1;
        $r = $r - 1;
    }
    return True;
}


$text = $_GET['text'];
if (isPalindrome(($text))) {
    echo json_encode("${text} is Palindrome :)");
} else {
    echo json_encode("${text} is not Palindrome :(");
}
?>