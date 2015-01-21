<?php if (isset($success)) :
		echo '<p class="success">' . $success . '</p>';
	else:
		echo form_open(current_url(), array('id' => 'investor-form','class' => 'full-width')); ?>
	<p>To establish your eligibility for our new offerings, please complete the online Accredited Investor Suitability Form below.  Your personal information will be treated as strictly private – please see our <a href="<?php echo base_url('privacy-policy'); ?>">Privacy Policy</a>.</p>
	<p>You may also download the <a href="<?php echo base_url('pdf/accredited-investor-form.pdf'); ?>">Accredited Investor Form</a>. (Note: In order to download the Form, you will need Adobe Acrobat Reader, which can be <a href="http://get.adobe.com/reader/">downloaded from here</a>.)</p>
	<p><strong>All fields</strong> are required unless marked <span class="optional_inline">optional</span>.</p>
	<h2>Personal Information</h2>
	<div class="row">
		<div class="big"></div>
		<div>
			<fieldset id="fsAcount">
				<input type="radio" id="chkIndividual" name="chkIndorTrust" class="inputRad" value="Individual" <?php echo set_radio('chkIndorTrust', 'Individual'); ?> /> <label for="chkIndividual">Individual Account</label>
				<input type="radio" id="chkTrust" name="chkIndorTrust" class="inputRad" value="Trust" <?php echo set_radio('chkIndorTrust', 'Trust'); ?> /> <label for="chkTrust">Trust Account</label>
			</fieldset>
			<?php echo form_error('chkIndorTrust'); ?>
		</div>
	</div>
	<div class="row" id="trustNameRow">
		<div>
			<label for="txtTrustName">Trust Name</label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtTrustName', 'name' => 'txtTrustName', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtTrustName')));
				echo form_error('txtTrustName');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtFirstName">First Name</label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtFirstName', 'name' => 'txtFirstName', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtFirstName')));
				echo form_error('txtFirstName');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtMiddleName">Middle Name<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtMiddleName', 'name' => 'txtMiddleName', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtMiddleName')));
				echo form_error('txtMiddleName');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtLastName">Last Name</label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtLastName', 'name' => 'txtLastName', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtLastName')));
				echo form_error('txtLastName');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtDob">Date of Birth<div class="optional">Required for an individual.<br>If a Trust, enter DOB for the beneficiary.</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtDob', 'name' => 'txtDob', 'class' => 'inputText maskdate', 'maxlength' => '10', 'value' => set_value('txtDob')));
				echo '<span class="txtHelp">mm/dd/yyyy</span>';
				echo form_error('txtDob');
			?>		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtSSN">Social Security No./Tax ID</label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtSSN', 'name' => 'txtSSN', 'class' => 'inputText maskss', 'maxlength' => '11', 'value' => set_value('txtSSN')));
				echo '<span class="txtHelp">xxx-xx-xxxx OR xx-xxxxxxx</span>';
				echo form_error('txtSSN');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtAddress">Address</label>
		</div>
		<div>
			<?php
				echo form_textarea(array('id' => 'txtAddress', 'name' => 'txtAddress', 'class' => 'inputText long', 'rows' => '2', 'value' => set_value('txtAddress')));
				echo form_error('txtAddress');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtCity">City</label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtCity', 'name' => 'txtCity', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtCity')));
				echo form_error('txtCity');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtState">State</label>
		</div>
		<div>
			<div class="select-wrap">
				<?php
					$states = array_merge(array(NULL => 'Select One'), $states);
					echo form_dropdown('txtState', $states);
				?>
			</div>
			<?php echo form_error('txtState'); ?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtZip">Zip Code</label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtZip', 'name' => 'txtZip', 'class' => 'inputText med', 'maxlength' => '5', 'value' => set_value('txtZip')));
				echo form_error('txtZip');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtHomePhone">Phone Number</label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtHomePhone', 'name' => 'txtHomePhone', 'class' => 'inputText maskphone', 'maxlength' => '255', 'value' => set_value('txtHomePhone')));
				echo form_error('txtHomePhone');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtSecondPhone">Second Phone<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtSecondPhone', 'name' => 'txtSecondPhone', 'class' => 'inputText maskphone', 'maxlength' => '255', 'value' => set_value('txtSecondPhone')));
				echo form_error('txtSecondPhone');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtMobilePhone">Cell Phone<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtMobilePhone', 'name' => 'txtMobilePhone', 'class' => 'inputText maskphone', 'maxlength' => '255', 'value' => set_value('txtMobilePhone')));
				echo form_error('txtMobilePhone');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtFax">Fax<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtFax', 'name' => 'txtFax', 'class' => 'inputText maskphone', 'maxlength' => '255', 'value' => set_value('txtFax')));
				echo form_error('txtFax');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtEmail">Email Address</label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtEmail', 'name' => 'txtEmail', 'class' => 'inputText long', 'maxlength' => '255', 'value' => set_value('txtEmail')));
				echo form_error('txtEmail');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtEmailConf">Confirm Email Address</label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtEmailConf', 'name' => 'txtEmailConf', 'class' => 'inputText long', 'maxlength' => '255', 'value' => set_value('txtEmailConf')));
				echo form_error('txtEmailConf');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<span><label for="txtVote">In what state are you registered to vote?</label></span>
		</div>
		<div>
			<div class="select-wrap">
				<?php
					echo form_dropdown('txtVote', $states);
				?>
			</div>
			<?php echo form_error('txtVote'); ?>
		</div>
	</div>

	<hr>

	<h2>
		Business Information
		<div class="optional">(Required unless not currently employed or retired.)</div>
	</h2>

	<div class="row">
		<div>
			<label for="txtBusiness">Business/Profession<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtBusiness', 'name' => 'txtBusiness', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtBusiness')));
				echo form_error('txtBusiness');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtTitle">Title<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtTitle', 'name' => 'txtTitle', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtTitle')));
				echo form_error('txtTitle');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtCompany">Company<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtCompany', 'name' => 'txtCompany', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtCompany')));
				echo form_error('txtCompany');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtEmployedSince">Employed Since<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtEmployedSince', 'name' => 'txtEmployedSince', 'class' => 'inputText med', 'maxlength' => '255', 'value' => set_value('txtEmployedSince')));
				echo form_error('txtEmployedSince');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtBusAddress">Business Address<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_textarea(array('id' => 'txtBusAddress', 'name' => 'txtBusAddress', 'class' => 'inputText long', 'rows' => '2', 'value' => set_value('txtBusAddress')));
				echo form_error('txtBusAddress');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtBusCity">City<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtBusCity', 'name' => 'txtBusCity', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtBusCity')));
				echo form_error('txtBusCity');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtBusState">State<div class="optional">optional</div></label>
		</div>
		<div>
			<div class="select-wrap">
				<?php
					echo form_dropdown('txtBusState', $states);
				?>
			</div>
			<?php echo form_error('txtBusState'); ?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtBusZip">Zip Code<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtBusZip', 'name' => 'txtBusZip', 'class' => 'inputText short', 'maxlength' => '5', 'value' => set_value('txtBusZip')));
				echo form_error('txtBusZip');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtBusPhone">Business Phone Number<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtBusPhone', 'name' => 'txtBusPhone', 'class' => 'inputText maskphone', 'maxlength' => '255', 'value' => set_value('txtBusPhone')));
				echo form_error('txtBusPhone');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtBusSecondPhone">Second Phone<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtBusSecondPhone', 'name' => 'txtBusSecondPhone', 'class' => 'inputText maskphone', 'maxlength' => '255', 'value' => set_value('txtBusSecondPhone')));
				echo form_error('txtBusSecondPhone');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtBusMobilePhone">Cell Phone<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtBusMobilePhone', 'name' => 'txtBusMobilePhone', 'class' => 'inputText maskphone', 'maxlength' => '255', 'value' => set_value('txtBusMobilePhone')));
				echo form_error('txtBusMobilePhone');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtBusFax">Fax<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtBusFax', 'name' => 'txtBusFax', 'class' => 'inputText maskphone', 'maxlength' => '255', 'value' => set_value('txtBusFax')));
				echo form_error('txtBusFax');
			?>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="txtBusEmail">Email Address<div class="optional">optional</div></label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtBusEmail', 'name' => 'txtBusEmail', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtBusEmail')));
				echo form_error('txtBusEmail');
			?>
		</div>
	</div>
	<div class="row">
		<div class="big">
			<span><label for="chkAddress">To which address would your prefer that correspondence be sent?</label></span>
		</div>
		<div>
			<fieldset id="fsAddress">
				<input type="radio" id="chkHome" name="chkAddress" class="inputRad" value="Home" <?php echo set_radio('chkAddress', 'Home'); ?> /> <label for="chkHome">Home</label>
				<input type="radio" id="chkBusiness" name="chkAddress" class="inputRad" value="Business" <?php echo set_radio('chkAddress', 'Business'); ?> /> <label for="chkBusiness">Business</label>
			</fieldset>
			<?php echo form_error('chkAddress'); ?>
		</div>
	</div>

	<hr>

	<h2>Statement as to Accredited Investor Status</h2>
	<p class="notice">For an <strong>Individual</strong>, please read carefully items 1, 2 and 3, and check <strong>ALL</strong> items that apply.</p>
	<div><input type="checkbox" id="chk001" name="chk001" class="inputChk" value="My net worth exceeds 1,000,000" <?php echo set_checkbox('chk001', 'My net worth exceeds 1,000,000'); ?> /><label for="chk001">1. My net worth (either individually or with my spouse, if any), including investments and all property and other assets excluding my primary residence, exceeds $1,000,000 (note: if the mortgage on your primary residence is greater than its value, please subtract such difference from your net worth).</label></div>
	<div><input type="checkbox" id="chk002" name="chk002" class="inputChk" value="My individual annual income was at least 200,000 in each of the two most recent years" <?php echo set_checkbox('chk002', 'My individual annual income was at least 200,000 in each of the two most recent years'); ?> /><label for="chk002">2. My individual annual income was at least $200,000 in each of the two most recent years, and I expect such income in the current year.</label></div>
	<div><input type="checkbox" id="chk003" name="chk003" class="inputChk" value="My annual income, jointly with my spouse, was at least 300,000 in each of the two most recent years, and I expect such income in the current year" <?php echo set_checkbox('chk003', 'My annual income, jointly with my spouse, was at least 300,000 in each of the two most recent years, and I expect such income in the current year'); ?> /><label for="chk003">3. My annual income, jointly with my spouse, was at least $300,000 in each of the two most recent years, and I expect such income in the current year.</label></div>
	<p class="notice">For a <strong>Partnership, Limited Liability Company or Corporation</strong>, please read carefully items 4 and 5, and check <strong>ALL</strong> items that apply.</p>
	<div><input type="checkbox" id="chk004" name="chk004" class="inputChk" value="All of the undersigned entitys equity owners meet at least one of the three tests listed above" <?php echo set_checkbox('chk004', 'All of the undersigned entitys equity owners meet at least one of the three tests listed above'); ?> /><label for="chk004">4. All of the undersigned entity's equity owners meet at least one of the three tests listed above.</label></div>
	<div><input type="checkbox" id="chk005a" name="chk005a" class="inputChk" value="If the undersigned is a partnership, limited liability company or corporation, it has total assets in excess of $5,000,000" <?php echo set_checkbox('chk005a', 'If the undersigned is a partnership, limited liability company or corporation, it has total assets in excess of $5,000,000'); ?> /><label for="chk005a">5. If the undersigned is a partnership, limited liability company or corporation, it has total assets in excess of $5,000,000.</label></div>
	<p class="notice">For a <strong>Revocable Trust</strong>, please read carefully items 6, 7 and 8, and check <strong>ALL</strong> items that apply.<br>In addition, please have the Grantor of the Trust complete as an individual a separate<br>Accredited Investor Suitability Form.<br>For an <strong>Irrevocable Trust</strong>, please read carefully items 7 and 8, and check <strong>ALL</strong> items that apply.</p>
	<div><input type="checkbox" id="chk005b" name="chk005b" class="inputChk" value="If the undersigned is a revocable trust, it was created by an investor for his or her own benefit, and such investor meets at least one of the first three tests listed above." <?php echo set_checkbox('chk005b', 'If the undersigned is a revocable trust, it was created by an investor for his or her own benefit, and such investor meets at least one of the first three tests listed above'); ?> /><label for="chk005b">6. If the undersigned is a revocable trust, it was created by an investor for his or her own benefit, and such investor meets at least one of the first three tests listed above.</label></div>
	<div><input type="checkbox" id="chk005c" name="chk005c" class="inputChk" value="If the undersigned is a trust, it has total assets in excess of $5,000,000 and its investment decisions are directed by a sophisticated person." <?php echo set_checkbox('chk005c', 'If the undersigned is a trust, it has total assets in excess of $5,000,000 and its investment decisions are directed by a sophisticated person'); ?> /><label for="chk005c">7. If the undersigned is a trust, it has total assets in excess of $5,000,000 and its investment decisions are directed by a sophisticated person.</label></div>
	<div><input type="checkbox" id="chk005d" name="chk005d" class="inputChk" value="If the undersigned is a trust, one or more of its trustees is a bank or similar institution with the authority to direct the trusts investments." <?php echo set_checkbox('chk005d', 'If the undersigned is a trust, one or more of its trustees is a bank or similar institution with the authority to direct the trusts investments'); ?> /><label for="chk005d">8. If the undersigned is a trust, one or more of its trustees is a bank or similar institution with the authority to direct the trust’s investments.</label></div>
	<p class="notice">If <strong>NONE</strong> of the items 1 through 8 apply, please check the box below:</p>
	<div><input type="checkbox" id="chk005e" name="chk005e" class="inputChk" value="The applicant is not an Accredited Investor because None of the Above Apply." <?php echo set_checkbox('chk005e', 'The applicant is not an Accredited Investor because None of the Above Apply'); ?> /><label for="chk005e">The applicant is not an Accredited Investor because <strong>None of the Above Apply</strong>.</label></div>
	<?php echo form_error('chk001'); ?>

	<hr>

	<h2>Prior Investment Experience and Goals</h2>

	<p class="notice">For <strong>Overall Investment Objectives</strong> and <strong>Real Estate Objectives</strong>, rank with a <u>different</u> number from 1 through 4 for each item, with “1” being the highest priority. Please do not repeat the same number rank.</p>
	<div class="prior-row"><div>Overall Investment Objectives<br>(from 1 through 4 in order of priority; 1 being the highest)</div>
		<div class="objectives">
			<div>
				<input type="text" id="txtGrowth" name="txtGrowth" class="inputText short" maxlength="1" value="<?php echo set_value('txtGrowth'); ?>" /> <label for="txtGrowth">Growth</label>
			</div>
			<div>
				<input type="text" id="txtIncome" name="txtIncome" class="inputText short" maxlength="1" value="<?php echo set_value('txtIncome'); ?>" /> <label for="txtIncome">Current Income</label>
			</div>
			<div>
				<input type="text" id="txtTax" name="txtTax" class="inputText short" maxlength="1" value="<?php echo set_value('txtTax'); ?>" /> <label for="txtTax">Tax Deferral</label>
			</div>
			<div>
				<input type="text" id="txtLiquidity" name="txtLiquidity" class="inputText short" maxlength="1" value="<?php echo set_value('txtLiquidity'); ?>" /> <label for="txtLiquidity">Liquidity</label>
			</div>
		</div>
		<?php echo form_error('txtGrowth'); ?>
		<?php echo form_error('txtIncome'); ?>
		<?php echo form_error('txtTax'); ?>
		<?php echo form_error('txtLiquidity'); ?>
	</div>
	<div class="prior-row">
		<div>Real Estate Objectives<br>(from 1 through 4 in order of priority; 1 being the highest)</div>
		<div class="objectives">
			<div>
				<input type="text" id="txtGrowthRE" name="txtGrowthRE" class="inputText short" maxlength="1" value="<?php echo set_value('txtGrowthRE'); ?>" /> <label for="txtGrowthRE">Growth</label>
			</div>
			<div>
				<input type="text" id="txtIncomeRE" name="txtIncomeRE" class="inputText short" maxlength="1" value="<?php echo set_value('txtIncomeRE'); ?>" /> <label for="txtIncomeRE">Current Income</label>
			</div>
			<div>
				<input type="text" id="txtTaxRE" name="txtTaxRE" class="inputText short" maxlength="1" value="<?php echo set_value('txtTaxRE'); ?>" /> <label for="txtTaxRE">Tax Deferral</label>
			</div>
			<div>
				<input type="text" id="txtLiquidityRE" name="txtLiquidityRE" class="inputText short" maxlength="1" value="<?php echo set_value('txtLiquidityRE'); ?>" /> <label for="txtLiquidityRE">Liquidity</label>
			</div>
		</div>
		<?php echo form_error('txtGrowthRE'); ?>
		<?php echo form_error('txtIncomeRE'); ?>
		<?php echo form_error('txtTaxRE'); ?>
		<?php echo form_error('txtLiquidityRE'); ?>
	</div>
	<div class="prior-row">
		<div>Risk Tolerance:</div>
		<div class="objectives">
			<div>
				<input type="radio" id="chkAggressive" name="chkRisk" class="inputRad" value="Aggressive" <?php echo set_radio('chkRisk', 'Aggressive'); ?> /> <label for="chkAggressive">Aggressive</label>
			</div>
			<div>
				<input type="radio" id="chkModerate" name="chkRisk" class="inputRad" value="Moderate" <?php echo set_radio('chkRisk', 'Moderate'); ?> /> <label for="chkModerate">Moderate</label>
			</div>
			<div>
				<input type="radio" id="chkConservative" name="chkRisk" class="inputRad" value="Conservative" <?php echo set_radio('chkRisk', 'Conservative'); ?> /> <label for="chkConservative">Conservative</label>
			</div>
		</div>
		<?php echo form_error('chkRisk'); ?>
	</div>
	<div class="prior-row">
		<div>Do Investment Objectives Allow Speculation?</div>
		<div class="objectives">
			<div>
				<input type="radio" id="chkYes" name="chkSpeculation" class="inputRad" value="Yes" <?php echo set_radio('chkSpeculation', 'Yes'); ?> /> <label for="chkYes">Yes</label>
			</div>
			<div>
				<input type="radio" id="chkNo" name="chkSpeculation" class="inputRad" value="No" <?php echo set_radio('chkSpeculation', 'No'); ?> /> <label for="chkNo">No</label>
			</div>
		</div>
		<?php echo form_error('chkSpeculation'); ?>
	</div>
	<div class="prior-row">
		<div>Primary Source of Income:</div>
		<div class="objectives">
			<div>
				<input type="radio" id="chkInvestments" name="chkPrimary" class="inputRad" value="Investments" <?php echo set_radio('chkPrimary', 'Investments'); ?> /> <label for="chkInvestments">Investments</label>
			</div>
			<div>
				<input type="radio" id="chkCompensation" name="chkPrimary" class="inputRad" value="Compensation" <?php echo set_radio('chkPrimary', 'Compensation'); ?> /> <label for="chkCompensation">Compensation</label>
			</div>
		</div>
		<?php echo form_error('chkPrimary'); ?>
	</div>
	<div class="prior-row">
		<div class="row">
			<div class="big">
				<label for="txtPercent">Please estimate the percent of real estate in your investment portfolio (excluding personal residence)</label>
			</div>
			<div>
				<?php
					echo form_input(array('id' => 'txtPercent', 'name' => 'txtPercent', 'class' => 'inputText short', 'maxlength' => '3', 'value' => set_value('txtPercent')));
					echo form_error('txtPercent');
				?>
			</div>
		</div>
	</div>
	<div><input type="checkbox" id="chk006" name="chk006" class="inputChk" value="My business or investment experience is such that I can analyze a prospective investment and determine whether it is suitable for me" <?php echo set_checkbox('chk006', 'My business or investment experience is such that I can analyze a prospective investment and determine whether it is suitable for me'); ?> /><label for="chk006">My business or investment experience is such that I can analyze a prospective investment and determine whether it is suitable for me.</label></div>
	<div><input type="checkbox" id="chk007" name="chk007" class="inputChk" value="I normally consult with an investment advisor before making a real estate investment decision" <?php echo set_checkbox('chk007', 'I normally consult with an investment advisor before making a real estate investment decision'); ?> /><label for="chk007">I normally consult with an investment advisor before making a real estate investment decision.</label></div>
	<div><input type="checkbox" id="chk008" name="chk008" class="inputChk" value="Stocks which are listed on a national securities exchange" <?php echo set_checkbox('chk008', 'Stocks which are listed on a national securities exchange'); ?> /><label for="chk008">I have experience as an investor in Stocks which are listed on a national securities exchange.</label></div>
	<div><input type="checkbox" id="chk010" name="chk010" class="inputChk" value="Mutual funds which hold a portfolio primarily consisting of stocks"<?php echo set_checkbox('chk010', 'Mutual funds which hold a portfolio primarily consisting of stocks'); ?>  /><label for="chk010">I have experience as an investor in Mutual funds which hold a portfolio primarily consisting of stocks.</label></div>
	<div><input type="checkbox" id="chk011" name="chk011" class="inputChk" value="Taxable bonds or other debt instruments" <?php echo set_checkbox('chk011', 'Taxable bonds or other debt instruments'); ?> /><label for="chk011">I have experience as an investor in Taxable bonds or other debt instruments.</label></div>
	<div><input type="checkbox" id="chk012" name="chk012" class="inputChk" value="Tax exempt bonds" <?php echo set_checkbox('chk012', 'Tax exempt bonds'); ?> /><label for="chk012">I have experience as an investor in Tax exempt bonds.</label></div>
	<div><input type="checkbox" id="chk013" name="chk013" class="inputChk" value="Partnerships, limited liability companies, corporations which invest in real estate or real estate investment trusts" <?php echo set_checkbox('chk013', 'Partnerships, limited liability companies, corporations which invest in real estate or real estate investment trusts'); ?> /><label for="chk013">I have experience as an investor in Partnerships, limited liability companies, corporations which invest in real estate or real estate investment trusts (REITs).</label></div>
	<div><input type="checkbox" id="chk014" name="chk014" class="inputChk" value="Other types of investments not mentioned in any of the previous categories" <?php echo set_checkbox('chk014', 'Other types of investments not mentioned in any of the previous categories'); ?> /><label for="chk014">I have experience as an investor in Other types of investments not mentioned in any of the previous categories. (Describe)</label></div>
	<div class="push">
		<input type="text" id="txtOther" name="txtOther" class="inputText long" value="<?php echo set_value('txtOther'); ?>" />
		<?php echo form_error('chk014'); ?>
	</div>
	<?php echo form_error('chk006'); ?>

	<hr>

	<div class="row">
		<div>
			<span><label for="txtReferred">I was referred to NHCohen Partners LLC. by:</label></span>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtReferred', 'name' => 'txtReferred', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtReferred')));
				echo form_error('txtReferred');
			?>
		</div>
	</div>


	<p class="notice">Note: Additional information may be required including a form of personal identification.</p>

	<p class="notice">Submission of this form is equivalent to a written signature.</p>

	<hr>

	<div>
		<input type="checkbox" id="chkSigned" name="chkSigned" class="inputChk" value="Electronically signed" <?php echo set_checkbox('chkSigned', 'Electronically signed'); ?> /><label for="chkSigned">By checking this box and typing my name below, I am electronically signing my application.</label>
		<?php echo form_error('chkSigned'); ?>
	</div>

	<div class="row">
		<div>
			<label for="txtSignedName">Name</label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtSignedName', 'name' => 'txtSignedName', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtSignedName')));
				echo form_error('txtSignedName');
			?>
		</div>
	</div>

	<div class="row" id="trustSignRow">
		<div class="big">
			<label for="txtSignedTrust">Please indicate in the space provided that the signer is a Trustee for the named trust</label>
		</div>
		<div>
			<?php
				echo form_input(array('id' => 'txtSignedTrust', 'name' => 'txtSignedTrust', 'class' => 'inputText', 'maxlength' => '255', 'value' => set_value('txtSignedTrust')));
				echo form_error('txtSignedTrust');
			?>
		</div>
	</div>

	<div class="row">
		<div><p id='checkForm' class="notice">Is all information above accurate? <span class='arrow'>    &#10095;</span></p></div>
		<div>
			<input class='accredited-investor' id="submit" name="submit" type="submit" value="submit">
		</div>
	</div>





<?php
		echo form_close();
	endif;
?>
