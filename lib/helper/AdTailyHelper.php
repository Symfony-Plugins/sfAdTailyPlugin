<?php

function at_insert_ad_taily_ad() {
	if (($code = sfConfig::get('app_ad_taily_plugin_code')) === null) {
		sfContext::getInstance()->getLogger()->alert('{sfAdTailyPlugin} AdTaily Code is not set!');
		return;
	}

	if (sfConfig::get('app_ad_taily_plugin_enabled') !== false && $code !== null) {
		echo str_replace('{$code}', $code, sfConfig::get('app_ad_taily_plugin_template', ''));
	}
}