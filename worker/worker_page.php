<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'worker') {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Worker Page</title>
</head>

<body>
    <h2>Welcome, <?php echo $username; ?> (Worker)</h2>
    <!-- ส่วนของเนื้อหาสำหรับผู้ดูแลระบบ -->
    <p>This is the worker page.</p>
    <a href="logout.php">Logout</a>
</body>

</html>