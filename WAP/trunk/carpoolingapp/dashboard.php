<?php 
session_start();

if(!empty($_SESSION['username'])){?>

       <h4 class="panel panel-heading panel-success"> Welcome,
        <?=$_SESSION['username']; ?> !</h4>
        <?php }
else {
	header("Location:login.php");
	$_SESSION['error'] = "You Must Login First";
}
?>      

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dashboard</title>
		<!--<script src="jquery.min.js" type="application/javascript"></script>-->
		<!--<link rel="stylesheet" href="dashboard.css" type="text/css">-->
		<link rel="stylesheet" href="test.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
		<!--<script type="text/javascript" src="http://documentcloud.github.com/underscore/underscore-min.js"></script>--> <!--// underscore-->
		
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		<!--<script src="dashboard.js" type="application/javascript"></script>-->
		<script src="test.js" type="application/javascript"></script>
	</head>
	<body>
<!-- Button trigger modal -->
<div class="col-md-4 text-center">
	<button type="button" class="btn  btn-primary pull-center" data-toggle="modal" data-target="#myModal">
  add post
</button>
<!--<input class="form-control" placeholder="Search by keywords..."></input>-->
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Post</h4>
      </div>
      <div class="modal-body">
      <textarea rows="8" cols="78" id="txtArea" required></textarea>
      </div>
      <div class="modal-footer">
        <button id="hidePost" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id='addPost'  type="button" class="btn btn-primary">Add Post</button>
      </div>
    </div>
  </div>
</div>
		<br/>
		<br/>
		<br/>
		
		<div id="trips">
            
		</div>
	</body>
</html>