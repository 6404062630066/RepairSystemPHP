<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'user') {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Page</title>
    <link rel="stylesheet" href="../styles/user_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include "../components/navbar.php" ?>

    <header class="jumbotron bgs text-content">
        <section class="container pts">

            <section class="card-pages">

                <article class="col ">

                    <h3 class="card-title">บริการช่างมืออาชีพจาก HOMEMA<br />
                        ผลงานดี สะดวก ไร้ปัญหาการทิ้งงาน</h3>

                    <div class=" text-p ">
                        <i class="fa-solid fa-check text-success"></i> ช่างมืออาชีพ
                        <br />
                        <i class="fa-solid fa-check text-success"></i> ไม่มีประวัติอาชญากรรม
                        <br />
                        <i class="fa-solid fa-check text-success"></i> ยืนยันด้วยรีวิวจากลูกค้าจริง
                        <br />
                    </div>

                </article>

                <article class="col">
                    <br />
                    <div>
                        <a href="./request_list.php">
                            <button class="btn  btn-warning btnsize">
                                <br />
                                <h3><i class="fa-solid fa-magnifying-glass "></i> จ้างช่าง</h3>
                                <br />

                            </button>
                        </a>
                    </div>
                </article>

                <br />


            </section>

        </section>
    </header>

    <br />

    <main className="container  text-content">
        <br />

        <section>
            <header style="text-align : center">
                <h3>บริการแนะนำ</h3>
            </header>

            <br />

            <center>
                <section class="card cardpage2">

                    <section class="card-body">

                        <section class="row">
                            <section class="col">
                                <div style="text-align: center;">
                                    <img class="bgs-r1 rounded-circle" src="../photos/img2.jpg" alt="..." />
                                    <section>
                                        <p>sdas</p>
                                    </section>
                                </div>
                            </section>

                            <section class="col">
                                <div style="text-align: center;">
                                    <img class="bgs-r1 rounded-circle" src="../photos/img2.jpg" alt="..." />
                                    <section>
                                        <p>sdas</p>
                                    </section>
                                </div>
                            </section>

                            <section class="col">
                                <div style="text-align: center;">
                                    <img class="bgs-r1 rounded-circle" src="../photos/img2.jpg" alt="..." />
                                    <section>
                                        <p>sdas</p>
                                    </section>
                                </div>
                            </section>



                            <br />
                            <section class="col">
                                <div style="text-align: center;">
                                    <img class="bgs-r1 rounded-circle" src="../photos/img2.jpg" alt="..." />
                                    <section>
                                        <p>sdas</p>
                                    </section>
                                </div>
                            </section>

                            <section class="col">
                                <div style="text-align: center;">
                                    <img class="bgs-r1 rounded-circle" src="../photos/img2.jpg" alt="..." />
                                    <section>
                                        <p>sdas</p>
                                    </section>
                                </div>
                            </section>

                        </section>

                    </section>

                </section>
                </div>
        </section>

        <br />

    </main>

    <br />

    <main>
        <section class="container-fluid bgs2 text-content">
            <br />
            <section class="container">


                <article class="row align-items-md-stretch">
                    <div class="col-md-5">
                        <div class="h-100 p-4 text-bg-dark ">
                            <h3>4 ขั้นตอนง่ายๆ ใช้บริการช่างผ่าน <h3 class="text-success">HOMEMA</h3>
                            </h3>
                            <br />

                            <h3>1. เลือกบริการ</h3>
                            <p>เลือกใช้บริการงานช่างที่ต้องการได้</p>

                            <h3>2. เลือกช่างมืออาชีพ</h3>
                            <p>เราคัดสรรช่างที่มีประสบการณ์มากกว่า 5 ปีพร้อมรีวิวจากลูกค้าจริง เพื่อให้คุณมั่นใจได้สูงสุด</p>

                            <h3>3. ปรึกษาและนัดหมาย</h3>
                            <p>พูดคุยรายละเอียดงาน ค่าบริการ และนัดหมายกับช่างได้โดยตรง</p>

                            <h3>4. ชำระเงินผ่าน HOMEMA</h3>
                            <p>ปลอดภัยและวางใจได้ว่างานเสร็จ 100% หากพบปัญหา เราพร้อมช่วยเหลือคุณเสมอ</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div>
                            <br />
                            <br />
                            <div class="card banner">
                            </div>

                        </div>

                    </div>

                </article>
                <br />
            </section>

        </section>

        <br />
        <section class="container-fluid">
            <section class="container">

                <article class="p-4 mb-4 bg-div-tertiary rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                        <p class="col-md-8 fs-4">
                            Using a series of utilities, you can create this jumbotron,
                            just like the one in previous versions of Bootstrap. Check out
                            the examples below for how you can remix and restyle it to
                            your liking.
                        </p>
                        <button class="btn btn-secondary btn-lg" type="button">
                            Example button
                        </button>
                    </div>
                </article>

                <article class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div class="h-100 p-4 text-bg-dark rounded-3">
                            <h2>Change the background</h2>
                            <p>
                                Swap the background-color utility and add a `.text-*` color
                                utility to mix up the jumbotron look. Then, mix and match
                                with additional component themes and more.
                            </p>
                            <button class="btn btn-outline-light" type="button">
                                Example button
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 p-4 bg-div-tertiary border rounded-3">
                            <h2>Add borders</h2>
                            <p>
                                Or, keep it light and add a border for some added definition
                                to the boundaries of your content. Be sure to look under the
                                hood at the source HTML here as we've adjusted the alignment
                                and sizing of both column's content for equal-height.
                            </p>
                            <button class="btn btn-outline-secondary" type="button">
                                Example button
                            </button>
                        </div>
                    </div>
                </article>

                <br />

            </section>
        </section>

        <br />
        <section class="container-fluid bgs3">
            <section class="container">

                <article class="p-4 mb-4 bg-div-tertiary rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                        <p class="col-md-8 fs-4">
                            Using a series of utilities, you can create this jumbotron,
                            just like the one in previous versions of Bootstrap. Check out
                            the examples below for how you can remix and restyle it to
                            your liking.
                        </p>
                        <button class="btn btn-secondary btn-lg" type="button">
                            Example button
                        </button>
                    </div>
                </article>

                <article class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div class="h-100 p-4 text-bg-dark rounded-3">
                            <h2>Change the background</h2>
                            <p>
                                Swap the background-color utility and add a `.text-*` color
                                utility to mix up the jumbotron look. Then, mix and match
                                with additional component themes and more.
                            </p>
                            <button class="btn btn-outline-light" type="button">
                                Example button
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 p-4 bg-div-tertiary border rounded-3">
                            <h2>Add borders</h2>
                            <p>
                                Or, keep it light and add a border for some added definition
                                to the boundaries of your content. Be sure to look under the
                                hood at the source HTML here as we've adjusted the alignment
                                and sizing of both column's content for equal-height.
                            </p>
                            <button class="btn btn-outline-secondary" type="button">
                                Example button
                            </button>
                        </div>
                    </div>
                </article>

                <br />

            </section>
        </section>

    </main>


    <?php include "../components/footer.php" ?>

</body>

</html>