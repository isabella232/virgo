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
 * Contributors: Christopher Frost
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Virgo - Samples";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Samples";
	$pageAuthor		= "Christopher Frost";

	ob_start();
?>

	<script>
		$(function() {
			$( "#accordion" ).accordion({ collapsible: true, header: 'h4', autoHeight: false });
		});
	</script>

<div id="midcolumn">
	<h2>Virgo Samples</h2>
	<p>
		All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> 
		unless otherwise specified. Information on unreleased samples can be found on the Virgo <a href="http://wiki.eclipse.org/Virgo/Samples">wiki</a>.
	</p>
	<h2>Samples Collection</h2>
		
	<p>Previous samples including Greenpages have been updated and combined in to a single samples project for Virgo. Collectivly they show many features and ways of structuring your project.</p>

	<div id='accordion'>
		<h4><a href="#">3.0.0.RC1</a></h4>
		<div>
			<ul>
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VSS/3.0.0.RC1/samples-3.0.0.RC1.zip" target="_self">Download</a></li>
				<li>View the Greenpages documentation (<a href="http://www.eclipse.org/virgo/documentation/greenpages-documentation-3.0.0.RC1/docs/html/index.html" target="_self">HTML</a> |
					 <a href="http://www.eclipse.org/virgo/documentation/greenpages-documentation-3.0.0.RC1/docs/htmlsingle/greenpages-guide.html" target="_self">HTML Single</a>)</li>
				<li>A helpful guide to getting Greenpages working under Eclipse by Cene Lavrič: <a href="http://greenpages300virgo.wordpress.com/">Greenpages, Eclipse and Virgo – orchestrated<a></li>
			</ul>
		</div>
	</div>

	<h2>Recipes Collection</h2>
	<p>This recipe(s) are inspired by the Spring Guides. The following recipe(s) for Virgo are available:</p>
	<div id='accordion'>
		<h4><a href="#">latest</a></h4>
		<div>
			<ul>
				<li>Virgo recipe for 'Uploading Files' ( <a href="guide-uploading-files/README.html">HTML</a> )</li>
			</ul>
		</div>
	</div>

	<h2>Greenpages Sample</h2>
	<br />
	<div id='accordion'>
		<h4><a href="#">2.5.0.RELEASE</a></h4>
		<div>
			<ul>
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/virgo/release/VWSS/2.5.0.RELEASE/greenpages-2.5.0.RELEASE.zip" target="_self">Download</a></li>
				<li>View the documentation (<a href="http://www.eclipse.org/virgo/documentation/greenpages-documentation-2.5.0.RELEASE/docs/html/index.html" target="_self">HTML</a> |
					 <a href="http://www.eclipse.org/virgo/documentation/greenpages-documentation-2.5.0.RELEASE/docs/htmlsingle/greenpages-guide.html" target="_self">HTML Single</a>)</li>
				<li>A helpful guide to getting Greenpages working under Eclipse by Cene Lavrič: <a href="http://greenpagesvirgo.wordpress.com/">Greenpages, Eclipse and Virgo – orchestrated<a></li>
			</ul>
		</div>
		
		<h4><a href="#">2.4.0.RELEASE</a></h4>
		<div>
			<ul>
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/virgo/release/VWSS/2.4.0.RELEASE/greenpages-2.4.0.RELEASE.zip" target="_self">Download</a></li>
				<li>View the documentation (<a href="http://www.eclipse.org/virgo/documentation/greenpages-documentation-2.4.0.RELEASE/docs/html/index.html" target="_self">HTML</a> | <a href="http://www.eclipse.org/virgo/documentation/greenpages-documentation-2.4.0.RELEASE/docs/htmlsingle/greenpages-guide.html" target="_self">HTML Single</a>)</li>
			</ul>
		</div>
		
		<h4><a href="#">2.3.0.RELEASE</a></h4>
		<div>
			<ul>
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/virgo/release/VWSS/2.3.0.RELEASE/greenpages-2.3.0.RELEASE.zip" target="_self">Download</a></li>
				<li>The documentation for this version of Greenpages is part of the Getting Started guide with 2.1.1.RELEASE of Virgo. Available <a href="http://www.eclipse.org/virgo/download/" target="_self">here</a></li>
			</ul>
		</div>
	</div>
	
</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>