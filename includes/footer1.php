	<style>
		.bee-row,
		.bee-row-content {
			position: relative
		}

		a,
		body {
			color: #000000
		}

		.bee-button .content {
			text-align: center
		}

		.bee-row-1,
		.bee-row-2,
		.bee-row-3,
		.bee-row-4,
		.bee-row-5 {
			background-repeat: no-repeat
		}

		body {
			background-color: #000000;
			font-family: Arial, Helvetica, sans-serif
		}

		* {
			box-sizing: border-box
		}

		body,
		p {
			margin: 0
		}

		.bee-row-content {
			max-width: 1160px;
			margin: 0 auto;
			display: flex
		}

		.bee-row-content .bee-col-w3 {
			flex-basis: 25%
		}

		.bee-row-content .bee-col-w4 {
			flex-basis: 33%
		}

		.bee-row-content .bee-col-w8 {
			flex-basis: 67%
		}

		.bee-row-content .bee-col-w12 {
			flex-basis: 100%
		}

		.bee-button a,
		.bee-icon .bee-icon-label-right a {
			text-decoration: none
		}

		.bee-divider,
		.bee-image {
			overflow: auto
		}

		.bee-divider .center,
		.bee-image .bee-center {
			margin: 0 auto
		}

		.bee-row-4 .bee-col-1 .bee-block-1 {
			width: 100%
		}

		.bee-list ul {
			margin: 0;
			padding: 0
		}

		.bee-icon {
			display: inline-block;
			vertical-align: middle
		}

		.bee-icon .bee-content {
			display: flex;
			align-items: center
		}

		.bee-image img {
			display: block;
			width: 100%
		}

		.bee-paragraph,
		.bee-text {
			overflow-wrap: anywhere
		}

		.bee-social .icon img {
			max-height: 32px
		}

		.bee-row-1 {
			background-color: #5c2d91
		}

		.bee-row-1 .bee-row-content,
		.bee-row-2 .bee-row-content,
		.bee-row-3 .bee-row-content,
		.bee-row-4 .bee-row-content,
		.bee-row-5 .bee-row-content {
			background-repeat: no-repeat;
			color: #000000
		}

		.bee-row-1 .bee-col-1,
		.bee-row-2 .bee-col-1,
		.bee-row-2 .bee-col-2,
		.bee-row-2 .bee-col-3,
		.bee-row-2 .bee-col-4,
		.bee-row-5 .bee-col-1 {
			padding-bottom: 5px;
			padding-top: 5px
		}

		.bee-row-1 .bee-col-1 .bee-block-1,
		.bee-row-2 .bee-col-1 .bee-block-1,
		.bee-row-2 .bee-col-1 .bee-block-2,
		.bee-row-2 .bee-col-1 .bee-block-3,
		.bee-row-2 .bee-col-2 .bee-block-1,
		.bee-row-2 .bee-col-2 .bee-block-2,
		.bee-row-2 .bee-col-3 .bee-block-1,
		.bee-row-2 .bee-col-3 .bee-block-2,
		.bee-row-2 .bee-col-4 .bee-block-1,
		.bee-row-2 .bee-col-4 .bee-block-2,
		.bee-row-3 .bee-col-1 .bee-block-1,
		.bee-row-3 .bee-col-2 .bee-block-1 {
			padding: 10px
		}

		.bee-row-2 .bee-col-1 .bee-block-4 {
			padding-bottom: 25px;
			padding-top: 25px;
			width: 100%
		}

		.bee-row-2 .bee-col-2 .bee-block-3 {
			padding: 10px 25px
		}

		.bee-row-2 .bee-col-3 .bee-block-3,
		.bee-row-2 .bee-col-3 .bee-block-4,
		.bee-row-2 .bee-col-3 .bee-block-5,
		.bee-row-2 .bee-col-3 .bee-block-6 {
			padding: 5px;
			text-align: center
		}

		.bee-row-2 .bee-col-4 .bee-block-3 {
			padding: 15px
		}

		.bee-row-2 .bee-col-4 .bee-block-4 {
			padding: 10px;
			text-align: left
		}

		.bee-row-3 .bee-col-1 {
			padding-bottom: 45px;
			padding-top: 50px;
			display: flex;
			flex-direction: column;
			justify-content: center
		}

		.bee-row-3 .bee-col-2,
		.bee-row-4 .bee-col-1 {
			padding-bottom: 5px;
			padding-top: 5px;
			display: flex;
			flex-direction: column;
			justify-content: center
		}

		.bee-row-4,
		.bee-row-5 {
			background-color: #ffffff
		}

		.bee-row-5 .bee-col-1 .bee-block-1 {
			color: #1e0e4b;
			font-family: Inter, sans-serif;
			font-size: 15px;
			padding-bottom: 5px;
			padding-top: 5px;
			text-align: center
		}

		.bee-row-1 .bee-col-1 .bee-block-1 {
			color: #ffffff;
			direction: ltr;
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 0;
			line-height: 120%;
			text-align: center
		}

		.bee-row-2 .bee-col-4 .bee-block-3,
		.bee-row-3 .bee-col-1 .bee-block-1 {
			direction: ltr;
			font-size: 15px;
			font-weight: 400;
			letter-spacing: 0;
			text-align: left
		}

		.bee-row-1 .bee-col-1 .bee-block-1 a {
			color: #5c2c94
		}

		.bee-row-1 .bee-col-1 .bee-block-1 p:not(:last-child),
		.bee-row-3 .bee-col-1 .bee-block-1 p:not(:last-child) {
			margin-bottom: 16px
		}

		.bee-row-2 .bee-col-4 .bee-block-3 {
			color: #fbfbfb;
			line-height: 180%
		}

		.bee-row-2 .bee-col-4 .bee-block-3 ul {
			list-style-type: revert;
			list-style-position: inside
		}

		.bee-row-2 .bee-col-4 .bee-block-3 li:not(:last-child) {
			margin-bottom: 0
		}

		.bee-row-2 .bee-col-4 .bee-block-3 li ul {
			margin-top: 0
		}

		.bee-row-2 .bee-col-4 .bee-block-3 li a {
			color: #7747FF
		}

		.bee-row-2 .bee-col-4 .bee-block-3 li li {
			margin-left: 30px
		}

		.bee-row-5 .bee-col-1 .bee-block-1 .bee-icon-image {
			padding: 5px 6px 5px 5px
		}

		.bee-row-5 .bee-col-1 .bee-block-1 .bee-icon:not(.bee-icon-first) .bee-content {
			margin-left: 0
		}

		.bee-row-5 .bee-col-1 .bee-block-1 .bee-icon::not(.bee-icon-last) .bee-content {
			margin-right: 0
		}

		.bee-row-3 .bee-col-1 .bee-block-1 {
			color: #ffffff;
			line-height: 120%
		}

		.bee-row-3 .bee-col-1 .bee-block-1 a {
			color: #ffffff
		}

		@media (max-width:768px) {
			.bee-row-content:not(.no_stack) {
				display: block
			}

			.bee-row-3 .bee-col-1 .bee-block-1 {
				text-align: center !important
			}
		}
	</style>
	<script async defer src="https://www.google.com/recaptcha/api.js"></script>
	<script>
		function onSubmit(token) {
			for (const form of document.getElementsByClassName("recaptcha-form")) {
				if (form.checkValidity()) {
					form.submit();
				} else {
					grecaptcha.reset();
					form.reportValidity();
				}
			}
		}
	</script>

	<div class="bee-page-container" style="
    background-color: #5c2c94;
">
		
		<div class="bee-row bee-row-2">
			<div class="bee-row-content">
				<div class="bee-col bee-col-1 bee-col-w3">
					<div class="bee-block bee-block-1 bee-text">
						<div class="bee-text-content" style="line-height: 120%; font-size: 12px; font-family: inherit; color: #ffffff;">
							<p style="font-size: 16px; line-height: 19px; text-align: center;"><span style="font-size: 13px; line-height: 15px;"><strong style="">About IPTV Ltd</strong></span></p>
						</div>
					</div>
					<div class="bee-block bee-block-2 bee-divider">
						<div class="center bee-separator" style="border-top:1px solid #f8f6ff;width:55%;"></div>
					</div>
					<div class="bee-block bee-block-3 bee-text">
						<div class="bee-text-content" style="line-height: 120%; font-size: 12px; font-family: inherit; color: #ffffff;">
							<p style="font-size: 14px; line-height: 16px; text-align: center;">IPTV LTD is a Leading Global provider of next generation information and communication technology.</p>
						</div>
					</div>
					<div class="bee-block bee-block-4 bee-image"><img alt="" class="bee-center bee-fixedwidth" src="https://www.iptvltd.com/wp-content/uploads/2023/12/icon-payments.png" style="max-width:232px;" /></div>
				</div>
				<div class="bee-col bee-col-2 bee-col-w3">
					<div class="bee-block bee-block-1 bee-text">
						<div class="bee-text-content" style="line-height: 120%; font-size: 12px; font-family: inherit; color: #ffffff;">
							<p style="font-size: 16px; line-height: 19px; text-align: center;"><span style="font-size: 13px; line-height: 15px;"><strong style="">Informations</strong></span></p>
						</div>
					</div>
					<div class="bee-block bee-block-2 bee-divider">
						<div class="center bee-separator" style="border-top:1px solid #ffffff;width:55%;"></div>
					</div>
					<div class="bee-block bee-block-3 bee-text">
						<div class="bee-text-content" style="line-height: 180%; font-size: 12px; font-family: inherit; color: #ffffff;">
							<p style="font-size: 15px; line-height: 27px; text-align: center;"><span style="font-size: 15px; line-height: 27px;"><a href="https://www.iptvltd.com/blog/" style="text-decoration: underline; color: #ffffff;">News</a></span></p>
							<p style="font-size: 15px; line-height: 27px; text-align: center;"><span style="font-size: 15px; line-height: 27px;"><a href="https://www.iptvltd.com/pricing/" style="text-decoration: underline; color: #ffffff;">Pricing</a></span></p>
							<p style="font-size: 15px; line-height: 27px; text-align: center;"><span style="font-size: 15px; line-height: 27px;"><a href="https://www.iptvltd.com/how-to-setup-iptv-smarters-android-device/" style="text-decoration: underline; color: #ffffff;">Tutorial</a></span></p>
							<p style="font-size: 15px; line-height: 27px; text-align: center;"><span style="font-size: 15px; line-height: 27px;"><a href="https://www.iptvltd.com/faqs" style="text-decoration: underline; color: #ffffff;">FAQs</a></span></p>
							<p style="font-size: 15px; line-height: 27px; text-align: center;"><span style="font-size: 15px; line-height: 27px;"><a href="https://mihaynes.com/app/contact.php" style="text-decoration: underline; color: #ffffff;">Contact us</a></span></p>
							<p style="font-size: 15px; line-height: 27px; text-align: center;"><span style="font-size: 15px; line-height: 27px;"><a href="https://www.iptvltd.com/iptv-affiliate-program/" style="text-decoration: underline; color: #ffffff;">IPTV Affiliate</a></span></p>
							<p style="font-size: 15px; line-height: 27px; text-align: center;"><span style="font-size: 15px; line-height: 27px;"><a href="http://tv.iptvltd.com/" rel="noopener" style="text-decoration: underline; color: #ffffff;" target="_blank"><span style="font-size: 15px; line-height: 27px;">Web player live</span></a></span></p>
						</div>
					</div>
				</div>
				<div class="bee-col bee-col-3 bee-col-w3">
					<div class="bee-block bee-block-1 bee-text">
						<div class="bee-text-content" style="line-height: 120%; font-size: 12px; font-family: inherit; color: #ffffff;">
							<p style="font-size: 16px; line-height: 19px; text-align: center;"><span style="font-size: 13px; line-height: 15px;"><strong style="">Quick Links</strong></span></p>
						</div>
					</div>
					<div class="bee-block bee-block-2 bee-divider">
						<div class="center bee-separator" style="border-top:1px solid #ffffff;width:55%;"></div>
					</div>
					<div class="bee-block bee-block-3 bee-button"><a class="bee-button-content" href="https://mihaynes.com/app/index.php?rp=/store/subscription-packages" style="font-size: 16px; background-color: #ffffff; border-bottom: 0px solid transparent; border-left: 0px solid transparent; border-radius: 20px; border-right: 0px solid transparent; border-top: 0px solid transparent; color: #16163f; direction: ltr; font-family: inherit; max-width: 100%; padding-bottom: 5px; padding-left: 60px; padding-right: 60px; padding-top: 5px; width: auto; display: inline-block;" target="_self"><span style="margin: 0; word-break: break-word; font-size: 16px; line-height: 180%;">Pricing</span></a></div>
					<div class="bee-block bee-block-4 bee-button"><a class="bee-button-content" href="https://mihaynes.com/app/clientarea.php?action=products" style="font-size: 16px; background-color: #ffffff; border-bottom: 0px solid transparent; border-left: 0px solid transparent; border-radius: 20px; border-right: 0px solid transparent; border-top: 0px solid transparent; color: #16163f; direction: ltr; font-family: inherit; max-width: 100%; padding-bottom: 5px; padding-left: 16px; padding-right: 16px; padding-top: 5px; width: auto; display: inline-block;" target="_self"><span style="margin: 0; word-break: break-word; font-size: 16px; line-height: 180%;">Cancel Membership</span></a></div>
					<div class="bee-block bee-block-5 bee-button"><a class="bee-button-content" href="https://mihaynes.com/app/index.php?rp=/login" style="font-size: 16px; background-color: #ffffff; border-bottom: 0px solid transparent; border-left: 0px solid transparent; border-radius: 20px; border-right: 0px solid transparent; border-top: 0px solid transparent; color: #000000; direction: ltr; font-family: inherit; max-width: 100%; padding-bottom: 5px; padding-left: 45px; padding-right: 45px; padding-top: 5px; width: auto; display: inline-block;" target="_self"><span style="margin: 0; word-break: break-word; font-size: 16px; line-height: 180%;">Client Area </span></a></div>
					<div class="bee-block bee-block-6 bee-button"><a class="bee-button-content" href="https://mihaynes.com/app/index.php?rp=/store/subscription-packages" style="font-size: 16px; background-color: #ffffff; border-bottom: 0px solid transparent; border-left: 0px solid transparent; border-radius: 20px; border-right: 0px solid transparent; border-top: 0px solid transparent; color: #ffffff; direction: ltr; font-family: inherit; max-width: 100%; padding-bottom: 5px; padding-left: 55px; padding-right: 55px; padding-top: 5px; width: auto; display: inline-block;" target="_self"><span style="margin: 0; word-break: break-word; font-size: 16px; line-height: 180%;">Renewal</span></a></div>
				</div>
				<div class="bee-col bee-col-4 bee-col-w3">
					<div class="bee-block bee-block-1 bee-text">
						<div class="bee-text-content" style="line-height: 120%; font-size: 12px; font-family: inherit; color: #ffffff;">
							<p style="font-size: 16px; line-height: 19px; text-align: center;"><span style="font-size: 13px; line-height: 15px;"><strong style="">Contact Details</strong></span></p>
						</div>
					</div>
					<div class="bee-block bee-block-2 bee-divider">
						<div class="center bee-separator" style="border-top:1px solid #ffffff;width:55%;"></div>
					</div>
					<div class="bee-block bee-block-3 bee-list">
						<ul start="1">
							<li>9701 Wilshire Blvd. Suite 1000, Beverly Hills, CA 90212</li>
							<li>Support@iptvltd.com</li>
							<li><strong>🟢 </strong>+1 6892564737</li>
							<li><strong>🟢 </strong>+1 6892564737</li>
						</ul>
					</div>
					<div class="bee-block bee-block-4 bee-social">
						<div class="content"><span class="icon" style="padding:0 2.5px 0 2.5px;"><a href="https://wa.me/16892564737" target="_blank"><img alt="WhatsApp" src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/whatsapp@2x.png" title="WhatsApp" /></a></span><span class="icon" style="padding:0 2.5px 0 2.5px;"><a href="https://www.youtube.com/@IPTVltd" target="_blank"><img alt="YouTube" src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/youtube@2x.png" title="YouTube" /></a></span><span class="icon" style="padding:0 2.5px 0 2.5px;"><a href="https://www.pinterest.com/IPTVltd" target="_blank"><img alt="Pinterest" src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/pinterest@2x.png" title="Pinterest" /></a></span><span class="icon" style="padding:0 2.5px 0 2.5px;"><a href="https://wa.me/16892564737" target="_blank"><img alt="Telegram" src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/telegram@2x.png" title="Telegram" /></a></span><span class="icon" style="padding:0 2.5px 0 2.5px;"><a href="https://medium.com/@iptvltd.com" target="_blank"><img alt="Medium" src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-white/medium@2x.png" title="Medium" /></a></span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="bee-row bee-row-3">
			<div class="bee-row-content">
				<div class="bee-col bee-col-1 bee-col-w8">
					<div class="bee-block bee-block-1 bee-paragraph">
						<p>Cookie and <a href="https://www.iptvltd.com/privacy-policy/" style="text-decoration: underline;">Privacy Policy</a> <strong>|</strong> <a href="https://www.iptvltd.com/refund-policy/" style="text-decoration: underline;">Terms of use Product</a>  <strong>|</strong> <a href="https://policies.google.com/terms" style="text-decoration: underline;">Terms and Conditions</a></p>
					</div>
				</div>
				<div class="bee-col bee-col-2 bee-col-w4">
					<div class="bee-block bee-block-1 bee-text">
						<div class="bee-text-content" style="line-height: 120%; font-size: 12px; font-family: inherit; color: #ffffff;">
							<p style="font-size: 14px; line-height: 16px; text-align: center;"><a href="https://www.iptvltd.com/uk_en/" style="text-decoration: underline; color: #ffffff;">Canada | UK</a> | <a href="https://www.iptvltd.com/fr" style="text-decoration: underline; color: #ffffff;">France</a> | <a href="https://www.iptvltd.com/uk" style="text-decoration: underline; color: #ffffff;">Ireland</a> | <a href="https://mihaynes.com/app/index.php?language=spanish&amp;currency=3" style="text-decoration: underline; color: #ffffff;">España</a> | <a href="https://mihaynes.com/app/index.php?language=italian&amp;currency=3" style="text-decoration: underline; color: #ffffff;">Italia</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bee-row bee-row-4">
			<div class="bee-row-content">
				<div class="bee-col bee-col-1 bee-col-w12">
					<div class="bee-block bee-block-1 bee-image"><a href="https://www.iptvltd.com/" target="_blank"><img alt="iptv Promotions Offer trends" class="bee-center bee-fixedwidth" src="https://www.iptvltd.com/wp-content/uploads/2023/06/logos.webp" style="max-width:754px;" /></a></div>
				</div>
			</div>
		</div>
	
	</div>