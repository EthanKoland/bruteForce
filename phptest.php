    <?php
    $user = $_POST['uname'];
    $pass = $_POST['psw'];

    $servername = 'localhost';
    $msqluser = 'ethan';
    $msqlpass = 'ethan';
    $db = 'joey';

    //$conn = mysqli_connect($servername, $msqluser, $msqlpass, $db);

    $conn = new php-mysqli($servername, $msqluser, $msqlpass, $db);

    if ($conn -> connect_error){
        die("Connction failed: ".$conn -> connect_error);
    }

    $sql = " select * from ".$db;

    if($conn->query($sql) === true){
        echo query($sql);
    } else {
        echo "error:". $conn->error;
    }

    $conn.close;

    





?>