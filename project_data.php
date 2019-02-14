<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $sid = $_GET["sid"]; echo "รหัสนักศึกษา : $sid<br>";
        $get_fname = $_GET["fname"]; echo "ชื่อ : $get_fname<br>";
        $get_lname = $_GET["lname"]; echo "นามสกุล : $get_lname<br>";
        $get_program = $_GET["program"]; echo "สาขาวิชา : $get_program<br>";
        $get_faculty = $_GET["faculty"]; echo "คณะ : $get_faculty<br>";
        $get_std_year = $_GET["std_year"]; echo "ชั้นปี : $get_std_year<br>";
        $get_prj_neme_th = $_GET["prj_name_th"]; echo "ชื่อโครงงาน(ภาษาไทย) : $get_prj_neme_th<br>";
        $get_prj_name_en = $_GET["prj_name_en"]; echo "ชื่อโครงงาน(ภาษาอังกฤษ) : $get_prj_name_en<br>";
        $get_prj_type = $_GET["prj_type"]; echo "ประเภทโครงงาน : $get_prj_type<br>";
        $get_prj_tool = $_GET["prj_tool"]; echo "เครื่องมือที่ใช้ : $get_prj_tool<br>";
        $get_prj_advisor = $_GET["prj_advisor"]; echo "อาจารย์ที่ปรึกษา : $get_prj_advisor<br>";
    ?>
</body>
</html>