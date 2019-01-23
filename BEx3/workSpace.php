<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .thumbnail{
        height: 60px;
        width: 100px;
        overflow: hidden;
    }
    .thumbnail img{
        width:100%;
    }
</style><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .thumbnail{
            height: 60px;
            width: 100px;
            overflow: hidden;
        }
        .thumbnail img{
            width:100%;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h2>List of Characters</h2></caption>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Date Of Birth</th>
        <th>Địa chỉ</th>
        <th>Image</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "first daughter", "dateofbirth" => "1983-08-20", "address" => "Hà Nội", "anh" => "first_daughter.png"),
        "2" =>array("ten" => "second daughter", "dateofbirth" => "1983-08-21", "address" => "Bắc Giang", "anh" => "second_daughter.png"),
        "3" =>array("ten" => "third daughter", "dateofbirth" => "1983-08-22", "address" => "Nam Định", "anh" => "third_daughter.png"),
        "4" =>array("ten" => "forth daughter", "dateofbirth" => "1983-08-17", "address" => "Hà Tây", "anh" => "fourth_daughter.png"),

    );
    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['dateofbirth']."</td>";
        echo "<td>".$values['address']."</td>";
        echo "<td><div class='thumbnail'><image src = '".$values['anh']."'/></div></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>