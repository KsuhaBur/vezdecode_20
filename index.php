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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Личная анкета пользователя</title>
</head>
<body>
<div class="container mt-5">
    <div class="main-body">

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4> <?php echo $user_name ?> </h4>
                                <p class="text-secondary mb-1"> <?php echo $about_yourself ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Логин</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $user_login ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $email ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Знаю</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $know ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Хочу узнать</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $want_know ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Статус</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $status ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Обед</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $lunch_time ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a type="button" class="btn btn-primary" href="edit.php">Редактировать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>