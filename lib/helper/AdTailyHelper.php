<?php

function at_insert_ad_taily_ad() {
	if (sfConfig::get('app_ad_taily_plugin_enabled', false) === false) return;
	if (($code = sfConfig::get('app_ad_taily_plugin_code')) === null) return;

	echo "<script type=\"text/javascript\" id=\"AdTaily_Widget\" src=\"http://static.adtaily.pl/widget.js#{$code}\"></script>";
}