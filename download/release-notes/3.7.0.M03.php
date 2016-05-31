<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2016 Eclipse Foundation and others.
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

<h3>3.7.0.M03 - Release Notes</h3>

<p>
This is the third milestone of the <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Steel</a> (3.7.0) release of Virgo.
It contains the following upgrades/changes:
<ul>
    <li>Spring Framework 4.2.4.RELEASE</li>
    <li>Gemini Blueprint 2.0.0.RELEASE</li>
	<li>Jolokia 1.3.3</li>
	<li>Equinox Kepler SR2</li>
</ul>
</p>

<p>
This milestone is accompanied by several new Virgo recipes available from the sample page:
<ul>
	<li>Virgo recipe for 'Create a Custom Virgo Runtime with Dockerizor' ( <a href="/virgo/samples/recipe-custom-runtime/recipe-custom-runtime.html">HTML</a> )</li>
	<li>Virgo recipe for 'Serving Web Content with Spring MVC' ( <a href="/virgo/samples/recipe-serving-web-content/recipe-serving-web-content.html">HTML</a> )</li>
	<li>Virgo recipe for 'Accessing Data with MongoDB' ( <a href="/virgo/samples/recipe-accessing-data-mongodb/recipe-accessing-data-mongodb.html">HTML</a> )</li>
	<li>Virgo recipe for 'Messaging with RabbitMQ' ( <a href="/virgo/samples/recipe-messaging-rabbitmq/recipe-messaging-rabbitmq.html">HTML</a> )</li>
</ul>

</p>

<h4>Enhancements and Fixes</h4>
<p>A full list of bugs and enhancements included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=5139738&classification=RT&query_format=advanced&target_milestone=3.7.0.M03&product=Virgo" target="_self">here</a>.</p>

</div>


<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

