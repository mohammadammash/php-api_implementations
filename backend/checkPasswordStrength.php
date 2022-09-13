<!-- a POST API that takes a password a returns if the password is strong or not. -->

<?php
function validatePassword($password)
{
    // Validate password length first
    // if password-length == 12 or 13 => Strong / if password-length >=14 Perfect!
    $passLength = strlen(($password));
    if ($passLength == 12 || $passLength == 13) $passStrength = 'strong';
    else if ($passLength >= 14) $passStrength = 'Perfect';
    else return  "Weak Password!!";

    // Validate password characters
    $hasUpper = preg_match('@[A-Z]@', $password);
    $hasLower = preg_match('@[a-z]@', $password);
    $hasNumber    = preg_match('@[0-9]@', $password);
    $hasSymbols = preg_match('@[^\w]@', $password);
    if ($hasLower and $hasUpper and $hasNumber and $hasSymbols) return "{$passStrength} Password!!";
    return  "Weak Password!!";
}

$password = $_POST["password"];
echo json_encode(validatePassword($password));
?>