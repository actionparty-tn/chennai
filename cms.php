<?php
variables([
	VARLinkToSectionHome => true,
	VARLinkToNodeHome => true,
	VARLinkToSubnodeHome => true,
]);

function site_before_render() {
	autosetPageMenu([VARDontOverwriteLogo => true]);
}
