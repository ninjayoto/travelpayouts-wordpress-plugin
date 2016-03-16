<?php
/**
 * Created by PhpStorm.
 * User: freeman
 * Date: 23.02.16
 * Time: 14:24
 */

namespace app\includes\controllers\site\widgets;


class TPDucklettWidgetController extends \app\includes\controllers\site\TPWigetsShortcodesController
{

    public function initShortcode()
    {
        // TODO: Implement initShortcode() method.
        add_shortcode( 'tp_ducklett_widget', array(&$this, 'action'));
    }

    public function render($data)
    {
        // TODO: Implement render() method.
        $widgets = 8;
        $defaults = array(
            'limit' => \app\includes\TPPlugin::$options['widgets'][$widgets]['limit'],
            'type' => \app\includes\TPPlugin::$options['widgets'][$widgets]['type'],
            'filter' => \app\includes\TPPlugin::$options['widgets'][$widgets]['filter'],
            'width' => \app\includes\TPPlugin::$options['widgets'][$widgets]['width'],
            'origin' => false,
            'destination' => false,
            'airline' => false,
            'currency' => $this->view->typeCurrency() ,
        );
        extract( wp_parse_args( $data, $defaults ), EXTR_SKIP );
        $url_params = '';
        $url_params .= '&limit='.$limit;
        switch($filter){
            case 0:
                if(isset($airline) && !empty($airline)){
                    //$url_params .= '&airline_iatas='.$airline;
                    $airlines = explode(',', $airline);
                    $air = '';
                    foreach($airlines as $value){
                        $air .= $value.'%2C';
                    }
                    $air = substr($air, 0, -6);
                    //error_log($air);
                    $url_params .= '&airline_iatas='.$air;
                }

                break;
            case 1:
                if(isset($origin) && !empty($origin))
                    $url_params .= '&origin_iatas='.$origin;
                if(isset($destination) && !empty($destination))
                    $url_params .= '&destination_iatas='.$destination;
                break;
        }
        $width = (isset($responsive) && $responsive == 'true')? "" : "&width={$width}px";
        $url_params .= $width;
        //error_log($url_params);
        //error_log($this->view->getMarker($widgets));
        //error_log($this->view->getWhiteLabel($widgets));
        $output = '';
        $output = '<script async src="//www.travelpayouts.com/ducklett/scripts.js?widget_type='.$type
            .'&currency='.mb_strtolower($currency).'&host='.$this->view->getWhiteLabel($widgets).'&marker='
            .$this->view->getMarker($widgets).'.'.$url_params.'" charset="UTF-8">
        </script>';
        return $output;
    }
}
