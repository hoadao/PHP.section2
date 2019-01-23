<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 22/01/2019
 * Time: 16:09
 */
?>
<html lang="vi">
<head>
    <title>Read the numbers</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="content">
    <h1>Numbers Reader</h1>
    <form method="post" action="mainSpace.php">
        <div id="data">
            <label>Number: </label>
            <input type="number" name="num"/><br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Read"/>
        </div>
        <br/>
        <div>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $num = $_POST['num'];
                    try {
                        function read($num)
                        {
                            $res="chua co gi";
                            if($num == 0){
                                $res = "";
                            }
                            else if( $num == 1){
                                $res = "one";
                            }
                            else if($num == 2){
                                $res = "two";
                            }
                            else if($num == 3){
                                $res = "three";
                            }
                            else if($num == 4){
                                $res = "four";
                            }
                            else if($num ==5){
                                $res = "five";
                            }
                            else if($num ==6){
                                $res = "six";
                            }
                            else if($num == 7){
                                $res = "seven";
                            }
                            else if($num == 8){
                                $res = "eight";
                            }
                            else if($num ==9){
                                $res = "nine";
                            }
                            return $res;
                        }
                        if ($num < 0 || $num > 1000) {
                            throw new Exception('We dont read this number');
                        } else {
                            $ones = $num % 10;
                            $tens = floor((($num - $ones)%100)/10);
                            $hundreds = floor(($num - $tens - $ones)/100);
                            echo "</br>";
                            $result = "";

                            if($hundreds > 0){
                                if($tens == 0 && $ones == 0) {
                                    $result .= read($hundreds) . " hundred";
                                }
                                else{
                                    $result .= read($hundreds) . " hundred and ";
                                    if($tens == 0){
                                        $result .= read($ones);

                                    }
                                    else if($tens ==1){
                                        //echo $hundreds;
                                            switch ($ones){
                                                case 1:
                                                    $result .= "eleven";
                                                    break;
                                                case 2:
                                                    $result .= "twelve";
                                                    break;
                                                case 3:
                                                    $result .= "thirteen";
                                                    break;
                                                case 5:
                                                    $result .= "fifteen";
                                                    break;
                                                default:
                                                    $result .= read($ones)."teen";

                                            }
                                        }
                                    else if($tens == 2){
                                        $result .= "twenty ".read($ones);
                                    }
                                    else if( $tens == 3){
                                        $result .= "thirty ".read($ones);
                                    }
                                    else if($tens == 5){
                                        $result .= "fifty ".read($ones);
                                    }
                                    else{
                                        $result .= read($tens)."ty ".read($ones);
                                    }

                                }
                            }
                        }
                     echo $result;
                    }
                    catch (Exception $e){
                        echo 'Exception : '.$e->getMessage();
                    }
                }

            ?>
        </div>
    </form>
</div>
</body>
</html>
