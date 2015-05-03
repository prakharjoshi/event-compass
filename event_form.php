<?php
    ob_start();
    session_start();
?>

<?php require_once("includes/base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("backend/ifnotlogin.php") ?>
<?php require_once("backend/event_formbackend.php") ?>

<?php
    $username =  $_SESSION['currentuser'];
?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
<link href="css/bootstrap.min.css" rel="stylesheet">

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center"><font face="Montserrat">Event Form</font></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h1><font face="Tangerine">Fill the information in the form to create your own event page</font></h1>
                </div>
                <div class="panel-body">
                    <div class="row col-md-offset-1">
                        <div class="col-lg-12">
                            <form enctype="multipart/form-data" role="form" method="post" action="event_form.php?user=<?php echo $username;?>">
                                <div class="form-group">
                                    <label><h3><font face="Montserrat">Event Name</font></h3></label>
                                    <input class="form-control" name="eventname" placeholder="Enter name of your event">
                                </div>
                                <div class="form-group">
                                    <label><h3><font face="Montserrat">Event Location</font></h3></label>
                                    <input class="form-control" placeholder="Enter location of your event" name="eventlocation">
                                </div>
                                <div class="form-group">
                                    <label><h3><font face="Montserrat">Event Date and Time</font></h3></label>
                                    <input type="text" id="datetimepicker_dark" name = "date">
                                    
                                </div>
                                </div>
                                <div class="form-group">
                                    <label><h3><font face="Montserrat">Short Description</font></h3></label>
                                    <textarea class="form-control" rows="3" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label><h3><font face="Montserrat">Do you wish to sell tickets</font></h3></label>
                                    <input class="form-group" type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"/>Yes
                                    <input class="form-group" type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"/>No
                                    <br>
                                    <div id="ifYes" style="display:none">
                                        <table class="table table-hover" id="ticket-table">
                                            <thead>
                                                <tr>
                                                    <th><font face="Montserrat">Ticket Type</font></th>
                                                    <th><font face="Montserrat">Available Tickets</font></th>
                                                    <th><font face="Montserrat">Price</font></th>
                                                    <th></th>
                                                    <th></th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th><input placeholder="Ticket Type" name="ticket_type"></input></th>
                                                    <th><input placeholder="Ticket Available" name="ticket_available"></input></th>
                                                    <th><input placeholder="Price" name="ticket_price"></input></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <script type="text/javascript">
                                    // // $('#noCheck').onclick({
                                    // //     $('.ticket-table').hide();
                                    // // });
                                    // </script> -->      
                                </div>
                                <div class="form-group">
                                        <label><h3> <font face="Montserrat">Type of Event</font></h3></label>
                                        <select class="form-control" name="type[]">
                                            <option><font face="Montserrat">Concert or Performance</font></option>
                                            <option><font face="Montserrat">Festival, Fair or Exhibition</font></option>
                                            <option><font face="Montserrat">Game or Competition</font></option>
                                            <option><font face="Montserrat">Party or Social Gathering</font></option>
                                            <option><font face="Montserrat">Race or Tournament</font></option>
                                            <option><font face="Montserrat">Other</font></option>
                                        </select>
                                    </div>
                                <div class="form-group">
                                    <h3><font face="Montserrat">Category : </font></h3>  <select class="form-control" id="country" name ="category"></select>
                                </div>
                                <div class="form-group">
                                    <h3><font face="Montserrat">Sub-category:</font></h3> <select class="form-control" name ="subcategory" id ="state"></select>
                                </div>
                                <script language="javascript">
                                    populateCountries("country", "state");
                                </script>
                                <div class="form-group-last">
                                    <button type="submit" class="btn btn-primary" name="submit" value="submit"><font face="Montserrat">Proceed To Next Step</font></button>
                                </div>
                            </form>
                        </div>
                        <!-- /.col-lg-12 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

<script type= "text/javascript" src = "js/countries.js"></script>

<script src="js/jquery.js"></script>

<!-- DateTimePicker -->
<script src="js/jquery.datetimepicker.js"></script>
<script>
    $('#datetimepicker').datetimepicker({
    dayOfWeekStart : 1,
    lang:'en',
    disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
    startDate:  '1986/01/05'
    });
    $('#datetimepicker').datetimepicker({
        value:'2015/04/15 05:03',step:10
    });

    $('.some_class').datetimepicker();

    $('#default_datetimepicker').datetimepicker({
        formatTime:'H:i',
        formatDate:'d.m.Y',
        defaultDate:'8.12.1986', // it's my birthday
        defaultTime:'10:00',
        timepickerScrollbar:false
    });

    $('#datetimepicker10').datetimepicker({
        step:5,
        inline:true
    });

    $('#datetimepicker_mask').datetimepicker({
        mask:'9999/19/39 29:59'
    });

    $('#datetimepicker1').datetimepicker({
        datepicker:false,
        format:'H:i',
        step:5
    });

    $('#datetimepicker2').datetimepicker({
        yearOffset:222,
        lang:'ch',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d',
        minDate:'-1970/01/02', // yesterday is minimum date
        maxDate:'+1970/01/02' // and tommorow is maximum date calendar
    });

    $('#datetimepicker3').datetimepicker({
        inline:true
    });

    $('#datetimepicker4').datetimepicker();

    $('#open').click(function(){
        $('#datetimepicker4').datetimepicker('show');
    });

    $('#close').click(function(){
        $('#datetimepicker4').datetimepicker('hide');
    });
    
    $('#reset').click(function(){
        $('#datetimepicker4').datetimepicker('reset');
    });
    
    $('#datetimepicker5').datetimepicker({
        datepicker:false,
        allowTimes:['12:00','13:00','15:00','17:00','17:05','17:20','19:00','20:00'],
        step:5
    });
    
    $('#datetimepicker6').datetimepicker();
    
    $('#destroy').click(function(){
        if( $('#datetimepicker6').data('xdsoft_datetimepicker') ){
            $('#datetimepicker6').datetimepicker('destroy');
            this.value = 'create';
        }else{
            $('#datetimepicker6').datetimepicker();
            this.value = 'destroy';
        }
    });
    
    var logic = function( currentDateTime ){
        if( currentDateTime.getDay()==6 ){
            this.setOptions({
                minTime:'11:00'
            });
        }else
            this.setOptions({
                minTime:'8:00'
            });
    };
    
    $('#datetimepicker7').datetimepicker({
        onChangeDateTime:logic,
        onShow:logic
    });
    
    $('#datetimepicker8').datetimepicker({
        onGenerate:function( ct ){
            $(this).find('.xdsoft_date')
                .toggleClass('xdsoft_disabled');
        },
        minDate:'-1970/01/2',
        maxDate:'+1970/01/2',
        timepicker:false
    });
    
    $('#datetimepicker9').datetimepicker({
        onGenerate:function( ct ){
            $(this).find('.xdsoft_date.xdsoft_weekend')
                .addClass('xdsoft_disabled');
        },
        weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
        timepicker:false
    });
    
    var dateToDisable = new Date();
        dateToDisable.setDate(dateToDisable.getDate() + 2);
    
    $('#datetimepicker11').datetimepicker({
        beforeShowDay: function(date) {
            if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
                return [false, ""]
            }

            return [true, ""];
        }
    });
    
    $('#datetimepicker12').datetimepicker({
        beforeShowDay: function(date) {
            if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
                return [true, "custom-date-style"];
            }

            return [true, ""];
        }
    });
    
    $('#datetimepicker_dark').datetimepicker({
        theme:'dark'
    });

</script>
<script type="text/javascript">
    window.onload = function() {
        //document.getElementById('ifYes').style.display = 'none';
        //document.getElementById('ifNo').style.display = 'none';
    }
    
    function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.display = 'block';
            //document.getElementById('ifNo').style.display = 'none';
            //document.getElementById('redhat1').style.display = 'none';
            //document.getElementById('aix1').style.display = 'none';
        } 
        else if(document.getElementById('noCheck').checked) {
            document.getElementById('ifYes').style.display = 'none';
            // $('.ticket-table').hide();
            // document.getElementById('ifNo').style.display = 'block';
            // document.getElementById('ifYes').style.display = 'none';
            // document.getElementById('redhat1').style.display = 'none';
            // document.getElementById('aix1').style.display = 'none';
       }
    }
    
    function yesnoCheck1() {
       if(document.getElementById('redhat').checked) {
           document.getElementById('redhat1').style.display = 'block';
           document.getElementById('aix1').style.display = 'none';
        }
       if(document.getElementById('aix').checked) {
           document.getElementById('aix1').style.display = 'block';
           document.getElementById('redhat1').style.display = 'none';
        }
    }
</script>

<?php require_once("includes/footer.php") ?>