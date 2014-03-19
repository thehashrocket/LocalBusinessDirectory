<div class="span-24">


<div class="span-24">
    <h2>Welcome to the Ad Manager!</h2>
       <h3>Clients Directory</h3>
     
     <div class="span-21">      <div class="span-4"><a href="/ads">Create Front Page Ads</a></div>      <div class="span-4"><a href="/ads/priority">Prioritize Front Page Ads</a></div>      <div class="span-4"><a href="/ads/business">Business Listings</a></div>            <div class="span-4"><a href="/ads/clients">Clients Page Listings</a></div>            <div class="span-4"><a href="/ads/slogans">About Page Slogans</a></div>    </div>    
   <div class="span-19" style="margin-top:5em">           <div class="span-17"><h3>Add A Client</h3></div>      <?=form_open_multipart('/ads/createclient'); ?>       <?=form_hidden('redirect', '/ads/clients'); ?>            <div class="span-22"> <p><?=form_label('Enter The Client Name', 'clientname')?>     <?=form_input('clientname', ''); ?> <?=form_label('Enter The First Letter', 'firstletter')?>      <?=form_input('firstletter', ''); ?>            <?=form_submit('submit','Create The Business'); ?>            </p></div>      <?=form_fieldset_close(); ?>     <?=form_close(); ?>           <div class="span-17"> <?php echo validation_errors('<p class="error">'); ?></div>         </div>
    <table class="stripeMe">
    
    <tr>    
          <th>Client Name</th>    
          <th>First Letter</th>                    <th>Update</th>                    <th>Delete</th>    
    </tr>
  <?php if(count($clients)) : foreach ($clients->result() as $row): ?>
    
    <tr>
      <?=form_open('ads/updateclient'); ?>
      <td><p><input name="clientname" type="text" value="<?=$row->clientname ?>"/></p></td>
      <td><p><input name="firstletter" type="text" value="<?=$row->firstletter ?>"/></p></td>
      <td>
      
      <input type="hidden" name="id" value="<?=$row->id; ?>" />
      <input type="hidden" name="redirect" value="/ads/clients" /> 
      <?=form_submit('submit','Update'); ?>
      <?=form_close(); ?>
      </td>
      

      <td>
      <?=form_open('ads/deleteclient'); ?>
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
         
       <?=form_open_multipart('/ads/createclient'); ?>
       <?=form_hidden('redirect', '/ads/clients'); ?>
       
       <p><?=form_label('Client Name', 'clientname')?>
	   <?=form_input('clientname', 'Enter the Client Name'); ?></p>
       
       <p><?=form_label('First Letter', 'firstletter')?>
	   <?=form_input('firstletter', 'Enter the First Letter'); ?></p>
	   <?=form_submit('submit','Create The Business'); ?>
	   <?=form_fieldset_close(); ?>
	   <?=form_close(); ?>
    
    
    
       <?php echo validation_errors('<p class="error">'); ?>

</div>
</div>
