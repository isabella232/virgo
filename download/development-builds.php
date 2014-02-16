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
	$pageTitle 		= "Virgo - Development Builds";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Development, Builds";
	$pageAuthor		= "Glyn Normington";
		
	$virgoVersions = array("3.6.0.M02");
	ob_start();
?>

	<script>
		$(function() {
			$( "#accordion" ).accordion({ collapsible: true, header: 'h4', autoHeight: false });
		});
	</script>

<div id="midcolumn">
	<h2>Development Builds</h2>
	<p>
		Users are encouraged to use <a href="http://www.eclipse.org/virgo/download">releases</a> or
		<a href="http://www.eclipse.org/virgo/download/milestones.php">milestones</a> wherever possible.
		But if a more recent development build is required, for example to test a bug fix, then one of the
		<a href="https://hudson.eclipse.org/virgo/job/virgo.packaging.snapshot/ws/build-packaging/target/artifacts/">zip files</a>
		produced by the Hudson packaging job may be downloaded.
	</p>
	<p>
		Caveats:
		<ul>
	    	<li>Note that development builds may be less stable than official releases or milestones. For example, the code may be in the middle of a major refactoring.</li>
	    	<li>If the Hudson packaging job fails, development builds may be unavailable. Also, existing development builds may be deleted at any time without notice.</li>
	    	<li>Users should never raise bugs found when using these builds, but should re-test on a milestone.</li>
	    	<li>Obviously these builds must never be used in production.</li>
	    </ul> 
	</p>
</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>