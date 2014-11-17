<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function generate_breadcrumbs($data) {
		if (is_array($data))
		{
			$i = 1;
			$l = count($data);

			echo '<ul class="breadcrumbs">';
			foreach($data as $key => $val)
			{
				echo '<li>';
				if ($i != $l)
				{
					echo '<a href="' . base_url($key) . '">';
				}
				echo $val;
				if ($i != $l)
				{
					echo '</a>';
				}
				echo '</li>';
				$i++;
			}
			echo '</ul>';
		}
	}
