<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <!-- Mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>StockOverflow</title>
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/stockoverflow.css"/>
        <link rel="shortcut icon" href="assets/imgs/favicon.ico" />
        <link rel="bookmark" href="assets/imgs/favicon.ico" />
        <!-- PWA -->
        <link rel="manifest" href="manifest.json">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/imgs/ios-icon-180x180.jpg" />
        <!-- jQuery & Bootstrap & Others -->
        <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
        <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
        <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
        <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
        <script src="assets/js/stockoverflow.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <!-- MySQL -->
        <?php
            $link = mysqli_connect('127.0.0.1','root','','stockoverflow')or die("無法開啟MySQL資料庫連接!<br/>");
            $sumResult = mysqli_query($link,"SELECT SUM(money) FROM donation");
            $countResult = mysqli_query($link,"SELECT COUNT(money) FROM donation");
            $sum = mysqli_fetch_array($sumResult)[0];
            $num = mysqli_fetch_array($countResult)[0];
        ?>
    <head>
    <body id="home">
        <!-- 頁面導航Page Navigation -->
        <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/imgs/logo.svg" loading="lazy" alt="">
                </a>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">                     
                        <li class="nav-item">
                            <a class="nav-link" href="#service">服務項目</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">關於我們</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#price">最新價格</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#plan">贊助計畫</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#progress">募資進度</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#donate">贊助我們</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">首頁</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End -->

        <!-- 頁首Page Header -->
        <header class="header">
            <div class="overlay">
                <h1 class="subtitle">專業虛擬貨幣與股票交易所</h1>
                <h1 class="title">StockOverflow</h1>  
            </div> 
            <!--圓弧--> 
            <div class="shape">
                <svg viewBox="0 0 1500 200">
                    <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
                </svg>
            </div>  
            <div class="mouse-icon"><div class="wheel"></div></div>
        </header>
        <!-- End -->

        <!-- 服務項目Service Section -->
        <section  id="service" class="section pt-0">
            <div class="container">
                <h6 class="section-title text-center s" style="font-size:30px; font-weight:bold;">服務項目</h6>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <small class="text-primary font-weight-bold">01</small>
                                <h5 class="card-title mt-3 server-section-title"> 交易  <h5>
                                <p class="mb-0 server-section-text">提供強大的交易平台<br>滿足你的專業交易需求<br>享受加密貨幣與股票交易體驗</p>
                                <img class="mt-3 server-section-icon" src="assets/imgs/trading.png" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <small class="text-primary font-weight-bold">02</small>
                                <h5 class="card-title mt-3 server-section-title">理財<h5>
                                <p class="mb-0 server-section-text">提供各種不同的理財工具<br>開始賺取屬於你的資金<br>安全又簡單的投資</p>
                                <img class="mt-3 server-section-icon" src="assets/imgs/piggy.png" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <small class="text-primary font-weight-bold">03</small>
                                <h5 class="card-title mt-3 server-section-title">支付<h5>
                                <p class="mb-0 server-section-text">提供無國界的支付方式<br>透過加密貨幣輕鬆快速的支付<br>以零手續費的方式進行</p>
                                <img class="mt-3 server-section-icon" src="assets/imgs/payment.png" loading="lazy">
                            </div>
                        </div>
                    </div>              
                </div>
            </div>
        </section>
        <!-- End -->

        <!-- 關於我們About Section -->
        <section class="section" id="about">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                        <h6 class="section-title mb-0 about-section-title">關於我們</h6>
                        <h6 class="section-subtitle mb-4 about-section-subtitle">專業虛擬貨幣與股票交易所</h6>
                        <p>StockOverflow是由元智大學資工系學生自2022創立，目前有低於100萬的用戶註冊，目前非全球最活躍的加密貨幣與股票交易所，且StockOverflow的加密貨幣與股票投資工具相當多元，其中包含現貨交易、合約交易、槓桿交易、理財等等，無論是新手或老手都易於使用。</p>
                        <img class="w-100 mt-3 shadow-sm" src="assets/imgs/about.jpg" loading="lazy" alt="">
                    </div>
                    <div class="col-md-6 pl-md-5">
                        <div class="row">
                            <div class="col-6">
                                <img class="w-100 shadow-sm" src="assets/imgs/about-1.jpg" loading="lazy" alt="">
                            </div>
                            <div class="col-6">
                                <img class="w-100 shadow-sm" src="assets/imgs/about-2.jpg" loading="lazy" alt="">
                            </div>
                            <div class="col-12 mt-4">
                                <p>值得您信賴的交易所StockOverflow致力於透過嚴格的協定以及領先業界的技術措施來保護使用者。</p>
                                <p class="about-section-text"><b>用戶資產安全基金</b><br></p>
                                <p>StockOverflow將所有交易費用的 10% 儲存在資產安全基金中，以保護用戶資金。</p>
                                <p class="about-section-text"><b>個人化的存取控制</b><br></p>
                                <p>先進的存取控制讓您限制存取您帳戶的設備和地址，讓您可以安心。</p>
                                <p class="about-section-text"><b>高端資料加密保護</b><br></p>
                                <p>您的交易資料透過端到端加密保護，確保只有您可以存取您的個人資訊。</p>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </section>
        <!-- End -->

        <!-- 最新價格Price Section -->
        <section id="price" class="section price-section">
            <div class="container">
                <h6 class="section-title text-center price-section-title">最新價格</h6>
                <h6 class="section-subtitle mb-5 text-center price-section-subtitle">立即尋找最合適的價格進行交易</h6>
                <div class="filters">
                    <a href="#" data-filter=".index">指數</a>
                    <a href="#" data-filter=".crypto">加密</a>
                    <a href="#" data-filter=".stock">股票</a>
                    <a href="#" data-filter=".futures">期貨</a>
                </div>
                <div class="price-container" > 
                    <div class="index">
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "NASDAQ:IXIC", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "CURRENCYCOM:US30", "width": "100%" }
                            </script>
                        </div>
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "NASDAQ:NDX", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "NASDAQ:SOX", "width": "100%" }
                            </script>
                        </div>
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "INDEX:TAIEX", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "TPEX:STOCK", "width": "100%" }
                            </script>
                        </div>
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "SSE:000001", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "INDEX:NKY", "width": "100%" }
                            </script>
                        </div>
                    </div>
                    <div class="crypto">
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "BINANCE:BTCUSDT", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "BINANCE:ETHUSDT", "width": "100%" }
                            </script>
                            </div>
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "BINANCE:SOLUSDT", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "BINANCE:BNBUSDT", "width": "100%" }
                            </script>
                            </div>
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "BINANCE:APEUSDT", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "BINANCE:APTUSDT", "width": "100%" }
                            </script>
                            </div>
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "BINANCE:XRPUSDT", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "BINANCE:DOGEUSDT", "width": "100%" }
                            </script>
                        </div>
                    </div>
                    <div class="stock">
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "NASDAQ:TSLA", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "NASDAQ:AAPL", "width": "100%" }
                            </script>
                        </div>
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "NASDAQ:NFLX", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "NASDAQ:GOOGL", "width": "100%" }
                            </script>
                        </div>
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "NASDAQ:AMZN", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "NASDAQ:META", "width": "100%" }
                            </script>
                        </div>
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "NASDAQ:NVDA", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            {"symbol": "NASDAQ:MSFT", "width": "100%" }
                            </script>
                        </div>
                    </div>
                    <div class="futures">
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "NYMEX:CL1!", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "COMEX:GC1!", "width": "100%"  }
                            </script>
                        </div>
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "NYMEX:NG1!", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "COMEX:HG1!", "width": "100%" }
                            </script>
                        </div>
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "COMEX:SI1!", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "CBOT:ZC1!", "width": "100%" }
                            </script>
                        </div>
                        <div class="widget-container">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "CBOT:ZS1!", "width": "100%" }
                            </script>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                            { "symbol": "CBOT:ZW1!", "width": "100%" }
                            </script>
                        </div>
                    </div>
            </div>            
        </section>
        <!-- End -->

        <!-- 募資計畫Plan Section -->
        <section class="section" id="plan">
            <div class="container">
                <h6 class="section-title mb-0 text-center plan-section-title">募資計畫</h6>
                <h6 class="section-subtitle mb-5 text-center plan-section-subtitle">幫助我們成為最多人使用的交易平台</h6>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 mb-4">
                            <img class="card-img-top w-100" src="assets/imgs/nft.jpg" loading="lazy" alt="">
                            <div class="card-body">                         
                                <h6 class="card-title plan-section-card-title">獲得平台NFT</h6>
                                <p class="plan-section-card-text">將享有交易手續費折扣等許多賦能</p>
                                <a href="javascript:void(0)" class="small text-muted"><p class="plan-section-card-button">查看更多賦能</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 mb-4">
                            <img class="card-img-top w-100" src="assets/imgs/airdrop.jpg" loading="lazy" alt="">
                            <div class="card-body">                         
                                <h6 class="card-title plan-section-card-title">參與加密貨幣空投</h5>
                                <p class="plan-section-card-text">立即獲取資格參加空投</p>
                                <a href="javascript:void(0)" class="small text-muted"><p class="plan-section-card-button">查看空投內容</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 mb-4">
                            <img class="card-img-top w-100" src="assets/imgs/market.jpg" loading="lazy" alt="">
                            <div class="card-body">                         
                                <h6 class="card-title plan-section-card-title">享受優惠借貸利率</h5>
                                <p class="plan-section-card-text">提供優惠利率進行借貸</p>
                                <a href="javascript:void(0)" class="small text-muted"><p class="plan-section-card-button">查看借貸利率</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End -->

        <!-- 募資進度Progress Section -->
        <section id="progress" class="section">
            <div class="container">
                <h6 class="section-title text-center mb-0 progress-section-title">募資進度</h6>
                <h6 class="section-subtitle mb-5 text-center progress-section-subtitle">期待您成為其中一員</h6>
                <div class="row">
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-3">
                                    <div class="media-body">
                                        <h5 class="card-title mt-3 progress-section-card-title">人數</h5>
                                        <h5 class="card-title mt-3 progress-section-card-text"><?php echo $num; ?></h5>
                                        <img class="mt-3 progress-section-card-image" src="assets/imgs/people.png" loading="lazy">     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-3">
                                    <div class="media-body">
                                        <h5 class="card-title mt-3 progress-section-card-title">金額</h5>
                                        <h5 class="card-title mt-3 progress-section-card-text"><?php echo $sum; ?></h5>
                                        <img class="mt-3 progress-section-card-image" src="assets/imgs/money.png" loading="lazy">      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-3">
                                    <div class="media-body">
                                        <h5 class="card-title mt-3 progress-section-card-title">目標</h5>
                                        <h5 class="card-title mt-3 progress-section-card-text">1,000,000</h5>
                                        <img class="mt-3 progress-section-card-image" src="assets/imgs/target.png" loading="lazy">        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End  -->
        
        <!-- 贊助我們Donate Section -->
        <section id="donate" class="section has-img-bg pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 my-3">
                        <h6 class="mb-0">電話</h6>
                        <p class="mb-4">(03) &nbsp4638800</p>
                        <h6 class="mb-0">地址</h6>
                        <p class="mb-4">桃園市32003 中壢區遠東路135號</p>
                        <h6 class="mb-0">電子郵件</h6>
                        <p class="mb-0">stockoverflow@gmail.com</p>
                    </div>
                    <div class="col-md-7">
                        <form action="donate.php" method="post" onsubmit="return  Swal.fire({
                            title: 'Thank you !',
                            text: '感謝您的贊助，您的贊助是我們前進的動力!',
                            icon: 'success' });">
                            <h4 class="mb-4 donate-section-title">贊助我們</h4>
                            <div class="form-row">
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="Name" pattern="{2,100}" required>
                                </div> 
                                <div class="form-group col-sm-4">
                                    <input type="text" class="form-control text-white rounded-0 bg-transparent" name="phone" placeholder="Phone" pattern="09\d{8}" required>
                                </div>                        
                            <div class="form-group col-sm-4">
                                    <input type="text" class="form-control text-white rounded-0 bg-transparent" name="money" placeholder="Money (TWD)" pattern="[1-9]{1}[0-9]{0,5}" required>
                                </div>
                                <div class="form-group col-12">
                                    <input type="email" class="form-control text-white rounded-0 bg-transparent" name="email" placeholder="Email" pattern="^(?![_.-])((?![_.-][_.-])[a-zA-Z\d_.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}$" required>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group" style="padding-left: 13px; color: #6c757d">
                                    <label><input type="checkbox" name="agree"> &nbsp同意接收更多資訊</label>
                                </div>
                                <div class="form-group col-12 mb-0">
                                    <button type="submit" class="btn btn-primary rounded w-md mt-3">送出</button>
                                </div>                          
                            </div>                          
                        </form>
                    </div>
                </div>
                <!-- 頁尾Page Footer -->
                <footer class="mt-5 py-4 border-top border-secondary">
                    <p class="mb-0 small text-center"><br> StockOverflow &copy; <script>document.write(new Date().getFullYear())</script> & Support by Leadmark</br></p>     
                </footer>
                <!-- End -->  
            </div>
        </section>
        <!-- End -->  
    </body>
</html>
