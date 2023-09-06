<?php
$con = mysqli_connect('localhost', 'root');

if (!$con) {
    echo "No connection";
} else {
    mysqli_select_db($con, 'portfolio');
    
    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO userinfo (user, email, mobile, comment) VALUES ('$user', '$email', '$mobile', '$comment')";
    echo "$query";

    if (mysqli_query($con, $query)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);

    header('location:index.php');
}
?>
