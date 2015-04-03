<?php require_once("includes/base.php") ?>
<link href="css/login.css" rel="stylesheet">

<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class="">Sign In</strong>

                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <input class="form-control" placeholder="Username" required >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="inputPassword3" placeholder="Password" required type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label class="">
                                        <input class="" type="checkbox">Remember Me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-7 col-sm-9">
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                                <button type="submit" class="btn btn-success btn-sm">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Not Registered Yet? <a href="signup.php" class="">Register Here!</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
 