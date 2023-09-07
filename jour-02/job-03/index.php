<?php 

function insert_student(string $email, string $fullname, string $gender, $birthdate, int $gradeId) {
    $database = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8;port=3307', 'root', '');
    $request = $database->prepare("INSERT INTO student(email, fullname, gender, birthdate, grade_id) VALUES (?, ?, ?, ?, ?)");
    $request->execute(array($email, $fullname, $gender, $birthdate, $gradeId));
}

if (isset($_POST['submit'])) {
    
    if ($_POST['input-email'] && $_POST['input-fullname'] && $_POST['input-gender'] && $_POST['input-birthdate'] && $_POST['input-grade_id']) {
        insert_student($_POST['input-email'], $_POST['input-fullname'], $_POST['input-gender'], $_POST['input-birthdate'], $_POST['input-grade_id']);
    } else {
        echo "veuillez remplir tous les champs";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 2 job 3</title>
</head>
<body>
<form action="" method="post">
    <label for="">email</label>
    <input type="email" name="input-email">
    <label for="">fullname</label>
    <input type="text" name="input-fullname">
    <label for="">gender</label>
    <select name="input-gender" id="">
        <option value="male">male</option>
        <option value="female">female</option>
    </select>
    <label for="">birthdate</label>
    <input type="date" name="input-birthdate">
    <label for="">grade</label>
    <input type="number" name="input-grade_id">
    <input type="submit" name="submit" value="insérer">
</form>
</body>
</html>
