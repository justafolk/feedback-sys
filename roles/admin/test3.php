<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>Test</title>
</head>
<body>
<form method="post" id="user_form">
	<table class="table text-center">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Sr. No</th>
				<th scope="col">Subject</th>
				<th scope="col">Course Code</th>
				<th scope="col">Teacher Name</th>
				<th scope="col">Total Questions</th>
				<th scope="col">Status</th>
				<th scope="col">Action</th>
				<th scope="col">View</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>Basic Mathematics</td>
				<td>R18SC1701</td>
				<td>@mdo</td>
				<td>7</td>
				<th>Not Done</th>
				<input type="hidden" name="name" value="Basic Mathematics">
				<b id="msg"></b>
				<td><input class="btn btn-danger" type="button" name="id1" id="id1" value="Inactive"></td>
				<td><button type="button" class="btn btn-primary" id="id2">View1</button></td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>Basic Physics</td>
				<td>R18SC1703</td>
				<td>@mdo</td>
				<td>7</td>
				<th>Done</th>
				<td><button class="btn btn-primary">Allow Access</button></td>
				<td><button class="btn btn-primary" id="id3">View</button></td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>English</td>
				<td>R18SC1707</td>
				<td>@mdo</td>
				<td>7</td>
				<td>Not Done</td>
				<td><button class="btn btn-primary">Allow Access</button></td>
				<td><button class="btn btn-primary" id="id4">View</button></td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>Engineering Graphic Skills</td>
				<td>R18ME1210</td>
				<td>@mdo</td>
				<td>7</td>
				<td>Not Done</td>
				<td><button class="btn btn-primary">Allow Access</button></td>
				<td><button class="btn btn-primary" id="id5">View</button></td>
			</tr> 
			<tr>
				<th scope="row">5</th>
				<td>Programming in C</td>
				<td>R18CP3401</td>
				<td>@mdo</td>
				<td>7</td>
				<td>Not Done</td>
				<td><button class="btn btn-primary">Allow Access</button></td>
				<td><button class="btn btn-primary" id="id6">View</button></td>
			</tr>
		</tbody>
	</table>
</form>
<script>
	$(document).ready(function(){
		$("#id1").click(function(){
			var data = $("#user_form").serialize()+"&id1=id1";
			$.ajax({
				url:"insert_data.php",
				type:"post",
				data:data,
				success:function(response){
					$("#msg").text(response);
				}
			});
		});
	})
</script>
</body>
</html>