<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	function account_check ($val)
	{
		$test = str_replace('-', '', $val);
		if ( ! ctype_digit($test))
		{
			return FALSE;
		}
		else
		{
			if (9 == strlen($test))
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
	}

	function date_check ($val)
	{
		if (strtotime($val))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function determination ($val)
	{
		if ( $this->input->post('chk001') || $this->input->post('chk002') || $this->input->post('chk003') || $this->input->post('chk004') || $this->input->post('chk005a') || $this->input->post('chk005b') )
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function objectives ($val)
	{
		if ( $this->input->post('txtGrowth') && $this->input->post('txtIncome') && $this->input->post('txtTax') && $this->input->post('txtLiquidity') )
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function other_types ($val)
	{
		if ($this->input->post('chk014') && ! $this->input->post('txtOther'))
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	function phone_check ($val)
	{
		if (0 == strlen(trim($val)))
		{
			return TRUE;
		}
		else
		{
			$test = return_digits($val);
			if (strlen($test) >= 7)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
	}

	function prior_experience ($val)
	{
		if ( $this->input->post('chk006') || $this->input->post('chk007') || $this->input->post('chk008') || $this->input->post('chk009') || $this->input->post('chk010') || $this->input->post('chk011') || $this->input->post('chk012') || $this->input->post('chk013') || $this->input->post('chk014') )
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function real_estate_objectives ($val)
	{
		if ( $this->input->post('txtGrowthRE') && $this->input->post('txtIncomeRE') && $this->input->post('txtTaxRE') && $this->input->post('txtLiquidityRE') )
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function return_digits ($s) {
		$pattern = '/[^0-9]*/';
		return preg_replace($pattern, '', $s);
	}
