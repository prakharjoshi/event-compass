<?php require_once("includes/base_main_settings.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<?php
    $username = $_SESSION['currentuser'];
?>

<?php require_once("backend/interest_settings_form_backend.php") ?>

<div id="main" class="row">
    <div class="row">
                <div class="col-lg-11">
                    <h1 class="page-header text-center">Interest Settings</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 <form role="form" action="interest_settings_form.php?user=<?php echo $username;?>" method="post">
    <div class="col-md-12">
        <div class="well-lg panel panel-default" id="toggable_box">
            <div class="panel-body" >
            <!--    <p> here comes the navigation bar</p> -->
                <div role="tabpanel">

             <!-- Nav tabs -->
                        <div class="col-md-9 col-sm-6 col-xs-9 personal-info">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseP1">Film & Entertainment</a>
                                            </h4>
                                        </div>
                                        <div id="collapseP1" class="panel-collapse collapse out">
                                            <div class="panel-body">
                                                <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox1" >Comedy
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox2">Film
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox3">TV
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox4">Gaming
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox5">Other
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox6">Comics
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <!-- Project 2-->
                                
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseP2">Hobbies & Special-Interest</a>
                                            </h4>
                                        </div>
                                        <div id="collapseP2" class="panel-collapse collapse out">
                                            <div class="panel-body">
                                                
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox7">Books
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox8">Drawing and Painting
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox9">Gaming
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox10">Other
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseP3">Music</a>
                                            </h4>
                                        </div>
                                        <div id="collapseP3" class="panel-collapse collapse out">
                                            <div class="panel-body">
                                                <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox11">Alternative
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox12">Blues and Jazz
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox13">Classical
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox14">EDM
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox15">Folk
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox16">Hip-Hop and Rap
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox17">Indie
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox18">Metal
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox19">Pop
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox20">R&B
                                                </label>
                                            </div>
                                           <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox21">Religious
                                                </label>
                                            </div>     
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox22">Rock
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox23">Other
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseP4">Visual Arts</a>
                                            </h4>
                                        </div>
                                        <div id="collapseP4" class="panel-collapse collapse out">
                                            <div class="panel-body">
                                                <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox24">Comedy
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox25">Craft
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox26">Fine Arts
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox27">Literary Art
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox28">Musical
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox29">Orchestra
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox30">Theatre
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox31">Other
                                                </label>
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseP5">Science & Technology</a>
                                            </h4>
                                        </div>
                                        <div id="collapseP5" class="panel-collapse collapse out">
                                            <div class="panel-body">
                                                <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox32">Biotech
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox33">Coding
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox34">Mobile
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox35">Robotics
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox36">Science
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox37">Social Media
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox38">Other
                                                </label>
                                            </div>
                                                
                                            
                                        </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseP6">Sports & Fitness</a>
                                            </h4>
                                        </div>
                                        <div id="collapseP6" class="panel-collapse collapse out">
                                            <div class="panel-body">
                                                <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox39">Basketball
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox40">Cycling
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox41">Exercise
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox42">Football
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox43">Hockey
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox44">Motorsports
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox45">Running
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox46">Swimming
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox47">Tennis
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox48">Volleyball
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox49">Walking
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox50">Yoga
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" name="checkbox51">Other
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-default" name="submit" value="submit">Submit Button</button>
                                      
                                
             <!--Comments tab-->
                        

                </div>
            
        </div>
    </div>
  </div>

</div>


<?php require_once("includes/footer.php") ?>
<!--/container-->