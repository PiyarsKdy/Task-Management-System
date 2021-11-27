<?php
    include "conection.php";
    if(isset($_POST['sval'])){
        $sby=$_POST['sby'];
        $sval=$_POST['sval'];
        $eq=" ".$sby."= '".$sval."' ;";
        $sql="select * from \"TMS\".\"Client\" where ".$eq;
    // $sql="select * from \"TMS\".\"Client\" where ". $sby " = \' " . $sval . " \' " ;
    // echo($sql);
    // echo("hyy");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=7">
    <title>Document</title>
</head>
<body>
    <h1 class="mainh1">Table details </h1>
    <div class="sear">
        <button class="inserch bglass"> <a href="index.php">Insert  Employee Data</a></button>
        <button class="bglass"> <a href="any.php">Run Query</a></button>
        <button class="bglass"> <a href="main.php">Main Manu</a></button>
        <form action="show.php" method="post">
        <select id="sby" name="sby">
    <option value="CL_ID">CL_ID</option>
    <option value="Username">Username</option>
    <option value="City">City</option>
    <option value="State">State</option>
    <option value="Email">Email</option>
    <option value="Company">Company</option>
  </select>
            <input type="text" name="sval" id="sval">
            <button class="bglass">Search</button>
        </form>
    </div>

    <table class="styled-table">
            <thead>
                <tr>
                <td>CL_ID</td>
                <td>Username</td>
                <td>Password</td>
                <td>Name</td>
                <td>City</td>
                <td>State</td>
                <td>Email</td>
                <td>Company</td>
                </tr>
            </thead>
        <tbody>
            <?php
                include "conection.php";
            if(isset($_POST['sval'])){
            $sby=$_POST['sby'];
            $sval=$_POST['sval'];
            $eq=" \"".$sby."\"= '".$sval."' ;";

            $sql="select * from \"TMS\".\"Client\" where".$eq ."" ;           
            $qury=pg_query($con,$sql);
            $data = pg_fetch_all($qury);
            }

            else{
            $selectq="select * from \"TMS\".\"Client\"";
            // echo ($selectq);
            $qury=pg_query($con,$selectq);
            // echo($qury);
        	$data = pg_fetch_all($qury);
            }
            // echo($data);

            while($row= pg_fetch_row($qury)){
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
            ?>
        </tbody>

        
    </table>

</body>
</html>