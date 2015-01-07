<ul>
	<li><a href="<?php echo base_url(); ?>">Home</li>

	<?php foreach($sitemap as $key => $value) : ?>
		<li><a href="<?php echo base_url($key); ?>"><?php echo $value['title']; ?></a>
		<?php if (isset($value['children'])) : ?>
			<ul>
			<?php foreach ($value['children'] as $key2 => $value2) : ?>
				<li><a href="<?php echo base_url($key . '/' . $key2); ?>"><?php echo $value2['title']; ?></a></li>
			<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		</li>
	<?php endforeach; ?>

	<li><a href="<?php echo base_url('terms-of-use'); ?>">Terms of Use</li>
	<li><a href="<?php echo base_url('business-continuity-plan-disclosure'); ?>">Disclosure Statement</li>
	<li><a href="<?php echo base_url('privacy-policy'); ?>">Privacy Policy</a></li>
</ul>
