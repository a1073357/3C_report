<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.jpg" type="image/x-icon" />
    <title>samsung系列首頁</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d9ef39df6c.js" crossorigin="anonymous"></script>
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
    <section id="intro">
            <div class="container">
                <div class="row">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="https://images.samsung.com/is/image/samsung/assets/levant/offer/buy-s22-lebanon/1440x640-LB_IQ-EN.jpg?$FB_TYPE_A_JPG$" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://images.samsung.com/is/image/samsung/assets/tw/2202/pcd/tablets/PC_01_PCD_Curation-Card_Main-KV_wo_silver_1440x640.jpg?$1440_640_JPG$" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://online-samsung.ru/sites/default/files/book2-pro_1200x430-02.jpg" alt="Third slide">
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
                </div>
            </div>
    </section>

    <section id="last">
        <div class="container">
            <div class="row">
                <!-- 12:滿版 -->
                <div class="col-md-12 text-center">
                    <h3>最新資訊</h3>
                </div>
            </div>
                <div class="row text-center">
                    <div class="col-md-6" id="close">
                        <div class="outer">
                            <div class="rwd-map">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/pjK9XLSfDT0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" id="close1">
                        <div class="outer">
                            <div class="lower text-center">
                                <br><br><br><br><br><br><br>
                                    <h3 style="color: darkgoldenrod;">Galaxy Z Fold3 | Z Flip3 with Flex mode| Samsung</h3>
                                <br><br><br><br><br><br><br>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6" id="close">
                            <div class="outer">
                                <div class="rwd-map">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/GaF3pH1bPg4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" id="close1">
                            <div class="outer">
                                <div class="lower text-center">
                                    <br><br><br><br><br><br><br><br>
                                        <h3 style="color: darkgoldenrod;">Galaxy S22 Ultra Official film | Samsung</h3>
                                        <br><br><br><br><br><br><br><br>
                                        </div>
                                </div>
                            </div>
                                <div class="col-md-6" id="close">
                                    <div class="outer">
                                        <div class="rwd-map">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/H9XTidnRfgI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" id="close1">
                                    <div class="outer">
                                        <div class="lower text-center">
                                            <br><br><br><br><br><br><br><br>
                                                <h3 style="color: darkgoldenrod;">Galaxy Tab S8 Series | Samsung</h3>
                                                <br><br><br><br><br><br><br><br>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="close">
                                        <div class="outer">
                                            <div class="rwd-map">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/0bR7PznQ15k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="close1">
                                        <div class="outer">
                                            <div class="lower text-center">
                                                <br><br><br><br><br><br><br>
                                                    <h3 style="color: darkgoldenrod;">Galaxy Book2 Pro 360: Official Unboxing | Samsung</h3>
                                                    <br><br><br><br><br><br><br>
                                                    </div>
                                            </div>
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
                        <li><a href="https://www.samsung.com/tw/">關於SAMSUNG</a></li>
                        <li><a href="https://www.samsung.com/tw/samsung-experience-store/locations/">店鋪資訊</a></li>
                    </ul>
                    <ul>
                        <li><a href="login.html">會員註冊/登入</a></li>   
                    </ul>
                </div>
                <div class="col-md-6" >
                    <h4>OFFICIAL SNS</h4>
                    <a href="https://www.facebook.com/SamsungTaiwan/"><i class="fab fa-facebook-square fa-2x"></i></a>
                    <a href="https://www.instagram.com/samsungtaiwan/"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="https://shop.samsung.com/tw/event-im-buy-mobile-2021-lineshopping/"><i class="fab fa-line fa-2x"></i></a>
                    <a href="https://www.youtube.com/c/Samsung/videos"><i class="fab fa-youtube-square fa-2x"></i></a>
                    
                </div>
            </div>
        </div>

    </footer>
</body>
</html>