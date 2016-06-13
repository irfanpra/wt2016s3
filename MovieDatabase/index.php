<?php include 'gori.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
    <?php include 'header.php'; ?>
    <div class="content">
      <?php $newsFile = file($openShiftFolder."vijesti.csv");
      $imagesArray = [];
      $newsArray = [];
      $timesArray = [];
      $counter = 0;
      foreach ($newsFile as $news) {
        $nesto = str_getcsv($news);
        $timesArray[$counter] = $nesto[0];
        $imagesArray[$counter] = $nesto[1];
        $newsArray[$counter] = $nesto[2];
        $counter++;
      }
      if(isset($_POST['sort'])) {
        if($_POST['sort']=='alpha') {
          array_multisort($newsArray, SORT_STRING, $imagesArray, $timesArray);
        }
      }
      for($i = 0; $i < $counter; $i++) {
      ?>
        <div class="news">
        <?php
        $image = $imagesArray[$i];
        $timeOfNews = $timesArray[$i];
        $newsContent = $newsArray[$i];
        ?>
        <img src="<?php echo (strlen($image)!=0)?$image:'no_image.png' ?>"/>
        <p>
          <time class='vrijeme' datetime="<?php echo $timeOfNews ?>"></time>
          <?php echo $newsContent ?>
        </p>
        </div>
        <?php
      }?>
    </div>
  </BODY>
</HTML>
