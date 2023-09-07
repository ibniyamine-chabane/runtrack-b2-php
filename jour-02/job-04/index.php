<?php 

function find_all_students_grades() {
    $database = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8;port=3307', 'root', '');
    $request = $database->prepare('SELECT email, fullname, grade.name as grade_name FROM student
                                  INNER JOIN grade 
                                  ON student.grade_id = grade.id');
    $request->execute(array());
    return $data = $request->fetchAll(PDO::FETCH_ASSOC);   
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 2 job 4</title>
</head>
<body>
    <table border>
        <thead>
            <tr>
                <th>email</th>
                <th>fullname</th>
                <th>grade_name</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach (find_all_students_grades() as $student) : ?>
            <tr>
                <td><?php echo $student['email'];?></td>
                <td><?php echo $student['fullname'];?></td>
                <td><?php echo $student['grade_name'];?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>       
    </table>
</body>
</html>

