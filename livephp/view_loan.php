<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Borrow</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<ink rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom2 navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Start</span> Borrowing
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="new_loan.html">New Borrow</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="view_loan.html">View Current</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
				<?php
				$db_host = 'mysql51-066.wc1.ord1.stabletransit.com';
				$db_user = '954129_borrow';
				$db_pwd = 'B0rrowhhcc';

				$database = '954129_loan_db';
				$table = 'loans';

				if (!mysql_connect($db_host, $db_user, $db_pwd))
				    die("Can't connect to database");

				if (!mysql_select_db($database))
				    die("Can't select database");

				// sending query
				$result = mysql_query("SELECT * FROM {$table}");
				if (!$result) {
				    die("Query to show fields from table failed");
				}

				$fields_num = mysql_num_fields($result);

				echo "<table class='table table-hover table-striped'><tr>";
				// printing table headers
				for($i=0; $i<$fields_num; $i++)
				{
				    $field = mysql_fetch_field($result);
				    echo "<td>{$field->name}</td>";
				}
				echo "</tr>\n";
				// printing table rows
				while($row = mysql_fetch_row($result))
				{
				    echo "<tr>";

				    // $row is array... foreach( .. ) puts every element
				    // of $row to $cell variable
				    foreach($row as $cell)
				        echo "<td>$cell</td>";

				    echo "</tr>\n";
					
				}
				echo "</table>\n";
				mysql_free_result($result);
				?>


            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
			<img src="img/hh.png">
            <p class="footer">&copy; HH IT 2015</p>
        </div>
    </footer>

    <!-- JS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/grayscale.js"></script>

</body>
</html>
