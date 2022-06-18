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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <title>Редактирование профиля</title>
</head>
<body>
    <div class="container mt-2">
        <div class="main-body d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <form action="editing.php" method="post">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Почта:</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                       placeholder="<?php echo $email ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Знаю:</label>
                                <select multiple name="know" class="form-control" id="exampleFormControlSelect1">
                                    <option selected value="<?php echo $know ?>"><?php echo $know ?></option>
                                    <option value="Python">Python</option>
                                    <option value="Ruby">Ruby</option>
                                    <option value="C++">C++</option>
                                    <option value="C#">C#</option>
                                    <option value="Kotlin">Kotlin</option>
                                    <option value="Perl">Perl</option>
                                    <option value="HTML">HTML</option>
                                    <option value="CSS">CSS</option>
                                    <option value="SCSS">SCSS</option>
                                    <option value="JavaScript">JavaScript</option>
                                    <option value="Java">Java</option>
                                    <option value="SQL">SQL</option>
                                    <option value="C">C</option>
                                    <option value="R">R</option>
                                    <option value="Go">Go(goland)</option>
                                    <option value="PHP">PHP</option>
                                    <option value="Basic">Basic</option>
                                    <option value="Pascal">Pascal</option>
                                    <option value="Swift">Swift</option>
                                    <option value="Delphi">Delphi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Хочу узнать</label>
                                <select multiple name="want_know" class="form-control" id="exampleFormControlSelect2">
                                    <option selected value="<?php echo $know ?>"><?php echo $know ?></option>
                                    <option value="Python">Python</option>
                                    <option value="Ruby">Ruby</option>
                                    <option value="C++">C++</option>
                                    <option value="C#">C#</option>
                                    <option value="Kotlin">Kotlin</option>
                                    <option value="Perl">Perl</option>
                                    <option value="HTML">HTML</option>
                                    <option value="CSS">CSS</option>
                                    <option value="SCSS">SCSS</option>
                                    <option value="JavaScript">JavaScript</option>
                                    <option value="Java">Java</option>
                                    <option value="SQL">SQL</option>
                                    <option value="C">C</option>
                                    <option value="R">R</option>
                                    <option value="Go">Go(goland)</option>
                                    <option value="PHP">PHP</option>
                                    <option value="Basic">Basic</option>
                                    <option value="Pascal">Pascal</option>
                                    <option value="Swift">Swift</option>
                                    <option value="Delphi">Delphi</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input name="status_mentor" class="form-check-input" type="checkbox" value="yes" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Хочу быть ментором
                                </label>
                            </div>
                            <hr>
                            <div class="form-check">
                                <input name="status_search_mentor" class="form-check-input" type="checkbox" value="yes" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Ищу ментора
                                </label>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">О себе:</label>
                                <textarea name="about_yourself" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                          placeholder="<?php echo $about_yourself ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Выбор времени обеда по умолчанию</label>
                                <input name="time_min" type="time" min="9:00" max="18:00" value="9:00"> - <input name="time_max" type="time" min="9:00" max="18:00" value="18:00">

                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
