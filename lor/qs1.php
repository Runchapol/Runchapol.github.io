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
            <h2 class="head1">คำถามทวนความรู้</h2><br>
            <img src="img/Q1.png" alt="" style="max-width:100%;height:auto;height: 400px; width: 380px;">
        </div>
        <div class="row">
        <div class="col-7 col-lg-7" style="padding: 10px;">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"><a>1.พระมหากษัตริย์ราชวงศ์จักรีทั้งหมดมีกี่พระองค์</a></h4>
                    <p class="card-text">
                    <form action="" method="POST">
                    <input type="radio" value="1" name="1"> 10 พระองค์<br>
                    <input type="radio" value="2" name="2"> 9 พระองค์<br>
                    <input type="radio" value="3" name="3"> 8 พระองค์<br>
                    <input type="radio" value="4" name="4"> 7 พระองค์<br><br>
                    <input type="submit" name="submit01" value="ตรวจคำตอบ">
                    </form>
                    </p>
                    </div>
                </div>
            </div>
            <?php
            if(isset($_POST['submit01'])){
                if($_POST['1'] == "1")
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
                                <p align="center">คำตอบที่ถูกคือ <u>10 พระองค์</u>
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
                    <h4 class="card-title"><a>2.ข้อใดไม่ใช่รายพระนามพระมหากษัตริย์ราชวงศ์จักรี</a></h4>
                    <p class="card-text">
                    <form action="" method="POST">
                    <input type="radio" value="11" name="11"> พระบาทสมเด็จพระพุทธยอดฟ้าจุฬาโลกมหาราช<br>
                    <input type="radio" value="12" name="12"> พระบาทสมเด็จพระพุทธเลิศหล้านภาลัย<br>
                    <input type="radio" value="13" name="13"> พระบาทสมเด็จพระนั่งเกล้าเจ้าอยู่หัว<br>
                    <input type="radio" value="14" name="14"> สมเด็จพระเทพศิรินทราบรมราชินี<br><br>
                    <input type="submit" name="submit02" value="ตรวจคำตอบ">
                    </form>
                    </p>
                    </div>
                </div>
            </div>
            <?php
            if(isset($_POST['submit02'])){
                if($_POST['14'] == "14")
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
                                <p align="center">คำตอบที่ถูกคือ <u>สมเด็จพระเทพศิรินทราบรมราชินี</u>
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
                    <h4 class="card-title"><a>3.พระบาทสมเด็จพระมงกุฎเกล้าเจ้าอยู่หัวครองราชย์เมื่อใด </a></h4>
                    <p class="card-text">
                    <form action="" method="POST">
                    <input type="radio" value="21" name="21"> 3 ตุลาคม พ.ศ. 2453 <br>
                    <input type="radio" value="22" name="22"> 13 ตุลาคม พ.ศ. 2453<br>
                    <input type="radio" value="23" name="23"> 23 ตุลาคม พ.ศ. 2453<br>
                    <input type="radio" value="24" name="24"> 30 ตุลาคม พ.ศ. 2453<br><br>
                    <input type="submit" name="submit03" value="ตรวจคำตอบ">
                    </form>
                    </p>
                    </div>
                </div>
            </div>
            <?php
            if(isset($_POST['submit03'])){
                if($_POST['23'] == "23")
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
                                <p align="center">คำตอบที่ถูกคือ <u>23 ตุลาคม พ.ศ. 2453</u>
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
                    <h4 class="card-title"><a>4.พระบาทสมเด็จพระมงกุฎเกล้าเจ้าอยู่หัว พระราชสมภพเมื่อใด</a></h4>
                    <p class="card-text">
                    <form action="" method="POST">
                    <input type="radio" value="31" name="31"> 1 มกราคม พ.ศ. 2423<br>
                    <input type="radio" value="32" name="32"> 1 มกราคม พ.ศ. 2422<br>
                    <input type="radio" value="33" name="33"> 1 มกราคม พ.ศ. 2421<br>
                    <input type="radio" value="34" name="34"> 1 มกราคม พ.ศ. 2420<br><br>
                    <input type="submit" name="submit04" value="ตรวจคำตอบ">
                    </form>
                    </p>
                    </div>
                </div>
            </div>
            <?php
            if(isset($_POST['submit04'])){
                if($_POST['31'] == "31")
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
                                <p align="center">คำตอบที่ถูกคือ <u>1 มกราคม พ.ศ. 2423</u>
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
                    <h4 class="card-title"><a>5.พระบาทสมเด็จพระปกเกล้าเจ้าอยู่หัวเสด็จสวรรคตเมื่อใด</a></h4>
                    <p class="card-text">
                    <form action="" method="POST">
                    <input type="radio" value="41" name="41"> 30 พฤษภาคม พ.ศ. 2483 <br>
                    <input type="radio" value="42" name="42"> 30 พฤษภาคม พ.ศ. 2484 <br>
                    <input type="radio" value="43" name="43"> 30 พฤษภาคม พ.ศ. 2485 <br>
                    <input type="radio" value="44" name="44"> 30 พฤษภาคม พ.ศ. 2486 <br><br>
                    <input type="submit" name="submit05" value="ตรวจคำตอบ">
                    </form>
                    </p>
                    </div>
                </div>
            </div>
            <?php
            if(isset($_POST['submit05'])){
                if($_POST['42'] == "42")
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
                                <p align="center">คำตอบที่ถูกคือ <u>30 พฤษภาคม พ.ศ. 2484</u>
                                </p>
                            </div>
                        </div>
                        <br>
                
                        </div>';
                }
            }
            ?>
        </div><br>
        <a href="qs2.php" style="margin-left: 90%;">next</a>
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