<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DEBUG Exam | หาจุดอ่อน ก่อนลงสนามจริง</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/freelancer.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.debugexam.com">DEBUG</a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="container">
            <div class="row">
                <form id="form-apply" method="post" action="validate.php">
                    <div class="col-lg-12">
                        <div class="intro-text">
                            <span class="name">กรอกรหัสบัตรที่นี่</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-4">
                        <input class="form-control input-lg" type="text" name="card-code-input" id="card-code-input" style="text-transform:uppercase" placeholder="พิมพ์รหัสบัตร 13 หลักลงในช่องนี้">
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-lg btn-outline btn-header" type="submit">สมัครเข้าร่วม DEBUG Exam</button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <footer id="contact" class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <!-- div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelance</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div -->
                    <div class="footer-col col-md-12">
                        <h3>ติดต่อ DEBUG ได้ที่</h3>
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/debugexam" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a> facebook.com/debugexam
                            </li>
                            <!--li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a> Twitter
                            </li-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2014 - DEBUG
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/freelancer.js"></script>
    <script src="js/jquery.formatter.min.js"></script>

    <script type="text/javascript">
        $('#card-code-input').formatter({
            'pattern': '{{****}}-{{****}}-{{****}}-{{*}}'
        });
        $('#form-apply').submit(function(e){
            /*e.preventDefault();
            alert($('#card-code-input').val());*/
        });
        $(document).ready(function(){
            $('#card-code-input').focus();
        });
    </script>

</body>

</html>
