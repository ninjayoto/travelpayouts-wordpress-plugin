<div class="TPWrapper TPWrapper-long">

    <p class="TPMainTitle"><?php _e('Search forms', KPDPlUGIN_TEXTDOMAIN); ?> </p>

    <div class="TP-TopImportantInfo TP-shortDescription">
        <p>
            <?php _e('In this section you can add shortcodes for search forms, set up in the admin account Travelpayouts', KPDPlUGIN_TEXTDOMAIN); ?>
            <a href="https://www.travelpayouts.com/tools/forms?utm_source=wp_plugin&utm_medium=forms" target="_blank">
                https://www.travelpayouts.com/tools/forms
            </a>
        </p>
    </div>

    <div class="TPmainContent TP-BalanceContent TP-SettingContent">
        <p class="TP-SettingTitle"><?php _e('Shortcodes for forms', KPDPlUGIN_TEXTDOMAIN); ?> </p>

        <div class="TP-navsShort">
            <div class="TP-lincksNavShort">
                <a href="admin.php?page=tp_control_search_shortcodes&action=add_search_shortcode" class="TP-addShortLincks">
                    <i></i><?php _e('Add a shortcode', KPDPlUGIN_TEXTDOMAIN) ?>
                </a>
                <a href="admin.php?page=tp_control_search_shortcodes&action=add_search_shortcode" class="TP-deleteShortLincks deleteChecked"
                   data-type="search_shortcodes">
                    <i></i><?php _e('Remove checked', KPDPlUGIN_TEXTDOMAIN) ?>
                </a>
            </div>
            <a class="TP-AllLincksShort" href="javascript:void(0)">
                <?php _e('All', KPDPlUGIN_TEXTDOMAIN);?>
                (<span><?php echo count($this->data); ?></span>)
            </a>
        </div>

        <table class="TP-listShort" id="TP-listShortcode">
            <thead>
            <tr>
                <td class="tp-notsort-column">
                    <input class="checkedAll" id="chekTableS-all" type="checkbox" name="checkedId" hidden="">
                    <label for="chekTableS-all"></label>
                </td>
                <td class="TPTableHead"><?php _e('Title ', KPDPlUGIN_TEXTDOMAIN) ?></td>
                <td class="TPTableHead tp-date-column"><?php _e('Date added', KPDPlUGIN_TEXTDOMAIN) ?></td>
                <td class="tp-notsort-column"><?php _e('Shortcode', KPDPlUGIN_TEXTDOMAIN) ?></td>
                <td class="tp-notsort-column"></td>
            </tr>
            </thead>

            <tbody>
            <?php if ($this->data): ?>
                <?php foreach ($this->data as $key => $record): ?>
                    <tr>
                        <td class="showTableTdCheckbox">
                            <input  class="checkedId" id="chekTableS-<?php echo $record['id'];?>" type="checkbox" name="<?php echo $record['id'];?>"  value="1" hidden="">
                            <label for="chekTableS-<?php echo $record['id'];?>"></label>
                        </td>
                        <td>
                            <a href="admin.php?page=tp_control_search_shortcodes&action=edit_search_shortcode&id=<?php echo $record['id'];?>"
                               class="row-title" title="<?php _e('Edit', KPDPlUGIN_TEXTDOMAIN) ?> «<?php echo $record['title'];?>»">
                                <?php echo $record['title'];?></a>
                        </td>
                        <td>
                            <p data-tptime="<?php echo $record['date_add']; ?>">
                                <?php echo date('d.m.Y', $record['date_add']);?>
                            </p>
                        </td>
                        <td>[tp_search_shortcodes id="<?php echo $record['id'];?>"]</td>
                        <td>
                            <a class="TP-icoDeleteShortTable" href="admin.php?page=tp_control_search_shortcodes&action=delete_search_shortcode&id=<?php echo $record['id'];?>"></a>
                            <a class="TP-icoFormatShortTable" href="admin.php?page=tp_control_search_shortcodes&action=edit_search_shortcode&id=<?php echo $record['id'];?>"></a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>