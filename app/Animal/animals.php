<?php
  include("../INCLUD/conection.php");
  include("../INCLUD/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>List Of Developers</h1>
      <table border="" style="border-collapse: collapse;">
            <thead>
                <th>#</th>
                <th>petcategory</th>
                <th>breed</th>
                <th>wheight</th>
                <th>height</th>
                <th>age</th>
                <th>fur</th>
                <th>cost</th>
            </thead>
            <?php 
            $i = 1;
    $sql="SELECT * FROM users WHERE role > 0";
    foreach ($conn->query($sql) as $row) : ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo "cc" ?></td>
                <td><?php echo "cc" ?></td>
                <td><?php echo "cc" ?></td>
                <td><?php echo "cc" ?></td>
                <td><?php echo "cc" ?></td>
                <td><?php echo "cc" ?></td>
                <td><?php echo "cc" ?></td>
                <td>
                <a href="delete.php?id=<?php echo  $row['id']?>">delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    
</body>
</html>