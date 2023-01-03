<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input name="amount" type="hidden" value=<?php echo montant_global();?> />
<input name="currency_code" type="hidden" value="EUR" />
<input name="shipping" type="hidden" value="transport" />
<input name="tax" type="hidden" value=<?php echo $taxes;?> />
<input name="return" type="hidden" value="ipn.php" />
<input name="cancel_return" type="hidden" value="" />
 
<input name="notify_url" type="hidden" value="https://kidemon.000webhostapp.com/ipn.php" />
 
<input name="cmd" type="hidden" value="_xclick" />
 
<input name="business" type="hidden" value="sb-yevdm2647418@business.example.com" />
 
<input name="item_name" type="hidden" value="Le texte que vous voulez" />
 
<input name="no_note" type="hidden" value="1" />
 
<input name="lc" type="hidden" value="FR" />
 
<input name="bn" type="hidden" value="PP-BuyNowBF" />
 
<input name="custom" type="hidden" value=<?php echo $idcommande;?> />
<input type="hidden" name="rm" value="2">
 
<input type="hidden" name="hosted_button_id" value="YHBA79U52ETAA">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" >
</form>