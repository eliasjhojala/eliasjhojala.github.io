<?php if ($teaserUrl == "") { $teaserUrl = $_GET["url"]; } ?>

<div id="teaser">
  <div id="blackBar"></div>
  <img width="100%" src="<?php echo $teaserUrl; ?>">
</div>
