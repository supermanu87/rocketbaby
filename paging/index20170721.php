<?php
/*--------------------------------------------------------------------------------------------
|    @desc:        pagination index.php
|    @author:      Aravind Buddha
|    @url:         http://www.techumber.com
|    @date:        12 August 2012
|    @email        aravind@techumber.com
|    @license:     Free!, to Share,copy, distribute and transmit , 
|                  but i'll be glad if i my name listed in the credits'
---------------------------------------------------------------------------------------------*/
include('config.php');    //include of db config file
include ('paginate.php'); //include of paginat page

$per_page = 50;         // number of results to show per page
$result = mysql_query("SELECT * FROM dashboard");
$total_results = mysql_num_rows($result);
$total_pages = ceil($total_results / $per_page);//total pages we going to have

//-------------if page is setcheck------------------//
if (isset($_GET['page'])) {
    $show_page = $_GET['page'];             //it will telles the current page
    if ($show_page > 0 && $show_page <= $total_pages) {
        $start = ($show_page - 1) * $per_page;
        $end = $start + $per_page;
    } else {
        // error - show first set of results
        $start = 0;              
        $end = $per_page;
    }
} else {
    // if page isn't set, show first set of results
    $start = 0;
    $end = $per_page;
}
// display pagination
$page = intval($_GET['page']);

$tpages=$total_pages;
if ($page <= 0)
    $page = 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Rocketbaby</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style type="text/css">
.logo
{
    text-align: center;
}
.container{

}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="logo">
                <a href="http:/www.techumber.com">
                    <img src="img/rocketbaby.jpg" alt="techumber.com logo"/> 
                </a>
            </div>
        </div>
        <div class="row">
            <div class="span6 offset3">
                <div class="mini-layout">
                 <?php
                    $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
                    echo '<div class="pagination"><ul>';
                    if ($total_pages > 1) {
                        echo paginate($reload, $show_page, $total_pages);
                    }
                    echo "</ul></div>";
                    // display data in tableda
					
					
					//MARIO

					//create connection
					$connection = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

					//test if connection failed
					if(mysqli_connect_errno()){
						die("connection failed: "
							. mysqli_connect_error()
							. " (" . mysqli_connect_errno()
							. ")");
					}
					
					// for ($i = $start; $i < $end; $i++) {
						
					// echo " start = " .$start." end = ".$end;
					//get results from database
					// $where = " WHERE 1=1";
					$where = " WHERE id > " . $start . " AND id <= " . $end . " ";
					// echo $where;
					
					$result = mysqli_query($connection,"SELECT * FROM dashboard" . $where);
					$all_property = array();  //declare an array for saving property

									
					echo '<table class="table table-bordered">
							<tr class="data-heading">';  //initialize table tag
					while ($property = mysqli_fetch_field($result)) {
						echo '<td>' . $property->name . '</td>';  //get field name for header
						array_push($all_property, $property->name);  //save those to array
					}
					echo '</tr>'; //end tr tag

					//showing all data
					while ($row = mysqli_fetch_array($result)) {
						echo "<tr>";
						foreach ($all_property as $item) {
							echo '<td>' . $row[$item] . '</td>'; //get items using property value
						}
						echo '</tr>';
					}
					echo "</table>";
//MARIO
					
            // pagination
            ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>



