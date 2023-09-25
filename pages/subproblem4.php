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
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/subproblemlist.css">
</head>

<body>
    <?php include "../components/navbar.php" ?>

    <div class="subproblem-container">
        <div class="form-content">
            <form>
                <div class="top">
                    ประเภทงาน
                    <br />
                    <select class="select">
                        <option>ช่างทาสี</option>
                        <option>มุ้งลวด</option>
                        <option>พื้น</option>
                        <option>หลังคา-ดาดฟ้า</option>
                        <option>กระจก</option>
                        <option>ผนัง</option>
                        <option>ฝ้า-เพดาน</option>
                        <option>รางน้ำฝน</option>
                        <option>ประตู</option>
                        <option>หน้าต่าง</option>
                        <option>บันได</option>
                        <option>กันสาด</option>
                        <option>คิ้ว บัว จบ วงกบ</option>
                        <option>รั้ว-เหล็กดัด-ตะแกรง-ลูกกรง</option>
                    </select>
                </div>

                <div class="mid">
                    <label>ที่อยู่</label>

                    <input type="text"></input>

                    <label>เบอร์ติดต่อ</label>

                    <input type="text"></input>

                    <label>เบอร์ติดต่อสำรอง</label>

                    <input type="text"></input>

                    <label>
                        วันที่สะดวกรับบริการ (ช่างอาจไม่พร้อมให้บริการ ณ วันเวลาดังกล่าว)
                    </label>

                    <input type="date"></input>

                    <label>ช่วงเวลา</label>

                    <input type="text"></input>

                    <label>กรุณากรอกรายละเอียดเพิ่มเติม</label>

                    <textarea cols="81" rows="10"></textarea>
                </div>
                <div class="bottom">
                    รูปภาพเพิ่มเติม
                    <br />
                    <input type="file"></input>
                    <br />
                    <br />
                    <input type="file"></input>
                    <br />
                    <br />
                    เลือกวิธีชำระค่าบริการ
                    <br />
                    <input type="radio" id="dewey" name="drone" value="dewey" />
                    ชำระค่าบริการปลายทาง
                </div>
                <button type="button" class="form-btn btn-warning">
                    ยืนยัน
                </button>
            </form>
        </div>
    </div>


</body>

</html>