<?php
// Insert problems into problem.txt file
function insertProblem($user)
{
    $file = fopen('../controller/problem.txt', 'a');
    $data = $user['problem'] . "|" . $user['description'] . "|" . $user['email'] . "|" . "\n";
    // remove last new line
    $data = rtrim($data, "\n");

    fwrite($file, $data);
    fclose($file);
    return true;
}
