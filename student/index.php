<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

        <title>PATROS - HTML5 FREE TEMPLATE</title>

        <!-- Bootstrap Core CSS -->

        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
		<link rel="stylesheet" href="../css/patros.css" >
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

	</head>

	<body data-spy="scroll">
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="../images/logo.png" alt="company logo"/></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right custom-menu">
						<li><a href="/demo/index.php">Home</a></li>
                                                <li><a href="/demo/teacher/index.php">老師資料</a></li>
                                                <li><a href="/demo/course/index.php">課程資料</a></li>
                                                <li class="active"><a href="/demo/student/index.php">學生資料</a></li>
                                                <li><a href="/demo/department/index.php">系所資料</a></li>
                                                <li><a href="/demo/teach_subject/index.php">學期開課</a></li>
                                                <li><a href="/demo/study_subject/index.php">修課列表</a></li>
                                                <li><a href="/demo/logout.php">登入/登出</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Page Content -->
		<section class="container blog">
			<div class="row">
		        <!-- Blog Column -->
		        <div class="col-md-12">
		            <h1 class="page-header sidebar-title">
		                學生資料
		            </h1>
                                    <div class="input-group searchbar">
                                        <input type="text" class="form-control searchbar" placeholder="Search for...">
                                        <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Search</button>
                                        </span>
                                    </div><!-- /input-group -->


<!--              Add your code here                    -->










<!--              Add your code here end                   -->

			</div>
			</div>
		    </section>

        


        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>


        <!--Jquery Smooth Scrolling-->
        <script>
            $(document).ready(function(){
                $('.custom-menu a[href^="#"], .intro-scroller .inner-link').on('click',function (e) {
                    e.preventDefault();

                    var target = this.hash;
                    var $target = $(target);

                    $('html, body').stop().animate({
                        'scrollTop': $target.offset().top
                    }, 900, 'swing', function () {
                        window.location.hash = target;
                    });
                });

                $('a.page-scroll').bind('click', function(event) {
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500, 'easeInOutExpo');
                    event.preventDefault();
                });

               $(".nav a").on("click", function(){
                     $(".nav").find(".active").removeClass("active");
                    $(this).parent().addClass("active");
            	});

                $('body').append('<div id="toTop" class="btn btn-primary color1"><span class="glyphicon glyphicon-chevron-up"></span></div>');
                    $(window).scroll(function () {
                        if ($(this).scrollTop() != 0) {
                            $('#toTop').fadeIn();
                        } else {
                            $('#toTop').fadeOut();
                        }
                    }); 
                $('#toTop').click(function(){
                    $("html, body").animate({ scrollTop: 0 }, 700);
                    return false;
                });

            });
        </script>

    </body>
</html>
