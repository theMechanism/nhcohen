<div class="container">
	<p class="address">
		NHCohen Partners LLC<br>
		2 Park Avenue - 14th Floor<br>
		New York, NY 10016
	</p>
	<p class="contact-info">
		o: <a href="tel:+12124986960">212.498.6960</a><br>
		f: 855.856.6483<br>
		<a href="mailto:info@nhcohenpartners.com">info@nhcohenpartners.com</a>
	</p>
</div>

<hr>

<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" class="full-width">
<input type="hidden" name="debug" value=1>
<input type="hidden" name="debugEmail" value="george.brassey@themechanism.com">
<input type="hidden" name="oid" value="00Do0000000JCJr">
<input type="hidden" name="retURL" value="http://www.nhcohenpartners.com/contact-us/success">
<input type="hidden" value="NHCohen Website" name="lead_source">
	<div class="row">
		<div>
			<label for="last_name">Name</label>
		</div>
		<div>
			<input id="last_name" maxlength="80" name="last_name" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="email">Email Address</label>
		</div>
		<div>
			<input id="email" maxlength="80" name="email" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="phone">Phone Number</label>
		</div>
		<div>
			<input id="phone" maxlength="40" class='phone' name="phone" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="street">Address</label>
		</div>
		<div>
			<textarea name="street" rows="2"></textarea><br>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="city">City</label>
		</div>
		<div>
			<input id="city" maxlength="40" name="city" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="state">State</label>
		</div>
		<div>
			<div class="select-wrap">
				<select id="state" name="state">
			        <option selected="selected">Select One</option>
			        <?php foreach($states as $key => $value) { ?>
			            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
			        <?php } ?>
				</select>
			</div>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="zip">Zip Code</label>
		</div>
		<div>
			<input id="zip" maxlength="20" name="zip" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<span><label for="00No0000008vE3U">I am an Investor [or] Sponsor</label></span>
		</div>
		<div>
			<input id="00No0000008vE3U" name="00No0000008vE3U" type="checkbox" value="1"><label for="00No0000008vE3U"></label>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="description">Message</label>
		</div>
		<div>
			<textarea id="description" name="description" rows="6"></textarea>
		</div>
	</div>
	<div class="row">
		<div>
			<div></div>
		</div>
		<div>
			<input id="submit" name="submit" type="submit" value="submit">
		</div>
	</div>
</form>
