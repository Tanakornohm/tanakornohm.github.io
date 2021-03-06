<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <title>health_info</title>
</head>
<body>
    <nav>
        <a href="#home">Health</a>
        <a href="main.html">อาหารสุขภาพ</a>
        <a href="artical.html">เกร็ดน่ารู้</a>
    </nav>
    <section class="ans">
        <div class="info_health">
            <h3>BMI (ค่าดัชนีมวลกาย)</h3>
            <p>อัตราส่วนระหว่างน้ำหนักต่อส่วนสูง ที่ใช้บ่งว่าอ้วนหรือผอม ในผู้ใหญ่ตั้งแต่อายุ 20 ปีขึ้นไป ความสำคัญของการรู้ค่าดัชนีมวลร่างกาย เพื่อดูอัตราการเสี่ยงต่อการเกิดโรคต่างๆ ถ้าค่าที่คำนวนได้ มากหรือน้อยเกินไป เพราะถ้าเป็นโรคอ้วนแล้ว จะมีภาวะเสี่ยงต่อการเป็นโรคความดันโลหิตสูง โรคเบาหวาน โรคหัวใจขาดเลือด และโรคนิ่วในถุงน้ำดี แต่ในขณะเดียวกัน ผู้ที่ผอมเกินไป ก็จะเสี่ยงต่อการติดเชื้อ ประสิทธิภาพในการทำงานของร่างกายลดลง ดังนั้นควรรักษาระดับน้ำหนักให้อยู่ในเกณฑ์ปกติ</p>
        </div>
        <div class="ans_health bmi">
            <h1>BMI</h1>
            <h2>0</h2>
            <p></p>
        </div>
    </section>
    <section class="ans">
            <div class="info_health">
                <h3>Basal Metabolic Rate (BMR)</h3>
                <p>อัตราการความต้องการเผาผลาญของร่างกายในชีวิตประจำวัน หรือจำนวนแคลอรี่ขั้นต่ำที่ต้องการใช้ในชีวิตแต่ละวัน ดังนั้นการคำนวณ BMR จะช่วยให้คุณคำนวณปริมาณแคลอรี่ที่ใช้ต่อวันเพื่อรักษาน้ำหนักปัจจุบันได้ และเมื่ออายุมากขึ้นเราจะควบคุมน้ำหนักได้ยากขึ้น เพราะ BMR เราลดลง การอดอาหารก็เป็นสาเหตุหนึ่งที่ทำให้ BMR ลดลง วิธีป้องกันคือ "หมั่นออกกำลังกาย" เพื่อเพิ่มประสิทธิภาพของการเผาผลาญ ซึ่งจะทำให้ BMR ไม่ลดลงเร็วเกินไป</p>
            </div>
            <div class="bmr ans_health">
                <h1>BMR</h1>
                <h2>0</h2>
            </div>
    </section>
    <section class="ans">
            <div class="info_health">
                <h3>TDEE (Total Daily Energy Expenditure)</h3>
                <p>ค่าของพลังงานที่ใช้ทั้งหมดในแต่ละวัน เมื่อมีการทำกิจกรรมต่างๆ</p>
                <p>ค่า TDEE นี้นั่นสามารถนำไปใช้ฟิตหุ่นเพื่อลดน้ำหนัก(ลดไขมัน) หรือเพิ่มน้ำหนัก (เพิ่มกล้ามเนื้อ) เพื่อเพิ่มทรวดทรงให้ดูสมส่วนมากขึ้นก็ได้</p>
                <ul>
                    <li>ต้องการฟิตหุ่น ลดไขมัน TDEE - 500</li>
                    <li>ต้องการเพิ่มน้ำหนัก(กล้ามเนื้อ) TDEE + 500</li>
                </ul>
            </div>
            <div class="tdee ans_health">
                <h1>TDEE</h1>
                <h2>0</h2>
            </div>
    </section>
</body>
<script src="./js/jquery-3.3.1.min.js"></script>
<script>
    let age = parseInt(<?php $_POST['age'] ?>)
    let height = parseInt(<?php $_POST['height'] ?>)
    let weight = parseInt(<?php $_POST['weight'] ?>)
    let activity = parseFloat(<?php $_POST['activity'] ?>)
    let gender = <?php $_POST['gender'] ?>
</script>
<script src="./js/main.js"></script>
</html>