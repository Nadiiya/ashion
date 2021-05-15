<?php
get_header();


require_once THEME_DIR . '/inc/classes/ThemeTeam.class.php';

$team = new ThemeTeam();

get_header();

echo get_breadcrumbs_section();

echo $team->display();

get_footer();
