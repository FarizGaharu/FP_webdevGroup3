<!doctype html>
<html>
        <head>
          <title>abangcost</title>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
          
          
          <style>
            /*CREDIT: SHAWN LINDSTOM
            Code Written here are no mine, just a minor tweak here and there.
            linksource:https://codepen.io/cool_lazyboy/pen/baeyxR*/
                *{
                    margin: 0;
                    padding: 0;
                  }
                  
                  body{
                    background: #e9eaea;
                    font-family: 'Roboto', sans-serif;
                    user-select: none;
                    background-image: linear-gradient(rgba(0,0,0,0.7),rgb(0,0,0,0.7)), url(https://www.finditinbirmingham.com/upload/a71ad946-7012-4c01-8e82-4dff6fdf69e1.jpg.ashx);
                    background-size: 100%;
                    background-size: cover;
                    background-position: center;
                  }
                  
                  .container{
                    width: 450px;
                    margin: 30px auto;
                  }
                  
                  .signup,
                  .login{
                    width: 50%;
                    background: #fff;
                    float: left;
                    height: 60px;
                    line-height: 60px;
                    text-align: center;
                    cursor: pointer;
                    text-transform: uppercase;
                    color: #34b3a0;
                  }

                  .signup-form,
                  .login-form{
                    background: #fff;
                    padding: 40px;
                    clear: both;
                    width: 100%;
                    box-sizing: border-box;
                    height: 400px;
                  }
                  
                  .input{
                    width: 100%;
                    padding: 20px;
                    box-sizing: border-box;
                    margin-bottom: 25px;
                    border: 2px solid #e9eaea;
                    color: #3e3e40;
                    font-size: 14px;
                    outline: none;
                    transform: all 0.5s ease;
                  }
                  
                  .input:focus{
                    border: 2px solid #34b3a0;
                  }
                  
                  .btn{
                    width: 100%;
                    background: #34b3a0;
                    height: 60px;
                    text-align: center;
                    line-height: 60px;
                    text-transform: uppercase;
                    color: #fff;
                    font-weight: bold;
                    letter-spacing: 1px;
                    cursor: pointer;
                    margin-bottom: 30px;
                  }
                  
                  span a{
                    text-decoration: none;
                    color: #000;
                  }
                  
                  ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
                    color: #3e3e40;
                    font-family: roboto;
                  }
                  ::-moz-placeholder { /* Firefox 19+ */
                    color: #3e3e40;
                    font-family: roboto;
                  }
                  :-ms-input-placeholder { /* IE 10+ */
                    color: #3e3e40;
                    font-family: roboto;
                  }
                  :-moz-placeholder { /* Firefox 18- */
                    color: #3e3e40;
                    font-family: roboto;
                  }
                  
                  a{
                    text-decoration: none;
                    color: #fff;
                    letter-spacing: 1px;
                  }

        </style>
        </head>
        <body>
                <div class="wrapper">
                        <div class="container">
                          
                          <div class="signup">Sign Up</div>
                          <div class="login">Log In</div>
                          
                           <div class="signup-form">
                              <input type="text" placeholder="Your Email Address" class="input"><br />
                              <input type="text" placeholder="Choose a Username" class="input"><br />
                              <input type="password" placeholder="Choose a Password" class="input"><br />
                              <div class="btn">Create account</div>
                           </div>
                          
                          <div class="login-form">
                              <input type="text" placeholder="Email or Username" class="input"><br />
                              <input type="password" placeholder="Password" class="input"><br />
                              <div class="btn">log in</div>
                              <div class="btn"><a href="home">Back</a></div>
                           </div>
                          
                        </div>
                      </div>
            <script>
                $(".login-form").hide();
                $(".login").css("background", "none");

                $(".login").click(function(){
                $(".signup-form").hide();
                $(".login-form").show();
                $(".signup").css("background", "none");
                $(".login").css("background", "#fff");
                });

                $(".signup").click(function(){
                $(".signup-form").show();
                $(".login-form").hide();
                $(".login").css("background", "none");
                $(".signup").css("background", "#fff");
                });

                $(".btn").click(function(){
                $(".input").val("");
                });
            </script>
        </body>
</html>