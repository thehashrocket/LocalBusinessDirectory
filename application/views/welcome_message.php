<div class="span-6 aboutbar">

<?php $this->load->view('about-include.php'); ?>

</div>

<div id="rightside" class="span-17" >

<div id="secondbar" class="span-12 welcomebox" style="padding-top:1em;">
  <p style="font-weight:bold">We're on a mission to strengthen our Local Community from the sidewalk up with the support of Verde Valley residents.</p>
  
  <div id="gallery" class="carousel">
    <ul>
    
  </div>
  
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
</div>
<!-- End Together -->