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
	$pageTitle 		= "Virgo - Milestone Downloads";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Glyn Normington";
		
	$virgoVersions = array("3.6.0.M01");
	ob_start();
?>

	<script>
		$(function() {
			$( "#accordion" ).accordion({ collapsible: true, header: 'h4', autoHeight: false });
		});
	</script>

<div id="midcolumn">
	<h2>Milestone Downloads</h2>
	<p>
		All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> 
		unless otherwise specified.
	</p>
	
	<p>
		The following are development milestones. You may prefer to <a href="http://www.eclipse.org/virgo/download/">download</a> an official release.
	</p>

<!-- 	<p>
	    	You can also browse the latest milestone documentation online.
	    </p>
	    <ul>
	    	<li>User Guide ( <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.5.0.RC1/docs/virgo-user-guide/html/index.html">HTML</a> | <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.5.0.RC1/docs/virgo-user-guide/htmlsingle/virgo-user-guide.html">HTML Single</a> )</li>
	    	<li>Programmer Guide ( <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.5.0.RC1/docs/virgo-programmer-guide/html/index.html">HTML</a> | <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.5.0.RC1/docs/virgo-programmer-guide/htmlsingle/virgo-programmer-guide.html">HTML Single</a> )</li>
			<li>Snaps Guide ( <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.5.0.RC1/docs/snaps-guide/html/index.html">HTML</a> | <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.5.0.RC1/docs/snaps-guide/htmlsingle/virgo-snaps-guide.html">HTML Single</a> )</li>
	    </ul>
	 -->
	
	<div id='accordion'>
		<?
		$first = true;
		$tomcat = true;
		$snaps = true;
		foreach ($virgoVersions as $version){
			echo "<h4><a href='#'>$version";
			if ($first) {
				echo " - Latest</a></h4>";
			} else {
				echo "</a></h4>";
			}
			
			echo "<div>";
			echo "	<ul>";
			echo "		<li><a href='http://www.eclipse.org/virgo/download/release-notes/$version.php' target='_self'>View Release Notes</a></li>";
			echo "		<li><strong>Virgo Server for Apache Tomcat</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VP/$version/virgo-tomcat-server-$version.zip' target='_self'>Download</a></li>";
	    	echo "		<li><strong>Virgo Jetty Server</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VP/$version/virgo-jetty-server-$version.zip' target='_self'>Download</a> </li>";
			echo "		<li><strong>Virgo Kernel</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VP/$version/virgo-kernel-$version.zip' target='_self'>Download</a></li>";
			echo "		<li><strong>Virgo Nano</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VP/$version/virgo-nano-$version.zip' target='_self'>Download</a></li>";
			echo "		<li><strong>Virgo Nano Full</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VP/$version/virgo-nano-full-$version.zip' target='_self'>Download</a></li>";
			echo "		<li><strong>Virgo Snaps</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VS/$version/snaps-$version.zip' target='_self'>Download</a></li>";
			echo "    	<li><strong>Virgo Documentation</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/VD/$version/virgo-documentation-$version.zip'>Download</a>";
			echo "		<li><strong>Virgo Update Site</strong> - <a href='http://download.eclipse.org/virgo/updatesite/$version' target='_self'>http://download.eclipse.org/virgo/updatesite/$version</a></li>";
			echo "	</ul>";
			echo "</div>";
			$first = false;
		}
		?>
	
	    <h2>Virgo IDE Tooling Milestones</h2>
	        <p>
	            Virgo IDE tooling update site: http://download.eclipse.org/virgo/milestone/tooling/
	        </p>
	    
	    <h2>Virgo Bundlor Milestones</h2>
	        <p>
	            Note that Bundlor milestones are available from the aggregated tooling update site: http://download.eclipse.org/virgo/milestone/tooling/
	        </p>
	    <?
	    $bundlorVersions = array("1.1.0.M05", "1.1.0.M04", "1.1.0.M03", "1.1.0.M02", "1.1.0.M01");
	    $first = true;
	    $update = true;
		foreach ($bundlorVersions as $version){
		
			if($version == '1.1.0.M03'){
				$update = false;
			}
			echo "<h4><a href='#'>$version";
			if ($first) {
				echo " - Latest</a></h4>";
			} else {
				echo "</a></h4>";
			}
			
			echo "<div>";
			echo "	<ul>";
			echo "		<li><a href='http://www.eclipse.org/virgo/download/release-notes/bundlor/$version.php' target='_self'>View Release Notes</a></li>";
			if($update){
				echo "<li>Update site - 'http://download.eclipse.org/virgo/milestone/BNDLR/$version/updatesite'</li>";
			}
			echo "		<li><strong>Virgo Bundlor</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/milestone/BNDLR/$version/bundlor-$version.zip' target='_self'>Download</a></li>";
			echo "	</ul>";
			echo "</div>";
			$first = false;
		}
		?>
	</div>
</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>