<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>歡迎光臨~紅茶拿鐵好喝哟~</title>
        <?php
          session_start();
          $drink=$_GET['drink'];
          if(isset($_POST['Drink'])) {
              if(isset($_SESSION['num'])){
                $_SESSION['num'] = $_SESSION['num']+1;
              }else{
                $_SESSION['num'] = 1;
              }
              $sugar = $_POST['sugar'];
              $ice = $_POST['ice'];
              if(isset($_SESSION["drink"])) {
                $_SESSION["drink"] = $_POST['Drink'];
                $_SESSION['sugar'] = $_POST['sugar'];
                $_SESSION['ice'] = $_POST['ice'];
              }else{
                $_SESSION["drink"] = $_POST['Drink'];
              }
              if($sugar == "sugar10") {
                $_SESSION['sugar'] = "正常";
              }elseif($sugar == "sugar5") {
                $_SESSION['sugar'] = "半糖";
              }elseif($sugar == "sugar3") {
                $_SESSION['sugar'] = "微糖";
              }elseif($sugar == "sugar0") {
                $_SESSION['sugar'] = "無糖";
              }
              if($ice == "ice10") {
                $_SESSION['ice'] = "正常";
              }elseif($ice == "ice7") {
                $_SESSION['ice'] = "少冰";
              }elseif($ice == "ice3") {
                $_SESSION['ice'] = "微冰";
              }elseif($ice == "ice0") {
                $_SESSION['ice'] = "去冰";
              }elseif($ice == "ice-10") {
                $_SESSION['ice'] = "熱";
              }
              $_SESSION['Quantity'] = $_POST['Quantity'];
          }
          
        ?>
        <link rel="icon" href="img/1.ico" type="image/x-icon" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="css/styles.css" rel="stylesheet" /> -->
        <!-- 下拉式 -->
        <script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <link rel="stylesheet" href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css"/>
        <script type="text/javascript" src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <style type="text/css">
            .dropdown-submenu {
                position: relative;
            }
            .dropdown-submenu > .dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
                -webkit-border-radius: 0 6px 6px 6px;
                -moz-border-radius: 0 6px 6px;
                border-radius: 0 6px 6px 6px;
            }
            .dropdown-submenu:hover > .dropdown-menu {
                display: block;
            }
            .dropdown-submenu > a:after {
                display: block;
                content: " ";
                float: right;
                width: 0;
                height: 0;
                border-color: transparent;
                border-style: solid;
                border-width: 5px 0 5px 5px;
                border-left-color: #ccc;
                margin-top: 5px;
                margin-right: -10px;
            }
            .dropdown-submenu:hover > a:after {
                border-left-color: #fff;
            }
            .dropdown-submenu.pull-left {
                float: none;
            }
            .dropdown-submenu.pull-left > .dropdown-menu {
                left: -100%;
                margin-left: 10px;
                -webkit-border-radius: 6px 0 6px 6px;
                -moz-border-radius: 6px 0 6px 6px;
                border-radius: 6px 0 6px 6px;
            }
        </style>
        <link href="css/styles.css" rel="stylesheet" />

    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.html">
                    <img src="img/5.png" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html#services">最新訊息</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html#portfolio">產品資訊</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html#about">關於我們</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="stores.html#map">服務據點</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="stores.html#team">團隊成員</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="stores.html#contact">聯絡我們</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#form">訂購飲料</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">歡迎光臨</div>
                <div class="masthead-heading text-uppercase">50嵐</div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="form">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">我要喝!!!</h2>
                    <h3 class="section-subheading text-muted" style="font-size: 1rem;">訂購單</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <form action="catalog.php#list" method="post">
                            <div class="dropdown">
                                <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#"
                                   href="javascript:;">飲料<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #FFFFDE; text-align: center; color: black; box-shadow:0px 0px 9px gray;">
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="javascript:;">找好茶</a>
                                        
                                        <ul class="dropdown-menu" style="background-color: #FFFFDE; text-align: center; box-shadow:0px 0px 5px gray;">
                                            <li><a tabindex="-1" href="catalog.php?drink=茉莉綠茶#form" style="color: black;">茉莉綠茶</a></li>
                                            <li><a tabindex="-1" href="catalog.php?drink=阿薩姆紅茶#form" style="color: black;">阿薩姆紅茶</a></li>
                                            <li><a tabindex="-1" href="catalog.php?drink=四季春青茶#form" style="color: black;">四季春青茶</a></li>
                                            <li><a tabindex="-1" href="catalog.php?drink=黃金烏龍#form" style="color: black;">黃金烏龍</a></li>
                                            <li><a tabindex="-1" href="catalog.php?drink=檸檬綠#form" style="color: black;">檸檬綠</a></li>
                                            <li><a tabindex="-1" href="catalog.php?drink=梅の綠#form" style="color: black;">梅の綠</a></li>
                                            <li><a tabindex="-1" href="catalog.php?drink=8冰綠#form" style="color: black;">8冰綠</a></li>
                                            <li><a tabindex="-1" href="catalog.php?drink=多多綠#form" style="color: black;">多多綠</a></li>
                                            <li><a tabindex="-1" href="catalog.php?drink=冰淇淋紅茶#form" style="color: black;">冰淇淋紅茶</a></li>
                                            <li><a tabindex="-1" href="catalog.php?drink=旺來紅#form" style="color: black;">旺來紅</a></li>
                                            <li><a tabindex="-1" href="catalog.php?drink=鮮柚綠(季節限定)#form" style="color: black;">鮮柚綠(季節限定)</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a tabindex="-1" href="javascript:;">找奶茶</a>
                                      <ul class="dropdown-menu" style="background-color: #FFFFDE; text-align: center; box-shadow:0px 0px 5px gray;">
                                        <li><a tabindex="-1" href="catalog.php?drink=奶茶#form" style="color: black;">奶茶</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=奶綠#form" style="color: black;">奶綠</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=紅茶瑪奇朵#form" style="color: black;">紅茶瑪奇朵</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=四季奶青#form" style="color: black;">四季奶青</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=黃金烏龍奶茶#form" style="color: black;">黃金烏龍奶茶</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=阿華田#form" style="color: black;">阿華田</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=可可芭雷#form" style="color: black;">可可芭雷</a></li>
                                      </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a tabindex="-1" href="javascript:;">找口感</a>
                                      <ul class="dropdown-menu" style="background-color: #FFFFDE; text-align: center; color: black; box-shadow:0px 0px 5px gray;">
                                        <li><a tabindex="-1" href="catalog.php?drink=四季春+珍波椰#form" style="color: black;">四季春+珍波椰</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=波霸 紅/綠/青/烏#form" style="color: black;">波霸 紅/綠/青/烏</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=波霸奶茶#form" style="color: black;">波霸奶茶</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=波霸烏龍奶茶#form" style="color: black;">波霸烏龍奶茶</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=珍珠 紅/綠/青/烏#form" style="color: black;">珍珠 紅/綠/青/烏</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=珍珠奶茶#form" style="color: black;">珍珠奶茶</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=珍珠奶綠#form" style="color: black;">珍珠奶綠</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=椰果奶茶#form" style="color: black;">椰果奶茶</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=布丁 奶茶/奶綠#form" style="color: black;">布丁 奶茶/奶綠</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=布丁 紅/綠/青/烏#form" style="color: black;">布丁 紅/綠/青/烏</a></li>
                                      </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a tabindex="-1" href="javascript:;">找新鮮</a>
                                      <ul class="dropdown-menu" style="background-color: #FFFFDE; text-align: center; box-shadow:0px 0px 5px gray;">
                                        <li><a tabindex="-1" href="catalog.php?drink=檸檬汁#form" style="color: black;">檸檬汁</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=金桔檸檬#form" style="color: black;">金桔檸檬</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=檸檬梅汁#form" style="color: black;">檸檬梅汁</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=波霸烏龍奶茶#form" style="color: black;">波霸烏龍奶茶</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=檸檬養樂多#form" style="color: black;">檸檬養樂多</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=8冰茶#form" style="color: black;">8冰茶</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=鮮柚汁(季節限定)#form" style="color: black;">鮮柚汁(季節限定)</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=葡萄柚多多(季節限定)#form" style="color: black;">葡萄柚多多(季節限定)</a></li>
                                      </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a tabindex="-1" href="javascript:;">找拿鐵</a>
                                      <ul class="dropdown-menu" style="background-color: #FFFFDE; text-align: center; box-shadow:0px 0px 5px gray;">
                                        <li><a tabindex="-1" href="catalog.php?drink=紅茶拿鐵#form" style="color: black;">紅茶拿鐵</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=綠茶拿鐵#form" style="color: black;">綠茶拿鐵</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=黃金烏龍拿鐵#form" style="color: black;">黃金烏龍拿鐵</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=阿華田拿鐵#form" style="color: black;">阿華田拿鐵</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=可可芭蕾拿鐵#form" style="color: black;">可可芭蕾拿鐵</a></li>
                                      </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                      <a tabindex="-1" href="javascript:;">客製化</a>
                                      <ul class="dropdown-menu" style="background-color: #FFFFDE; text-align: center; box-shadow:0px 0px 5px gray;">
                                        <li><a tabindex="-1" href="catalog.php?drink=波霸鮮奶#form" style="color: black;">波霸鮮奶</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=珍珠鮮奶#form" style="color: black;">珍珠鮮奶</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=檸檬紅茶#form" style="color: black;">檸檬紅茶</a></li>
                                        <li><a tabindex="-1" href="catalog.php?drink=檸檬梅汁綠#form" style="color: black;">檸檬梅汁綠</a></li>
                                      </ul>
                                    </li>
                                    

                                </ul>
                                <input type="text" name="Drink" value="<?php echo $drink;?>" readonly><br/><br/>
                                <label for="">甜度</label>

                                <select name="sugar" id="">
                                    <option value="sugar10">正常</option>
                                    <option value="sugar5">半糖</option>
                                    <option value="sugar3">微糖</option>
                                    <option value="sugar0">無糖</option>
                                </select>
                                <label for="">&nbsp&nbsp冰塊</label>
                                <select name="ice" id="">
                                    <option value="ice10">正常</option>
                                    <option value="ice7">少冰</option>
                                    <option value="ice3">微冰</option>
                                    <option value="ice0">去冰</option>
                                    <option value="ice-10">熱</option>
                                </select><br/><br/>
                                數量<input type="number" min="1" name="Quantity" value="1"/><br/><br/>
                                <input type="submit" value="訂購"/>
                                </div><br/><br/><br/><br/> 
                        
                            
                        </form>
      </div>
    </div>
  </div>

        <section class="page-section bg-light" id="list">
            <div class="container">
                <div class="text-center">
                  <center>
                    <h2 class="section-heading text-uppercase">訂單</h2>
                            <table border="1" style="text-align: center; width: 70%;">
                               <tr bgcolor="#FFFF3B"><td>品名</td><td>甜度</td><td>冰塊</td><td>數量</td></tr>
                                <tr>
                                    <td><?php echo $_SESSION["drink"]; ?></td>
                                    <td><?php echo $_SESSION["sugar"]; ?></td>
                                    <td><?php echo $_SESSION["ice"]; ?></td>
                                    <td><?php echo $_SESSION["Quantity"]; ?></td>
                                </tr>
                            </table>
                            </center>

                </div>
            </div>
        </section>


        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-left" style="font-size: 1rem;">
                        <p style="color: #fed136;">&copy;2020-2021&emsp; 
                            <a href="https://drchao.nuk.edu.tw/~a1073306/myself.html" style="text-decoration: none;">A1073306 張芝程</a> &emsp;<a href="https://drchao.nuk.edu.tw/~a1073315/myself.html" style="text-decoration: none;">A1073315 陳葦綾</a>
                        </p>
                    </div>
                    <div class="col-lg-6 text-lg-center">
                        <img src="http://50lan.com/web/images/index_18.gif" alt="">
                    </div>
                </div>
            </div>
        </footer>



        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

