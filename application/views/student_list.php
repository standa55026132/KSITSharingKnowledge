<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>/assets/pictures/ksitlogo.png" height="50px" width="50px" alt="KSIT" class="img-responsive" style="margin-top: -15px"/></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <!--<li class="active"><a href="#">Home</a></li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">កុំព្យូទ័រពាណិជ្ជកម្ម<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">កុំព្យូទ័រធុរកិច្ច</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="#">Contact</a></li>-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">កសិកម្ម <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">កសិកម្ម</a></li>
                            <li><a href="#">វិទ្រាសាស្រ្តសត្វ</a></li>
                            <li><a href="#">វិទ្រាសាស្រ្តជលផល</a></li>
                            <!--<li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>-->
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </li>
                    <!--<li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
                    <li><a href="../navbar-static-top/">Static top</a></li>-->
                    <li><a href="../navbar-fixed-top/"><span class="glyphicon glyphicon-user"></span> Sanfeng </a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h3>កុំព្យូទ័រធុរកិច្ច</h3>
        <p>
        <table class="table">
            <thead class="thead-inverse">
            <tr>
                <th></th>
                <th>មេរៀន</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>គណិតវិទ្យាសម្រាប់កុំព្យូទ័រធុរកិច្ច ១</td>
                <td><a href="#"><span class="glyphicon glyphicon-arrow-down"></span></a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>ប្រព័ន្ឋគ្រប់គ្រងទិន្ន័យមូលដ្ឋាន</td>
                <td><a href="#"><span class="glyphicon glyphicon-arrow-down"></span></a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>ការប្រើប្រាស់កម្មវិធី cms បង្កើតគេហទំព័រ​</td>
                <td><a href="#"><span class="glyphicon glyphicon-arrow-down"></span></a></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>គណិតវិទ្យាសម្រាប់កុំព្យូទ័រធុរកិច្ច ១</td>
                <td><a href="#"><span class="glyphicon glyphicon-arrow-down"></span></a></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>ប្រព័ន្ឋគ្រប់គ្រងទិន្ន័យមូលដ្ឋាន</td>
                <td><a href="#"><span class="glyphicon glyphicon-arrow-down"></span></a></td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>ការប្រើប្រាស់កម្មវិធី cms បង្កើតគេហទំព័រ​</td>
                <td><a href="#"><span class="glyphicon glyphicon-arrow-down"></span></a></td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>គណិតវិទ្យាសម្រាប់កុំព្យូទ័រធុរកិច្ច ១</td>
                <td><a href="#"><span class="glyphicon glyphicon-arrow-down"></span></a></td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>ប្រព័ន្ឋគ្រប់គ្រងទិន្ន័យមូលដ្ឋាន</td>
                <td><a href="#"><span class="glyphicon glyphicon-arrow-down"></span></a></td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>ការប្រើប្រាស់កម្មវិធី cms បង្កើតគេហទំព័រ​</td>
                <td><a href="#"><span class="glyphicon glyphicon-arrow-down"></span></a></td>
            </tr>
            </tbody>
        </table>

        </p>
        <p>
            <!--<a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>-->
        </p>
    </div>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

<?php
/*echo " testing 555";
print_r($data);
*/?>