<?php
/**
 * This template renders a coming soon page when the coming soon feature is active.
 *
 * @package WPPluginWeb
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width">
		<title>
			<?php
			printf(
			/* translators: %s: Blog name */
				__( '%s &mdash; Coming Soon', 'wp-plugin-web' ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				esc_html( get_option( 'blogname' ) )
			);
			?>
		</title>
		<meta name="robots" content="noindex, nofollow" />
		<script
			src="<?php echo esc_url( includes_url( 'js/jquery/jquery.js' ) ); //phpcs:ignore WordPress.WP.EnqueuedResources.NonEnqueuedScript ?>"></script>
		<style type="text/css">
			body {
				background-color: #fff;
				color: #1F2044;
				font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
				overflow-x: hidden;
				margin: 0;
			}

			* {
				box-sizing: border-box;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
			}

			input {
				font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
			}

			::-webkit-input-placeholder {
				color: #686C6E;
			}

			::-moz-placeholder {
				color: #686C6E;
			}

			:-ms-input-placeholder {
				color: #686C6E;
			}

			:-moz-placeholder {
				color: #686C6E;
			}

			#wrap {
				align-items: center;
				background-image: url("<?php echo esc_url( WEB_PLUGIN_URL . 'assets/svg/a-illustration__shape.svg' ); ?>");
				background-position: center center;
				background-repeat: no-repeat;
				background-size: cover;
				display: flex;
				justify-content: center;
				min-height: 100vh;
			}

			.content {
				background-image: url("<?php echo esc_url( WEB_PLUGIN_URL . 'assets/svg/a-illustration__wordpress-snappy.svg' ); ?>");
				background-position: center top;
				background-repeat: no-repeat;
				background-size: 283px 202px;
				flex: 1;
				margin: auto 5%;
				padding: 210px 0 0;
				text-align: center;
				max-width: 420px;
			}

			#wrap h1 {
				font-size: 16px;
				font-weight: 700;
				letter-spacing: 1px;
			}

			#wrap h2 {
				color: #FE3E15;
				font-size: 35px;
				font-weight: 700;
				letter-spacing: -1px;
				line-height: 54px;
			}

			footer {
				background-color: #fff;
				width: 100%;
				position: fixed;
				bottom: 0;
				left: 0;
				color: #666;
			}

			footer p {
				font-size: 14px;
				line-height: 22px;
				color: #5B5B5B;
				padding: 8px;
				text-align: center;
			}

			footer p a {
				color: #3575D3;
				text-decoration: none;
			}

			footer p a:hover {
				text-decoration: underline;
			}

			.btn {
				display: inline-block;
				font-weight: 400;
				text-align: center;
				vertical-align: middle;
				-ms-touch-action: manipulation;
				touch-action: manipulation;
				cursor: pointer;
				background-image: none;
				border: 1px solid transparent;
				white-space: nowrap;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
				padding: 8px 16px;
				font-size: 14px;
				line-height: 1.5;
				border: 1px solid #2e66ba;
				background: #2e66ba;
				color: #fff;
				box-shadow: none;
				text-decoration: none;
				margin-top: 60px;
				transition: all .2s ease;
			}

			.btn:hover {
				border: 1px solid #2e66ba;
				background-color: #fff;
				color: #2e66ba;
			}

			.web_subscription_widget #subscribe-text p {
				line-height: 24px;
				margin-bottom: 25px;
			}

			.web_subscription_widget #success,
			.web_subscription_widget #error {
				border-radius: 4px;
				font-size: 14px;
				line-height: 24px;
				color: #5B5B5B;
				margin-bottom: 25px;
				display: none;
				padding: 8px 40px;
			}

			.web_subscription_widget #success {
				background: #CCE9D0;
				border: 1px solid #009013;
			}

			.web_subscription_widget #error {
				background: #FFEAE9;
				border: 1px solid #FE3E15;
			}

			.web_subscription_widget form .web-inputs {
				display: inline-block;
				position: relative;
				vertical-align: middle;
				transition: all 0.1s ease;
			}

			.web_subscription_widget form .web-inputs.email input[type="email"] {
				background-color: #fff;
				border: 1px solid #5B5B5B;
				color: #5B5B5B;
				font-size: 11px;
				min-width: 240px;
				padding: 14px 15px;
				max-height: 45px;
				transition: all 0.05s ease;
			}

			.web_subscription_widget form .web-inputs.submit input[type="submit"] {
				background-color: #5EADF3;
				border: none;
				color: #fff;
				font-size: 14px;
				font-weight: 600;
				line-height: 13px;
				margin: 0;
				padding: 15px 30px;
				transition: all 0.1s ease;
			}

			.web_subscription_widget form .web-inputs.submit input[type="submit"]:hover {
				background-color: #2E93EE;
				transition: all 0.1s ease;
			}
		</style>
	</head>
	<body>
		<div id="wrap">
			<main class="content">
				<div class="web_subscription_widget">
					<h1><?php esc_html_e( 'A New WordPress Site', 'wp-plugin-web' ); ?></h1>
					<h2><?php esc_html_e( 'Coming Soon!', 'wp-plugin-web' ); ?></h2>	
					<?php if ( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'subscriptions' ) ) { ?>
						<div id="subscribe-text">
							<p><?php esc_html_e( 'Be the first to know when we launch, enter your email address and we will let you know when we go live and any future website updates we have.', 'wp-plugin-web' ); ?></p>
						</div>
						<div id="success">
							<?php esc_html_e( 'Thank you, please check your email to confirm your subscription.', 'wp-plugin-web' ); ?>
						</div>
						<div id="error">
							<?php esc_html_e( 'There was an error with your submission and you were not subscribed. Please try again with a different email address.', 'wp-plugin-web' ); ?>
						</div>
						<form action="" method="post" accept-charset="utf-8" id="subscribe-web">
							<input type="hidden" name="action" value="mojo_coming_soon_subscribe">
							<?php wp_nonce_field( 'mojo_coming_soon_subscribe_nonce', 'mm_nonce-coming-soon-subscribe' ); ?>
							<span class="web-inputs email" id="subscribe-email">
								<label id="web-subscribe-label" for="subscribe-field-web">
									<?php esc_html_e( 'Email', 'wp-plugin-web' ); ?>
								</label>
								<input
									type="email"
									name="email"
									required="required"
									value=""
									id="subscribe-field-web"
									placeholder="Enter your email address"
								>
							</span>
							<span class="web-inputs submit" id="subscribe-submit">
								<input class="btn" type="submit" value="Subscribe" name="web_subscriptions_widget">
							</span>
						</form>
						<?php } //endif ?>
					</div>
			</main>
		</div>
		<footer>
			<p class="text-center">
				<?php
				$wordpress_hosting_page = 'https://www.web.com/websites/wordpress';
				$my_panel               = 'https://www.web.com/my-account/account-center/login';
				printf(
				/* translators: %1$s is replaced with opening link tag taking you to web.com/wordpress, %2$s is replaced with closing link tag */
					esc_html__( 'A %1$sWeb.com%2$s powered website.', 'wp-plugin-web' ) . '&nbsp;',
					'<a href="' . esc_url( $wordpress_hosting_page ) . '" class="web" target="_blank" rel="noopener noreferrer nofollow">',
					'</a>'
				);
				printf(
				/* translators: %1$s is replaced with opening link tag taking you to login page, %2$s is replaced with opening link tag taking you to my.web.com, %3$s is replaced with closing link tag */
					esc_html__( 'Is this your website? Log in to %1$sWordPress%3$s or %2$sWeb.com%3$s.', 'wp-plugin-web' ),
					'<a href="' . esc_url( wp_login_url() ) . '">',
					'<a href="' . esc_url( $my_panel ) . '" class="web" target="_blank" rel="noopener noreferrer nofollow">',
					'</a>'
				);
				?>
			</p>
		</footer>
		<script>
			jQuery(document).ready(function ($) {

				$('#subscribe-submit input').click(function (e) {
					e.preventDefault();

					$('#success').hide();
					$('#error').hide();

					var email = $('#subscribe-field-web').val();
					var nonce = $('#mm_nonce-coming-soon-subscribe').val();
					var ajaxscript = {ajax_url: '<?php echo esc_url( admin_url() ); ?>admin-ajax.php'}

					$.ajax({
						type: 'POST',
						url: ajaxscript.ajax_url,
						data: {
							'action': 'mojo_coming_soon_subscribe',
							'email': email,
							'nonce': nonce
						},
						success: function (response) {
							var status = response.status;
							if (status == 'success') {
								$('#success').show();
							} else if (status == 'active') {
								$('#error').show().text('<?php echo esc_js( __( 'Your email address is already subscribed to this website. Stay tuned to your inbox for our updates or try a different email address.', 'wp-plugin-web' ) ); ?>');
							} else if (status == 'invalid_email') {
								$('#error').show().text('<?php echo esc_js( __( 'There was an error with your submission and you were not subscribed. Please try again with a valid email address.', 'wp-plugin-web' ) ); ?>');
							} else {
								$('#error').show();
							}
						},
					});
				});

			});
		</script>
	</body>
</html>
