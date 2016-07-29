<!DOCTYPE html>
<html>
    <head>
       
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="author" content="Scotch">

		<title>View Registered Books</title>

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

				<h1>List of Registered Books </h1>

				<table class="col-lg-12 col-md-12 "  cellpadding="10" cellspacing="10">
					<tr><td>No.</td>
						<td>Book Name </td>
						<td>Book Image</td>
						
						<td>Delete</td>
					</tr>
					@foreach ($books as $book)
						
					<tr style="margin:5px;padding:10px">
						<td>{{ $book['id'] }}</td>
						<td style="padding:5px"><a href="editbook/{{ $book['id'] }}">{{ $book['book_name'] }}</a></td>
 						<td style="padding:5px"> <img src="{{ $book['book_image'] }}" style="width:100px;height:100px"></td>
 
						<td style="padding:5px">
							<form method="post" action='{{ url("deletebook/$book[id]") }}' id="deletebookform" >
							<input type="hidden" name="_method" value="DELETE">
						
					 		<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button type="submit" class="btn btn-danger">Delete </button>
							</form>	
						</td>
 					</tr>

 					@endforeach
 				</table>

					{!! $books->render() !!} 

				 

				</div>
			</div>
		</div>


		 


	</body>	
