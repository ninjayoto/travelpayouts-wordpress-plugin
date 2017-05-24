<?php
/**
 * Created by PhpStorm.
 * User: solomashenko
 * Date: 24.05.17
 * Time: 13:57
 */

namespace app\includes\controllers\admin\menu;

use \core\controllers\TPOAdminMenuController;

class TPRailwayController extends TPOAdminMenuController{

	public $model;
	public function __construct() {
		parent::__construct();
	}

	public function action() {
		// TODO: Implement action() method.
		$plugin_page = add_submenu_page( TPOPlUGIN_TEXTDOMAIN,
			_x('Railway tables',  'admin menu page title railway', TPOPlUGIN_TEXTDOMAIN ),
			_x('Railway tables',  'admin menu page title railway', TPOPlUGIN_TEXTDOMAIN ),
			'manage_options',
			'tp_control_railway',
			array(&$this, 'render'));
		add_action( 'admin_footer-'.$plugin_page, array(&$this, 'TPLinkHelp') );
	}

	public function render() {
		// TODO: Implement render() method.
	}
}