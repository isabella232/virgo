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
	$pageTitle 		= "Virgo - Design Documents";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Documentation, Design, Formal";
	$pageAuthor		= "Glyn Normington";
	
	$currentVersion = "3.0.2.RELEASE";
	$milestone = "3.5.0.M02";
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Design Documents</h2>
		<p>
			Some parts of Virgo were too tricky to just code up. The following documents are mostly incomplete and out of date, but provide useful clues
			about the thinking behind some of the more complex components. The authors make no apologies for their use of mathematics.
		</p>
		<ul>
			<li>
				<a href="http://git.eclipse.org/c/virgo/org.eclipse.virgo.documentation.git/plain/design-docs/regions/regions.pdf">Regions in Virgo</a>
				- N.B. moved to Equinox
			</li>
			<li>
				<a href="http://git.eclipse.org/c/virgo/org.eclipse.virgo.documentation.git/plain/design-docs/osgi/resolver/resolver2.pdf">Partial model of OSGi resolution</a>
			</li>
			<li>
				<a href="http://git.eclipse.org/c/virgo/org.eclipse.virgo.documentation.git/plain/design-docs/install-pipeline/install-pipeline.pdf">Install Pipeline</a>
			</li>
			<li>
				<a href="http://git.eclipse.org/c/virgo/org.eclipse.virgo.documentation.git/plain/design-docs/kernel/kernel.pdf">Kernel</a>
			</li>
			<li>
				<a href="http://git.eclipse.org/c/virgo/org.eclipse.virgo.documentation.git/plain/design-docs/platform/platform.pdf">Platform</a>
			</li>
			<li>
				<a href="http://git.eclipse.org/c/virgo/org.eclipse.virgo.documentation.git/plain/design-docs/repository/repository2.pdf">Repository</a>
			</li>
			<li>
				<a href="http://git.eclipse.org/c/virgo/org.eclipse.virgo.documentation.git/plain/design-docs/service-scoping/service-scoping.pdf">Service Scoping</a>
			</li>
			<li>
				<a href="http://git.eclipse.org/c/virgo/org.eclipse.virgo.documentation.git/plain/design-docs/spring-dm/kernel.pdf">CSP Model of Spring DM</a>
			</li>
		</ul>
		<p>
			If you enjoyed those, there are more, including some designs for components we never shipped, in
			<a href="http://git.eclipse.org/c/virgo/org.eclipse.virgo.documentation.git/tree/design-docs">git</a>.
		</p>
	</div>

<?php
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>