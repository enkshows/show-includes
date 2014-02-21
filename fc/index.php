<?php require('../../../bin/ClassMathGuard.php'); ?>

<?php include("../../../includes/fc/fc-header.php"); ?>

<div id="wrapper">
  <!-- Navigation-->  
  <div id="nav-col">
    <div id="nav">
      <?php include("../../../includes/main-nav.php"); ?>
      <?php include("../../../includes/main-nav-social.php"); ?>
    </div>
  </div> <!-- End Navigation --> 
  
  <!-- Content--> 
  <div id="main-col">
    
    <!-- Show Hero / Info Container -->
    <?php include("../../../includes/fc/fc-sep2014-header.php"); ?>
    
    <!-- Show Descriptions -->
    <?php include("../../../includes/fc/fc-show-description.php"); ?>
    
    <!-- Info Links/forms -->  
    <?php include("../../../includes/fc/fc-forms.php"); ?>  
    
    <!-- Highlights Module --> 
    <?php include('../../../includes/fc/fc-sep2014-highlights.php'); ?>
    
    <!-- Hotel + Travel Module --> 
    <?php include('../../../includes/fc/fc-sep2014-hotel.php'); ?>              
    
    <!-- Video Module -->     
    <?php include('../../../includes/fc/fc-sep2014-video.php'); ?>

    <!-- Gallery Module -->     
    <?php include('../../../includes/fc/fc-sep2014-gallery.php'); ?>
    
    <!-- BLANK SPACE-->
    <div style="float:left; clear:both; height:300px;"></div>
    <!-- BLANK SPACE-->
    
  </div><!-- end main col-->

</div><!-- end wrapper-->

<?php include("../../../includes/fc/dev-fc-show-footer.php"); ?>