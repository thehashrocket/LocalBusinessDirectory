<div class="span-6 aboutbar">
<?php $this->load->view('about-include.php'); ?>
  

</div>

<div id="secondbar" class="span-16 welcomebox" style="padding-top:1em;">



<p>&nbsp;</p>
    
<div class="clientwrap span-15">
<div class="clienthead span-15" style="margin-bottom:1em;">

    	<h4 class="clientheadline"><?php foreach ($catpagename->result() as $row) : ?>
        You are currently viewing <div style="text-decoration:underline"><?=$row->category?></div>
      <?php endforeach; ?></h4>
      
  
</div>
    <?php if($business->num_rows()>0) : foreach ($business->result() as $row):?>
  <div class="span-15">
  <div class="span-5 logo"><a href="<?=$row->webaddress ?>"><img src="<?=$row->logo ?>"/></a></div>
  <div class="span-10 busbody">
    <h3><?=$row->title ?></h3>
    <p><?=$row->street ?><br/>
      <?=$row->city ?> <?=$row->state ?> <?=$row->zip ?><br/>
      <?=$row->phone ?><br/>
      <a href="<?=$row->webaddress ?>"><?=$row->webaddress ?></a>
    </p>
    <P><?=$row->description ?></P>
  </div>
</div>

<?php endforeach; ?>

<?php else : ?>
<p>There are no businesses in this category. <a href="/site/advertise">Be the first!</a></p>
<?php endif; ?>
    <div class="clientfooter span-17"></div>
    </div>
    
    
    
    
<div><p><a href="http://www.facebook.com/#!/VerdeValleyBusinessResource?ref=ts"><img src="/assets/images/facebook_icon.png" border="0" alt="Follow Us On Facebook" /></a></p></div>
</div>
