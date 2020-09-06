<?

function insertRainbowLink($target, $mother) {
	global $pluginURL;

	$target .= '<script language="javascript" src="' . $pluginURL . '/rainbow.js" type="text/javascript"></script>'."\n";
	return $target;
}

?>