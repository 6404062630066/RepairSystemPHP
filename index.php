<?php
require "./helpers/db.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* กำหนด CSS เพื่อจัดรูปและเนื้อหาในหน้า */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .left {
            flex: 1;
            text-align: center;
        }

        .right {
            flex: 1;
            text-align: center;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left">

            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCTUFk2kHItfjOJaRLBVj5EN2vJ3yHtV0lbL73JydkrQ&s" alt="Image">
        </div>
        <div class="right">
            <?php
            session_start();


            if (isset($_SESSION['user_id'])) {
                // ถ้ามีผู้ใช้ล็อกอินแล้ว แสดงข้อความต้อนรับและลิงก์ไปยังหน้าต่าง ๆ ตามบทบาท
                $role = $_SESSION['role'];
                echo '<p>Welcome to the Home Page</p>';
                if ($role === 'admin') {
                    echo '<p>You are logged in as an admin.</p>';
                    echo '<a href="./pages/admin_page.php">Go to Admin Page</a>';
                } elseif ($role === 'user') {
                    echo '<p>You are logged in as a user.</p>';
                    echo '<a href="./pages/user_page.php">Go to User Page</a>';
                } elseif ($role === 'worker') {
                    echo '<p>You are logged in as a worker.</p>';
                    echo '<a href="./pages/worker_page.php">Go to Worker Page</a>';
                } else {
                    echo '<p>Invalid role. Please contact the administrator.</p>';
                }
            } else {
                // ถ้าไม่มีผู้ใช้ล็อกอิน แสดงลิงก์ไปยังหน้าล็อกอินและสมัครสมาชิก
                echo '<p>Welcome to the Home Page</p>';
                echo '<p>You are not logged in. Please <a href="./pages/login.php">Log In</a> or <a href="./pages/register.php">Register</a>.</p>';
            }
            ?>
        </div>
    </div>
</body>

</html>