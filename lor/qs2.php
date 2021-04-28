<!DOCTYPE html>
<?php 
    error_reporting(0);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charm&display=swap" rel="stylesheet">
    <title>ประวัติศาสตร์ไทย สมัยราชวงศ์จักรี</title>
    <style>
        @import 'https://fonts.googleapis.com/css?family=Kanit|Prompt';

        .head {
            font-family: 'Charm', cursive;
            text-shadow: 0 0 0.2em black, 0 0 0.2em black, 0 0 0.2em black;
            color: white;
        }

        .head1 {
            font-family: 'Charm', cursive;
            color: black;
        }

        .head2 {
            font-family: 'Chakra Petch', sans-serif;
            color: black;
        }

        .txt2 {
            margin-left: auto;
            margin-right: auto;
            width: 90%;
        }

        .txt1 {
            margin-left: auto;
            margin-right: auto;
            width: 45%;
        }

        #white {
            background-color: grey;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropup {
            position: relative;
            display: inline-block;
            background-color: #FFDFDF;
        }

        .dropup-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            bottom: 20px;
            z-index: 1;
        }

        .dropup-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropup-content a:hover {
            background-color: #ccc
        }

        .dropup:hover .dropup-content {
            display: block;
        }

        .dropup:hover .dropbtn {
            background-color: #2980B9;
        }
        body {
            background-image: url("img/backg.jpg");
        }

        div {
            background-color: lightgoldenrodyellow;
        }

        .footer {
            height: 50px;
            width: 100%;
            background-color: #FFDFDF;
        }

        img {
            height: 423px;
            width: 300px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div>
            <br />
            <h1 class="head">ประวัติศาสตร์ไทย สมัยราชวงศ์จักรี</h1>
        </div>
        <ul class="nav nav-tabs">
                <li class="active">
                    <a href="index.html">หน้าหลัก</a>
                </li>&nbsp;&nbsp;&nbsp;
                <li>
                    <a href="member.html">ผู้จัดทำ</a>
                </li>&nbsp;&nbsp;&nbsp;
                <li>
                    <a href="qs1.php">คำถาม</a>
                </li>&nbsp;&nbsp;&nbsp;
                <li>
                    <div class="dropdown">
                        <a>รัชสมัย ↓</a>
                        <div class="dropdown-content">
                            <a href="no1.html">ร.1</a>
                            <a href="no2.html">ร.2</a>
                            <a href="no3.html">ร.3</a>
                            <a href="no4.html">ร.4</a>
                            <a href="no5.html">ร.5</a>
                            <a href="no6.html">ร.6</a>
                            <a href="no7.html">ร.7</a>
                            <a href="no8.html">ร.8</a>
                            <a href="no9.html">ร.9</a>
                            <a href="no10.html">ร.10</a>
                        </div>
                    </div>
                </li>
            </ul><br>
        <div align="center">
            <h2 class="head1">คำถามทวนความรู้ (2)</h2><br>
            <img src="img/Q1.png" alt="" style="max-width:100%;height:auto;height: 400px; width: 380px;">
        </div>
        <div class="row">
        <div class="col-7 col-lg-7" style="padding: 10px;">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"><a>6.พระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดชครองราชย์เมื่อใด</a></h4>
                    <p class="card-text">
                    <form action="" method="POST">
                    <input type="radio" value="1" name="1"> 9 มิถุนายน พ.ศ. 2486<br>
                    <input type="radio" value="2" name="2"> 9 มิถุนายน พ.ศ. 2487<br>
                    <input type="radio" value="3" name="3"> 9 มิถุนายน พ.ศ. 2488<br>
                    <input type="radio" value="4" name="4"> 9 มิถุนายน พ.ศ. 2489<br><br>
                    <input type="submit" name="submit01" value="ตรวจคำตอบ">
                    </form>
                    </p>
                    </div>
                </div>
            </div>
            <?php
            if(isset($_POST['submit01'])){
                if($_POST['4'] == "4")
                    {
                        echo '<div class="col-5 col-md-5" style="padding: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" align="center"> ถูกต้องแล้วครับบ!!</h5>
                                <hr>
                                <img src="img/cr.png" alt="" style="max-width:100%;height:auto;height: 60px; width: 50px;margin:auto auto;display: block;">
                                <p align="center"><u>นี่เป็นคำตอบที่ถูกต้องแล้ว</u>
                                </p>
                            </div>
                        </div>
                        <br>
                
                        </div>';
                    }
                else{
                    echo '<div class="col-5 col-md-5" style="padding: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" align="center"> ผิดจ่ะะ!!!</h5>
                                <hr>
                                <img src="img/ic.png" alt="" style="max-width:100%;height:auto;height: 50px; width: 50px;margin:auto auto;display: block;"><br>
                                <p align="center">คำตอบที่ถูกคือ <u>9 มิถุนายน พ.ศ. 2489</u>
                                </p>
                            </div>
                        </div>
                        <br>
                
                        </div>';
                }
            }
            ?>
            <div class="col-7 col-lg-7" style="padding: 10px;">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"><a>7.พระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดช พระราชสมภพเมื่อใด</a></h4>
                    <p class="card-text">
                    <form action="" method="POST">
                    <input type="radio" value="11" name="11"> 5 ธันวาคม พ.ศ. 2470<br>
                    <input type="radio" value="12" name="12"> 5 ธันวาคม พ.ศ. 2471<br>
                    <input type="radio" value="13" name="13"> 5 ธันวาคม พ.ศ. 2472<br>
                    <input type="radio" value="14" name="14"> 5 ธันวาคม พ.ศ. 2473<br><br>
                    <input type="submit" name="submit02" value="ตรวจคำตอบ">
                    </form>
                    </p>
                    </div>
                </div>
            </div>
            <?php
            if(isset($_POST['submit02'])){
                if($_POST['11'] == "11")
                    {
                        echo '<div class="col-5 col-md-5" style="padding: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" align="center"> ถูกต้องแล้วครับบ!!</h5>
                                <hr>
                                <img src="img/cr.png" alt="" style="max-width:100%;height:auto;height: 60px; width: 50px;margin:auto auto;display: block;">
                                <p align="center"><u>นี่เป็นคำตอบที่ถูกต้องแล้ว</u>
                                </p>
                            </div>
                        </div>
                        <br>
                
                        </div>';
                    }
                else{
                    echo '<div class="col-5 col-md-5" style="padding: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" align="center"> ผิดจ่ะะ!!!</h5>
                                <hr>
                                <img src="img/ic.png" alt="" style="max-width:100%;height:auto;height: 50px; width: 50px;margin:auto auto;display: block;"><br>
                                <p align="center">คำตอบที่ถูกคือ <u>5 ธันวาคม พ.ศ. 2470</u>
                                </p>
                            </div>
                        </div>
                        <br>
                
                        </div>';
                }
            }
            ?>
            <div class="col-7 col-lg-7" style="padding: 10px;">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"><a>8. พระบรมนามาภิไธยของพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัวคือข้อใด</a></h4>
                    <p class="card-text">
                    <form action="" method="POST">
                    <input type="radio" value="21" name="21"> จุฬาลงกรณ์<br>
                    <input type="radio" value="22" name="22"> ทองด้วง<br>
                    <input type="radio" value="23" name="23"> มงกุฎ<br>
                    <input type="radio" value="24" name="24"> ทับ<br><br>
                    <input type="submit" name="submit03" value="ตรวจคำตอบ">
                    </form>
                    </p>
                    </div>
                </div>
            </div>
            <?php
            if(isset($_POST['submit03'])){
                if($_POST['21'] == "21")
                    {
                        echo '<div class="col-5 col-md-5" style="padding: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" align="center"> ถูกต้องแล้วครับบ!!</h5>
                                <hr>
                                <img src="img/cr.png" alt="" style="max-width:100%;height:auto;height: 60px; width: 50px;margin:auto auto;display: block;">
                                <p align="center"><u>นี่เป็นคำตอบที่ถูกต้องแล้ว</u>
                                </p>
                            </div>
                        </div>
                        <br>
                
                        </div>';
                    }
                else{
                    echo '<div class="col-5 col-md-5" style="padding: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" align="center"> ผิดจ่ะะ!!!</h5>
                                <hr>
                                <img src="img/ic.png" alt="" style="max-width:100%;height:auto;height: 50px; width: 50px;margin:auto auto;display: block;"><br>
                                <p align="center">คำตอบที่ถูกคือ <u>จุฬาลงกรณ์</u>
                                </p>
                            </div>
                        </div>
                        <br>
                
                        </div>';
                }
            }
            ?>
            <div class="col-7 col-lg-7" style="padding: 10px;">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"><a>9.พระบรมราชินีของพระบาทสมเด็จพระปรมินทรมหาภูมิพลอดุลยเดชมีพระนามว่าอะไร</a></h4>
                    <p class="card-text">
                    <form action="" method="POST">
                    <input type="radio" value="31" name="31"> สมเด็จพระอมรินทราบรมราชินี<br>
                    <input type="radio" value="32" name="32"> สมเด็จพระนางเจ้าสิริกิติ์ พระบรมราชินีนาถ<br>
                    <input type="radio" value="33" name="33"> สมเด็จพระศรีสุริเยนทราบรมราชินี  <br>
                    <input type="radio" value="34" name="34"> สมเด็จพระนางเจ้าสว่างวัฒนา พระบรมราชเทวี<br><br>
                    <input type="submit" name="submit04" value="ตรวจคำตอบ">
                    </form>
                    </p>
                    </div>
                </div>
            </div>
            <?php
            if(isset($_POST['submit04'])){
                if($_POST['32'] == "32")
                    {
                        echo '<div class="col-5 col-md-5" style="padding: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" align="center"> ถูกต้องแล้วครับบ!!</h5>
                                <hr>
                                <img src="img/cr.png" alt="" style="max-width:100%;height:auto;height: 60px; width: 50px;margin:auto auto;display: block;">
                                <p align="center"><u>นี่เป็นคำตอบที่ถูกต้องแล้ว</u>
                                </p>
                            </div>
                        </div>
                        <br>
                
                        </div>';
                    }
                else{
                    echo '<div class="col-5 col-md-5" style="padding: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" align="center"> ผิดจ่ะะ!!!</h5>
                                <hr>
                                <img src="img/ic.png" alt="" style="max-width:100%;height:auto;height: 50px; width: 50px;margin:auto auto;display: block;"><br>
                                <p align="center">คำตอบที่ถูกคือ <u>สมเด็จพระนางเจ้าสิริกิติ์ พระบรมราชินีนาถ</u>
                                </p>
                            </div>
                        </div>
                        <br>
                
                        </div>';
                }
            }
            ?>
            <div class="col-7 col-lg-7" style="padding: 10px;">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"><a>10.พระบรมราชินีของพระบาทสมเด็จพระพุทธยอดฟ้าจุฬาโลกมหาราชมีพระนามว่าอะไร</a></h4>
                    <p class="card-text">
                    <form action="" method="POST">
                    <input type="radio" value="41" name="41"> สมเด็จพระอมรินทราบรมราชินี<br>
                    <input type="radio" value="42" name="42"> สมเด็จพระนางเจ้าสิริกิติ์ พระบรมราชินีนาถ<br>
                    <input type="radio" value="43" name="43"> สมเด็จพระศรีสุริเยนทราบรมราชินี<br>
                    <input type="radio" value="44" name="44"> สมเด็จพระนางเจ้าสว่างวัฒนา พระบรมราชเทวี<br><br>
                    <input type="submit" name="submit05" value="ตรวจคำตอบ">
                    </form>
                    </p>
                    </div>
                </div>
            </div>
            <?php
            if(isset($_POST['submit05'])){
                if($_POST['41'] == "41")
                    {
                        echo '<div class="col-5 col-md-5" style="padding: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" align="center"> ถูกต้องแล้วครับบ!!</h5>
                                <hr>
                                <img src="img/cr.png" alt="" style="max-width:100%;height:auto;height: 60px; width: 50px;margin:auto auto;display: block;">
                                <p align="center"><u>นี่เป็นคำตอบที่ถูกต้องแล้ว</u>
                                </p>
                            </div>
                        </div>
                        <br>
                
                        </div>';
                    }
                else{
                    echo '<div class="col-5 col-md-5" style="padding: 10px;">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" align="center"> ผิดจ่ะะ!!!</h5>
                                <hr>
                                <img src="img/ic.png" alt="" style="max-width:100%;height:auto;height: 50px; width: 50px;margin:auto auto;display: block;"><br>
                                <p align="center">คำตอบที่ถูกคือ <u>สมเด็จพระอมรินทราบรมราชินี</u>
                                </p>
                            </div>
                        </div>
                        <br>
                
                        </div>';
                }
            }
            ?>
        </div><br>
        <a href="qs1.php" style="margin-left: 5%;">back</a>
        <br>
    </div>
    <div class="footer" align="center">
        <a href="index.html">หน้าหลัก&emsp;</a>
        <a href="member.html">ผู้จัดทำ&emsp;</a>
        <a href="qs1.php">คำถาม&emsp;</a>
        <div class="dropup">
                <a>รัชสมัย ↑</a>
                <div class="dropup-content">
                    <a href="no1.html">ร.1</a>
                    <a href="no2.html">ร.2</a>
                    <a href="no3.html">ร.3</a>
                    <a href="no4.html">ร.4</a>
                    <a href="no5.html">ร.5</a>
                    <a href="no6.html">ร.6</a>
                    <a href="no7.html">ร.7</a>
                    <a href="no8.html">ร.8</a>
                    <a href="no9.html">ร.9</a>
                    <a href="no10.html">ร.10</a>
                </div>
        </div>
    </div>
</body>

</html>