<?php
/*

**************************************************************************

Plugin Name:  More Buttons
Plugin URI:   http://www.arefly.com/more-buttons/
Description:  Add More Useful Buttons to TinyMCE Editors. 在TinyMCE編輯器上增加更多實用的按鈕
Version:      1.0.4
Author:       Arefly
Author URI:   http://www.arefly.com/

**************************************************************************

	Copyright 2014  Arefly  (email : eflyjason@gmail.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

**************************************************************************/

define("MORE_BUTTONS_PLUGIN_URL", plugin_dir_url( __FILE__ ));
define("MORE_BUTTONS_FULL_DIR", plugin_dir_path( __FILE__ ));
define("MORE_BUTTONS_TEXT_DOMAIN", "more-buttons");

function more_buttons($buttons) {
	$buttons[] = 'fontsizeselect';
	$buttons[] = 'styleselect';
	$buttons[] = 'bullist';
	$buttons[] = 'numlist';
	$buttons[] = 'fontselect';
	$buttons[] = 'wp_page';
	$buttons[] = 'hr';
	$buttons[] = 'sub';
	$buttons[] = 'sup';
	$buttons[] = 'cleanup';
	$buttons[] = 'image';
	$buttons[] = 'code';
	$buttons[] = 'backcolor';
	$buttons[] = 'visualaid';
	$buttons[] = 'wp_help';
	return $buttons;
}
add_filter("mce_buttons_3", "more_buttons");
