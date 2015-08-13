<?php
/**
 * Created by PhpStorm.
 * User: freeman
 * Date: 13.08.15
 * Time: 12:42
 */

class TPOurSiteSearchShortcodeModel extends TPShortcodesChacheModel{

    public function get_data($args = array())
    {
        // TODO: Implement get_data() method.
        $defaults = array( 'currency' => 'RUB',  'period_type' => TPPlugin::$options['shortcodes']['12']['period_type'],
            'one_way' => false, 'limit' => TPPlugin::$options['shortcodes']['12']['limit'], 'trip_class' => 0, 'title' => '');
        extract( wp_parse_args( $args, $defaults ), EXTR_SKIP );
        $attr =  array('currency' => $this->typeCurrency(),
            'period_type' => $period_type, 'trip_class' => $trip_class, 'limit' => $limit, 'one_way' => $one_way);
        if($this->cacheSecund()){
            if ( false === ($rows = get_transient($this->cacheKey('tpOurSiteSearchShortcodes', '')))) {
                $return = TPPlugin::$TPRequestApi->get_latest($attr);
                if( ! $return )
                    return false;
                $rows = array();
                $rows = $return;
                set_transient( $this->cacheKey('tpOurSiteSearchShortcodes', '') , $rows, $this->cacheSecund());
            }
        }else{
            $return = TPPlugin::$TPRequestApi->get_latest($attr);
            if( ! $return )
                return false;
            $rows = array();
            $rows = $return;
        }
        return array('rows' => $rows, 'type' => 12, 'title' => $title);

    }
}