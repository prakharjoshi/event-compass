<?php

if(isset($_POST['username'])&&isset($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $pass_hash=md5($password);

    if(!empty($username)&&!empty($password)) {
        //$query = "SELECT `username` FROM `users` WHERE `username`='$username'"; //sample query. Edit according to the database fields.  
        mysql_query("SELECT `username` FROM `users` WHERE `username`='$username'");
        if(mysql_query("SELECT `username` FROM `users` WHERE `username`='$username'")){
            if(mysql_num_rows(mysql_query("SELECT `username` FROM `users` WHERE `username`='$username'"))==0){
                echo 'Invalid details';
         }
        else if(mysql_num_rows(mysql_query("SELECT `username` FROM `users` WHERE `username`='$username'"))==1){
            $userid = mysql_result(mysql_query("SELECT `username` FROM `users` WHERE `username`='$username'"),0,'username');
            $_SESSION['userid']=$userid;
            header('Location:index.php');
        } 

        }
    else{
        echo 'Enter username/password';
    }
}
}



?>
<!DOCTYPE HTML>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Event Compass</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/style3.css" rel="stylesheet">
     <link rel="stylesheet" href="css/demo.css">
     <link rel="stylesheet" href="css/sky-forms.css">
   <link href="css/common.css" rel="stylesheet">

    <link href="css/fontello.css" type="text/css" rel="stylesheet">
    <!--[if lt IE 7]>
            <link href="css/fontello-ie7.css" type="text/css" rel="stylesheet">
        <![endif]-->
    <!-- Google Web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    
    <style>
    body {
        padding-top: 60px;

    }
    #tag1 {
        background: #555 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAB9JREFUeNpi/P//PwM6YGLAAuCCmpqacC2MRGsHCDAA+fIHfeQbO8kAAAAASUVORK5CYII=);
        font: 20px 'Lucida sans', Arial, Helvetica;
        color: #eee;
        text-align: center;
    }
    
    a {
        color: #ccc;
    }
    
    /*-------------------------------------*/
    
    .cf:before, .cf:after{
      content:"";
      display:table;
    }
    
    .cf:after{
      clear:both;
    }

    .cf{
      zoom:1;
    }

    /*-------------------------------------*/   
    
    .form-wrapper {
        width: 750px;
        padding: 15px;
        margin: 150px auto 50px auto;
        background: #444;
        background: rgba(0,0,0,.2);
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        -moz-box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
        -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
        box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
    }
    
    .form-wrapper input {
        width: 630px;
        height: 50px;
        padding: 10px 5px;
        float: left;    
        font: bold 15px 'lucida sans', 'trebuchet MS', 'Tahoma';
        border: 0;
        background: #eee;
        -moz-border-radius: 3px 0 0 3px;
        -webkit-border-radius: 3px 0 0 3px;
        border-radius: 3px 0 0 3px;      
    }
    
    .form-wrapper input:focus {
        outline: 0;
        background: #fff;
        -moz-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
        -webkit-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
        box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
    }
    
    .form-wrapper input::-webkit-input-placeholder {
       color: #999;
       font-weight: normal;
       font-style: italic;
    }
    
    .form-wrapper input:-moz-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }
    
    .form-wrapper input:-ms-input-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }    
    
    .form-wrapper button {
        overflow: visible;
        position: relative;
        float: right;
        border: 0;
        padding: 0;
        cursor: pointer;
        height: 40px;
        width: 110px;
        font: bold 15px/40px 'lucida sans', 'trebuchet MS', 'Tahoma';
        color: #fff;
        text-transform: uppercase;
        background: #d83c3c;
        -moz-border-radius: 0 3px 3px 0;
        -webkit-border-radius: 0 3px 3px 0;
        border-radius: 0 3px 3px 0;      
        text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
    }   
      
    .form-wrapper button:hover{     
        background: #e54040;
    }   
      
    .form-wrapper button:active,
    .form-wrapper button:focus{   
        background: #c42f2f;    
    }
    
    .form-wrapper button:before {
        content: '';
        position: absolute;
        border-width: 8px 8px 8px 0;
        border-style: solid solid solid none;
        border-color: transparent #d83c3c transparent;
        top: 12px;
        left: -6px;
    }
    
    .form-wrapper button:hover:before{
        border-right-color: #e54040;
    }
    
    .form-wrapper button:focus:before{
        border-right-color: #c42f2f;
    }    
    
    .form-wrapper button::-moz-focus-inner {
        border: 0;
        padding: 0;
    }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Load ScrollTo -->
    <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
    <!-- Load LocalScroll -->
    <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
    <!-- prettyPhoto Initialization -->
    <script type="text/javascript" charset="utf-8">
          $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
          });
        </script>
    </head>
    <body>
    <!--******************** NAVBAR ********************-->
    <div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
                    <h1 class="brand"><a href="#top"  style="text-decoration: none">Event Compass</a></h1>
                    <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                    <nav class="pull-right nav-collapse collapse">
                        <ul id="menu-main" class="nav">
                            <li><a title="Rules" href="#Rules"><b>About us</b></a></li>
                            <li><a title="Conduct Events" href="#Prizes"><b>Search events</b></a></li>
                            <li><a title="contact" href="#contact"><b>Contact</b></a></li>
                            <li><a title="Login" href="#top"><b>Login</b></a></li>
                        </ul>
                    </nav>
                </div>
            <!-- /.container -->
            </div>
            <!-- /.navbar-inner -->
        </div>
      <!-- /.navbar -->
    </div>
     <div id="top"></div>
        <div id="headerwrap">
      <header class="clearfix">

            <div class="rest">
            <div class="bg-cyan">
        <div class="body body-s">

            <form action = "<?php echo $current_file; ?>" method = "POST"  class="sky-form">
                <header><center><b>Sign In  &nbsp;&nbsp;</b><br>
                                </center>
                                </header>
                                <form action="<?php echo $current_file; ?>" method="POST">
    
                   <div id = "form">
                     <fieldset>
                     
                     <input type = "text" name = "username" placeholder = "Username" > <br/><br/>
                     <input type = "password" name = "password" placeholder = "Password" > <br/>
                     <input type = "submit" name = "submit" value = "Login"/>
                     </fieldset>
                   </div>
                                    
    <footer>
                    
                    <a href="register.php" class="button">  Register  <br/><br/><br/></button> </a>

                                        <br>
                                               <div align="right">
             </div>
    </form>
    </footer>
    </div>
    </div>
            </div>
            <!-- ./span12 -->

      </header>
    </div>

    <hr>
    <!--******************** Portfolio Section ********************-->
   <section id="Rules" class="single-page scrollblock">
      <div class="container">


                   <div class="row">
                   <br>
                <div class="span7" id="ruler" style = "padding-left:50;">
                    <h2>Write about event compass here. </h2><br>
                    <b>  </b><br>
                    <p class="lead" style="font-size:16px; line-height:1.5em">
                    
                    </p>
                    </div>
                <div class="span4">
                <div class="col-lg-5 col-lg-offset-2 col-sm-10">
                     <br>
                     <br>
                    <img float="left"  style="border-radius:8px;"src="img/rules2.jpg" alt="Image">
                    <br>
                    <h2 style="width:370px; height: 180px; border-radius: 10px; background-color:#ffffcc; padding-top:60px; text-align:center;"> <span style="text-decoration:underline;">**Event**</span> <br>
                      <br>
                                          <p style="font-size:18px"> Anything else here. or  can be removed<br>
                         </p></h2>

                </div>
             </div>

      </div>
      <!-- /.container -->
    </section>
    <hr>
    <!--******************** Services Section ********************-->
    <section id="Prizes" class="single-page scrollblock">

      <div class="container" id="ruler2">



    <h1 align='center'>Events' search bar here </h1>


    <!--<textarea rows="1" cols="40" placeholder="Search events">
    
    </textarea>-->
    <!--<button type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span> Search
        </button>-->

                   <!--<h1 style="margin-top:325px; margin-left:140px;">Event search bar here</h3>-->

<div id="tag1">

<form class="form-wrapper cf">
    <input type="text" placeholder="Search here..." required>
    <button type="submit">Search</button>
</form>


</div>

      </div>
    </section>
    <hr>
    <hr>
    <!--******************** Testimonials Section ********************-->


    <section id="contact" class="single-page scrollblock">
      <div class="container">
        <div class="align"><i class="icon-group-circled"></i></div>
        <h1>Meet the team</h1>
        <section class="main">

                <ul class="ch-grid">
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <h3 style="font-size:15px;"> Member 1 <br> xxxx</h3>
                                <p><a href="" target="_blank">View on FB</a></p>
                            </div>
                            <div class="ch-thumb ch-img-1"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <h3 style="font-size:15px;" >Member 2 <br> yyyy</h3>
                                <p><a href="" target="_blank">View on FB</a></p>
                            </div>
                            <div class="ch-thumb ch-img-2"></div>
                        </div>
                    </li>
                    <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <h3 style="font-size:15px;">Member 3<br> cccc</h3>
                                <p style="padding-left:1px;"> <a href="" target="_blank">View on FB</a></p>
                            </div>
                            <div class="ch-thumb ch-img-3"></div>
                        </div>
                    </li>
                        <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <h3 style="font-size:15px;">Member 4<br> ssss</h3>
                                <p><a href="" target="_blank">View on FB</a></p>
                            </div>
                            <div class="ch-thumb ch-img-4"></div>
                        </div>
                    </li>
                </ul>

            </section>
            <br><br><br><br>
        
      </div>
    </section>
    <!--******************** Contact Section ********************-->
        <hr>
    <div class="bnner" style ="align:right">
    <div class = "span2" style = "margin-left:80%; margin-top:-100px">
                  <div class="synapse">
                    <a class="btn btn-default btn-lg" href="" style="text-decoration:none;"target="_blank"></a>   </div></div>
    <!--<div class = "span2"  style = "margin-left:80%; margin-top:-160px">
                 <div class="facebook">
                        <a class="btn btn-default btn-lg" href="https://www.facebook.com/crazyganith15" style="text-decoration:none;">Facebook</a>
                        </div>-->
    </div>
        <!-- /.container -->
    </div>
    <hr>
    <div class="footer-wrapper">
      <div class="container">
        <footer>
          <small>&copy; </small>
        </footer>
      </div>
      <!-- ./container -->
    </div>
    <!-- Loading the javaScript at the end of the page -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/site.js"></script>
    
    <!--ANALYTICS CODE-->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-29231762-1']);
      _gaq.push(['_setDomainName', 'dzyngiri.com']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    </body>
    

    </html>


