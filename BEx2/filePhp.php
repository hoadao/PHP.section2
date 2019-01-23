<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="content">
    <h1>Future Value Calculator</h1>
    <label>Investment Value: </label>
    <span>$
        <?php
        echo $_POST['invest'];
        ?>
    </span><br/>
    <label>Rate:</label>
    <span>%
    <?php
    echo $_POST['rate'];
    ?>
    </span><br/>
    <label>Years Of Investment: </label>
    <span>$
    <?php
    echo $_POST['years'];
    ?>
    </span><br/>
    <label>Future Value: </label>
    <span>$
    <?php
        $result =$_POST['invest'];
        for($i = 0; $i < $_POST['years']; $i++){
            $result += $result*$_POST['rate']*0.01;
        }
        echo $result;
    ?>
    </span><br/>
</div>
</body>
</html>