<div class="column block block-<?php print $block->module ?><?php print (($block_zebra == 'even') ? " last" : "") ?> " id="block-<?php print $block->module . "-" . $block->delta ?>">
	<?php if($block->module == 'People'){ ?>
	<h3><a href="/people"><?php print $block->subject; ?></a></h3>
	<?php } elseif($block->module == 'Events'){ ?>
	<h3><a href="/events"><?php print $block->subject; ?></a></h3>
	<?php } elseif($block->module == 'Poll'){ ?>
	<h3><a href="/poll"><?php print $block->subject; ?></a></h3>
	<?php } elseif($block->module == 'News'){ ?>
	<h3><a href="/news"><?php print $block->subject; ?></a></h3>
	<?php } ?>
	<div class="content"><?php print $block->content ?></div>
</div>

