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

<h3>Virgo Bundlor 1.1.0.M02 - Release Notes</h3>

<p>
1.1.0.M02 is the second milestone of Virgo Bundlor.
</p>

<h4>Acknowledgements</h4>

<p>A documentation patch was gratefully received from:</p>
<ul>
    <li>ctranxuan</li>
</ul>

<h4>Highlights</h4>

<ul>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=362405">Bug 362405</a>: Better support for large version numbers.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=360024">Bug 360024</a>: Maven reports that Virgo Bundlor does not have plugin descriptor.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=357763">Bug 357763</a>: Bundlor now publishes Maven artifacts for it's releases and depends on the latest version of Virgo Util which is also published in our Maven repo.</li>
</ul>

</div>

<?
$html = ob_get_clean();
# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>