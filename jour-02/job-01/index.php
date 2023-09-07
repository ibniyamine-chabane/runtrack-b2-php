<?php
function find_all_student() {
    $database = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8;port=3307', 'root', '');
    $request = $database->prepare('SELECT * FROM student');
    $request->execute(array());
    return $userDatabase = $request->fetchAll(PDO::FETCH_ASSOC);
}

// var_dump(find_all_student());
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        <?php foreach (find_all_student() as $student) : ?>
            <tr>
                <td><?php echo $student['id'];?></td>
                <td><?php echo $student['grade_id'];?></td>
                <td><?php echo $student['email'];?></td>
                <td><?php echo $student['fullname'];?></td>
                <td><?php echo $student['birthdate'];?></td>
                <td><?php echo $student['gender'];?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>       
    </table>
</body>
</html>

