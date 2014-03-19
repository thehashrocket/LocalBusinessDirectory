<div class="span-6 aboutbar">

<?php $this->load->view('about-include.php'); ?>

</div>

<div id="rightside" class="span-17" >

<div id="secondbar" class="span-12 welcomebox" style="padding-top:1em;">
  <p style="font-weight:bold">We're on a mission to strengthen our Local Community from the sidewalk up with the support of Verde Valley residents.</p>
  
  <div id="gallery" class="carousel">
    <ul>      <li><img src="/assets/images/gallery/AcmePizza1.jpg" width="208" height="138"></li>      <li><img src="/assets/images/gallery/AZCellular1.jpg" width="208" height="138"></li>      <li><img src="/assets/images/gallery/BlindBrothers1.jpg" width="208" height="138"></li>      <li><img src="/assets/images/gallery/ChubbyChucks1.jpg" width="208" height="138"></li>      <li><img src="/assets/images/gallery/KCTaeKwonDo2.jpg" width="208" height="138"></li>      <li><img src="/assets/images/gallery/PetKingdom1.jpg" width="208" height="138"></li>      <li><img src="/assets/images/gallery/RoadsideGrille1.jpg" width="208" height="138"></li>      <li><img src="/assets/images/gallery/Rokzoo2.jpg" width="208" height="138"></li>      <li><img src="/assets/images/gallery/sedona-paint-center.jpg" width="208" height="138"></li>          </ul>
    
  </div><script type="text/javascript">$(function() {    $(".carousel").jCarouselLite({        auto: 1800,        speed: 2500,        visible: 2    });});</script>
  
  <p style="font-weight:bold">Our local economy depends on the success of Local Business, and we're here to make it simple for you to find them!</p>


<a class="floatright" href="http://www.facebook.com/#!/VerdeValleyBusinessResource?ref=ts"><img src="/assets/images/facebook_icon.png" border="0" alt="Follow Us On Facebook" /></a>
</div>


<div id="sidebarads" class="span-4" style="margin-bottom:1em;">
<ul class="prepend-1">
	<?php if(count($priority)) : foreach ($priority->result() as $row): ?>
    
    	<li>
        <div class="frontpagead" style="text-align:center;">
            <p style="margin-left:0; margin-top:-5px;"><a class="adlogo" href="<?=$row->webaddress ?>"><img src="<?=$row->logo ?>" /></a>
            	<br />
            </p>
        
        </div>
        </li>
    <?php endforeach; ?>
</ul>


    
    <?php else : ?>
    
    <div id="frontpagead">
    <p>Your Ad Could Be Here!</p>
    </div>
    
    <?php endif; ?>

</div>
</div><div id="bottomsponsors" class="span-16">    <?php if($nopriority->num_rows() > 0) : foreach($nopriority->result() as $row2) : ?>      <div class="frontpagead span-3">      <p style="margin-left:0;"><a class="adlogo" href="<?=$row2->webaddress ?>"><img src="<?=$row2->logo ?>" /></a>              <br />            </p>    </div>      <?php endforeach; ?>    <?php else: ?>    <div class="frontpagead">      <p class="notice">Your Ad Could Be Here!</p>    </div>  <?php endif; ?>  </div>
<!-- End Together -->