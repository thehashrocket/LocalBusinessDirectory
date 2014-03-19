<div class="span-6 aboutbar">

<?php $this->load->view('about-include.php'); ?>

</div>

<div id="secondbar" class="span-16 welcomebox" style="padding-top:1em;">
    <h2>Contact Verde Valley Business Resource!</h2>
<h3><strong>Laura Meyers Ihrman and 
Cheryl Oliver</strong></h3>
<p>928-634-2033</p>
<p>1756 E. Villa Dr. #B-1<br/>
  Cottonwood, AZ 86326<br />
  <a href="#map2">Link to Map</a>
</p>
  <p>&nbsp;</p>
  <?php echo form_open('email/send'); ?>
            <fieldset class="span-15" style="margin-left:10px;">
               
                    <legend>
                        Use this simple form to contact us
                    </legend>
                    <br/>
                    <?php
                    $name_data = array('name'=>'name', 'id'=>'name', 'value'=>set_value('name'));
                    $message_data = array('name'=>'comments', 'id'=>'comments', 'value'=>set_value('comments'), 'rows'=>'5', 'class'=>'span-7');
					$subject_data = array('BillingQuestion'=>'Billing Question','CustomerService'=>'Customer Service','Advertising'=>'Advertising');
                    ?>
                    
                        <label for="name">
                            Name: 
                        </label>
					  <?php echo form_input($name_data); ?>
                    <br/>
                    
                        <label for="email">
                            Email Address *Required*: 
                        </label>
                        <input type="text" name="email" id="email" value="<?php echo set_value('email');?>">
                    <br/>
					
                        <label for="phone">
                            Phone Number: 
                        </label>
                        <input type="text" name="phone" id="phone" value="<?php echo set_value('phone');?>">
                    <br/>
					
                        <label for="subject">
                            Subject: 
                        </label>
                        <?php echo form_dropdown('subject', $subject_data, 'CustomerService');?>
                    <br/>
                
                    <p><label>
                        Comments:
                    </label>
                      <br/>
					<?php echo form_textarea($message_data); ?></p>
                    <br/>
                    <p style="clear:both;">
                        <?php echo form_submit('submit', 'Submit'); ?>
                    </p>
                    </fieldset>
                    <?php echo form_close(); ?>
                    
                    <?php echo validation_errors(); ?>
<p><a name="map2" id="map2"></a></p>
<div id="map" style="margin-left:10px;"><iframe width="512" height="384" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;q=1756+E.+Villa+Dr.+%23C1,+Cottonwood,+AZ+86326&amp;ie=UTF8&amp;hq=&amp;hnear=1756+E+Villa+Dr,+Cottonwood,+Yavapai,+Arizona+86326&amp;gl=us&amp;ei=Lg-AS7iXA4mGswOz0cjxAw&amp;ved=0CAkQ8gEwAA&amp;t=h&amp;ll=34.727611,-112.005508&amp;spn=0.008465,0.013733&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?hl=en&amp;q=1756+E.+Villa+Dr.+%23C1,+Cottonwood,+AZ+86326&amp;ie=UTF8&amp;hq=&amp;hnear=1756+E+Villa+Dr,+Cottonwood,+Yavapai,+Arizona+86326&amp;gl=us&amp;ei=Lg-AS7iXA4mGswOz0cjxAw&amp;ved=0CAkQ8gEwAA&amp;t=h&amp;ll=34.727611,-112.005508&amp;spn=0.008465,0.013733&amp;z=16&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>

    <a href="http://www.facebook.com/#!/VerdeValleyBusinessResource?ref=ts"><img src="/assets/images/facebook_icon.png" border="0" alt="Follow Us On Facebook" /></a>
    </div>
