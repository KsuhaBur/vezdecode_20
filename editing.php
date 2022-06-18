<?php

$db = new PDO('sqlite:db/Users.db');
$query = $db->query("SELECT * FROM users");
$rows = $query->fetchAll(PDO::FETCH_ASSOC);
$row = $rows[0];
$user_id = $row["user_id"];
$user_name = $row["name"];
$user_login = $row["login"];
$email = $row["email"];
$know = $row["know"];
$want_know = $row["want_know"];
$status = $row["status"];
$lunch_time = $row["lunch"];
$about_yourself = $row["about_yourself"];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['email']) {
        $email = $_POST['email'];
        $db->query("UPDATE users SET email='".$email."' WHERE user_id=1");
    }

    $know = $_POST['know'];
    $db->query("UPDATE users SET know='".$know."' WHERE user_id=1");

    $want_know = $_POST['want_know'];
    $db->query("UPDATE users SET want_know='".$want_know."' WHERE user_id=1");

    if (isset($_POST['status_mentor'])) {
        $status_mentor = true;
    } else {
        $status_mentor = false;
    }

    if (isset($_POST['status_search_mentor'])) {
        $status_search_mentor = true;
    } else {
        $status_search_mentor = false;
    }

    if ($status_mentor && $status_search_mentor) {
       $status = "Хочу быть ментором, ищу ментора";
    } elseif ($status_mentor) {
        $status = "Хочу быть ментором";
    } elseif ($status_search_mentor) {
        $status = "Ищу ментора";
    } else {
        $status = '';
    }
    $db->query("UPDATE users SET status='".$status."' WHERE user_id=1");

    if (isset($_POST['about_yourself'])) {
        $about_yourself = $_POST['about_yourself'];
        $db->query("UPDATE users SET about_yourself='".$about_yourself."' WHERE user_id=1");
    }

    $time_min = $_POST['time_min'];
    $time_max = $_POST['time_max'];
    if ($time_min && $time_max) {
        $time = $time_min." - ".$time_max;
    } else {
        $time = $lunch_time;
    }
    $db->query("UPDATE users SET lunch='".$time."' WHERE user_id=1");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Редактирование</title>
</head>
<body>
<div class="container mt-7">
    <div class="main-body d-flex justify-content-center">
        <a href="index.php" class="btn btn-primary">Вернуться на главную</a>
    </div>
</div>
</body>
</html>
