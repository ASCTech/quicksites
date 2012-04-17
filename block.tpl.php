<div class="column block block-<?php print $block->module ?><?php print (($block_zebra == 'even') ? " last" : "") ?> " id="block-<?php print $block->module . "-" . $block->delta ?>">
  <?php if($block->subject){ ?>
	<?php if(strpos($block->delta, 'People') !== false){ ?>
	<h3 class="block-title"><a href="/directory"><?php print $block->subject; ?></a></h3>
	<?php } elseif(strpos($block->delta, 'Events') !== false){ ?>
	<h3 class="block-title"><a href="/events"><?php print $block->subject; ?></a></h3>
	<?php } elseif(strpos($block->module, 'poll') !== false){ ?>
	<h3 class="block-title"><a href="/poll"><?php print $block->subject; ?></a></h3>
	<?php } elseif(strpos($block->delta, 'News') !== false){ ?>
	<h3 class="block-title"><a href="/news"><?php print $block->subject; ?></a></h3>
  <?php } else { ?>
  <h3 class="block-title"><?php print $block->subject; ?></h3> 
  <?php }?>
  <?php }?>
	<div class="content"><?php print $block->content ?></div>
</div>

