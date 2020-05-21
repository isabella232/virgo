<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

/*******************************************************************************
 * Copyright (c) 2020 Eclipse Foundation and others.
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
    <h3>3.7.3.RELEASE - Release Notes</h3>
	<p>
	    This release updates the version of Apache Tomcat, updates the Java profile to Java 8 and updates several libraries.
    </p>

    <h4>Version Upgrades</h4>
    <ul>
        <li>Apache Tomcat is upgraded to 8.5.53</li>
        <li>Spring Framework 4.3.27</li>
        <li>Gemini Web is upgraded to 3.0.5</li>
		<li>Gemini Blueprint 2.1.0.RELEASE</li>
	</ul>
	</p>

	<p>A list of bugs and enhancements is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&list_id=16592652&product=Virgo&query_format=advanced&target_milestone=3.7.3.RELEASE" target="_self">here</a>.</p>

    <p>Take <a href='../../download/index.php' target='_self'>Virgo</a> for a spin.</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
