<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ระบบนำเสนอหัวข้อโครงงาน</h1>
    <form action="project_data.php" method="get">
        <fieldset id="sect1">
            <legend>ส่วนที่ 1 ข้อมูลผู้จัดทำโครงงาน</legend>
            <label for="sid">รหัสนักศึกษา</label><input type="text" name="sid">
            <label for="fname">ชื่อ</label><input type="text" name="fname">
            <label for="lname">นามสกุล</label><input type="text" name="lname"><br>
            <label for="program">สาขาวิชา</label>
            <select name="program">
                <option value="1">วิทยาการคอมพิวเตอร์</option>
                <option value="2">คอมพิวเตอรืศึกษา</option>
                <option value="3">ภูมิสารสนเทศ</option>
                <option value="4">เทคโนโลยีสารสนเทศ</option>
                <option value="5">เทคดนโลยีเครือข่ายคอมพิวเตอร์</option>
            </select><br>
            <label for="faculty">คณะ</label>
            <select name="faculty">
                <option value="1">วิทยาการคอมพิวเตอร์</option>
                <option value="2">ครุศาสตร์</option>
            </select><br>
            <label for="std_year">ชั้นปี</label>
                <input type="radio" name="std_year" value="1"><label>ปี 1</label>
                <input type="radio" name="std_year" value="2"><label>ปี 2</label>
                <input type="radio" name="std_year" value="3"><label>ปี 3</label>
                <input type="radio" name="std_year" value="4"><label>ปี 4</label>
                <input type="radio" name="std_year" value="5"><label>ปี 5</label>
        </fieldset><br>
        <fieldset id="sect2">
            <legend>ส่วนที่ 2 ข้อมูลโครงงาน</legend>
            <label for="prj_name_th">ชื่อโครงงาน(ภาษาไทย)</label><textarea name="prj_name_th"></textarea><br>
            <label for="prj_name_en">ชื่อโครงงาน(ภาษาอังกฤษ)</label><textarea name="prj_name_en"></textarea><br>
            <label for="prj_type">ประเภทโครงงาน</label>
            <select name="prj_type">
                <option value="1">เกม</option>
                <option value="2">เว็ปไซต์</option>
                <option value="3">โปรแกรม</option>
                <option value="4">แอพพลิเคชั่น</option>
                <option value="5">หุ่นยนต์</option>
            </select><br>
            <label for="prj_tool">เครื่องมือที่ใช้</label>
                <input type="checkbox" name="prj_tool[]" value="html"><label>HTML</label>
                <input type="checkbox" name="prj_tool[]" value="php"><label>PHP</label>
                <input type="checkbox" name="prj_tool[]" value="css"><label>CSS</label>
                <input type="checkbox" name="prj_tool[]" value="mysql"><label>MySQL</label>
                <input type="checkbox" name="prj_tool[]" value="bootstrap"><label>Bootstrap</label><br>
            <label for="prj_ฟแอรหนพ">อาจารย์ที่ปรึกษา</label>
            <select name="prj_advisor">
                <option value="1">อาจารย์นิทัศน์ นิลฉวี</option>
                <option value="2">อาจารย์คงกฤช ปิตานน</option>
                <option value="3">อาจารย์ ดร.บุญเรือน พฤกษ์ศศิธร</option>
                <option value="4">อาจารย์ ดร.กุ๊ก</option>
                <option value="5">อาจารย์นที ยงยุทธ</option>
            </select>
        </fieldset><br>
        <input type="submit" value="GO">
    </form>
</body>
</html>