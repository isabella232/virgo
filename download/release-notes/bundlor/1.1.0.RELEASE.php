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
	$pageTitle 		= "Virgo Bundlor - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Glyn Normington";
    
	ob_start();
    ?>
	
		<div id="midcolumn">
		
		<h3>Virgo Bundlor 1.1.0.RELEASE - Release Notes</h3>
		
		<p>
			This is the first release of Virgo Bundlor. See <a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=2101832;classification=RT;query_format=advanced;component=bundlor;target_milestone=1.1.0.M03;target_milestone=1.1.0.M05;target_milestone=1.1.0.RELEASE;product=Virgo">here</a> for a full list of bugs included in it.
		</p>
		
		</div>
	
	<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
	?>