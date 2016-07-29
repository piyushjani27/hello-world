<!DOCTYPE html>
<html>
    <head>
       
       <!-- made chages for testing -->
       
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="author" content="Scotch">

		<title>View Registered Authors</title>

		<!-- load bootstrap from a cdn -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</head>
	<body>


		<div class="container  ">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-lg-offset-3">

				
				@if(Session::has('success_message'))
				<div class="alert alert-success">
				{{ Session::get('success_message') }}
				</div>
				@endif

				<h1>List of Registered Authors </h1>

				<table class="col-lg-12 col-md-12 ">
					<tr><td>No.</td>
						<td>name </td>
						<td>email</td>
						<td>mobile</td>
						<td>delete</td></tr>
						@foreach ($authors as $author)
						
						<tr style="margin:5px;padding:10px">
						<td>{{ $author['id'] }}</td>
						<td><a href="editauthor/{{ $author['id'] }}">{{ $author['author_name'] }}</a></td>
						<td>{{ $author['author_email'] }}</td>
						<td>{{ $author['author_mobile'] }}</td>
						<!-- <td> <a href="deleteauthor/{{ $author['id'] }}">Delete </a></td> -->

						<td style="padding:5px">
							<form method="post" action='{{ url("deleteauthor/$author[id]") }}' id="deleteauthorform" >
							<input type="hidden" name="_method" value="DELETE">
						
					 		<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button type="submit" class="btn btn-danger">Delete </button>
							</form>	
 						</tr>

 						@endforeach
				 

				
				</div>
			</div>
		</div>


		 


	</body>	
