<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Glyn Normington
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Virgo - Deliverables";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, deliverables";
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Virgo Deliverables</h2>
		The Virgo deliverables are as follows. Refer to the <a href="http://www.eclipse.org/virgo/feature-summary/">feature summary</a> for a feature comparison.

		<h3 id="nano-deliverable">Virgo Nano</h3>
		
		Virgo Nano is a minimal core of the Virgo kernel which is designed to run relatively simple OSGi
		applications in a single region. Bundles can be provisioned at runtime using p2.
		
		<h3 id="nano-full-deliverable">Virgo Nano "Full"</h3>
		
		Virgo Nano "Full" builds on Virgo Nano and embeds Gemini Web to provide Apache Tomcat-based servlet
		support.  Bundles, including Web Application Bundles, can be provisioned at runtime using p2.
		
		<h3 id="kernel-deliverable">Virgo Kernel</h3>
		
		Virgo kernel supports the core concepts of Virgo but is not biased towards the web, thus enabling
		other types of server to be created. The kernel can also be used stand-alone as a rich OSGi
		application platform. A server can easily be constructed by deploying suitable bundles on top of the
		kernel.
		
		<h3 id="tomcat-server-deliverable">Virgo Server for Apache Tomcat</h3>
		
		Virgo Server for Apache Tomcat builds on the kernel and adds Gemini Web, a web integration layer, and
		various supporting bundles. It supports deploying sophisticated multi-bundle web applications.
		<p><br>
		Although Virgo Server for Apache Tomcat is the proper title for the deliverable
		(see the Apache Tomcat <a href="http://tomcat.apache.org/legal.html">legal page</a>), there are bound to be some dangling references to
		Virgo Tomcat Server in places. These references should always be understood to be abbreviations for the proper title.
		
		<h3 id="jetty-server-deliverable">Virgo Jetty Server</h3>
		
		Virgo Jetty Server is similar to Virgo Server for Apache Tomcat but embeds the Jetty servlet container instead
		of the embedded Apache Tomcat servlet container.
		
		<h3 id="snaps-deliverable">Virgo Snaps</h3>
		
		The Virgo snaps framework may be used to cleanly modularise the web bundles of an application.
		Currently, snaps only runs on Virgo Server for Apache Tomcat.
	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>