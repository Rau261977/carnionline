<?php

/**
 * Login Form
 *
 * Template Override: yourtheme/woocommerce/myaccount/form-login.php
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

do_action('woocommerce_before_customer_login_form');
?>

<div class="container my-4">
    <?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
        <div class="row" id="customer_login">

            <div class="col-md-6 mb-4">
            <?php endif; ?>

            <h2 class="h4 mb-3"><?php esc_html_e('Login', 'woocommerce'); ?></h2>

            <form class="woocommerce-form woocommerce-form-login login" method="post" novalidate>
                <?php do_action('woocommerce_login_form_start'); ?>

                <div class="mb-3">
                    <label for="username" class="form-label">
                        <?php esc_html_e('Username or email address', 'woocommerce'); ?> <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name="username" id="username" autocomplete="username"
                        value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>"
                        required aria-required="true">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">
                        <?php esc_html_e('Password', 'woocommerce'); ?> <span class="text-danger">*</span>
                    </label>
                    <input type="password" class="form-control" name="password" id="password"
                        autocomplete="current-password" required aria-required="true">
                </div>

                <?php do_action('woocommerce_login_form'); ?>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="rememberme" id="rememberme" value="forever">
                    <label class="form-check-label" for="rememberme">
                        <?php esc_html_e('Remember me', 'woocommerce'); ?>
                    </label>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
                    <button type="submit" class="btn btn-primary" name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>">
                        <?php esc_html_e('Log in', 'woocommerce'); ?>
                    </button>
                    <a class="text-muted" href="<?php echo esc_url(wp_lostpassword_url()); ?>">
                        <?php esc_html_e('Lost your password?', 'woocommerce'); ?>
                    </a>
                </div>

                <?php do_action('woocommerce_login_form_end'); ?>
            </form>

            <?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>
            </div>

            <div class="col-md-6 mb-4 mt-4 pt-5">
                <h2 class="h4 mb-3"><?php esc_html_e('Register', 'woocommerce'); ?></h2>

                <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action('woocommerce_register_form_tag'); ?>>
                    <?php do_action('woocommerce_register_form_start'); ?>

                    <?php if ('no' === get_option('woocommerce_registration_generate_username')) : ?>
                        <div class="mb-3">
                            <label for="reg_username" class="form-label">
                                <?php esc_html_e('Username', 'woocommerce'); ?> <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="username" id="reg_username"
                                autocomplete="username"
                                value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>"
                                required aria-required="true">
                        </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <label for="reg_email" class="form-label">
                            <?php esc_html_e('Email address', 'woocommerce'); ?> <span class="text-danger">*</span>
                        </label>
                        <input type="email" class="form-control" name="email" id="reg_email" autocomplete="email"
                            value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>"
                            required aria-required="true">
                    </div>

                    <?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>
                        <div class="mb-3">
                            <label for="reg_password" class="form-label">
                                <?php esc_html_e('Password', 'woocommerce'); ?> <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control" name="password" id="reg_password"
                                autocomplete="new-password" required aria-required="true">
                        </div>
                    <?php else : ?>
                        <p><?php esc_html_e('A link to set a new password will be sent to your email address.', 'woocommerce'); ?></p>
                    <?php endif; ?>

                    <?php do_action('woocommerce_register_form'); ?>

                    <div class="mt-4">
                        <?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
                        <button type="submit" class="btn btn-success" name="register" value="<?php esc_attr_e('Register', 'woocommerce'); ?>">
                            <?php esc_html_e('Register', 'woocommerce'); ?>
                        </button>
                    </div>

                    <?php do_action('woocommerce_register_form_end'); ?>
                </form>
            </div>

        </div> <!-- end row -->
    <?php endif; ?>
</div> <!-- end container -->

<?php do_action('woocommerce_after_customer_login_form'); ?>