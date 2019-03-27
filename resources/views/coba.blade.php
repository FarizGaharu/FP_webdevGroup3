<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
      p {
            margin-right: 6px;
        }
        
      body {
        background-color: rgb(240, 240, 240, 1);
        
      }

      ul.nav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: rgba(10, 10, 10, 1);
        position: fixed;
        top: 0%;
        left: 0%;
        width: 100%;
      }

      ul{
        list-style-type: none;
        margin: 0;
        padding: 0;

      }

      li {
        float:left;
      }

      .right{
        float: right;
      }

      .rightb{
        position: absolute;
        left:60%;
        bottom:7%
      }
      h3.member{
        text-align: center;
        align-items: center;
        padding: auto;
        margin: auto;
        color: rgb(71, 113, 142);
        text-decoration: none;
      }

      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      li a:hover:not(.active) {
        background-color: rgba(30, 30, 30, 1);
      }

      .active {
        background-color:rgba(10, 10, 10, 1);
      }

      .container {
        position: relative;
        
      }

      .containerb {
        position: relative;
        background-color: black;

      }

      .containerc {
        position: relative;
        height:500px;
      }

      .containerabsolute{
        position: absolute;
        top: 900%;
        height:300px;
        width: 100%;
        background-color: rgb(163, 177, 186);
      }

      .containermember{
        position: relative;
        width:100%;
      }
      .tinted { opacity: 0.7; }

      .container2 {
        position: relative;
        background-color: rgb(215, 214, 214,1);
      }

      .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 18px;
      }

      img { 
        width: 101%;
        height: auto;
        opacity: 0.8;
      }

      img.member{
        position: relative;
        display: block;
        width: 50%;
        height: auto;
      }

      .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: auto;
        width: auto;
        opacity: 0;
        transition: .5s ease;
        background-color: #008CBA;
      }

      .containermember:hover .overlay {
          opacity: 1;
        }
      h4.border{
        border-bottom: solid greenyellow;
        width: 150px;
        position: relative;
      }

      h4.member{
        color:rgb(71, 113, 142);
        
      }
      
      .column {
        float: left;
        width: 33.3%;
        position: relative;
      }

      h1{
        text-shadow: 1px 1px 10px black;
        color:white;
      }

      #calc-contain{
      position: relative;
      width: 400px;
      border: 2px solid black;
      border-radius: 12px;
      margin: 0px auto;
      padding: 20px 20px 100px 20px;
    }
    #agh{
      position: relative;
      float: right;
      margin-top: 15px;
    }
    #agh p{
      font-size: 20px;
      font-weight: 900;
    }
    input[type=button] {
      background: lightGray;
      width: 20%;
      font-size: 20px;
      font-weight: 900;
      border-radius: 7px;
      margin-left: 13px;
      margin-top: 10px;
    }
    input[type=button]:active {
      background-color: #3e8e41;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }
    input[type=button]:hover {
      background-color: #003300;
      color: white;
    }

    input[type = text] {
      position: relative;
      display: block;
      width: 90%;
      margin: 5px auto;
      font-size: 20px;
      padding: 10px;
      box-shadow: 4px 0px 12px black inset;
    }

      p.text1{
        left:15%;
        top: 30%;
        font-size:20px;
        color: white;
        position: absolute;
        white-space: pre;
        text-shadow: 1px 1px 8px black;
      }
      
      p.member{
        position: relative;
        width: 350px;
        height: 120px;
        color: rgb(88, 150, 191);
      }

      h3{
        position: relative;
      }

      .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
      }

      * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column2 {
  float: left;
  width: 50%;
  padding: 10px;
  height: 135px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.bottomright {
  position: absolute;
  bottom: 8px;
  right: 16px;
  font-size: 18px;
}

.trademark{
  font-size: 10px;
  color: white;
}

.contact{
  font-size: 12px;
  color: white;
}

.contacttitle{
  font-size: 12px;
  color: white;
}

html {
  scroll-behavior: smooth;
}
    </style>
  </head>
  <body>

  <div class="containerb" id="home">
    <img class="tinted" src="https://images.wallpaperscraft.com/image/hand_writing_pen_calculator_80647_5400x3600.jpg" alt="Cinque Terre">
    <div class="center"><h1>Abangcost provides help for your finance</h1></div>
  </div>

  <div class="containerc" id="ff">
    <h3><div align="center"><strong>FINANCE FORECAST</strong></div></h3>
    <div align="center"> <h4 class="border"></h4></div>
    <p class="text1">Enjoy our financial forecast where you can count your 
spending a lot more easier and most of all it's <strong>FREE</strong>. which
means, everyone can use it without paying nor log into the 
website!
    </p>
    <div class="rightb"><div id='calc-contain'>
  
        <form name="calculator">
          
          <input type="text" name="answer" />
          <br>
          
          <input type="button" value=" 1 " onclick="calculator.answer.value += '1'" />
          <input type="button" value=" 2 " onclick="calculator.answer.value += '2'" />
          <input type="button" value=" 3 " onclick="calculator.answer.value += '3'" />
          <input type="button" value=" + " onclick="calculator.answer.value += '+'" />
          <br/>
          
          <input type="button" value=" 4 " onclick="calculator.answer.value += '4'" />
          <input type="button" value=" 5 " onclick="calculator.answer.value += '5'" />
          <input type="button" value=" 6 " onclick="calculator.answer.value += '6'" />
          <input type="button" value=" - " onclick="calculator.answer.value += '-'" />
          </br>
        
          <input type="button" value=" 7 " onclick="calculator.answer.value += '7'" />
          <input type="button" value=" 8 " onclick="calculator.answer.value += '8'" />
          <input type="button" value=" 9 " onclick="calculator.answer.value += '9'" />
          <input type="button" value=" x " onclick="calculator.answer.value += '*'" />
          </br>
      
          <input type="button" value=" c " onclick="calculator.answer.value = ''" />
          <input type="button" value=" 0 " onclick="calculator.answer.value += '0'" />
          <input type="button" value=" = " onclick="calculator.answer.value = eval(calculator.answer.value)" />
          <input type="button" value=" / " onclick="calculator.answer.value += '/'" />
          </br>

  
        </form>
        <div id="agh">
          <p>Credit: Adrian Gheorghe
        </div>
      </div>
    </div>
  </div>

  <div class="container2" id="arti">
      <h3><div align="center"><strong>Article</strong></div></h3>
      
      <p>








        </p>
      
    </div>

    <div class="container">
            <h3><div align="center" id="mot"><strong>MEET OUR TEAM</strong></div></h3>
            
            <div align="center"> <h4 class="border"></h4>
              <div class="column">
                <div align="center"><h3 class="member"><strong>CHRISTOPHER TURMAN</strong></h3></div>
      
                <div align="center"> <img class="member" src="https://scontent.fcgk5-1.fna.fbcdn.net/v/t1.0-1/p160x160/10003930_10201362041802515_1554735454_n.jpg?_nc_cat=103&_nc_ht=scontent.fcgk5-1.fna&oh=66b174c912fedbbb88624147c654c2bc&oe=5D15C8EA" alt="Mike">
                </div>
      
                <div align="center"><h4 class="member"><strong>Full Stack Developer</strong></h4>  
                <p class="member">Christopher Turman is a young and dedicated fullstack designer resides in Jakarta, Indonesia. Currently studying at Binus International University aiming for his Bachelor for Computer Science.</p>
                </div>
      
              </div>
      
            <div class="column">
              <div align="center"><h3 class="member"><strong>TITAN RUSSO</strong></h3></div>
                  <div align="center"> <img class="member" src="https://0.academia-photos.com/26001692/7134039/8035852/s200_titan.russo.jpg_oh_8b2081cbd9e4cad06c52163b7d41ce8a_oe_555528b2___gda___1435774173_625e610078ffa1dee2e0d6cc14a2da02" alt="Mike">
                  </div>    
                  <div align="center"><h4 class="member"><strong>Back End Engineer</strong></h4>  
                    <p class="member">Titan, a well versed back end engineer who, create back end for this website. Currently studying at Binus International University as well.</p>
                    </div>
                
              </div>
            <div class="column">
              <div align="center"><h3 class="member"><strong>FARIZ IHSAN YAZID</strong></h3></div>
                    <div align="center"> <img class="member" src="https://scontent-sea1-1.cdninstagram.com/vp/44110bea8a77dc92c84d1a4c11f9458b/5CC41815/t51.2885-19/s150x150/19050327_122072725041692_2546184701878468608_a.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com" alt="Mike">
                    </div>   
                    <div align="center"><h4 class="member"><strong>Front End Designer</strong></h4>  
                      <p class="member">Fariz Ihsan is a young front end designer who recently started to learn on how to css and html. He's currently on the same campus as Titan and Chris.</p>
                      </div>  
                  
           
              </div>
    </div>
    



    <div class="row" id="contact">
        <div class="column2" style="background-color:#546173;">
          <h2 class="contacttitle">Contact us</h2>
          <p class="contact">Instagram: @abangcost</p>
          <p class="contact">Youtuber: abangcost</p>
          <p class="contact">Email: abangcost@staff.me</p>
        </div>
        <div class="column2" style="background-color:#546173;">
          <div class="bottomright">
          <p class="trademark">abangcost.TM</p>
          </div>
        </div>
      </div>

      

        
      


          
  <div class="container">
      <ul class="nav">
        <li><a href="#home">Abangcost.com</a></li>
        <li><a href="#ff">Finance Forecast</a></li>
        <li><a href="#arti">Article</a></li>
        <li><a href="#mot">About Us</a></li>
        <li><a href="#contact">Contact</a></li>

        <ul class="right">
                        <!-- Authentication Links -->
                        @guest
                            <li>
                                <a href="abangcost.me/login">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="abangcost.me/register">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                                <li><a href="#">
                                    {{ Auth::user()->name }} 
                                </a>
                              </li>
                              <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </li>
                            
                        @endguest
                    </ul>
      </ul>
    </div>
    
    <script>
      
        </script>

  </body>
</html>