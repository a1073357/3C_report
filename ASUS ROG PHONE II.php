<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.jpg" type="image/x-icon" />
    <title>ASUS ROG PHONE II</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d9ef39df6c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="Shortcut Icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="style.css">
    
</head>
<style>
    .point{
    /* background: #195FAF; */
    padding:30px; 
    font-weight: bold;
    color: #fff;
    font-size: 1.3em;
    font-family:  Microsoft JhengHei;
    text-align: center;
    word-spacing: 50px;
    text-decoration: none;
    }
/*下拉式*/
      .dropbtn {
        /* background-color: #195FAF; */
        color: black;
        font-family:  Microsoft JhengHei;
        padding: 20px;
        font-size: 16px;
        border: none;
        cursor: pointer;
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
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      .dropdown-content a {
        color: black;
        padding: 10px 10px;
        text-decoration: none;
        display: block;
        font-size: 16px;

      }
      .dropdown-content a:hover {
        background-color: #f1f1f1;
      }
      .dropdown:hover .dropdown-content {
        display: block;
      }
      /* 連結框 */
      .dropdown:hover .dropbtn {
        color: #2E9DFF ;
        text-decoration:none;
      }
</style>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="3Chome.php">
                    <img src="/img/logo.jpg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="point">
                        <div class="dropdown">
                            <a class="dropbtn" href="3Chome.php">home</a>
                        </div>
                        <div class="dropdown">
                            <a class="dropbtn "href="applehome.php">Apple</a>
                            <div class="dropdown-content">
                                <a href="iphone.php">手機</a>
                                <a href="ipad.php">平板</a>
                                <a href="macbook.php">筆電</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a class="dropbtn "href="asushome.php">ASUS</a>
                            <div class="dropdown-content">
                                <a href="asusphone.php">手機</a>
                                <a href="asuspaid.php">平板</a>
                                <a href="asusnotebook.php">筆電</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a class="dropbtn "href="home_samsung.php">Samsung</a>
                            <div class="dropdown-content">
                                <a href="Samsung_phone.php">手機</a>
                                <a href="Samsung_pad.php">平板</a>
                                <a href="Samsung_book.php">筆電</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a class="dropbtn" href="discuss.php">歷年紀錄</a>
                        </div>
                        <div class="dropdown">
                            <a class="dropbtn" href="discuss.php">登入</a>
                        </div>
                        <div class="dropdown">
                            <a class="dropbtn" href="register.php">註冊</a>
                        </div>
                    </div>
                    <!-- <input type="search" id="site-search" name="q">
                    <button>Search</button> -->
                </div>
              </nav>
        </div>
    </header>
    <section>
        <div class="line">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="last1">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <a href="#">
                        <div class="outer1">
                            <div class="upper" id="imgsize3">
                                <div id="demo">
                                    <div id="small-box">
                                        <div id="mark"></div>
                                        <div id="float-box"></div>
                                        <img src="/img/asusphone6.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 text-left">
                    <div class="outer1">
                        <a href="#">
                            <h5 class="title">ASUS ROG PHONE II</h5>
                            <hr>
                        </a>
                        <br><br>
                        <ul>
                            <p>商品特色</p>
                            <li>6.59 吋19.5:9 AMOLED (2340 x 1080) 螢幕</li>
                            <li>120Hz/1ms螢幕刷新率10-bit HDR顯示器</li>
                            <li>855 Plus(7奈米製程)高通處理器</li>
                            <li>12G RAM/512G ROM</li>
                            <li>AeroActive Cooler II主動冷卻技術</li>
			    <li>6000mAh高容量電池/QC4.0快充</li>
			    <li>48針自訂化USB 3.0 Type-C連接阜與專屬插槽</li>
			    <li>側邊充電設計支援前置揚聲器</li>
			    <li>雙環繞震動、耳機插孔眾多遊戲配件</li>
			    <li>搭載ROG HyperCharge 技術 6000mAh電力怪獸</li>
                        </ul>
                        <hr>
                        <h5>NT$ 25000</h5>
                        <hr>
                        <p>顏色：黑色<input type="radio" name="role" value="黑色">
                        </p>
                        <button class="btnshopping" href="#">加入購物車</button>
                        <button class="btnshopping" href="#">直接購買</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6"> 
                    <h4>連結</h4>
                    <ul>
                        <li><a href="3Chome.php">home</a></li>
                        <li><a href="applehome.php">apple</a></li>
                        <li><a href="asushome.php">ASUS</a></li>
                        <li><a href="home_samsung.php">三星</a></li>
                    </ul>
                    <ul>
                        <li><a href="MEN.html">歷年紀錄</a></li>
                        <li><a href="WOMEM.html">會員註冊</a></li>
                        <li><a href="KIDS.html">會員登入</a></li>  
                    </ul>
                </div>
                <div class="col-md-6" >
                    <h4>OFFICIAL SNS</h4>
                    <a href="https://www.facebook.com/asusclub.tw/"><i class="fab fa-facebook-square fa-2x"></i></a>
                    <a href="https://www.instagram.com/asus/"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="https://www.youtube.com/channel/UCCqkYSfnqjtWPV5AraoCpuw"><i class="fab fa-youtube-square fa-2x"></i></a>
                    
                </div>
            </div>
        </div>

    </footer>
</body>
</html>