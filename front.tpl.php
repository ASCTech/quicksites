		<div id="front-header">
			<div class="container">
				<div id="front-image" class="span-12">
					<?php print $front_image; ?>
				</div>
			</div>
			<div id="front-header-tile">
				<div id="front-text" class="span-8 append-3">
					<?php if($messages){ ?>
						<div id="message"><?php print $messages; ?></div>
					<?php } ?>
					<p><?php print $site_mission; ?></p>
				</div>
				<div id="front-links" class="span-8 append-3">
					<?php print $front_links; ?>
				</div>
			</div>			
			<div id="front-header-banner">
				<div class="container">
      <?php if (!(isset($quickSites_asc_branding)) || ($quickSites_asc_branding == 1)){ ?>
					<a href="http://artsandsciences.osu.edu/" id="aslink" title="Arts and Sciences homepage">&nbsp;</a>
          <?php } ?>
				</div>
			</div>
		</div>

	<div id="main-content" class="container">
		<a id="page-content"></a>
		<div>
				<div id="features">
					<div id="front_blocka" class="span-12">
						<div class="span-12" style="top: -1px; height: 1px;">&nbsp;</div>
						<div class="content">
							<?php print $front_a; ?>
						</div>
					</div>
					<div id="front_blockb" class="span-12 last">
						<div class="content">
							<?php print $front_b; ?>
						</div>
					</div>
					<div id="front_blockc" class="span-12">
						<div class="span-12" style="top: -1px; height: 1px;">&nbsp;</div>
						<div class="content">
							<?php print $front_c; ?>
						</div>
					</div>
					<div id="front_blockd" class="span-12 last">
						<div class="content">
							<?php print $front_d; ?>
						</div>
					</div>
				</div>

		</div><!-- #leftcontent-nostyle -->

	</div>
