<?php
include('layout/header.php');
?>
<!-- Header Ends -->
<section class="banner-area">
    <div class="banner-overlay">
        <div class="banner-text text-center">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <div class="col-xs-12">
                        <!-- Title Starts -->
                        <h2 class="title-head">About <span>Us</span></h2>
                        <!-- Title Ends -->
                        <hr>
                        <!-- Breadcrumb Starts -->
                        <ul class="breadcrumb">
                            <li><a href="index.php"> home</a></li>
                            <li>About</li>
                        </ul>
                        <!-- Breadcrumb Ends -->
                    </div>
                </div>
                <!-- Section Title Ends -->
            </div>
        </div>
    </div>
</section>
<!-- About Section Starts -->
<section class="about-page">
    <div class="container">
        <!-- Section Content Starts -->
        <div class="row about-content">
            <!-- Image Starts -->
            <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                <div class="row">
                    <div class="col-md-12 p-0 mb-1" >
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                            {
                            "symbols": [
                            {
                                "proName": "FOREXCOM:SPXUSD",
                                "title": "S&P 500"
                            },
                            {
                                "proName": "FOREXCOM:NSXUSD",
                                "title": "US 100"
                            },
                            {
                                "proName": "FX_IDC:EURUSD",
                                "title": "EUR/USD"
                            },
                            {
                                "proName": "BITSTAMP:BTCUSD",
                                "title": "Bitcoin"
                            },
                            {
                                "proName": "BITSTAMP:ETHUSD",
                                "title": "Ethereum"
                            },
                            {
                                "description": "Crude Oil",
                                "proName": "NYMEX:CL1!"
                            },
                            {
                                "description": "Gold Futures",
                                "proName": "COMEX:GC1!"
                            }
                            ],
                            "showSymbolLogo": true,
                            "colorTheme": "dark",
                            "isTransparent": false,
                            "displayMode": "adaptive",
                            "locale": "en"
                        }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                    <div class="col-md-6 pl-0 pr-1 mt-1">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                            "symbol": "FX:EURUSD",
                            "width": "100%",
                            "height": "100%",
                            "locale": "en",
                            "dateRange": "1D",
                            "colorTheme": "dark",
                            "trendLineColor": "rgba(11, 83, 148, 1)",
                            "underLineColor": "rgba(41, 98, 255, 0.3)",
                            "underLineBottomColor": "rgba(41, 98, 255, 0)",
                            "isTransparent": false,
                            "autosize": true,
                            "largeChartUrl": ""
                        }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    
                    </div>
                    <div class="col-md-6 pl-0 pr-1 mt-1">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                            "symbol": "FX:GBPUSD",
                            "width": "100%",
                            "height": "100%",
                            "locale": "en",
                            "dateRange": "1D",
                            "colorTheme": "dark",
                            "trendLineColor": "rgba(11, 83, 148, 1)",
                            "underLineColor": "rgba(41, 98, 255, 0.3)",
                            "underLineBottomColor": "rgba(41, 98, 255, 0)",
                            "isTransparent": false,
                            "autosize": true,
                            "largeChartUrl": ""
                        }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    
                    </div>
                    <div class="col-md-6 pl-0 pr-1 mt-1">
                                <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                            "symbol": "FX:EURJPY",
                            "width": "100%",
                            "height": "100%",
                            "locale": "en",
                            "dateRange": "1D",
                            "colorTheme": "dark",
                            "trendLineColor": "rgba(11, 83, 148, 1)",
                            "underLineColor": "rgba(41, 98, 255, 0.3)",
                            "underLineBottomColor": "rgba(41, 98, 255, 0)",
                            "isTransparent": false,
                            "autosize": true,
                            "largeChartUrl": ""
                        }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    
                    </div>
                    <div class="col-md-6 pl-0 pr-1 mt-1">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                            "symbol": "COINBASE:BTCUSD",
                            "width": "100%",
                            "height": "100%",
                            "locale": "en",
                            "dateRange": "1D",
                            "colorTheme": "dark",
                            "trendLineColor": "rgba(11, 83, 148, 1)",
                            "underLineColor": "rgba(41, 98, 255, 0.3)",
                            "underLineBottomColor": "rgba(41, 98, 255, 0)",
                            "isTransparent": false,
                            "autosize": true,
                            "largeChartUrl": ""
                        }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    
                    </div>
                    <div class="col-md-6 pl-0 pr-1 mt-1">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>

                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                            "symbol": "BINANCE:ETHUSDT",
                            "width": "100%",
                            "height": "100%",
                            "locale": "en",
                            "dateRange": "1D",
                            "colorTheme": "dark",
                            "trendLineColor": "rgba(11, 83, 148, 1)",
                            "underLineColor": "rgba(41, 98, 255, 0.3)",
                            "underLineBottomColor": "rgba(41, 98, 255, 0)",
                            "isTransparent": false,
                            "autosize": true,
                            "largeChartUrl": ""
                        }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    
                    </div>
                    <div class="col-md-6 pl-0 pr-1 mt-1">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                            "symbol": "BINANCE:XRPUSDT",
                            "width": "100%",
                            "height": "100%",
                            "locale": "en",
                            "dateRange": "1D",
                            "colorTheme": "dark",
                            "trendLineColor": "rgba(11, 83, 148, 1)",
                            "underLineColor": "rgba(41, 98, 255, 0.3)",
                            "underLineBottomColor": "rgba(41, 98, 255, 0)",
                            "isTransparent": false,
                            "autosize": true,
                            "largeChartUrl": ""
                        }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                    
                </div>
                
            </div>
            <!-- Image Ends -->
            <!-- Content Starts -->
            <div class="col-sm-12 col-md-7 col-lg-6">
                <div class="feature-about">
                    <h3 class="title-about">WHO WE ARE</h3>
                    <p>Fxtm capital growth is a registered investment firm based in United States of America and United Kingdom.
                        our platform allows you trade and buy into top options available on the market.
                        Our Artificial Intelligence tracks the investment strategies of the world’s top billionaires. 
                        Investors themselves, they decided to look to billionaire investors for guidance, and with this we've been able to give our customers a system
                        that makes it easy for them to invest and also gain the full benefits of increased profits. 
                    </p>
                </div>
                <div class="feature-about">
                    <h3 class="title-about risk-title"><i class="fa fa-warning"></i> risk warning</h3>
                    <p>All investment history of our investment options are just a guide to show you the travel of an investment option over time. This entails that an Investment option is subject to change and it's history does not really influence its future returns.</p>
                </div>
                </div>
            <!-- Content Ends -->
            
        </div>
        <!-- Section Content Ends -->
    </div><!--/ Content row end -->
</section>
<!-- About Section Ends -->

<!-- Quote and Chart Section Starts -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2 p-0">
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                    {
                    "symbols": [
                    {
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500"
                    },
                    {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "Nasdaq 100"
                    },
                    {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR/USD"
                    },
                    {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "BTC/USD"
                    },
                    {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "ETH/USD"
                    }
                    ],
                    "showSymbolLogo": true,
                    "colorTheme": "dark",
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "locale": "en"
                }
                    </script>
                </div>
            </div>
            <div class="col-md-12 p-0" style="height: 600px !important;">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                    {
                    "width": "100%",
                    "height": "100%",
                    "currencies": [
                    "EUR",
                    "USD",
                    "JPY",
                    "GBP",
                    "CHF",
                    "AUD",
                    "CAD",
                    "NZD",
                    "CNY"
                    ],
                    "isTransparent": false,
                    "colorTheme": "dark",
                    "locale": "en"
                }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </div>
</section>
<!-- Quote and Chart Section Ends -->
<section class="testimonies" style="padding: 60px 0;">
    <div class="container">
        <div class="row text-center">
            <h2 class="title-head">Users <span>testimonies</span></h2>
            <div class="title-head-subtitle">
                <p>Hear what investors are saying about us.</p>
            </div>
        </div>
        <div class="row" style="padding: 15px 0;">
            <div id="video-carousel" class="owl-carousel owl-theme">
                <div class="item text-center">
                    <video width="280" height="280" controls>
                        <source src="assets/videos/user-video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="item text-center">
                    <video width="280" height="280" controls>
                        <source src="assets/videos/user-video-2.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="item text-center">
                    <video width="280" height="280" controls>
                        <source src="assets/videos/user-video-4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="item text-center">
                    <video width="280" height="280" controls>
                        <source src="assets/videos/user-video-3.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="item text-center">
                    <video width="280" height="280" controls>
                        <source src="assets/videos/user-video-5.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="item text-center">
                    <video width="280" height="280" controls>
                        <source src="assets/videos/user-video-1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <div class="title-head-subtitle text-center style="margin-top: 15px 0;">
            <p>Words from our investors.</p>
        </div>
        <div class="row">
            <div id="img-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="user-img-testimony text-center">
                        <p>&quot; Great service! I have been worried about investing. But when I came here. I don't have to worry anymore.&quot;</p>
                        <!-- <img class="text-center" src="/assets/images/testimony/user-1.png"  alt="user" />  -->
                        <span class="color-blue">JOY KELLY</span> - United Kingdom
                    </div>
                </div>
                <div class="item">
                    <div class="user-img-testimony text-center">
                        <p>&quot;
                            This is one of the best companies I've invested in, they give high profits and they are responsible for any loss. 
                            Thank you Fxtm capital growth.
                            .&quot;
                        </p>
                        <!-- <img class="text-center" src="/assets/images/testimony/user-2.png"  alt="user" />  -->
                        <span class="color-blue">Bongani Kubeka</span> - Botswana
                    </div>
                </div>
                <div class="item">
                    <div class="user-img-testimony text-center">
                        <p>&quot;
                            My brother recommended www.priortradeoption.org  to me, and I am very happy to get profit by their trading service.&quot;</p>
                        <!-- <img class="text-center" src="/assets/images/testimony/user-3.png"  alt="user" />  -->
                        <span class="color-blue">BILLY MADAN</span> - USA
                    </div>
                </div>
                <div class="item">
                    <div class="user-img-testimony text-center">
                        <p>&quot; OMG! I only started using Fxtm capital growth a month back and i just cannot belive by how much my balance has grown. 
                            www.priortradeoption.org  Rocks! &quot;</p>
                        <!-- <img class="text-center" src="/assets/images/testimony/user-4.png"  alt="user" />  -->
                        <span class="color-blue">Jane Matthew</span> - Canada
                    </div>
                </div>
                <div class="item">
                    <div class="user-img-testimony text-center">
                        <p>&quot; Best trading platform ever with amazing and easy to use interface. 
                            I don't think I can sell their services enough, let my account balance do it for me.&quot;</p>
                        <!-- <img class="text-center" src="/assets/images/testimony/user-5.png"  alt="user" />  -->
                        <span class="color-blue">Henry dever</span> - United Kingdom
                    </div>
                </div>
                <div class="item">
                    <div class="user-img-testimony text-center">
                        <p>&quot;This platform is the best I'll give them that, 
                            making decent amount of money week in week out and making withdrawals is just about as easy as they come. 
                            &quot;</p>
                        <!-- <img class="text-center" src="/assets/images/testimony/user-6.png"  alt="user" />  -->
                        <span class="color-blue">Sujani Devabathini Bandi</span> - India
                    </div>
                </div>
                <div class="item">
                    <div class="user-img-testimony text-center">
                        <p>&quot;I'm so excited, I give gratitude to the entire staff of Fxtm capital growth, 
                            I have received my profit of $4000, thank you all especially to my manager..&quot;</p>
                        <!-- <img class="text-center" src="/assets/images/testimony/user-7.png"  alt="user" />  -->
                        <span class="color-blue">Jordan brooks Thomas</span> - USA
                    </div>
                </div>
                <div class="item">
                    <div class="user-img-testimony text-center">
                        <p>&quot;This is what you call online trading, I had doubt at first but I decided to try with just little and watched it grow to something big.
                                Thank You Fxtm capital growth.

                            .&quot;</p>
                        <!-- <img class="text-center" src="/assets/images/testimony/user-8.png"  alt="user" />  -->
                        <span class="color-blue">Mary Matt’s weiser</span> - USA
                    </div>
                </div>
                <div class="item">
                    <div class="user-img-testimony text-center">
                        <p>&quot;I've joined a lot of trading websites. Fxtm capital growth is the only one that has consistently made me profit in the long term. very happy customer and I will be buying Gold Plan this weekend so that should say it all!&quot;</p>
                        <!-- <img class="text-center" src="/assets/images/testimony/user-9.png"  alt="user" />  -->
                        <span class="color-blue">TASHA LEWIS </span> - South Africa
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>



<!-- Call To Action Section Starts -->
<section class="call-action-all">
    <div class="call-action-all-overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Call To Action Text Starts -->
                    <div class="action-text">
                        <h2>Get Started Today With Fxtm capital growth</h2>
                        <p class="lead">Let us help get you on the right track as you start your investment journey!</p>
                    </div>
                    <!-- Call To Action Text Ends -->
                    <!-- Call To Action Button Starts -->
                    <p class="action-btn"><a class="btn btn-primary" href="user/signup.php">Register Now</a></p>
                    <!-- Call To Action Button Ends -->
                </div>
            </div>
        </div>
    </div>
</section>        
<!-- Call To Action Section Ends -->
<!-- Footer Starts -->
<?php
include('layout/footer.php');
?>