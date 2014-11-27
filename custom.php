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

function pages_in_section_nav($currentPage) {
    $section = $currentPage->parent_id ? $currentPage->getParent() : $currentPage;
    $pages = array();
    $pages = $section->getChildPages();
    $exhibit = $currentPage->getExhibit();
    
    $html = '<ul class="exhibit-page-nav navigation">' . "\n";
    
    foreach ($pages as $page) {
        $html .= '<li' . ($currentPage->id == $page->id ? ' class="current"' : '') . '>';
        $html .= '<a class="exhibit-page-title" href="' . html_escape(exhibit_builder_exhibit_uri($exhibit, $page)) . '">';
        $html .= html_escape($page->title) . "</a></li>\n";
    }
    $html .= '</ul>' . "\n";
    $html = apply_filters('exhibit_builder_page_nav', $html);
    return $html;
}
?>