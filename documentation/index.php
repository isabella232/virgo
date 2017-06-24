<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

/*******************************************************************************
 * Copyright (c) 2009, 2015 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Christopher Frost
 *
 *******************************************************************************/

	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Virgo OSGi Runtime - Documentation";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Documentation";
	$pageAuthor		= "Christopher Frost";

	$currentVersion = "3.7.1.RELEASE";
	$currentSnapsVersion = "3.7.1.RELEASE";
	$currentToolingVersion = "3.6.4.RELEASE";
	$currentBundlorVersion = "1.1.2.RELEASE";
	$milestone = "3.7.0.M01";
	$virgoMilestone = "3.7.0.RC01";
	$toolingMilestone = "3.5.0.M04";
	ob_start();
?>

	<div id="midcolumn">
		<h2>Documentation</h2>
		<p>
			The documentation for Virgo is browseable online below:

			<ul>
				<li>User Guide ( <a href="virgo-documentation-<?=$currentVersion ?>/docs/virgo-user-guide/html5/virgo-user-guide.html">HTML</a> )</li>

				<li>Programmer Guide ( <a href="virgo-documentation-<?=$currentVersion ?>/docs/virgo-programmer-guide/html5/virgo-programmer-guide.html">HTML</a> )</li>

				<li>Snaps Guide ( <a href="virgo-documentation-<?=$currentSnapsVersion ?>/docs/snaps-guide/html5/virgo-snaps-guide.html">HTML</a> )</li>

				<li>Tooling Guide ( <a href="virgo-documentation-<?=$currentToolingVersion ?>/docs/virgo-tooling-guide/html/index.html">HTML</a> | <a href="virgo-documentation-<?=$currentToolingVersion ?>/docs/virgo-tooling-guide/htmlsingle/virgo-tooling-guide.html">HTML Single</a> )</li>

				<li>Bundlor User Guide ( <a href="bundlor-documentation-<?=$currentBundlorVersion ?>/docs/user-guide/html/index.html">HTML</a> | <a href="bundlor-documentation-<?=$currentBundlorVersion ?>/docs/user-guide/htmlsingle/user-guide.html">HTML Single</a> )</li>
			</ul>
		</p>

        <!--
        <p>
			Some key Virgo concepts are covered on the <a href="http://wiki.eclipse.org/Virgo/Concepts">wiki</a> or, if you're here for the first time, you may simply wish to <a href="http://wiki.eclipse.org/Virgo/Community#Take_Virgo_for_a_spin">take Virgo for a spin</a>.
		</p>
		<p>
		    Users of earlier releases of Virgo, of SpringSource dm Server, or of the "slices" framework should refer to the <a href="http://wiki.eclipse.org/Virgo/Community#Migration_Notes">migration notes</a> on the wiki.
		</p>


 		<h2>Milestone Documentation</h2>
		<p>
			The documentation for the latest milestone of Virgo can be downloaded from <a href="http://www.eclipse.org/virgo/download/" target="_self">here</a> or it is browseable online below:

			<ul>
				<li>User Guide ( <a href="virgo-documentation-<?=$virgoMilestone ?>/docs/virgo-user-guide/html5/virgo-user-guide.html">HTML</a> )</li>

				<li>Programmer Guide ( <a href="virgo-documentation-<?=$virgoMilestone ?>/docs/virgo-programmer-guide/html5/virgo-programmer-guide.html">HTML</a> )</li>

				<li>Snaps Guide ( <a href="virgo-documentation-<?=$virgoMilestone ?>/docs/snaps-guide/html5/virgo-snaps-guide.html">HTML</a> )</li>

				<li>Tooling Guide ( <a href="virgo-documentation-<?=$milestone ?>/docs/virgo-tooling-guide/html/index.html">HTML</a> | <a href="virgo-documentation-<?=$milestone ?>/docs/virgo-tooling-guide/htmlsingle/virgo-tooling-guide.html">HTML Single</a> )</li>

			</ul>
		</p>
        -->
	</div>

<?php
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
