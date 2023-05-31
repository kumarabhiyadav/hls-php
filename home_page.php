<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>video upload php and mysql</title>
	<style>
		.container {
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.box {
			height: 400px;
			width: 300px;
			border-radius: 5px;
			border: 1px dotted black;
			padding: 1.5rem;

		}

		.mb-2 {
			margin-bottom: 2rem;
		}
	</style>
</head>

<body>

	<div class="container">
		<div class="box">
			<h4>Make Video for HLS</h4>
			<form action="upload.php" method="post" enctype="multipart/form-data"> <input class="mb-2" type="file"
					name="my_video">
				<button type="submit" name="submit" value="Convert">Convert</button>
			</form>
			<div class="mb-2"></div>
			<div class="mb-2"></div>
			<div class="mb-2"></div>
			<div class="mb-2"></div>
			<div class="mb-2"></div>


			<a href="videos.php"> Coverted Videos</a>
		</div>
	</div>


</body>

</html>