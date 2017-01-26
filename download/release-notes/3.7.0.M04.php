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
	$pageAuthor		= "Florian Waibel";

	ob_start();
?>

<div id="midcolumn">

<h3>3.7.0.M04 - Release Notes</h3>

<p>
This is the forth milestone of the <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Steel</a> (3.7.0) release of Virgo.
It contains the following upgrades/changes:
<ul>
	<li>Spring Framework 4.2.9.RELEASE</li>
  <li>Gemini Web 3.0.0.RC5</li>
	<li>Tomcat 8.5.5</li>
	<li>Javax Servlet 3.1</li>
	<li>Several other 3rd party updates</li>
</ul>
</p>

<h4>Enhancements and Fixes</h4>
<p>A full list of bugs and enhancements included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=5139738&classification=RT&query_format=advanced&target_milestone=3.7.0.M04&product=Virgo" target="_self">here</a>.</p>

</div>


<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
