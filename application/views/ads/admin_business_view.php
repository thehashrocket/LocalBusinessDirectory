<div class="span-24">


<div class="span-24">
    <h2>Welcome to the Ad Manager!</h2>
       <h3>Add and Delete Ads</h3>
     
     <div class="span-21">      <div class="span-4"><a href="/ads">Create Front Page Ads</a></div>      <div class="span-4"><a href="/ads/priority">Prioritize Front Page Ads</a></div>      <div class="span-4"><a href="/ads/business">Business Listings</a></div>            <div class="span-4"><a href="/ads/clients">Clients Page Listings</a></div>            <div class="span-4"><a href="/ads/slogans">About Page Slogans</a></div>    </div>
    
    <table class="stripeMe" style="margin-top:5em">
    
  <tr>
      
      <th>Title</th>            <th>Description</th>
      <th>Street</th>
      <th>City</th>
      <th>State</th>
      <th>Zip</th>
      <th>Phone</th>
      <th>Web</th>
      <th>Logo</th>            <th>Category</th>
      <th>Update</th>

      <th>Delete</th>
    </tr>
  <?php if(count($business)) : foreach ($business->result() as $row): ?>
    
    <tr>
      <?=form_open('ads/updateBusiness'); ?>
      <td><p><input name="title" type="text" value="<?=$row->title ?>"/></p></td>            <td><p><input name="description" type="text" value="<?=$row->description ?>"/></p></td>
      <td><p><input name="street" type="text" value="<?=$row->street ?>"/></p></td>
      <td><p><input name="city" type="text" value="<?=$row->city ?>"/></p></td>
      <td><p><input name="state" type="text" value="<?=$row->state ?>"/></p></td>
      <td><p><input name="zip" type="text" value="<?=$row->zip ?>"/></p></td>
      <td><p><input name="phone" type="text" value="<?=$row->phone ?>"/></p></td>
      <td><p><input name="webaddress" type="text" value="<?=$row->webaddress ?>"/></p></td>            <td><p><input name="category" type="text" value="<?=$row->category ?>"/></p></td>
      <td><p><input name="logo" type="text" value="<?=$row->logo ?>"/></p></td>
      
      <td>
      
      <input type="hidden" name="id" value="<?=$row->id; ?>" />
      <input type="hidden" name="redirect" value="/ads/business" /> 
      <?=form_submit('submit','Update'); ?>
      <?=form_close(); ?>
      </td>
      

      <td>
      <?=form_open('ads/deletebusiness'); ?>
      <input type="hidden" name="id" value="<?=$row->id; ?>" /> 
      <?=form_submit('submit','Delete'); ?>
      <?=form_close(); ?>
      </td>
    </tr>

    <?php endforeach; ?>
    </table>
    
    <?php else : ?>
    
<td>
    <p>No Businesses Here!</p>
</td>
    
    <?php endif; ?>
  </table class="stripeMe">
         
       <?=form_open_multipart('/ads/createbusiness'); ?>
       <?=form_hidden('redirect', '/ads/business'); ?>
       
       <p><?=form_label('Name', 'name')?>
	   <?=form_input('name', 'Enter The Name'); ?></p>
       
       <p><?=form_label('Description', 'description')?>
	   <?=form_input('description', 'Enter The Description'); ?></p>
       
       <p><?=form_label('Web Address', 'url')?>
	   <?=form_input('url', 'Enter The Web Address'); ?></p>
	   
	   <p><?=form_label('Street', 'street')?>
     <?=form_input('street', 'Enter Street'); ?></p>
     
     <p><?=form_label('City', 'city')?>
     <?=form_input('city', 'Enter City'); ?></p>
     
     <p><?=form_label('State', 'state')?>
     <?=form_input('state', 'Enter State'); ?></p>
     
     <p><?=form_label('Zip', 'zip')?>
     <?=form_input('zip', 'Enter Zip'); ?></p>
     
     <p><?=form_label('Phone', 'phone')?>
     <?=form_input('phone', 'Enter Contact Phone'); ?></p>
	   
	   <p><?=form_label('Please Upload an Image', 'userfile')?>
	   <?php echo form_upload('userfile'); ?></p>
	   
	   <p><?=form_label('Please Choose a Category', 'category')?>
	     <select name="category">
            <?php foreach ($categories->result() as $row): ?>
            <option value="<?=$row->id?>" > <?=$row->category?></option>
            <?php endforeach; ?>
    </select></p>
       
	   <?=form_submit('submit','Create The Business'); ?>
	   <?=form_fieldset_close(); ?>
	   <?=form_close(); ?>
    
    
    
       <?php echo validation_errors('<p class="error">'); ?>

</div>
</div>
