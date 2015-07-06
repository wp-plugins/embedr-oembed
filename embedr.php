<?php
/*
Plugin Name: oEmbed Embedr.eu
Description: Adds oEmbed support for embedr.eu. Copy paste an embedr.eu url to use this functionality.
Version: 1.0
Author: Maarten Zeinstra / Embedr.eu / Kennisland
Author URI: https://embedr.eu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

wp_oembed_add_provider ('http://media.embedr.eu/*', 'http://media.embedr.eu/oembed');
?>