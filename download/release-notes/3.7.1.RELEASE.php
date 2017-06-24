<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

/*******************************************************************************
 * Copyright (c) 2017 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Florian Waibel
 *
 *******************************************************************************/

	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Virgo - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Daniel Marthaler";

	ob_start();
?>

<div id="midcolumn">

	<h3>3.7.1.RELEASE - Release Notes</h3>

  <h4>Acknowledgements</h4>

<p>
Special thanks go to Olaf Otto for releasing Gemini Blueprint 2.1.0.JAVA7 for Virgo 3.7.1.
</p>

<h4>Highlights</h4>

	<p>
	This release contains the following upgrades/changes:
	<ul>
		<li>Spring Framework 4.3.9.RELEASE</li>
		<li>Gemini Blueprint 2.1.0.JAVA7</li>
        <li>Jolokia 1.3.6</li>
        <li>Apache Commons IO 2.5</li>
        <li>Logback 1.2.3</li>
        <li>Slf4j 1.7.25</li>
		<li>Optimizations in startup script</li>
        <li>OkHttp 3.8.0 as a new dependency delivered in the ext repository</li>
	</ul>
	</p>

	<h4>Other fixes</h4>
	<p>A complete list of bugs and enhancements is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&list_id=16481913&product=Virgo&query_format=advanced&target_milestone=3.7.1.RELEASE" target="_self">here</a>.</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
