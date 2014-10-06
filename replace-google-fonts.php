<?php

/**
 * Plugin Name: Replace Google Fonts
 * Plugin URI:  http://www.soulteary.com/2014/06/08/replace-google-fonts.html
 * Description: Open font mirror replacement for Google Font
 * Author:      soulteary
 * Author URI:  http://www.soulteary.com/
 * Version:     1.0
 * License:     GPL
 */

/**
 * Silence is golden
 */
if (!defined('ABSPATH')) exit;

class Replace_Google_Fonts
{

    /**
     * init Hook
     *
     */
    public function __construct()
    {
        add_filter('style_loader_tag', array($this, 'replace_font_source'), 1000, 1);
    }


    /**
     * Use alternative open fonts mirror to replace Google's.
     *
     * @param $text source styles
     * @return $text styles with alternative font source
     */
    public function replace_font_source($text)
    {
        return str_replace('//fonts.googleapis.com/', '//fonts.lug.ustc.edu.cn/', $text);
    }
}

/**
 * bootstrap
 */
new Replace_Google_Fonts;
