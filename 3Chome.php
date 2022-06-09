<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.jpg" type="image/x-icon" />
    <title>3C網站關於</title>
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
                    <img src="img/logo.jpg" alt="">
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
                            <a class="dropbtn "href="Apple_Home.php">Apple</a>
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
                            <a class="dropbtn "href="Home_Samsung.php">Samsung</a>
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
            <section id="s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>關於3C購物網</h2>
                            <p>就是現在!使用3C的時代!
                                <br>我們隨時更新apple、asus和samsung的最新資訊
                                <br>將所有第一手資訊，帶給所有人
                                <br>讓所有消費者能開心的shopping。
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="last">
                <div class="container">
                    <div class="row">
                        <!-- 12:滿版 -->
                        <div class="col-md-12 text-center">
                            <h3>about us!</h3>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-6">
                                <div class="outer">
                                    <div class="upper">
                                        <img src="img/ipadinformation.jpg" alt="">
                                    </div>
                                    <div class="lower text-center">
                                        <h3>流行商品 安心品質 驚喜價格</h3>
                                        <span><i class=""></i>隨時更新流行商品。</span>
                                        <br>
                                        <span><i class=""></i>隨時把關商品及隨時優惠</span>
                                        <br>
                                        <span><i class=""></i>讓您有高品質的商品即驚喜價格輕鬆享受時尚!</span>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="outer">
                                    <div class="upper">
                                        <img src="https://www.ipce.com.tw/data/client/images/75/2/202007/17/10229/origin.jpg" alt="">
                                    </div>
                                    <div class="lower text-center">
                                        <h3>為各種情境場合，和不同風格的你而打造</h3>
                                        <span><i class=""></i>無論學生族、商務或家居時尚。</span>
                                        <br>
                                        <span><i class=""></i>依不同風格的你貼心設計，</span>
                                        <br>
                                        <span><i class=""></i>365天24小時，舒適有型每一天。</span>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="outer">
                                    <div class="upper">
                                        <img src="https://s.yimg.com/os/creatr-uploaded-images/2021-06/d5a7bfc0-c351-11eb-beda-16b6e83e42b5" alt="">
                                    </div>
                                    <div class="lower text-center">
                                        <h3>享受購物樂趣，發現全新的自己</h3>
                                        <span><i class=""></i>隨心所欲體驗從未嘗試的</span>
                                        <br>
                                        <span><i class=""></i>當季最新流行設計和色彩，</span>
                                        <br>
                                        <span><i class=""></i>沒有規則，沒有限制，</span>
                                        <br>
                                        <span><i class=""></i>樂享時尚無極限。</span>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="outer">
                                <div class="upper">
                                    <img src="img/logo.jpg" alt="">
                                </div>
                                <div class="lower text-center">
                                    <h3>第一手資訊</h3>
                                    <span><i class=""></i>不再矇在鼓裡</span>
                                    <br>
                                    <span>3C購物網要讓大家都在時代尖端，</span>
                                    <br>
                                    <span>將對消費者體驗不好降到最低，</span>
                                    <br>
                                    <span>創造能夠永續經營的事業。</span>
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
            </div>
        </div>

    </footer>
</body>
</html>