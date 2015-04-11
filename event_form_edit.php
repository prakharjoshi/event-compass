<?php
    ob_start();
    session_start();
?>

<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
<?php $id=$_GET['id'];?>
<?php require_once("includes/base.php") ?>
<?php require_once("includes/functions.php") ?>
<?php require_once("includes/connection.php") ?>

<?php require_once("backend/ifnotlogin.php") ?>
<?php require_once("backend/event_form_editbackend.php") ?>
<?php
    $username =  $_SESSION['currentuser'];
    
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Event Form</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>Edit your event details here</h3>
                </div>
                <div class="panel-body">
                    <div class="row col-md-offset-1">
                        <div class="col-lg-12">
                            <form enctype="multipart/form-data" role="form" method="post" action="event_form_edit.php?user=<?php echo $username;?>&id=<?php echo $id;?>">
                                <div class="form-group">
                                    <label><h3>Event Name</h3></label>
                                    <input class="form-control" name="eventname" placeholder="Enter name of your event">
                                </div>
                                <div class="form-group">
                                    <label><h3>Event Location</h3></label>
                                    <input class="form-control" placeholder="Enter location of your event" name="eventlocation">
                                </div>
                                <div class="form-group">
                                    <label><h3>Event Date and Time</h3></label>
                                    <input type="text" id="datetimepicker_dark" name = "date">
                                    
                                </div>
                                </div>
                                <div class="form-group">
                                    <label><h3>Short Description</h3></label>
                                    <textarea class="form-control" rows="3" name="description"></textarea>
                                </div>
                                
                                <div class="form-group">
                                        <label><h3>Type of Event</h3></label>
                                        <select class="form-control" name="type[]">
                                            <option>Concert or Performance</option>
                                            <option>Festival, Fair or Exhibition</option>
                                            <option>Game or Competition</option>
                                            <option>Party or Social Gathering</option>
                                            <option>Race or Tournament</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Done</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
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

<!-- DateTimePicker -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

<!--<script type= "text/javascript" src = "js/countries.js"></script>!--> 

<script src="js/jquery.js"></script>
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
</body>
<?php require_once("includes/footer.php") ?>

</html>