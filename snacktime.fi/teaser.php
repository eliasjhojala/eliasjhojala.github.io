<?php
  if ($teaserUrl == "") {
    $teaserUrl = $_GET["url"];
  }
?>

<div id="teaser">
  <div id="blackBar"></div>
  <div class="videoWrapper">
    <iframe width="560" height="315" src="<?php echo $teaserUrl; ?>" frameborder="0" allowfullscreen></iframe>
  </div>
</div>
<a id="whiteBar"  class="material-icons" href="#intro"><span>keyboard_arrow_down</span></a>
