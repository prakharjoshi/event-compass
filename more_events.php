<?php require_once("includes/base.php") ?>

    <div class="container">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hi, Username
                    <small>It's Nice to Meet You!</small>
                </h1>
                <p>Get to know about surrounding events of your interests.</p>
            </div>
        </div>
        <div id="wrapper">

        
        <!-- Events Row -->

        {% for i in [1,10] %}
            <div class="col-lg-12">
                <h2 class="page-header">Category - 1</h2>
            </div>
            <div class="col-lg-3 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt="">
                <h3>{Event.name}
                    <small>{Event.type}</small>
                </h3>
                <p>Short description</p>
            </div>
        {% endfor %}
            
            
           
            
            
        <hr>

        
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

<?php require_once("includes/footer.php") ?>   

</html>
