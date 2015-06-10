<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
	<div id="footer">
		<div class="footer_container">
			<div class="footer_container_row">
				<div class="footer_address">
					<?php echo t('WETHOUDER ELHORSTSTRAAT 2 - 7543 TD ENSCHEDE')?>
				</div>
				<div id="footer_image">
					<?php
					$footerImage = $c->getAttribute('logo_footer');
					if ($footerImage) {
						$footerImageURL = $footerImage->getURL();
						echo '<style type="text/css">
							#footer_image {
								content:url(' . $footerImageURL . ');
							}
						  </style>';
					}
					?>
				</div>
				<div class="footer_info">
					<?php echo t('T. 053 4312088 - INFO@IJSSALONHEININK.NL')?>
				</div>
			</div>
			<div class="footer_container_row">
				<div class="footer_social">
					<div id="footer_facebook">
						<?php
						$footerFacebook = $c->getAttribute('footer_facebook');
						if ($footerFacebook) {
							$footerFacebookURL = $footerFacebook->getURL();
							echo '<style type="text/css">
							#footer_facebook {
								content:url(' . $footerFacebookURL . ');
							}
						  </style>';
						}
						?>
					</div>
					<div id="footer_twitter">
						<?php
						$footerTwitter = $c->getAttribute('footer_twitter');
						if ($footerTwitter) {
							$footerTwitterURL = $footerTwitter->getURL();
							echo '<style type="text/css">
							#footer_twitter {
								content:url(' . $footerTwitterURL . ');
							}
						  </style>';
						}
						?>
					</div>
				</div>
			</div>


<!--			<div class="footer_rights">-->
<!--				&copy; --><?php //echo date('Y')?><!-- <a href="--><?php //echo DIR_REL?><!--/">--><?php //echo t('Fleur Inc.')?><!--</a>-->
<!--				&nbsp;-->
<!--				--><?php //echo t('All rights reserved.')?>
<!--				--><?php
//				$u = new User();
//				if ($u->isRegistered()) { ?>
<!--					<span class="sign-in"><a href="--><?php //echo $this->url('/login', 'logout')?><!--">--><?php //echo t('Sign Out')?><!--</a></span>-->
<!--				--><?php //} else { ?>
<!--					<span class="sign-in"><a href="--><?php //echo $this->url('/login')?><!--">--><?php //echo t('Sign In')?><!--</a></span>-->
<!--				--><?php //} ?>
<!--			</div>-->
		</div>
	</div>
</div>

<?php Loader::element('footer_required'); ?>

</body>
</html>