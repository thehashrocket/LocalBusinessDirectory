<div class="span-24">


<div class="span-24">
    <h2>Welcome to the Ad Manager!</h2>
       <h3>Add and Delete Ads</h3>
     
     <div class="span-21">      <div class="span-4"><a href="/ads">Create Front Page Ads</a></div>      <div class="span-4"><a href="/ads/priority">Prioritize Front Page Ads</a></div>      <div class="span-4"><a href="/ads/business">Business Listings</a></div>            <div class="span-4"><a href="/ads/clients">Clients Page Listings</a></div>            <div class="span-4"><a href="/ads/slogans">About Page Slogans</a></div>    </div>
    
    <table class="stripeMe" style="margin-top:5em">
    
  <tr>
      
      <th>Title</th>
      <th>Web Address</th>
      <th>Logo</th>

      <th>Action</th>
    </tr>
  <?php if(count($frontads)) : foreach ($frontads->result() as $row): ?>
    
    <tr>
      
      <td width="30px"><p><?=$row->title ?></p></td>
      <td width="30px"><p><?=$row->webaddress ?></p></td>
      <td width="30px"><p><img src="<?=$row->logo ?>"/></p></td>

      <td width="10px">
      <?=form_open('ads/deletead'); ?>
      <input type="hidden" name="id" value="<?=$row->id; ?>" /> 
      <?=form_submit('submit','Delete'); ?>
      <?=form_close(); ?>
      </td>
    </tr>

    <?php endforeach; ?>
    </table>
    
    <?php else : ?>
    
<td>
    <p>No Ads Here!</p>
</td>
    
    <?php endif; ?>
  </table class="stripeMe">
         
       <?=form_open_multipart('/ads/do_upload'); ?>
       <?=form_hidden('redirect', '/ads/index'); ?>
       
       <p><?=form_label('Name', 'name')?>
	   <?=form_input('name', 'Enter The Name'); ?></p>
       
       <p><?=form_label('Description', 'description')?>
	   <?=form_input('description', 'Enter The Description'); ?></p>
       
       <p><?=form_label('Web Address', 'url')?>
	   <?=form_input('url', 'Enter The Web Address'); ?></p>
	   
	   <p><?=form_label('Priority', 'priority')?>
     <?=form_input('priority', '0'); ?></p>
	   
	   <p><?=form_label('Please Upload an Image', 'userfile')?>
	   <?php echo form_upload('userfile'); ?></p>
       
	   <?=form_submit('submit','Create The Ad'); ?>
	   <?=form_fieldset_close(); ?>
	   <?=form_close(); ?>
    
    
    
       <?php echo validation_errors('<p class="error">'); ?>

</div>
</div>
