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
    <link rel="stylesheet" href="../styles/request_list.css">
</head>

<body>
    <?php include "../components/navbar.php" ?>
    <div class="container-fluid bkg">
        <div class="container">
            <div class="request-container">
                <br />
                <img class="request-banner" src="../photos/img2.jpg" alt=""></img>

                <a href="./mainproblemlist.php" style="text-decoration: none">
                    <button type="button" class="request-btn btn-warning">
                        <p>
                            <i class="fa-solid fa-plus"> </i> แจ้งงานซ่อม
                        </p>
                    </button>
                </a>

                <br />

                <p>บริการแนะนำ</p>

                <div class="card-container">
                    <div class="card-list">
                        <div class="card">
                            <img src="../photos/img2.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="top">
                                    <p class="card-text">Smart Home อุปกรณ์พร้อมติดตั้ง</p>
                                </div>
                                <div class="bottom">
                                    <p class="card-price"> ฿15000</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="../photos/img2.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="top">
                                    <p class="card-text">ฉีดพ่นน้ำยาฆ่าเชื้อ</p>
                                </div>
                                <div class="bottom">
                                    <p class="card-price"> ฿1990</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br />

                <p>บริการล้าง ทำความสะอาด</p>

                <div class="card-container">
                    <div class="card-list">
                        <div class="card">
                            <img src="../photos/img2.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="top">
                                    <p class="card-text">ล้างแอร์</p>
                                </div>
                                <div class="bottom">
                                    <p class="card-price"> ฿650</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="../photos/img2.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="top">
                                    <p class="card-text">ล้างเครื่องซักผ้า</p>
                                </div>
                                <div class="bottom">
                                    <p class="card-price"> ฿890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br />

                <p>กำจัดไรฝุ่น และฆ่าเชื้อ</p>

                <div class="card-container">
                    <div class="card-list">
                        <div class="card">
                            <img src="../photos/img2.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="top">
                                    <p class="card-text">กำจัดไรฝุ่นบนที่นอน-โซฟา</p>
                                </div>
                                <div class="bottom">
                                    <p class="card-price"> ฿1390</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="../photos/img2.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="top">
                                    <p class="card-text">กำจัดคราบเปื้อน ซักที่นอน-โซฟา</p>
                                </div>
                                <div class="bottom">
                                    <p class="card-price"> ฿1890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br />

                <p>อุปกรณ์คอมพิวเตอร์</p>

                <div class="card-container">
                    <div class="card-list">
                        <div class="card">
                            <img src="../photos/img2.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="top">
                                    <p class="card-text">ติดตั้งและแก้ไขปัญหาเครื่อง MAC</p>
                                </div>
                                <div class="bottom">
                                    <p class="card-price"> ฿1605</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="../photos/img2.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="top">
                                    <p class="card-text">โอนย้ายข้อมูล (Backup) เครื่อง MAC</p>
                                </div>
                                <div class="bottom">
                                    <p class="card-price"> ฿2140</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br />

                <p>อุปกรณ์ Smart Home</p>

                <div class="card-container">
                    <div class="card-list">
                        <div class="card">
                            <img src="../photos/img2.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <div class="top">
                                    <p class="card-text">Smart Home อุปกรณ์พร้อมติดตั้ง</p>
                                </div>
                                <div class="bottom">
                                    <p class="card-price"> ฿15000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
        </div>

        <footer class="container">
            helloo
        </footer>
    </div>
</body>

</html>