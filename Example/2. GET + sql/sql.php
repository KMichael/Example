<?php
require "connect.php";

$result = $mysql->query("SELECT * FROM `car`");

?>

<table>
    <tr>
    <th>id</th>
    <th>Mark</th>
    <th>Color</th>
    <th>Type</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['mark'];?></td>
            <td><?php echo $row['color'];?></td>
            <td><?php echo $row['type'];?></td>
        </tr>
<?php }?>
</table>
<h3>Добавление данных</h3>
<form action="db.php" method="post">
    <h4>Mark</h4> <input type="text" name="mark" id="mark" placeholder="Mark"><br>
    <h4>Color</h4> <input type="text" name="color" id="color" placeholder="Color"><br>
    <h4>Type</h4> <input type="text" name="type" id="type" placeholder="Type"><br>
    <input type="submit" value="Complete">
</form>
<h3>Удаление данных</h3>
<form action="del.php" method="post">
    <h4>id</h4> <input type="text" name="id" id="id" placeholder="id"><br>
    <input type="submit" value="Delete">
</form>
<h2><a href="index.html">Back</a></h2>