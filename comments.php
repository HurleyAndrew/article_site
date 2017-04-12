<?php
function dd($item){
    return die(var_dump($item));
}
function errorMessage()
{
    echo "issue occurred";
}
$DB = new PDO("mysql:host=cias.rit.edu;dbname=amh5267", 'amh5267', 'IPVtwxhBaI');
$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['description']) && !empty($_POST['description'])) {
    $description = $_POST['description'];
    $completed = 0;

    $query = $DB->prepare("INSERT INTO todo (description, completed) VALUES (:description, :completed)");
    $query->bindParam(':description', $description);
    $query->bindParam(':completed', $completed);

    $query->execute();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<form action="index.php" method="POST">
    <input type="text" name="description" placeholder="Description" required="required"/>

    <button type="submit">Submit</button>
</form>
<ul>
    <?php
    $query = $DB->query('select * from todo order by created_at DESC');
    date_default_timezone_set('UTC');

    while($row = $query->fetch()) {

        $date = date('g:iA', strtotime($row['created_at']));
        echo $date;
        echo "<li>" . $row['description'] . " : " . $date . "</li>";

    }
    ?>
</ul>
</body>
</html>
