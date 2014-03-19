<div class="span-24">


<div class="span-24">
    <h2>Welcome to the Ad Manager!</h2>
       <h3>Slogans</h3>
     
     <div class="span-21">
      <div class="span-4"><a href="/ads">Create Front Page Ads</a></div>
      <div class="span-4"><a href="/ads/priority">Prioritize Front Page Ads</a></div>
      <div class="span-4"><a href="/ads/business">Business Listings</a></div>            <div class="span-4"><a href="/ads/clients">Clients Page Listings</a></div>            <div class="span-4"><a href="/ads/slogans">About Page Slogans</a></div>
    </div>
   <div class="span-19" style="margin-top:5em">           <div class="span-16 clear"><p class="notice">The Input Fields do not allow for "Quote Marks" so please don't put them in the fields.</p></div>
    <table class="stripeMe">
    
    <tr>    
          <th>Team Member</th>    
          <th>Slogan</th>          
    </tr>  <?php if(count($slogans)) : foreach ($slogans->result() as $row): ?>        <?=form_open('ads/updateslogan'); ?>    <tr><td>Laura</td><td><input name="lauraslogan" type="text" value="<?=$row->laura?>"/></td></tr>    <tr><td>Cheryl</td><td><input name="cherylslogan" type="text" value="<?=$row->cheryl?>"/></td></tr>    <tr><td>Chrissy</td><td><input name="chrissyslogan" type="text" value="<?=$row->chrissy?>"/></td></tr>    <tr><td>Rita</td><td><input name="ritaslogan" type="text" value="<?=$row->rita?>"/></td></tr>    <tr><td>Jeanine</td><td><input name="jeanineslogan" type="text" value="<?=$row->jeanine?>"/></td></tr>    <tr><td><input type="hidden" name="id" value="<?=$row->id; ?>" />      <input type="hidden" name="redirect" value="/ads/slogans" />       <?=form_submit('submit','Update'); ?>      <?=form_close(); ?></td></tr>
    <?php endforeach; ?>    
    </table>
    
    <?php else : ?>
    
<td>
    <p>No Slogans Here!</p>
</td>
    
    <?php endif; ?>
  </table class="stripeMe">
</div>
</div>
