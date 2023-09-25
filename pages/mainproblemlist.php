<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'user') {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/mainproblemlist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include  "../components/navbar.php" ?>
    <main class="container">

        <div class="text-content">
            <center>
                <h3 style="font-size: 22.5px ">
                    &nbsp; &nbsp; &nbsp; &nbsp; แจ้งงานซ่อม
                </h3>
            </center>

            <br />
            <div class="col">
                <a class="btn btn-warning  btn-lg" href="./subproblem1.php" style="
                text-decoration: none;
                width: 100%;
                height: 100%;
                padding: 1.5;
              ">
                    <h5 class="text-light" style="font-size: 22.5px;">
                        <i class="problem-text2 fas fa-faucet" style="color:white;font-size: 28.5px"></i>
                        &nbsp; &nbsp; ระบบน้ำ
                    </h5>
                </a>
            </div>

            <hr />

            <div class="col">
                <a class="btn btn-warning  btn-lg" href="./subproblem2.php" style="
                text-decoration: none;
                width: 100%;
                height: 100%;
                padding: 1.5;
              ">
                    <h5 class="text-light" style="font-size: 22.5px;">
                        <i class="problem-text2 fa-solid fa-lightbulb" style="color: white; font-size: 28.5px;"></i>
                        &nbsp; &nbsp; ระบบไฟ
                    </h5>
                </a>
            </div>

            <hr />

            <div class="col">
                <a class="btn btn-warning  btn-lg" href="./subproblem3.php" style="
                text-decoration: none;
                width: 100%;
                height: 100%;
                padding: 1.5;
              ">
                    <h5 class="text-light" style="font-size: 22.5px;">
                        <i class="problem-text2 fa-solid fa-plug" style="color: white; font-size: 28.5px;"></i>
                        &nbsp; &nbsp; เครื่องใช้ไฟฟ้า
                    </h5>
                </a>
            </div>

            <hr />

            <div class="col">
                <a class="btn btn-warning  btn-lg" href="./subproblem4.php" style="
                text-decoration: none;
                width: 100%;
                height: 100%;
                padding: 1.5;
              ">
                    <h5 class="text-light" style="font-size: 22.5px;">
                        <i class="problem-text2 fa-solid fa-house" style="color: white; font-size: 28.5px;"></i>
                        &nbsp; &nbsp; โครงสร้าง
                    </h5>
                </a>
            </div>

            <hr />

            <div class="col">
                <a class="btn btn-warning  btn-lg" href="./subproblem5.php" style="
                text-decoration: none;
                width: 100%;
                height: 100%;
                padding: 1.5;
              ">
                    <h5 class="text-light" style="font-size: 22.5px;">
                        <i class="problem-text2 fa-solid fa-screwdriver-wrench" style="color: white; font-size: 28.5px;"></i>
                        &nbsp; &nbsp; บริการและซ่อมบำรุง
                    </h5>
                </a>
            </div>
            <hr />
            <div class="col">
                <a class="btn btn-warning  btn-lg" href="./subproblem6.php" style="
                text-decoration: none;
                width: 100%;
                height: 100%;
                padding: 1.5;
              ">
                    <h5 class="text-light" style="font-size: 22.5px;">
                        <i class="problem-text2 fa-solid fa-wrench" style="color: white; font-size: 28.5px;"></i>
                        &nbsp; &nbsp; เบ็ดเตล็ด
                    </h5>
                </a>
            </div>

            <hr />
            <br />

            <br />
        </div>
    </main>
    <hr />
    <?php include "../components/footer.php" ?>
</body>

</html>