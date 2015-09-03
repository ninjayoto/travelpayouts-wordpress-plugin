<?php
/**
 * Created by PhpStorm.
 * User: freeman
 * Date: 13.08.15
 * Time: 12:47
 */
namespace app\includes\controllers\site\shortcodes;
class TPFromOurCityFlyShortcodeController extends \app\includes\controllers\site\TPShortcodesController{
    public $model;
    public $view;
    public function __construct(){
        parent::__construct();
        $this->model = new TPFromOurCityFlyShortcodeModel();
        $this->view = new \app\includes\views\site\shortcodes\TPShortcodesView();
    }
    public function initShortcode()
    {
        // TODO: Implement initShortcode() method.
        add_shortcode( 'tp_from_our_city_fly_shortcodes', array(&$this, 'action'));
    }
}