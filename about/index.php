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
	$pageTitle 		= "Virgo - About";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, History, origin, origins, about";
	$pageAuthor		= "Christopher Frost";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>About Virgo</h2>
		<p>
			View the project summary <a href="http://www.eclipse.org/projects/project_summary.php?projectid=rt.virgo">here</a>.
		</p>
		<p>
			The Virgo project started life at the end of 2007 as the SpringSource Application Platform. 
			Later it was renamed to the SpringSource dm Server that many people know today. Virgo shares 
			many goals with the first version of dm Server:
		</p>
		<ul>
			<li>Better OSGi platform</li>
			<li>Migration of Java EE apps</li>
			<li>Modular and extensible</li>
		</ul>
		<p>
			A year later, at the end of 2008, version 1.0 was released to much fanfare. Over the following 
			year more and more people tried it out and a real community of developers grew up around it. As 
			for the core team, we learnt how people were using it and worked towards the next release which 
			came a year later at the end of 2009.
		</p>
		<p>
			By the end of 2009 a lot of the ground work had already been laid for the donation to Eclipse and 
			in January 2010 the announcement was made. The dm Server name went out with a bang by winning the 
			Eclipse award for <a href="http://www.eclipse.org/org/press-release/20100322_awardswinners.php">
			best RT application</a>.
		</p>
			<div class="award">
				<img align="centre" src="/virgo/images/winner10.jpg" alt="Award Logo"/>
			</div>
	    <p>
			In June 2010, Virgo was listed in eWeek's <a href="http://www.eweek.com/c/a/Application-Development/25-Best-and-Brightest-Eclipse-Development-Projects-448324/">
			25 Best and Brightest Eclipse Development Projects</a>.
		</p>
			<img align="centre" src="/virgo/images/Taft25.png" alt="25 Best and Brightest"/>
			<br/><br/>
		<p>
			At the time of writing we have recently shipped the first release of Virgo 2.1.0.RELEASE and we have contributed the snaps prototype for
			modular web applications. The future looks bright...
		</p>

	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>