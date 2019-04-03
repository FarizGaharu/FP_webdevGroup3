<!doctype html>
<html>
    <head>
        <title>Laravel</title>
        
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: 'Roboto', sans-serif;
                user-select: none;
            }
        /**
        basically init every style Header used for the content of the web; meaning the middle part
        of the web, below the navigation bar as well as on top of the footer
        */
            header{
                background-image: linear-gradient(rgba(0,0,0,0.5),rgb(0,0,0,0.6)), url(https://www.worldfinance.com/wp-content/uploads/2018/03/Data-portability-1024x768.jpg);
                height: 100vh;
                height: 450px;
                background-size: cover;
                background-position: center;
            }
        /*Basically to stylize ul, li, and a
        note: ul li means that in only works with li that's inside a ul so
        it's like <ul><li>content here</li</ul> for ul li and
        <ul><li><a href="#">content here</a></li</ul>  while :hover means when
        your pointer interact with the element*/
            ul{
                float: right;
                list-style-type: none;
                margin-top: 25px;
            }

            ul li{
                display: inline-block;
            }

            ul li a{
                text-decoration: none;
                color:#F2F4FF;
                padding: 5px 20px;
                border: 1px solid transparent;
                transition: 0.6s ease;
                text-decoration: none
            }

            ul li a:hover{
                background-color: #F2F4FF;
                color:black;
                text-decoration: none

            }

            ul li.active a{
                background-color: #F2F4FF;
                color: black;
                text-decoration: none
            }

            /*basically another habit I obtain through coding HTML is that instead of
            using <div align="">contenthere</div> I prefer <div style="stylename">contenthere</div>*/
            .left {
                float: left;
            }

            h2{
                margin-top: 15px;
                margin-left: 15px;
                color:white;
                margin:center;
                border: 2px solid #F2F4FF;
                font-family: 'Fira Sans Condensed', sans-serif;
            }
            
            /*main is for the navbar and which happen to be the case as our first element in the
            html which is why it's on top. now max-width means to define the maximum width of the
            element while margin is to make the web itself determine the margin for you*/
            .main{
                max-width: 1500px;
                margin:auto;
            }

            /*to have absolute position means that it'll have the position like what it said on the style
            which means by default the element be on the top left corner. Remember to determine the position
            through top, left, right, bottom. It doesn't have to be percentage but it can also use other measurement
            such as px,vh, and so forth. for ex/ in .title top 50% and left 50% that means that it'll always have 50% of the website from top
            and 50% from the left.*/

            .title{
                position: absolute;
                top:30%;
                left:50%;
                transform: translate(-50%,-50%);
            }

            .title h1{
                color: #F2F4FF;
                font-size: 70px;
            }

            /*
            the footer basically now margin-50px is the reverse of margin 50px so instead of moving top it move from bottom.
            */
            #footer{
                background-color: rgba(0,0,0,0.5);
                position: relative;
                height: 30px;
                margin-top: -50px;
                clear:both;
            }

            .tcenter {
            text-align: center;
            color: #F2F4FF;
            }

            #sec1{
                height: AUTO;
                background-image: linear-gradient(rgba(0,0,0,0.3),rgb(242,244,255,1));
                color: #333;
                text-shadow: 1px 2px 3px gray;
                
            }

            .heading1{
                color:#333;
                padding-top:30px;
                font-size: 50px;
            }
            .heading2{
                color:#F2F4FF;
                padding-top:30px;
                font-size: 38px;
            }
            
            p {
                    padding-top: 30px;
                    padding-bottom: 30px;
                    color:#333;
                    white-space: pre;
            }

            span.copyright{
                text-align: center;
                color: #F2F4FF;
                font-size: 10px;
                justify-content: center;
            }

            .grid-container {
                display: flex;
                grid-template-columns: auto auto auto;
                background-image: url(http://www.hdwallpaperspulse.com/wp-content/uploads/2017/09/26/dark-spot-background.jpg);
                padding: 0px;
                overflow:hidden;
                height: 550px;
                -webkit-flex-flow: row wrap;
                justify-content: space-evenly;
            }

            .grid-item {
                display: block;
                background-color: #F2F4FF;
                border: 1px solid rgba(0, 0, 0, 0.8);
                font-size: 30px;
                margin-top:105px;
                width: 300px;
                height: 430px;
                text-align: center;
            }

            i{
                position: relative;
                padding-top: 40px;
            }

            p.featuretitle{
                padding-top: 10px;
                font-size: 20px;
                color: #333;
                padding-left: 10px;
            }
            
            #sec2{
                margin-top:0px;
            }

            footer{
                height: 40px;
                background-color: #1c1c1c;
            }
        </style>
    </head>
    <body>
        <header>
        <div class="main">
            <div class="left">
                <h2>ABANGCOST.ME</h2>
            </div>
            <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="https://laravel.com/docs">Forecast</a></li>
                    <li><a href="meetourteam">About Us</a></li>
                    <li><a href="signup">Log In</a></li>
            </ul>
        </div>
        <div class="title">
            <h1>ABANGCOST</h1>
            <div class="tcenter"><strong>We plan it, You keep it!</strong></span></div>
        </div>
        </header>
        <section id="sec1">
            <div class="tcenter">
                <h1 class="heading1">WHAT IS ABANGCOST?</h1>
                <p>ABANGCOST IS A WEBSITE IN WHICH USERS ARE ALLOWED TO FORECAST THEIR SPENDINGS. WE ARE STRIVING FOR SIMPLICITY AS WELL AS EFFECIENCY FOR ALL USERS TO BE ABLE TO
USE THIS WEB EASILY. CURRENTLY THIS WEBSITE AREN'T MOBILE FRIENDLY WHICH MEANS YOU COULD ONLY OPEN THE WEB THROUGH PC AND LAPTOP. OUR PRIMARY TARGET ARE FOR 
UNIVERSITY STUDENT OR WORKERS BUT THAT DOESN'T STOP US TRYING TO MAKE A WEBAPP THAT SUITS FOR EVERYONE.</p>
            </div>
        </section>
        
<section id="sec2">
        <div class="grid-container">
            <h1 class="heading2">FEATURES</h1>
            <div class="grid-item">
                    <p class="featuretitle"><strong>FORECAST</strong></p><span style="font-size: 100px; color: Tomato;"><i class="fab fa-chromecast"></i></span>
                    <p>We provide the service 
to forecast your
spendings.
                    </p>
                </div>
            <div class="grid-item">
                    <p class="featuretitle"><strong>DOWNLOAD</strong></p><span style="font-size: 105px; color: Dodgerblue;"><i class="fas fa-download"></i></span>
                    <p>With a single button
you can download
your forecast result.
                                                </p>
                </div>
            <div class="grid-item">
                    <p class="featuretitle"><strong>ARTICLE</strong></p><span style="font-size: 110px; color: Mediumslateblue;"><i class="fas fa-newspaper"></i></span>
                    <p>We provide articles
that may help you
on avoiding 
overbudgeting.
                                                </p>
                </div>
        </div>
</section>
        <footer>
            <span class="copyright">abangcost was created by group_  3(c)2019</span>
</footer>
    </body>
</html>
