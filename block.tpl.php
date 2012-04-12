<div class="column block block-<?php print $block->module ?><?php print (($block_zebra == 'even') ? " last" : "") ?> " id="block-<?php print $block->module . "-" . $block->delta ?>">
	<?php if($block->subject){ ?>
	<h3><a href="/people"><?php print $block->subject; ?></a></h3>
	<?php } ?>
	<div class="content"><?php print $block->content ?></div>
</div>

