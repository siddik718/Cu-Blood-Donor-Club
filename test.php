<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>CU Blood Club</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th {
            background-color: #588c7e;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>

<?php
    $input = null;
    if(isset($_POST['ap'])) {
        $input = "A+";
    }else if(isset($_POST['an'])) {
        $input = "A-";
    }else if(isset($_POST['abp'])) {
        $input = "AB+";
    }else if(isset($_POST['abn'])) {
        $input = "AB-";
    }else if(isset($_POST['bp'])) {
        $input = "B+";
    }else if(isset($_POST['bn'])) {
        $input = "B-";
    }else if(isset($_POST['op'])) {
        $input = "O+";
    }else if(isset($_POST['on'])) {
        $input = "O-";
    }
    // echo $input;
    if($input != null) {
        $con = mysqli_connect('localhost','root','','cwn') or die('server error');
        $sql = "select name, bgroup, phone, address from user where bgroup = '$input' ";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) > 0) {
            echo "<table>
                    <tr>
                        <th>Name</th>
                        <th>Blood Group</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>";
            while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row['name'] . "</td><td>" .$row['bgroup'] . "</td><td>" .$row['phone'] . "</td><td>" .$row['address']."</td></tr>";
                }
                echo "</table>";
        }else {
            echo '<div class="badge bg-primary text-wrap" style="width: 6rem;">'."Sorry we do not have any {$input} donor currently". '</div>';
            // echo "Sorry we do not have any {$input} donor currently";
        }
    }
?>
</body>
</html>