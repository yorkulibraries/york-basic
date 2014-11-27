<?php
function get_exhibit_sections($exhibit) {
    $sections = array();
    foreach($exhibit->Pages as $page) {
        if (!$page->parent_id) {
            $sections[] = $page;
        }
    }
    return $sections;
}

function exhibit_logo($exhibit) {
    $items = get_records('Item', array('tags' => $exhibit->slug . '-logo'), 1);
    if (empty($items)) {
        return '<img src="' . img('default_logo.png') . '" alt="Default Logo"/>';
    }
    return item_image('fullsize', array(), 0, $items[0]);
}

?>