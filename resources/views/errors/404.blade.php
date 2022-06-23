<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Eduline admin</title>
        <link href="{{ asset('/css/bootstrap-markdown.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600,400&subset=cyrillic-ext' rel='stylesheet' type='text/css'>
        
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 600;
				font-family: 'Roboto';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				margin-top:100px;
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 22px;
                font-weight: 400;
				margin-bottom: 40px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<a class="brand" style="display:block;" href="{!! URL::to('') !!}"><img src="{{url('/images/sites/eduline-logo.png')}}" alt="eduline logo" ></a>
				<div class="title"><span>Та буруу хандалт хийж байна. <span></div>
			</div>
		</div>
	</body>
</html>
