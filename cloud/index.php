<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2013 VMware Inc.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Glyn Normington
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Virgo in the Cloud";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, cloud";
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Virgo in the Cloud</h2>
		<p>
			Virgo is an integral part of
			<a href="http://www.infoq.com/news/2012/12/sap-netweaver-cloud">SAP Netweaver Cloud</a>
			and can be used in <a href="http://www.cloudfoundry.org/">CloudFoundry</a> via the
			<a href="https://github.com/glyn/virgo-buildpack">Virgo buildpack</a>.</p>

	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>