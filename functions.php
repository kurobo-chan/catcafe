<?php
//基本設定
function mytheme_setup()
{
	//ページのタイトルを出力
	add_theme_support('title-tag');
	//HTML5対応
	add_theme_support('html5', array('style', 'script'));
	//アイキャッチ
	add_theme_support('post-thumbnails');
	// カスタムヘッダー
	add_theme_support('custom-header');
	//ナビゲーションメニュー
	register_nav_menus(array(
		'primary' => 'メイン',
	));
	//エディタのCSS
	add_theme_support('editor-styles');
	add_editor_style('editor-style.css');
}
add_action('after_setup_theme', 'mytheme_setup');

//CSS
function mytheme_enqueue()
{
	//Font Awesome
	wp_enqueue_style('mytheme-fontawesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css', array(), null);
	//Google Fonts
	wp_enqueue_style('mytheme-googlefonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700;900&display=swap', array(), null);
	//テーマのcss
	wp_enqueue_style('mytheme-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');

//Font Awesomeの属性
function mytheme_sri($html, $handle)
{
	if ($handle === 'mytheme-fontawesome') {
		return str_replace(
			'/>',
			'integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"' . '/>',
			$html
		);
	}
	return $html;
}
add_filter('style_loader_tag', 'mytheme_sri', 10, 2);

function mytheme_both()
{
	wp_enqueue_style(
		'mytheme-style-both',
		get_template_directory_uri() . '/style-both.css',
		array(),
		filemtime(get_template_directory() . '/style-both.css')
	);
}
add_action('enqueue_block_assets', 'mytheme_both');

function myjs_enqueue()
{
	wp_enqueue_script(
		'myjs-style',
		get_template_directory_uri() . '/mystyle.js',
		array('wp-blocks', 'wp-dom-ready', 'wp-edit-post'),
		filemtime(get_template_directory() . '/mystyle.js')
	);
}
add_action('enqueue_block_editor_assets', 'myjs_enqueue');

function catcafe_enqueue()
{
	wp_enqueue_script(
		'catcafe-script',
		get_template_directory_uri() . '/script.js',
		array(),
		filemtime(get_template_directory() . '/script.js'),
		true //</body> 終了タグの前で読み込み
	);
}
add_action('wp_enqueue_scripts', 'catcafe_enqueue');

function modify_user_contact_methods($methods)
{

	// Add user contact methods
	$methods['postalcode']   = __('郵便番号');
	$methods['address']   = __('住所');
	$methods['telnmber'] = __('電話番号');
	$methods['businessday'] = __('営業日');
	$methods['businesshours '] = __('営業時間');
	$methods['specialbusiness'] = __('特別営業');
	$methods['twitter'] = __('Twitterネーム');

	// Remove user contact methods
	unset($methods['first_name']);
	unset($methods['jabber']);

	return $methods;
}
add_filter('user_contactmethods', 'modify_user_contact_methods');