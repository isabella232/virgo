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

	<h3>3.7.0.RELEASE - Release Notes</h3>

Finally - the <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Steel</a> (3.7.0) release of Virgo.

Since lot's of people have been waiting for this release, some thanks are due.

  <h4>Acknowledgements</h4>

<p>
Special thanks go to Violeta Georgieva for releasing Gemini Web 3.0.0 and
to Olaf Otto and Dmitry Sklyut for releasing Gemini Blueprint 2.0.0 in time for Virgo 3.7.0.
</p>

Two new committers joined during this release and have made great contributions so far:

<ul>
  <li>Daniel Marthaler (ISPIN AG) - Bundlor overhaul</li>
  <li>GianMaria Romanato (Finantix) - Virgo Tooling</li>
</ul>

The Virgo committers would also like to thank the following people for their contributions:

<ul>
  <li>Ahsen Jaffer</li>
  <li>Daniel Kojic</li>
	<li>Eduardo Fernández</li>
	<li>Mathilde Ffrench</li>
	<li>Matt Magoffin</li>
	<li>Polina Genova</li>
	<li>Stefan Zugal</li>
</ul>

and all those users helping out in the forum or otherwise.


<h4>Highlights</h4>

	<p>
	This release contains the following upgrades/changes:
	<ul>
		<li>Spring Framework 4.2.9.RELEASE</li>
		<li>Gemini Blueprint 2.0.0.RELEASE</li>
		<li>Gemini Web 3.0.0.RELEASE</li>
		<li>Tomcat 8.5.11</li>
		<li>Equinox 3.9.1 (Kepler SR2)</li>
		<li>Several optimizations regarding configuration, startup scripts and the documentation</li>
	</ul>
	</p>

	<h4>Other fixes</h4>
	<p>A list of bugs and enhancements included in the last slice (from RC01) towards the release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=5139738&classification=RT&query_format=advanced&target_milestone=3.7.0.RELEASE&product=Virgo" target="_self">here</a>.</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
