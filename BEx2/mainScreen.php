<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 22/01/2019
 * Time: 14:12
 */
?>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="content">
    <h1>Future Value Calculator</h1>
    <form method="post" action="filePhp.php">
        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="invest"/><br/>
            <label>Yearly Interest Rate:</label>
            <input type="text" name="rate"/><br/>
            <label>Number Of Year:</label>
            <input type="text" name="years"/><br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/>
        </div>
    </form>
</div>
</body>
</html>