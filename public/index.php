<?php

require_once(dirname(__DIR__) . "/vendor/autoload.php");

use Core\Router;

$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI']);

// use App\Models\StudentInfo;
// use App\Models\TeacherInfo;

function concatUserInfos(string $fname, string $lname): string
{
    return "{$fname} {$lname}";
}

// $firstname = 'Fabian';
// $lastname = 'Marti';

// $student = new StudentInfo($firstname, $lastname, 23)

?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>Bonjour <?= concatUserInfos($firstname, $lastname) ?></div>
    <div>Login : <?= $student->getLogin() ?></div>
</body>

</html> -->