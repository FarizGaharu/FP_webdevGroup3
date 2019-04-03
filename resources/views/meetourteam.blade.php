<!--Author notes:
---------------------
Front End created by: Christopher Turman
Back End created by:Titan Russo
Deployment by:Fariz Ihsan Yazid
Thank you for taking your time reading this message, I hope that the author's note may help you in your coding practice or in your project.
-->

<!doctype html>
<html>
    <head>
        <title>abangcost</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed" rel="stylesheet">
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
                background-image: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.5)), url(https://static.dezeen.com/uploads/2018/10/interiors-news-offices-hero-1-1704x959.jpg);
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
                color:#fff;
                padding: 5px 20px;
                border: 1px solid transparent;
                transition: 0.6s ease;
            }

            ul li a:hover{
                background-color: #fff;
                color:black;

            }

            /*basically another habit I obtain through coding HTML is that instead of
            using <div align="">contenthere</div> I prefer <div class="stylename">contenthere</div>*/
            .left {
                float: left;

            }

            h2.logo{
                margin-top: 15px;
                margin-left: 15px;
                color:white;
                margin:center;
                border: 2px solid #fff;
                font-family: 'Roboto', sans-serif;
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
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
            }

            .title h1{
                color: #fff;
                font-size: 70px;
            }

            /*a bit misleading but it's for the meet the team positioning*/
            .center{
                position: absolute;
                left:50%;
                top:15%;
                transform: translate(-50%,-50%);
            }

            /*basically to centering the element*/
            .middle{
                position: absolute;
                top:30%;
                left:50%;
                transform: translate(-50%,-50%);
            }

            /*the container for the meet the team member but I card seems a bit more appropriate*/
            .card{
                cursor: pointer;
                width: 250px;
                height: 380px;
                float: left;
                display: block;
            }

            /*the side of the card basically any image a lot bigger than the card will be hidden*/
            .front, .back{
                width: 250px;
                height: 100%;
                overflow:hidden;
                backface-visibility: hidden;
                position: absolute;
                transition: transform .6s linear;
            }

            /*the property of the image basically so no matter how wide the image is it'll have 100% of the image height*/
            .front img{
                height: 100%;
            }

            /*reasons why it was not merge with the top part due to the different transformation "animation" of the front
            and back card have*/
            .front{
                transform: perspective(600px) rotateY(0deg);
            }

            .back{
                background: #f1f1f1;
                transform: perspective(600px) rotateY(180deg);
            }

            /*the back content self explainatory; it change the color and centered.*/
            .back-content{
                color: #2c3e50;
                text-align:center;
                width: 100%
            }

            /*for the text icon I used from a website called fontawesome which through reading from the documentation
            use fas or fab*/
            i.fas,i.fab {
                margin: 10px;
                color:#2c3e50;
            }

            i.fas,i.fab{
                display:inline-flex;
                width:40px;
                height: 40px;
                justify-content: center;
                align-items: center;
                color:#2c3e50;
                font-size: 18px;
                transition 0.4s;
                border-radius:50%;
                
            }

            i.fas,i.fab:hover{
                background: #2c3e50;
                color:white;
            }

            /*to point out if the card hove in which part and it'll "animate" automatically*/
            .card:hover > .front{
                transform: perspective(600px) rotateY(-180deg);
            }

            .card:hover > .back{
                transform: perspective(600px) rotateY(0deg);
            }

            h2.contenttitle{
                color: #F2F4FF;
                font-size: 70px;
            }

            #a{
                margin-top:0px;
                height: 380px;
                background-image: linear-gradient(rgba(0,0,0,0.3),rgb(242,244,255,1));
            }

            div.con{
                position: absolute;
                left:50%;
                transform: translate(-50%,0);
            }

            #sec1{
                height: AUTO;
                background-image: linear-gradient(rgb(242,244,255,1),rgba(0,0,0,0.3));
                color: #333;
                text-shadow: 1px 2px 3px gray;
                height: 200px;
            }

            .heading1{
                color:#333;
                padding-top:30px;
                font-size: 50px;
            }

            .tcenter {
            text-align: center;
            color: #F2F4FF;
            }

            p {
                    color:#333;
                    white-space: pre;
            }

            footer{
                height: 40px;
                background-color: #1c1c1c;
            }

            span.copyright{
                text-align: center;
                color: #F2F4FF;
                font-size: 10px;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <header>
        <div class="main">
            <div class="left">
                <h2 class="logo">ABANGCOST.ME</h2>
            </div>
            <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="https://laravel.com/docs">Forecast</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="signup">Log In</a></li>
            </ul>
        </div>
        <div class="middle">
            <h2 class="contenttitle">ABOUT US</h2>
        </div>
    </header>
    <section id="a">
        <div class="con">
                  <div class="card">
                    <div class="front">
                        <img src="https://cdn.yukepo.com/content-images/listicle-images/2017/04/12/36176.jpg">
                    </div>
                    <div class="back">
                        <div class="back-content middle">
                            <h2>Christopher Turman</h2>
                            <span>Front End</span>
                            <div class="content">
                                <a href="#"><i class="fab fa-github"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                        <div class="front">
                            <img src="https://www.piah.com/wp-content/uploads/2017/09/10_bukti_warkop_dki_gaul-20160419-012-rita.jpg">
                        </div>
                        <div class="back">
                            <div class="back-content middle">
                                <h2>Titan Russo</h2>
                                <span>Back End</span>
                                <div class="content">
                                    <a href="#"><i class="fab fa-github"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"></a>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="card">
                            <div class="front">
                                <img src="https://cdn0-production-images-kly.akamaized.net/TdjBAkYMZ_tzZfmYYypxvENpZqw=/640x853/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2381549/original/047438300_1539318646-Dono1.jpg">
                            </div>
                            <div class="back">
                                <div class="back-content middle">
                                    <h2>Fariz Ihsan Yazid</h2>
                                    <span>Back End</span>
                                    <div class="content">
                                        <a href="#"><i class="fab fa-github"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"></a>
                                    </div>
                                </div>
                            </div>
                </div>
        </div>
    </section>

    <section id="sec1">
        <div class="tcenter">
            <h1 class="heading1">OUR STORY</h1>
            <strong><p>We are a group of friends with a humble mission to create a webapp that can contribute to the society. Christopher created the front
end, Titan created the back end, while Fariz help with the deployment. Initially we have 3 topics we can do through several process of brainstorming
but in the end, we have concluded that we're going to make something that can be relatable.
            </p></strong>
        </div>
    </section>
    <footer>
            <span class="copyright">abangcost was created by group_  3(c)2019</span>
</footer>
    </body>
</html>
