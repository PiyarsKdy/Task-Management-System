<?php
    include "conection.php";
          // $s= " \"$sql";
        // echo($s);
        // pg_query_params
        // $sql=pg_query($con,$sql);
        // $data = pg_fetch_all($sql);

        // echo($data);

        // foreach ($con->query($sql) as $row) {
        //     var_dump($row);
        // }

        // while ($row = pg_fetch_row($qury)) {
        //     var_dump($row);
        // }
        // pg_free_result($qury);

        // while($row= pg_fetch_row($sql)){
        //     echo($row[0]);
        //     echo($row[1]);

        // }


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=5">
</head>
<body>
<h1 class="mainh1">Run Any Query </h1>

<div class="fo">
    <form method="post" action="any.php">
<textarea name="qu" id="qu" cols="30" rows="10"></textarea>
<div class="fl">
<button class="inserch bglass"> <a href="index.php">Insert  Employee Data</a></button>
        <button class="btn bglass"> <a href="show.php">show data</a></button>
        <button class="bglass"> <a href="main.php">Main Manu</a></button>
        <form action="show.php" method="post">
<button class="bglass"> Run Query</button>
</div>    
</form>
</div>

<table class="styled-table cus">
            <thead>
                <tr>
                <td>field 1</td>
                <td>field 2</td>
                <td>field 3</td>
                <td>field 4</td>
                <td>field 5</td>
                <td>field 6</td>
                <td>field 7</td>
                <td>field 8</td>
               
                </tr>
            </thead>
        <tbody>
            <?php

if(isset($_POST['qu'])){
    // echo($_POST['qu']);
                $sqll=$_POST['qu'];
                // echo($sql);
        // echo("hyy");
                include "conection.php";
                $sql=pg_query($con,$sqll);
                $data = pg_fetch_all($sql);
          
              
            while($row= pg_fetch_row($sql)){
            
            ?>
                <tr class="table">
            
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td><?php echo $row[4] ?></td>
                <td><?php echo $row[5] ?></td>
                <td><?php echo $row[6] ?></td>
                <td><?php echo $row[7] ?></td>
              ?></td>
                </tr>
            <?php
            }
              }
            ?>
        </tbody>

        
    </table>

</body>
</html>