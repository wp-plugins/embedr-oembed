<?php
/*
Plugin Name: Embedr oEmbed
Description: Adds oEmbed support for embedr.eu. Copy paste an embedr.eu url to use this functionality.
Version: 1
Author: Maarten Zeinstra / Embedr.eu / Kennisland
Author URI: https://kl.nl
License: GPL2, EUPL V1.1 http://ec.europa.eu/idabc/eupl.html
*/

wp_oembed_add_provider ('http://media.embedr.eu/*', 'http://media.embedr.eu/oembed');
?>