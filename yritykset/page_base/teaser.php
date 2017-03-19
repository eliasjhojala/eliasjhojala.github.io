<?php
  if ($teaserUrl == "") {
    $teaserUrl = $_GET["url"];
  }
?>

<div id="teaser">
  <div id="blackBar"></div>
  <img width="100%" src="<?php echo $teaserUrl; ?>">
</div>
<?php if (!$hideWhiteBar) { ?>
  <a id="whiteBar"  class="material-icons" href="#intro"><span>keyboard_arrow_down</span></a>
<?php } ?>
