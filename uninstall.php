<?php
// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
	die;
}

$option_name = 'mmpg_options';

delete_option($option_name);