<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Service Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
		.bg-dark {
			background-color: #478061 !important;
		}
		.navbar-brand {
			font-family: Ubuntu, Helvetica, sans-serif; font-size: 16.8px; 
		}

    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
		 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <div class="container-fluid justify-content-center">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.html">Home</a>
					<a class="navbar-brand" href="index.php">Service Records</a>
					<a class="navbar-brand" href="aglm.html">Aknowledgments</a>
					<a class="navbar-brand" href="git.html">GitHub</a>
					<a class="navbar-brand" href="contact.html">Contact</a>
				</div>
		  </div>
		</nav> 
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Service Records</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Service Record</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Total</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";

                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }

 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>


    <footer class="text-center mt-auto fixed-bottom">
  <hr>
  <p>

© 2021 <a href="https://docs.github.com/en" style="color: darkgreen; text-decoration: none;" target="_blank">GitHub</a>, Inc.

<br><br>Copyright 2021 <a href="https://www.uottawa.ca/" style="color: darkgreen; text-decoration: none;" target="_blank">University of Ottawa</a>

<br><br>Linux® is a registered trademark of Linus Torvalds <a href="https://www.linuxfoundation.org/the-linux-mark/" style="color: darkgreen; text-decoration: none;" target="_blank">(info)</a>

</p>
</footer>
</body>
</html>
