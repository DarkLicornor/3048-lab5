<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include("scripts/header.php");
    ?>
    <main>
        <form action="signin" method="post">
            <p>Please sign in</p>
            <input type="text" name="username" placeholder="username"></br>
            <input type="password" name="password" placeholder="password"></br>
            <p><input type="submit" value="Submit"></p>
        </form>
    </main>
    <?
    include("scripts/footer.php");

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include("scripts/dbconnect.php");
    $username = $_POST["username"];
    $password = $_POST["password"];


    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO users (username, password) VALUES ('". $username ."', '" .$password."')";

    if (mysqli_query($db, $sql)) {
        echo "<script>alert('Success ! Redirecting to login...')</script>";
        header("location:login");
    } else {
        echo "<script>alert('Cant sign you in')</script>";
        echo "Error: " . $sql . "<br>Error Message:" . mysqli_error($db);
    }
}
?>
