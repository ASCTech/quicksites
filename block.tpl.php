<div class="column block block-<?php print $block->module ?><?php print (($block_zebra == 'even') ? " last" : "") ?> " id="block-<?php print $block->module . "-" . $block->delta ?>">
	<?php if($block->subject){ ?>
	<h3><?php print $block->subject; ?></h3>
	<?php } ?>
	<div class="content"><?php print $block->content ?></div>
</div>

