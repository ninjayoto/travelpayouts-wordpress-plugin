<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 30.01.17
 * Time: 11:13 AM
 */

namespace app\includes\models\admin\menu;

use \app\includes\TPPlugin;
use \app\includes\common\TPLang;

class TPFieldHotels
{
    public function __construct(){

    }

    /**
     * Подборки отелей
     */
    public function TPFieldShortcode_1(){
        $shortcode = 1;
        ?>
        <div class="TP-HeadTable">
            <?php $this->getFieldTitle($shortcode); ?>
            <?php $this->getFieldTitleTag($shortcode); ?>
        </div>
        <?php $this->getFieldExtraMarker($shortcode); ?>
        <?php $this->getFieldPaginate($shortcode); ?>
        <?php
        $this->getFieldSortableSection($shortcode);

    }
    /**
     * Отели Города по цене ОТ-ДО
     */
    public function TPFieldShortcode_2(){
        $shortcode = 2;
        ?>
        <div class="TP-HeadTable">
            <?php $this->getFieldTitle($shortcode); ?>
            <?php $this->getFieldTitleTag($shortcode); ?>
        </div>
        <?php $this->getFieldExtraMarker($shortcode); ?>
        <?php $this->getFieldPaginate($shortcode); ?>
        <?php
        $this->getFieldSortableSection($shortcode);
    }
    /**
     * Отели в городе по звездам
     */
    public function TPFieldShortcode_3(){
        $shortcode = 3;
        ?>
        <div class="TP-HeadTable">
            <?php $this->getFieldTitle($shortcode); ?>
            <?php $this->getFieldTitleTag($shortcode); ?>
        </div>
        <?php $this->getFieldExtraMarker($shortcode); ?>
        <?php $this->getFieldPaginate($shortcode); ?>
        <?php
        $this->getFieldSortableSection($shortcode);
    }
    /**
     * Стоимость проживания В ГОРОДЕ на Х дней
     */
    public function TPFieldShortcode_4(){
        $shortcode = 4;
        ?>
        <div class="TP-HeadTable">
            <?php $this->getFieldTitle($shortcode); ?>
            <?php $this->getFieldTitleTag($shortcode); ?>
        </div>
        <?php $this->getFieldExtraMarker($shortcode); ?>
        <?php $this->getFieldPaginate($shortcode); ?>
        <?php
        $this->getFieldSortableSection($shortcode);
    }
    /**
     * Стоимость проживания В ГОРОДЕ на уикенд
     */
    public function TPFieldShortcode_5(){
        $shortcode = 5;
        ?>
        <div class="TP-HeadTable">
            <?php $this->getFieldTitle($shortcode); ?>
            <?php $this->getFieldTitleTag($shortcode); ?>
        </div>
        <?php $this->getFieldExtraMarker($shortcode); ?>
        <?php $this->getFieldPaginate($shortcode); ?>
        <?php
        $this->getFieldSortableSection($shortcode);
    }

    /**
     * @param $shortcode
     * @param string $type
     */
    public function getFieldTitle($shortcode, $type = 'shortcodes_hotels'){
        ?>
        <label>
            <span>
                <?php _ex('tp_admin_page_hotels_tab_tables_content_shortcode_input_title_label',
                    '(Title)', TPOPlUGIN_TEXTDOMAIN); ?>
            </span>
            <?php

            if (!array_key_exists(TPLang::getLang(), TPPlugin::$options[$type][$shortcode]['title'])){
                foreach(TPPlugin::$options[$type][$shortcode]['title'] as $key_local => $title){
                    $typeFields = (TPLang::getDefaultLang() != $key_local)?'hidden':'text';
                    ?>
                    <input type="<?php echo $typeFields; ?>"
                           name="<?php echo TPOPlUGIN_OPTION_NAME;?>[<?php echo $type; ?>][<?php echo $shortcode; ?>][title][<?php echo $key_local; ?>]"
                           value="<?php echo esc_attr(TPPlugin::$options[$type][$shortcode]['title'][$key_local]) ?>"/>
                    <?php
                }
            } else {
                foreach(TPPlugin::$options[$type][$shortcode]['title'] as $key_local => $title){
                    $typeFields = (TPLang::getLang() != $key_local)?'hidden':'text';
                    ?>
                    <input type="<?php echo $typeFields; ?>"
                           name="<?php echo TPOPlUGIN_OPTION_NAME;?>[<?php echo $type; ?>][<?php echo $shortcode; ?>][title][<?php echo $key_local; ?>]"
                           value="<?php echo esc_attr(TPPlugin::$options[$type][$shortcode]['title'][$key_local]) ?>"/>
                    <?php
                }
            }

            ?><p>
                <?php _ex('tp_admin_page_hotels_tab_tables_content_shortcode_input_title_label_help_2',
                    '(Use "origin" and "destination" variables to add the city automatically)', TPOPlUGIN_TEXTDOMAIN); ?>
            </p>
        </label>
        <?php
    }
    /**
     * @param $shortcode
     */
    public function getFieldTitleTag($shortcode, $type = 'shortcodes_hotels'){
        ?>
        <label>
            <span>
                <?php _ex('tp_admin_page_hotels_tab_tables_content_shortcode_select_title_tag_label',
                    '(Title tag)', TPOPlUGIN_TEXTDOMAIN); ?>
            </span>

            <select name="<?php echo TPOPlUGIN_OPTION_NAME;?>[<?php echo $type; ?>][<?php echo $shortcode; ?>][tag]" class="TP-Zelect">
                <option <?php selected(TPPlugin::$options[$type][$shortcode]['tag'], "div" ); ?>
                    value="div">
                    <?php _ex('tp_admin_page_flights_tab_tables_content_shortcode_select_title_tag_value_1',
                        '(DIV)', TPOPlUGIN_TEXTDOMAIN); ?>
                </option>
                <option <?php selected( \app\includes\TPPlugin::$options[$type][$shortcode]['tag'], "h1" ); ?>
                    value="h1">
                    <?php _ex('tp_admin_page_flights_tab_tables_content_shortcode_select_title_tag_value_2',
                        '(H1)', TPOPlUGIN_TEXTDOMAIN); ?>
                </option>
                <option <?php selected( \app\includes\TPPlugin::$options[$type][$shortcode]['tag'], "h2" ); ?>
                    value="h2">
                    <?php _ex('tp_admin_page_flights_tab_tables_content_shortcode_select_title_tag_value_3',
                        '(H2)', TPOPlUGIN_TEXTDOMAIN); ?>
                </option>
                <option <?php selected( \app\includes\TPPlugin::$options[$type][$shortcode]['tag'], "h3" ); ?>
                    value="h3">
                    <?php _ex('tp_admin_page_flights_tab_tables_content_shortcode_select_title_tag_value_4',
                        '(H3)', TPOPlUGIN_TEXTDOMAIN); ?>
                </option>
                <option <?php selected( \app\includes\TPPlugin::$options[$type][$shortcode]['tag'], "h4" ); ?>
                    value="h4">
                    <?php _ex('tp_admin_page_flights_tab_tables_content_shortcode_select_title_tag_value_5',
                        '(H4)', TPOPlUGIN_TEXTDOMAIN); ?>
                </option>
            </select>

        </label>
        <?php
    }

    /**
     * @param $shortcode
     */
    public function getFieldSortableSection($shortcode){
        $settingsShortcodeSortable = '';
        $settingsShortcodeSortableSelected = '';
        $fieldsInput = '';
        if(!empty(TPPlugin::$options['shortcodes_hotels'][$shortcode]['selected'])){
            $selected = array_unique(TPPlugin::$options['shortcodes_hotels'][$shortcode]['selected']);
            $fields = TPPlugin::$options['shortcodes_hotels'][$shortcode]['fields'];
            $arraySort = array();
            foreach($selected as $key_s => $selec){
                if (($key = array_search($selec, $fields)) !== false) {
                    $arraySort[] = $selec;
                    unset($fields[$key]);
                }
            }
            $arraySort = array_merge($arraySort, $fields);
            foreach($arraySort as $key_f => $field) {
                if(in_array($field, $selected)){
                    $settingsShortcodeSortableSelected .= '<li data-key="' . $field . '"
                              data-input-name="' . TPOPlUGIN_OPTION_NAME . '[shortcodes_hotels][' . $shortcode . '][selected][]"
                              class="">'
                        .$this->getFieldSortTDLabel($field)
                        .'<input type="hidden" class="itemSortableSelected" name="' . TPOPlUGIN_OPTION_NAME . '[shortcodes_hotels][' . $shortcode . '][selected][]" value="' . $field . '"/>'
                        .'</li>';
                } else {
                    $settingsShortcodeSortable .= '<li data-key="' . $field . '"
                              data-input-name="' . TPOPlUGIN_OPTION_NAME . '[shortcodes_hotels][' . $shortcode . '][selected][]"
                              class="">'
                        .$this->getFieldSortTDLabel($field)
                        .'</li>';
                }
                $fieldsInput .= '<input type="hidden"  name="' . TPOPlUGIN_OPTION_NAME . '[shortcodes_hotels][' . $shortcode . '][fields][]" value="' . $field . '"/>';
            }

        }else{

        }
        ?>

        <div class="TP-SortableSection">
            <p class="titleSortable">
                <?php _ex('tp_admin_page_hotels_tab_tables_content_shortcode_field_sort_column_table_label',
                    '(Table Columns)', TPOPlUGIN_TEXTDOMAIN); ?>
            </p>
            <div class="TP-ContainerSorTable">
                <div data-force="30" class="layer TP-blockSortable" >
                    <p class="TP-titleBlockSortable">
                        <?php _ex('tp_admin_page_hotels_tab_tables_content_shortcode_field_sort_column_table_label_not_select',
                            '(Not selected)', TPOPlUGIN_TEXTDOMAIN); ?>
                    </p>
                    <ul class="block__list block__list_words connectedSortable settingsShortcodeSortable">
                        <?php echo $settingsShortcodeSortable; ?>
                    </ul>
                </div>

                <div data-force="18" class="layer TP-blockSortable">
                    <p class="TP-titleBlockSortable">
                        <?php _ex('tp_admin_page_hotels_tab_tables_content_shortcode_field_sort_column_table_label_select',
                            '(Selected)', TPOPlUGIN_TEXTDOMAIN); ?>
                    </p>
                    <ul class="block__list block__list_tags connectedSortable settingsShortcodeSortableSelected">
                        <?php echo $settingsShortcodeSortableSelected; ?>
                    </ul>
                </div>
                <?php echo $fieldsInput; ?>
            </div>
        </div>
        <?php
    }

    /**
     * @param $fieldKey
     * @return string
     */
    public function getFieldSortTDLabel($fieldKey){
        $fieldLabel = "";
        if(isset(TPPlugin::$options['local']['hotels_fields'][TPLang::getLang()]['label_default'][$fieldKey])){
            $fieldLabel = TPPlugin::$options['local']['hotels_fields'][TPLang::getLang()]['label_default'][$fieldKey];
        }else{
            $fieldLabel = TPPlugin::$options['local']['hotels_fields'][TPLang::getDefaultLang()]['label_default'][$fieldKey];
        }
        return $fieldLabel;
    }

    /**
     *
     */
    public function TPFieldHotelsThemesTable(){
        ?>
        <input class="TPThemesNameHidden" type="hidden"
               name="<?php echo TPOPlUGIN_OPTION_NAME;?>[themes_table_hotels][name]"
               value="<?php echo TPPlugin::$options['themes_table_hotels']['name']?>"/>
        <?php
    }

    /**
     * @param $shortcode
     */
    public function getFieldExtraMarker($shortcode){
        ?>
        <div class="TP-HeadTable">
            <label>
                <span>
                    <?php _ex('tp_admin_page_hotels_tab_tables_content_shortcode_field_extra_table_marker_label',
                        '(Extra marker)', TPOPlUGIN_TEXTDOMAIN); ?>
                </span>
                <input type="text" name="<?php echo TPOPlUGIN_OPTION_NAME;?>[shortcodes_hotels][<?php echo $shortcode; ?>][extra_table_marker]"
                       value="<?php echo esc_attr(TPPlugin::$options['shortcodes_hotels'][$shortcode]['extra_table_marker']) ?>"
                       class="TPFieldInputText"/>
            </label>
            <label>

            </label>
        </div>
        <?php
    }

    /**
     * @param $shortcode
     */
    public function getFieldPaginate($shortcode){
        ?>
        <div class="ItemSub">
            <span>
                <?php _ex('tp_admin_page_hotels_tab_tables_content_shortcode_field_paginate_limit_label',
                    '(Rows per page)', TPOPlUGIN_TEXTDOMAIN); ?>
            </span>
            <div class="TP-childF">
                <div class="spinnerW clearfix" data-trigger="spinner">
                    <label>
                        <input name="<?php echo TPOPlUGIN_OPTION_NAME;?>[shortcodes_hotels][<?php echo $shortcode; ?>][paginate]"
                               type="text" data-rule="quantity"
                               value="<?php echo esc_attr(TPPlugin::$options['shortcodes_hotels'][$shortcode]['paginate']) ?>">
                    </label>
                    <div class="navSpinner">
                        <a class="navDown" href="javascript:void(0);" data-spin="down"></a>
                        <a class="navUp" href="javascript:void(0);" data-spin="up"></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="TP-HeadTable">
            <input id="chek-p1" type="checkbox" name="<?php echo TPOPlUGIN_OPTION_NAME;?>[shortcodes_hotels][<?php echo $shortcode; ?>][paginate_switch]"
                   value="1" <?php checked(isset(TPPlugin::$options['shortcodes_hotels'][$shortcode]['paginate_switch']), 1) ?> hidden />
            <label for="chek-p1">
                <?php _ex('tp_admin_page_hotels_tab_tables_content_shortcode_field_paginate_label',
                    '(Paginate)', TPOPlUGIN_TEXTDOMAIN); ?>
            </label>
            <label></label>

        </div>


        <?php
    }

}