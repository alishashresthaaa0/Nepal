<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php include 'header.php'; ?> 

	<div style="padding:50px 0 10px 0;"><h1><center>Submit your question here</center></h1></div>

	<div class="container-fluid padding bg-light">
		<div class="col-md-6 col-md-offset-4 ">
			<form method="post"  enctype="multipart/form-data">
				
				<div class="form-group">
				<select class="form-control" name="year">
					<option value="0" selected="selected">Select Category</option>
					<option>Culture</option>
					<option>Travels</option>
					<option>Wildlife</option>
					
				</select>
			</div>

				<div class="form-group" >
				<input type="text" class="form-control" name="questiontitle" placeholder="What is your question?" autocomplete="off">
				</div>

			<button type="submit" class="btn btn-default" name="request">Submit Your Question</button>
			</form>
		</div>


	</div>

<div style="padding:50px 0 10px 0;"><h1><center>Answers</center></h1></div>

		

		<div class="container-fluid padding" style="width: 100%; background-color:	#f9f9f9	;">

		
			<div class=" col align-self-center" >
  				<table class="table table-hover table-condensed"  border="5px solid blue" >
    				 <thead>

				      <tr style="background-color: #f1f1f1; ">
				      	<th style="width: 300px;">Question</th>
				        <th style="width: 500px;">Categories</th>
				        <th style="width: 500px;">Date</th>
				        <th style="width: 800px;">Answers</th> 
				     
				      </tr>
				    </thead>

				    <tbody>
				   


				<tr>
						<th style="width: 300px;"><a href="forum.php">Redirect the question</a></th>
					   <th style="width: 500px;">Wildlife</th>
				        <th style="width: 500px;">Date..</th>
				        <th style="width: 800px;"><a href="answers.php">Submit your answer</a></th>
				       
				      
				</tr>
				    </tbody>

</table>
		

	</div>
</body>
</html>