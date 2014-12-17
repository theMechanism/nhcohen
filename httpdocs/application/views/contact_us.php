<div class="container">
	<p class="address">
		NHCohen Partners LLC<br>
		2 Park Avenue - 14th Floor<br>
		New York, NY 10016
	</p>
	<p class="contact-info">
		o: 212.498.6960<br>
		f: 855.856.6483<br>
		<a href="mailto:info@nhcohenpartners.com">info@nhcohenpartners.com</a>
	</p>
</div>

<hr>

<form action="#" method="POST" class="full-width">
	<div class="row">
		<div>
			<label for="name">Name</label>
		</div>
		<div>
			<input id="name" maxlength="40" name="name" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="email">Email Address</label>
		</div>
		<div>
			<input id="email" maxlength="40" name="email" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="phone">Phone Number</label>
		</div>
		<div>
			<input id="phone" maxlength="40" name="phone" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="address_1">Address</label>
		</div>
		<div>
			<input id="address_1" maxlength="40" name="address_1" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="address_2">Address 2</label>
		</div>
		<div>
			<input id="address_2" maxlength="40" name="address_2" type="text">
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
				<select name="state" id="state">
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
			<input id="zip" maxlength="40" name="zip" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="investor">I am an Investor [or] Sponsor</label>
		</div>
		<div>
			<input id="investor" name="investor" type="checkbox"><label for="investor"></label>
		</div>
	</div>
	<div class="row big">
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
