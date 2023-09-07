<?php
function find_one_student(string $email) {
    $database = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8;port=3307', 'root', '');
    $request = $database->prepare('SELECT * FROM student WHERE `email` = (?)');
    $request->execute(array($email));
    return $userDatabase = $request->fetchAll(PDO::FETCH_ASSOC);
}

if (isset($_GET['submit'])) {

    if (isset($_GET['email_student']) && !empty($_GET['email_student'])) {
        find_one_student($_GET['email_student']);
        $find = find_one_student($_GET['email_student']);
    } else {
        echo "veuillez remplir le formulaire";
    }  
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour 2 job 02</title>
</head>
<body>
    <form action="" method="get">
        <label for="">recherche un étudiant</label>
        <input type="email" name="email_student">
        <input type="submit" name="submit" value="rechercher">
    </form>
    <table border>
    <thead>
        <tr>
            <th>id</th>
            <th>grade_id</th>
            <th>email</th>
            <th>fullname</th>
            <th>birthdate</th>
            <th>gender</th>
        </tr>
    </thead>
        <tbody>
            <?php if (isset($_GET['submit'])) : ?>
            <?php foreach ($find as $student ) : ?>
            <tr>
                <td><?php echo $student['id'];?></td>
                <td><?php echo $student['grade_id'];?></td>
                <td><?php echo $student['email'];?></td>
                <td><?php echo $student['fullname'];?></td>
                <td><?php echo $student['birthdate'];?></td>
                <td><?php echo $student['gender'];?></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>    
</body>
</html>