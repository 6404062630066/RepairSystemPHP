<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
</head>

<body>
    <h2>Welcome, <?php echo $username; ?> (Admin)</h2>
    <!-- ส่วนของเนื้อหาสำหรับผู้ดูแลระบบ -->
    <p>This is the admin page.</p>
    <a href="logout.php">Logout</a>
</body>

</html>