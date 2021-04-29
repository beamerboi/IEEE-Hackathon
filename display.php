<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="./bootstrap-5.0.0-beta2-dist/css/bootstrap.css"
    />
    <title>Document</title>
</head>
<body>
    

<table class="table table-striped">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        include_once('config.php');
        $to="test@gmail.com";
        $subject = "sub";
        $txt = "txt";
        $headers = "Welcome ";


        $query = mysqli_query($db,"SELECT * FROM member where hasApp= '0'");
        while($row = mysqli_fetch_array($query)){
           
            echo "<tr>";
            echo "<td>".$row['firstname']." ".$row['lastname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td><a href='?email=".$row['email']."&approuved=TRUE'><button name='hasApp' value='1'>Approve</button></a></td>";
            echo "</tr>";
        }


        if(isset($_GET['approuved']) && $_GET['approuved'] == TRUE)
        {
            $email = $_GET['email'];
            $query = "UPDATE member SET hasApp = '1' WHERE email='$email'";
            mysqli_query($db,$query);
            header("Location: display.php");
            mail($to,$subject,$txt,$headers);

        }

        ?>

    </tbody>
</table>
</body>