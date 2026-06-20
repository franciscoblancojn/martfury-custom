<?php

defined('ABSPATH') || exit;

class MACU_CORE {

	public static function init() {
		add_action('wp_enqueue_scripts', array(__CLASS__, 'enqueueStyles'), 20);
		add_filter('woocommerce_locate_template', array(__CLASS__, 'locateWooTemplate'), 10, 3);
		add_filter('template_include', array(__CLASS__, 'locateThemeTemplate'), 99);
	}

	public static function enqueueStyles() {
		$css_file = MACU_DIR . 'src/modifications/style.css';
		if (file_exists($css_file)) {
			wp_enqueue_style(
				'macu-modifications',
				MACU_URL . 'src/modifications/style.css',
				array(),
				filemtime($css_file)
			);
		}
	}

	public static function locateWooTemplate($template, $template_name, $template_path) {
		$override = MACU_DIR . 'src/modifications/woocommerce/' . $template_name;
		if (file_exists($override)) {
			return $override;
		}
		return $template;
	}

	public static function locateThemeTemplate($template) {
		$theme_dir = get_template_directory();
		if (strpos($template, $theme_dir) !== 0) {
			return $template;
		}
		$relative = ltrim(substr($template, strlen($theme_dir)), '/\\');
		$override = MACU_DIR . 'src/modifications/' . $relative;
		if (file_exists($override)) {
			return $override;
		}
		return $template;
	}
}

MACU_CORE::init();
