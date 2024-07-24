	<style>
		.bee-row,
		.bee-row-content {
			position: relative
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
    background-color: #000;
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
					<div class="bee-block bee-block-3 bee-button"><a class="bee-button-content" href="https://fullvisitor.com/pay/index.php?rp=/store/subscription-packages" style="font-size: 16px; background-color: #16163f; border-bottom: 0px solid transparent; border-left: 0px solid transparent; border-radius: 20px; border-right: 0px solid transparent; border-top: 0px solid transparent; color: #ffffff; direction: ltr; font-family: inherit; max-width: 100%; padding-bottom: 5px; padding-left: 60px; padding-right: 60px; padding-top: 5px; width: auto; display: inline-block;" target="_self"><span style="margin: 0; word-break: break-word; font-size: 16px; line-height: 180%;">Pricing</span></a></div>
					<div class="bee-block bee-block-4 bee-button"><a class="bee-button-content" href="https://fullvisitor.com/pay/clientarea.php?action=products" style="font-size: 16px; background-color: #16163f; border-bottom: 0px solid transparent; border-left: 0px solid transparent; border-radius: 20px; border-right: 0px solid transparent; border-top: 0px solid transparent; color: #ffffff; direction: ltr; font-family: inherit; max-width: 100%; padding-bottom: 5px; padding-left: 16px; padding-right: 16px; padding-top: 5px; width: auto; display: inline-block;" target="_self"><span style="margin: 0; word-break: break-word; font-size: 16px; line-height: 180%;">Cancel Membership</span></a></div>
					<div class="bee-block bee-block-5 bee-button"><a class="bee-button-content" href="https://fullvisitor.com/pay/index.php?rp=/login" style="font-size: 16px; background-color: #16163f; border-bottom: 0px solid transparent; border-left: 0px solid transparent; border-radius: 20px; border-right: 0px solid transparent; border-top: 0px solid transparent; color: #ffffff; direction: ltr; font-family: inherit; max-width: 100%; padding-bottom: 5px; padding-left: 45px; padding-right: 45px; padding-top: 5px; width: auto; display: inline-block;" target="_self"><span style="margin: 0; word-break: break-word; font-size: 16px; line-height: 180%;">Client Area </span></a></div>
					<div class="bee-block bee-block-6 bee-button"><a class="bee-button-content" href="https://fullvisitor.com/pay/index.php?rp=/store/subscription-packages" style="font-size: 16px; background-color: #16163f; border-bottom: 0px solid transparent; border-left: 0px solid transparent; border-radius: 20px; border-right: 0px solid transparent; border-top: 0px solid transparent; color: #ffffff; direction: ltr; font-family: inherit; max-width: 100%; padding-bottom: 5px; padding-left: 55px; padding-right: 55px; padding-top: 5px; width: auto; display: inline-block;" target="_self"><span style="margin: 0; word-break: break-word; font-size: 16px; line-height: 180%;">Renewal</span></a></div>
				
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
							<li><strong> </strong>+1 6892564737</li>
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
<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

echo "  </div>\r\n<div class=\"pattern-over1\"></div>\r\n<!--- Body pattern--->\r\n";
if ($activePage == "dashboard") {
    echo " \r\n<img class=\"body-bg\" src=\"images/dark-blue-bg.jpg\" alt=\"\"><!--- Body Background---> \r\n";
} else {
    echo "  <img class=\"body-bg\" src=\"images/bg.jpg\" alt=\"\"><!--- Body Background---> \r\n";
}
echo "<!-- Movie MODAL CODE -->\r\n<div class=\"modal fade movie-popup\" id=\"movieModal\"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">\r\n  <div class=\"modal-dialog\">\r\n    \r\n    <!-- /.modal-content -->\r\n    </div>\r\n  <!-- modal-dialog --> \r\n <!--  <img class=\"body-bg\" src=\"images/mainBlurBG.jpg\" alt=\"\"> --><!--- Body Background--> \r\n</div>\r\n\r\n<div class=\"modal fade movie-popup\" id=\"accountModal1\"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"AccountModal\" aria-hidden=\"true\" style=\"z-index: 999;\">\r\n  <div class=\"modal-dialog\">\r\n   <div class=\"modal-content\">\r\n          <div class=\"modal-header\" style=\"border:0;\"> <span class=\"p-close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</span> </div>\r\n          <div class=\"modal-body\">\r\n            <div class=\"popup-content t-s\">\r\n              \r\n\r\n                   <div class=\"info_set clearfix\" style=\"width:50%; position: relative; left: 25%; margin-top: 5%; color: #000; background: #fff\">\r\n<h1 class=\"text-center\" style=\"color: #000;\">Account Information</h1>\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Username</span>\r\n\r\n                         <p style=\"width: 100%; overflow: hidden; text-overflow: ellipsis;\" title=\"";
echo $_SESSION["webTvplayer"]["username"];
echo "\">";
echo $_SESSION["webTvplayer"]["username"];
echo "</p>\r\n\r\n                      </div>\r\n\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Status</span>\r\n\r\n                         <p>";
echo $_SESSION["webTvplayer"]["status"];
echo "</p>\r\n\r\n                      </div>\r\n\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Expiry date</span>\r\n\r\n                         <p>\r\n                             ";
if ($_SESSION["webTvplayer"]["exp_date"] == "null" || $_SESSION["webTvplayer"]["exp_date"] == "") {
    echo "Unlimited";
} else {
    echo date("F d, Y", $_SESSION["webTvplayer"]["exp_date"]);
}
echo "                         </p>\r\n\r\n                      </div>\r\n\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Is trial</span>\r\n\r\n                         <p>\r\n\r\n                             ";
if ($_SESSION["webTvplayer"]["is_trial"] == "0") {
    echo "No";
} else {
    echo "Yes";
}
echo "                         </p>\r\n\r\n                      </div>\r\n\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Active Connections</span>\r\n\r\n                         <p>";
echo $_SESSION["webTvplayer"]["active_cons"];
echo "</p>\r\n\r\n                      </div>\r\n\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Created at</span>\r\n\r\n                         <p>\r\n                          ";
echo date("F d, Y", $_SESSION["webTvplayer"]["created_at"]);
echo "                         </p>\r\n\r\n                      </div>\r\n\r\n                      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-6\">\r\n\r\n                         <span>Max connections</span>\r\n\r\n                         <p>";
echo $_SESSION["webTvplayer"]["max_connections"];
echo "</p>\r\n\r\n                      </div>\r\n\r\n                   </div>                       \r\n              </div>\r\n            </div>\r\n          </div>\r\n    <!-- /.modal-content -->\r\n    </div>\r\n  <!-- modal-dialog --> \r\n <!--  <img class=\"body-bg\" src=\"images/mainBlurBG.jpg\" alt=\"\"> --><!--- Body Background---> \r\n</div>\r\n<!--Movie-popup End--> \r\n\r\n<!--Saerch-popup Start-->\r\n<div id=\"search\">\r\n    <button type=\"button\" class=\"close\">×</button>\r\n        <input type=\"search\" value=\"\" id=\"SearchData\" placeholder=\"type keyword(s) here\" />\r\n        <button type=\"submit\"  id=\"SearchBtn\" class=\"btn btn-primary\">Search</button>\r\n</div>\r\n<!--Saerch-popup End-->\r\n<!-- jQuery (JavaScript plugins) --> \r\n\r\n\r\n<script src=\"js/offcanvas.js\"></script> \r\n<script src=\"js/bootstrap.js\"></script> \r\n<script src=\"js/classie.js\"></script> \r\n<script src=\"js/owl.carousel.min.js\"></script> \r\n<!-- <script src=\"js/scrollbar.js\"></script> --> \r\n<script src=\"js/plugin.js\"></script>\r\n<script src=\"js/jquery.infinitescroll.min.js\"></script> \r\n<script src=\"js/freewall.js\"></script> \r\n<script type=\"text/javascript\" src=\"js/Manualcustom.js\"></script>\r\n<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>\r\n<!-- <script src='https://content.jwplatform.com/libraries/fgbTqCCh.js'></script> -->\r\n<!-- <script src=\"//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js\" ></script> -->\r\n<script src=\"js/jquery.rippler.min.js\"></script>\r\n\r\n\r\n\r\n\r\n<script>\r\n/*-------- Load more Start  ----------*/\r\n\$(document).ready(function() {\r\n\r\n\$(document).find(\".rippler, li\").rippler({\r\n    effectClass      :  'rippler-effect'\r\n    ,effectSize      :  0      // Default size (width & height)\r\n    ,addElement      :  'div'   // e.g. 'svg'(feature)\r\n    ,duration        :  400\r\n  });\r\n\r\n";
if (isset($_GET["loggedout"])) {
    echo "swal({\r\n  title: 'Logged out!',text:'You have been logged out Successfully.',icon:'success',buttons: false});\r\nsetTimeout (function(){\r\n          swal.close();\r\n         },2000)\r\n";
}
echo "  \$('#accountModal').click(function(){\r\n    \$('#accountModal1').modal('show');\r\n  })\r\n\r\n\$('#cbp-spmenu-s1 li a').click(function(){\r\n  \$('#cbp-spmenu-s1 li a').removeClass('active');\r\n  \$(this).addClass('active');\r\n\r\n    classie.toggle( showLeft, 'active' );\r\n    classie.toggle( menuLeft, 'cbp-spmenu-open' );\r\n    \$('.cat-toggle').toggleClass('open');\r\n})\r\n\r\n\$(document).on('click','.showCast',function(){\r\n  \r\n  \$(this).parent('.i-cast').toggleClass('openCast');\r\n  \r\n  if(\$(this).text() == 'Show Cast')\r\n  {\r\n    \$(this).text('Hide Cast');\r\n  }\r\n  else\r\n  {\r\n    \$(this).text('Show Cast');\r\n  }\r\n  \r\n\r\n})\r\n\$('#menuModal').on('hidden.bs.modal', function () {\r\n  clearInt();\r\n   \$('#player-holder').html('');\r\n   \$('.backToInfo').addClass('hideOnLoad');\r\n   \$(document).find('.PlayerHolder div').html('').addClass('hideOnLoad');\r\n   clearInt();\r\n})\r\n\r\n\$(document).on('click','.backToInfo',function(){\r\n  if(\$('#player-holder').hasClass('flowplayer'))\r\n  {\r\n   var container = document.getElementById(\"player-holder\");\r\n    flowplayer(container).shutdown(); \r\n  }\r\n  \r\n  \$('#player-holder').html('');\r\n\r\n  \$('#player-holder, .backToInfo').addClass('hideOnLoad');\r\n\r\n    var episID = \$(this).data('episid');\r\n    if(episID)\r\n    {\r\n      \$('#epis-'+episID+'').removeClass('hideOnLoad');\r\n    }\r\n    else\r\n    {\r\n      \$('.poster-details').removeClass('hideOnLoad');\r\n    }\r\n    clearInt();\r\n  })\r\n\r\n  \r\n  setInterval(function(){\r\n  var date = new Date();\r\n  var hours = date.getHours();\r\n  var minutes = date.getMinutes();\r\n  var ampm = hours >= 12 ? 'PM' : 'AM';\r\n  hours = hours % 12;\r\n  hours = hours ? hours : 12; // the hour '0' should be '12'\r\n  minutes = minutes < 10 ? '0'+minutes : minutes;\r\n  var strTime = hours + ':' + minutes + ' ' + ampm;\r\n  \$('.time').html(strTime);\r\n  },1000)\r\n  /*setInterval(function(){\r\n  var hr = date.getHours();\r\n  var mins = date.getMinutes();\r\n    \$('.time').html(hr+':'+mins)\r\n  },1000)*/\r\nvar win = \$(window);\r\n\r\n// Each time the user scrolls\r\n/*win.scroll(function() {\r\n  // End of the document reached?\r\n  if (\$(document).height() - win.height() == win.scrollTop()) {\r\n    \$('#loading').show();\r\n\r\n    \$.ajax({\r\n      url: 'get-post.php',\r\n      dataType: 'html',\r\n      success: function(html) {\r\n        \$('#posts ul').append(html);\r\n        \$('#loading').hide();\r\n      }\r\n    });\r\n  }\r\n});*/\r\n});\r\n/*-------- Load more End ----------*/\r\n/*-------- Grids Start ----------*/\r\n\$(function() {\r\n        \$(\".free-wall\").each(function() {\r\n          var wall = new Freewall(this);\r\n          wall.reset({\r\n            selector: '.thumb-b',\r\n            animate: true,\r\n            cellW: 185,\r\n            cellH: 278,\r\n            fixSize: 0,\r\n            gutterY: 0,\r\n            gutterX: -15,\r\n            onResize: function() {\r\n              wall.fitWidth();\r\n            }\r\n          })\r\n          wall.fitWidth();\r\n        });\r\n        \$(window).trigger(\"resize\");\r\n      });\r\n/*-------- Grids End ----------*/\r\n\r\n\r\n\r\n</script>\r\n</body>\r\n</html>";
?>