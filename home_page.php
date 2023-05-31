<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HLS in PHP</title>
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



	<?php



	if (isset($_POST['submit']) && isset($_FILES['my_video'])) {
		$video_name = $_FILES['my_video']['name'];
		$tmp_name = $_FILES['my_video']['tmp_name'];
		$error = $_FILES['my_video']['error'];


		if ($error === 0) {


			$video_ex = pathinfo($video_name, PATHINFO_EXTENSION);

			$video_ex_lc = strtolower($video_ex);

			$allowed_exs = array("mp4", 'webm', 'avi', 'flv');

			if (in_array($video_ex_lc, $allowed_exs)) {

				$new_video_name = uniqid("video-", true) . '.' . $video_ex_lc;
				$video_upload_path = $new_video_name;
				move_uploaded_file($tmp_name, $video_upload_path);

				include_once('upload.php');
				videoConversionForHLS($video_upload_path);

				header("Location: videos.php");




			} else {
				$em = "You can't upload files of this type";
				header("Location: index.php?error=$em");
			}
		}


	}
	?>


	<div class="container">
		<div class="box">
			<?php if (isset($_GET['error'])) { ?>
				<p>
					<?= $_GET['error'] ?>
				</p>
			<?php } ?>
			<h4>Make Video for HLS</h4>
			<form action="" method="post" enctype="multipart/form-data"> <input class="mb-2" type="file"
					name="my_video">
				<button type="submit" name="submit" value="Convert">Convert</button>
			</form>

			<div class="mb-2"></div>
			<div class="mb-2"></div>
			<div class="mb-2"></div>
			<div class="mb-2"></div>
			<div class="mb-2"></div>




			<a href="videos.php"> Converted Videos</a>
		</div>
	</div>


</body>

</html>