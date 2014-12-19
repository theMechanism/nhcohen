<form action="" method="POST" class="full-width">
	<h2>Personal Background Information</h2>
	<div class="row">
		<div>
			<label for="first_name">First Name</label>
		</div>
		<div>
			<input id="first_name" maxlength="80" name="first_name" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="last_name">Last Name</label>
		</div>
		<div>
			<input id="last_name" maxlength="80" name="last_name" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="dob">Date of Birth</label>
		</div>
		<div>
			<input id="dob" maxlength="80" name="dob" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="social">Social Security No.</label>
		</div>
		<div>
			<input id="social" maxlength="80" name="social" type="text">
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
			<label for="phone">Phone Number</label>
		</div>
		<div>
			<input id="phone" maxlength="40" name="phone" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="phone2">Second Phone</label>
		</div>
		<div>
			<input id="phone2" maxlength="40" name="phone2" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="phone3">Cell Phone</label>
		</div>
		<div>
			<input id="phone3" maxlength="40" name="phone3" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="fax">Fax</label>
		</div>
		<div>
			<input id="fax" maxlength="40" name="fax" type="text">
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
			<span><label for="vote_state">In what state are you registered to vote?</label></span>
		</div>
		<div>
			<div class="select-wrap">
				<select id="vote_state" name="vote_state">
			        <option selected="selected">Select One</option>
			        <?php foreach($states as $key => $value) { ?>
			            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
			        <?php } ?>
				</select>
			</div>
		</div>
	</div>

	<hr>

	<h2>Business Information</h2>

	<div class="row">
		<div>
			<label for="business">Business/Profession</label>
		</div>
		<div>
			<input id="business" maxlength="80" name="business" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="title">Title</label>
		</div>
		<div>
			<input id="title" maxlength="80" name="title" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="company">Company</label>
		</div>
		<div>
			<input id="company" maxlength="80" name="company" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="employed_since">Employed Since</label>
		</div>
		<div>
			<input id="employed_since" maxlength="80" name="employed_since" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="biz_street">Business Address</label>
		</div>
		<div>
			<textarea name="biz_street" rows="2"></textarea><br>
		</div>
	</div>
	<div class="row">
		<div>
			<label for="biz_city">City</label>
		</div>
		<div>
			<input id="biz_city" maxlength="40" name="biz_city" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="biz_state">State</label>
		</div>
		<div>
			<div class="select-wrap">
				<select id="biz_state" name="biz_state">
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
			<label for="biz_zip">Zip Code</label>
		</div>
		<div>
			<input id="biz_zip" maxlength="20" name="biz_zip" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="biz_phone">Business Phone Number</label>
		</div>
		<div>
			<input id="biz_phone" maxlength="40" name="biz_phone" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="biz_phone2">Second Phone</label>
		</div>
		<div>
			<input id="biz_phone2" maxlength="40" name="biz_phone2" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="biz_phone3">Cell Phone</label>
		</div>
		<div>
			<input id="biz_phone3" maxlength="40" name="biz_phone3" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="biz_fax">Fax</label>
		</div>
		<div>
			<input id="biz_fax" maxlength="40" name="biz_fax" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<label for="biz_email">Email Address</label>
		</div>
		<div>
			<input id="biz_email" maxlength="80" name="biz_email" type="text">
		</div>
	</div>
	<div class="row">
		<div>
			<span><label for="mail_pref">To which address would your prefer that correspondence be sent?</label></span>
		</div>
		<div>
			<input id="mail_home" name="mail_pref" type="radio" value="mail_home"><label for="mail_home">Home</label
			><input id="mail_business" name="mail_pref" type="radio" value="mail_business"><label for="mail_business">Business</label>
		</div>
	</div>

	<hr>

	<h2>Statement as to Accredited Investor Status</h2>
	<p class="notice">For an <strong>Individual</strong>, please read carefully items 1, 2 and 3, and check <strong>ALL</strong> items that apply.</p>
	<div><input id="s1" name="s1" type="checkbox" value="s1"><label for="s1">1. My net worth (either individually or with my spouse, if any), including investments and all property and other assets excluding my primary residence, exceeds $1,000,000 (note: if the mortgage on your primary residence is greater than its value, please subtract such difference from your net worth).</label></div>
	<div><input id="s2" name="s2" type="checkbox" value="s2"><label for="s2">2. My individual annual income was at least $200,000 in each of the two most recent years, and I expect such income in the current year.</label></div>
	<div><input id="s3" name="s3" type="checkbox" value="s3"><label for="s3">3. My annual income, jointly with my spouse, was at least $300,000 in each of the two most recent years, and I expect such income in the current year.</label></div>
	<p class="notice">For a <strong>Partnership, Limited Liability Company or Corporation</strong>, please read carefully items 4 and 5, and check <strong>ALL</strong> items that apply.</p>
	<div><input id="s4" name="s4" type="checkbox" value="s4"><label for="s4">4. All of the undersigned entity's equity owners meet at least one of the three tests listed above.</label></div>
	<div><input id="s5" name="s5" type="checkbox" value="s5"><label for="s5">5. If the undersigned is a partnership, limited liability company or corporation, it has total assets in excess of $5,000,000.</label></div>
	<p class="notice">For a <strong>Revocable Trust</strong>, please read carefully items 6, 7 and 8, and check <strong>ALL</strong> items that apply.<br>In addition, please have the Grantor of the Trust complete as an individual a separate<br>Accredited Investor Suitability Form.<br>For an <strong>Irrevocable Trust</strong>, please read carefully items 7 and 8, and check <strong>ALL</strong> items that apply.</p>
	<div><input id="s6" name="s6" type="checkbox" value="s6"><label for="s6">6. If the undersigned is a revocable trust, it was created by an investor for his or her own benefit, and such investor meets at least one of the first three tests listed above.</label></div>
	<div><input id="s7" name="s7" type="checkbox" value="s7"><label for="s7">7. If the undersigned is a trust, it has total assets in excess of $5,000,000 and its investment decisions are directed by a sophisticated person.</label></div>
	<div><input id="s8" name="s8" type="checkbox" value="s8"><label for="s8">8. If the undersigned is a trust, one or more of its trustees is a bank or similar institution with the authority to direct the trust’s investments.</label></div>
	<p class="notice">If <strong>NONE</strong> of the items 1 through 8 apply, please check the box below:</p>
	<div><input id="s9" name="s9" type="checkbox" value="s9"><label for="s9">The applicant is not an Accredited Investor because <strong>None of the Above Apply</strong>.</label></div>

	<hr>

	<h2>Prior Investment Experience and Goals</h2>

	<p class="notice">For <strong>Overall Investment Objectives</strong> and <strong>Real Estate Objectives</strong>, rank with a <u>different</u> number from 1 through 4 for each item, with “1” being the highest priority. Please do not repeat the same number rank.</p>
	<div class="prior-row"><div>Overall Investment Objectives<br>(from 1 through 4 in order of priority; 1 being the highest)</div>
		<div class="objectives">
			<div>
				<input id="growth" maxlength="1" name="growth" type="text">
				<label for="growth">Growth</label>
			</div>
			<div>
				<input id="income" maxlength="1" name="income" type="text"
				><span><label for="income">Current Income</label></span>
			</div>
			<div>
				<input id="tax_deferral" maxlength="1" name="tax_deferral" type="text"
				><span><label for="tax_deferral">Tax Deferral</label></span>
			</div>
			<div>
				<input id="liquidity" maxlength="1" name="liquidity" type="text">
				<label for="liquidity">Liquidity</label>
			</div>
		</div>
	</div>
	<div class="prior-row">
		<div>Real Estate Objectives<br>(from 1 through 4 in order of priority; 1 being the highest)</div>
		<div class="objectives">
			<div>
				<input id="growth2" maxlength="1" name="growth2" type="text">
				<label for="growth2">Growth</label>
			</div>
			<div>
				<input id="income2" maxlength="1" name="income2" type="text"
				><span><label for="income2">Current Income</label></span>
			</div>
			<div>
				<input id="tax_deferral3" maxlength="1" name="tax_deferral3" type="text"
				><span><label for="tax_deferral3">Tax Deferral</label></span>
			</div>
			<div>
				<input id="liquidity4" maxlength="1" name="liquidity4" type="text">
				<label for="liquidity4">Liquidity</label>
			</div>
		</div>
	</div>
	<div class="prior-row">
		<div>Risk Tolerance:</div>
		<div class="objectives">
			<div>
				<input id="aggro" name="risk_tolerance" type="radio" value="aggro"><label for="aggro">Aggressive</label>
			</div>
			<div>
				<input id="moderate" name="risk_tolerance" type="radio" value="moderate"><label for="moderate">Moderate</label>
			</div>
			<div>
				<input id="conservative" name="risk_tolerance" type="radio" value="conservative"><label for="conservative">Conservative</label>
			</div>
		</div>
		<div>Do Investment Objectives Allow Speculation?</div>
		<div class="objectives">
			<div>
				<input id="spec_yes" name="allow_speculation" type="radio" value="spec_yes"><label for="spec_yes">Yes</label>
			</div>
			<div>
				<input id="spec_no" name="allow_speculation" type="radio" value="spec_no"><label for="spec_no">No</label>
			</div>
		</div>
	</div>
	<div class="prior-row">
		<div>Primary Source of Income:</div>
		<div class="objectives">
			<div>
				<input id="investments_income" name="primary_income" type="radio" value="investments_income"><label for="investments_income">Investments</label>
			</div>
			<div>
				<input id="compensation_income" name="primary_income" type="radio" value="compensation_income"><label for="compensation_income">Compensation</label>
			</div>
		</div>
		<div class="row">
			<div>
				<label for="percent_real_estate">Please estimate the percent of real estate in your investment portfolio (excluding personal residence)</label>
			</div>
			<div>
				<input id="percent_real_estate" maxlength="80" name="percent_real_estate" type="text">
			</div>
		</div>
	</div>
	<div><input id="r1" name="r1" type="checkbox" value="r1"><label for="r1">My business or investment experience is such that I can analyze a prospective investment and determine whether it is suitable for me.</label></div>
	<div><input id="r2" name="r2" type="checkbox" value="r2"><label for="r2">I normally consult with an investment advisor before making a real estate investment decision.</label></div>
	<div><input id="r3" name="r3" type="checkbox" value="r3"><label for="r3">I have experience as an investor in Stocks which are listed on a national securities exchange.</label></div>
	<div><input id="r4" name="r4" type="checkbox" value="r4"><label for="r4">I have experience as an investor in Mutual funds which hold a portfolio primarily consisting of stocks.</label></div>
	<div><input id="r5" name="r5" type="checkbox" value="r5"><label for="r5">I have experience as an investor in Taxable bonds or other debt instruments.</label></div>
	<div><input id="r6" name="r6" type="checkbox" value="r6"><label for="r6">I have experience as an investor in Tax exempt bonds.</label></div>
	<div><input id="r7" name="r7" type="checkbox" value="r7"><label for="r7">I have experience as an investor in Partnerships, limited liability companies, corporations which invest in real estate or real estate investment trusts (REITs).</label></div>
	<div><input id="r8" name="r8" type="checkbox" value="r8"><label for="r8">I have experience as an investor in Other types of investments not mentioned in any of the previous categories. (Describe)</label></div>
	<div class="push"><input id="other_investments" maxlength="40" name="other_investments" type="text"></div>

	<hr>

	<div class="row">
		<div>
			<span><label for="referred_by">I was referred to ESRT Management Services by:</label></span>
		</div>
		<div>
			<input id="referred_by" maxlength="20" name="referred_by" type="text">
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
