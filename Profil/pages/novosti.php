<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./../styles/homeStyle.css">
</head>
<body>
	<?php

	

	 $sadrzaj=file('./../csv/story.csv');

	 if (isset($_POST['sort'])){
foreach ($sadrzaj as $key => $row) {
	$array=explode(',',$row);
    $dates[$key]  = $array[1];
}

array_multisort($dates, SORT_ASC, $sadrzaj);


   echo "   <div class='love'>
				<h1 class='align'>New</h1>
				<ul class='enlarge'>";
	foreach ($sadrzaj as $key => $element) {
		$array=explode(',',$element);

		echo        "<li>
						<img alt='picture' class='pic-size-small' src='./../assets/newPics/$array[3]'>
						<span>
							<img alt='picture' class='pic-size-large' src='./../assets/newPics/$array[3]'>
							<br>$array[1] $array[2]
						</span>
					</li>";

				}
	
	echo		"</ul>
	         </div>";
	     }

	     else{

	     	echo "   <div class='love'>
				<h1 class='align'>New</h1>
				<ul class='enlarge'>";
	foreach (array_reverse($sadrzaj) as $key => $element) {
		$array=explode(',',$element);

		echo        "<li>
						<img alt='picture' class='pic-size-small' src='./../assets/newPics/$array[3]'>
						<span>
							<img alt='picture' class='pic-size-large' src='./../assets/newPics/$array[3]'>
							<br>$array[1] $array[2]
						</span>
					</li>";

				}
	
	echo		"</ul>
	         </div>";
	     }

				?>
				<form action="admin.php" method="post">
     <input id="sort" type="submit" name="sort" value="Sortiraj Abecedno">
   </div>
 </form>
			</body>
			</html>