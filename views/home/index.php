<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News From <?php echo $rss_title;?></h1>
  </div>
    <?php
        foreach($data as $item){
            echo "<div>
                    <h4><a href='".$item->link."'>". $item->title . "</a> (".$item->pubDate.")</h4>
                    <p>".$item->description."</p>
                  </div>
                  <hr>";
        }

    ?>
</div>
<?php include('views/elements/footer.php');?>
