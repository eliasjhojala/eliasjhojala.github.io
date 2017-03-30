<div id="linkbar">
  
  <a onClick="track('Menubar', 'Logo');" href="#teaser">
    <img src="assets/images/logo.svg" id="logo">
  </a>
  
  <div id="linkBarLinks">
    <?php foreach ($menuBarLinks as $linkLine) { ?>
      
      <a
        href="#<?php echo $linkLine[0]; ?>"
        onClick="track('Menubar', '<?php echo $linkLine[1]; ?>');"
        class="close-menubox"><?php echo $linkLine[1]; ?>
      </a>
      
    <?php } ?>
  </div>

  <span id="menuBoxIcon">
    <a href class="toggle-menubox material-icons"></a>
  </span>
</div>
