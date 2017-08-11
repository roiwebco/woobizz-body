<?php

	// WOOBIZZ BODY PLUGIN (options.php)
	// By André R. www.woobizz.com

/* 	File Paths
	================================================= */
	$imgurl = get_stylesheet_directory_uri().'/admin/images/';
	//Access the WordPress Pages via an Array
	$pages = array();
	$pages_obj = get_pages('sort_column=post_parent,menu_order');  
	foreach ( $pages_obj as $key ) { 
		$pages[$key->ID] = ucwords($key->post_title); 
	}
	
	
	//Access the WordPress Pages via an Array
	$tags = array();
	$tags_obj = get_tags('orderby=name&hide_empty=false&get=all');
	foreach ( $tags_obj as $key ) { 
		$tags[$key->term_id ] = ucwords($key->name);
	}
	
	
	//Access the WordPress Categories via an Array
	$categories = array();  
	$categories_obj = get_categories('hide_empty=0');
	foreach ( $categories_obj as $key ) {
		$categories[$key->cat_ID] = ucwords($key->cat_name);
	}
	
	
/*	Start Admin Options 
	
	================================================= */
	
	$options = array();
								
	//START BODY SECTION -------------------------------------------
	$options[] = array( "name" => __('1.- Body Background','woobizz-body'),
						"type" => "section");	
	
	//BODY BACKGROUND OPTIONS--------------------------------------------------------------
    
	$options[] = array( "name" => __('1.- Body Background','woobizz-body'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-body"));
							  
	$options[] = array("type" => "divider");	
	// BODY WIDTH
	//1.1 WEBSITE WIDTH SIZE 
	$options[] = array( "name" => "1.1 WEBSITE BODY SIZE",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");		
	$options[] = array( "name" => __("Website Width","woobizz-body"),
				"desc" => __("Default 85%", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_websitewidth",
				"class" => "medium first",
				"std" => 85,
				"min" => 0,
				"max" => 100,
				"suffix" => "%",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Website Max-Width","woobizz-body"),
				"desc" => __("Default 1366px", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_websitemaxwidth",
				"class" => "medium last",
				"std" => 1366,
				"min" => 0,
				"max" => 1920,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array("type" => "divider");
	
	// 1.2 BODY MARGINGS
	$options[] = array( "name" => "1.2 BODY MARGINS", 
				"type" => "html",
				 "std" => "");
	
	$options[] = array("type" => "divider");
	
	$options[] = array( "name" => __("Margin Top ","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodymargintopsize",
				"class" => "tiny first",
				"std" => 42,
				"min" => 0,
				"max" => 100,
				"suffix" => "",
				"increment" => 1,
				"type" => "number");
	
	$options[] = array( "name" => __("Units Top","woobizz-body"), 
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodymarginunittop",
				"class" => "tiny",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Pixels (px)",
					1 => "Percent (%)",
					2 => "Ems” (em)",
					3 => "Points (pt)",
				));	
	

	$options[] = array( "name" => __("Margin Right ","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodymarginrightsize",
				"class" => "tiny",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => "",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Units Right","woobizz-body"), 
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodymarginunitright",
				"class" => "tiny last",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Pixels (px)",
					1 => "Percent (%)",
					2 => "Ems” (em)",
					3 => "Points (pt)",));	
	$options[] = array( "name" => __("Margin Bottom ","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodymarginbottomsize",
				"class" => "tiny first",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => "",
				"increment" => 1,
				"type" => "number");
	
	$options[] = array( "name" => __("Units Bottom","woobizz-body"), 
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodymarginunitbottom",
				"class" => "tiny",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Pixels (px)",
					1 => "Percent (%)",
					2 => "Ems” (em)",
					3 => "Points (pt)",));	
	

	$options[] = array( "name" => __("Margin Left ","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodymarginleftsize",
				"class" => "tiny",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => "",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Units Left","woobizz-body"), 
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodymarginunitleft",
				"class" => "tiny last",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Pixels (px)",
					1 => "Percent (%)",
					2 => "Ems” (em)",
					3 => "Points (pt)",));					

	
	
//End paddings			
	$options[] = array("type" => "divider");			
	
//End Margins-----------------------------------------------------------------------------------------
	
	//1.3 BODY BACKGROUND IMAGE & COLORS 
	$options[] = array( "name" => "1.3 BODY BACKGROUND IMAGE & COLORS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");		
	
	//Bakground Image
	$options[] = array( "name" => __("Background Image","woobizz-body"),
				"desc" => __("Note: Image will always override color", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodybackgroundimage",
				"class" => "medium first",
				"std" => null,
				"type" => "upload");
	//Background Color
	$options[] = array( "name" => __("Background Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodybackgroundcolor",
				"class" => "medium last",
				"std" => '#2c2d33',
				"type" => "color");	
    //Background Size
    $options[] = array( "name" => __("Background Size","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodybackgroundsize",
				"class" => "medium first",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Contain",
					1 => "Cover",
					2 => "Inherit",
					3 => "Initial",
					));
	
	//Backgroud Repeat
	$options[] = array( "name" => __("Background Repeat","woobizz-body"),
				"desc" => __("X = Horizontal Y= Vertical", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodybackgroundrepeat",
				"class" => "medium last",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "No-Repeat",
					1 => "Repeat X & Y",
					2 => "Repeat X Only",
					3 => "Repeat Y Only",
					4 => "Repeat Round",
					5 => "Repeat Space",
					4 => "Inherit",
					5 => "Initial",
					
				));	
	//Background position			
	$options[] = array( "name" => __("Background Position","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodybackgroundposition",
				"class" => "medium first",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Left Top",
					1 => "Left Center",
					2 => "Left Bottom",
					3 => "Right Top",
					4 => "Right Center",
					5 => "Right Bottom",
					6 => "Center Top",
					7 => "Center Center",
					8 => "Center Bottom",
					9 => "Inherit",
					10=> "Initial",
					
				));	
	//Background Attachment			
	$options[] = array( "name" => __("Background Attachment","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodybackgroundattachment",
				"class" => "medium last",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "scroll",
					1 => "fixed",
					2 => "local",
					3 => "inherit",
					
				));				
				
	
	//Front End Color1
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "1.4 BODY BACKGROUND GRADIENTS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");	
	$options[] = array( "name" => __("Background Color Gradient 1","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodybackgroundgradient1",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");
	//Gradient1 Opacity
	$options[] = array( "name" => __("Gradient 1 Opacity","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodybackgroundgradient1opacity",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 1,
				"suffix" => "",
				"increment" => 0.01,
				"type" => "number");			
	//Front End Color2
	$options[] = array( "name" => __("Background Color Gradient 2","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodybackgroundgradient2",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");	
	//Gradient 2 Opacity			
	$options[] = array( "name" => __("Gradient 2 Opacity","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_bodybackgroundgradient2opacity",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 1,
				"suffix" => "",
				"increment" => 0.01,
				"type" => "number");	
	//START PAGE SECTION ------------------------------------------------------------
	$options[] = array( "name" => __('2.- Page Background','woobizz-body'),
						"type" => "section");
	//1.1 1.2 BODY BACKGROUND IMAGE & COLORS 
	
	$options[] = array( "name" => __('2.- Page Background','woobizz-body'), 
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-body"));
	$options[] = array("type" => "divider");					
	
	$options[] = array( "name" => "2.1 PAGE BACKGROUND IMAGE & COLORS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");		
	
	//Bakground Image
	$options[] = array( "name" => __("Background Image","woobizz-body"),
				"desc" => __("Note: Image will always override color", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_pagebackgroundimage",
				"class" => "medium first",
				"std" => null,
				"type" => "upload");
	//Background Color
	$options[] = array( "name" => __("Background Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_pagebackgroundcolor",
				"class" => "medium last",
				"std" => '#2c2d33',
				"type" => "color");	
    //Background Size
    $options[] = array( "name" => __("Background Size","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_pagebackgroundsize",
				"class" => "short first",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Contain",
					1 => "Cover",
					2 => "Inherit",
					3 => "Initial",
					));
	
	//Backgroud Repeat
	$options[] = array( "name" => __("Background Repeat","woobizz-body"),
				"desc" => __("X = Horizontal Y= Vertical", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_pagebackgroundrepeat",
				"class" => "short",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "No-Repeat",
					1 => "Repeat X & Y",
					2 => "Repeat X Only",
					3 => "Repeat Y Only",
					4 => "Repeat Round",
					5 => "Repeat Space",
					4 => "Inherit",
					5 => "Initial",
					
				));	
	//Background position			
	$options[] = array( "name" => __("Background Position","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_pagebackgroundposition",
				"class" => "short last",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Left Top",
					1 => "Left Center",
					2 => "Left Bottom",
					3 => "Right Top",
					4 => "Right Center",
					5 => "Right Bottom",
					6 => "Center Top",
					7 => "Center Center",
					8 => "Center Bottom",
					9 => "Inherit",
					10=> "Initial",
					
				));	
	
	//Front End Color1
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "2.2 BODY BACKGROUND GRADIENTS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");	
	$options[] = array( "name" => __("Background Color Gradient 1","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_pagebackgroundgradient1",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");
	//Gradient1 Opacity
	$options[] = array( "name" => __("Gradient 1 Opacity","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_pagebackgroundgradient1opacity",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 1,
				"suffix" => "",
				"increment" => 0.01,
				"type" => "number");			
	//Front End Color2
	$options[] = array( "name" => __("Background Color Gradient 2","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_pagebackgroundgradient2",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");	
	//Gradient 2 Opacity			
	$options[] = array( "name" => __("Gradient 2 Opacity","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_pagebackgroundgradient2opacity",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 1,
				"suffix" => "",
				"increment" => 0.01,
				"type" => "number");	
	$options[] = array("type" => "divider");			
	//2.3 Page Box Shadow
	$options[] = array( "name" => "2.3 PAGE BACKGROUND SHADOWS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");	
	$options[] = array( "name" => __("Apply Shadow?","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_pageshadowapply",
				"class" => "short first",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));			
	$options[] = array( "name" => __("Shadow Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_pageshadowcolor",
				"class" => "short",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Right Distance","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_pageshadowrightdistance",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Bottom Distance","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_pageshadowbottomdistance",
					"class" => "short first",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Spread","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_pageshadowspread",
					"class" => "short",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Size","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_pageshadowsize",
					"class" => "short last",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");
	//2.- END FONT OPTIONS -------------------------------------------
	//3.- START BUTTONS OPTIONS -------------------------------------------
	$options[] = array( "name" => __('3.- Buttons Options','woobizz-body'),
						"type" => "section");
	
	$options[] = array( "name" => __('3.- Buttons Options','woobizz-body'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-body"));
	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "3.1 PRODUCT LIST BUTTONS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");							
	$options[] = array( "name" => __("Border Size","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonslistbordersize",
				"class" => "tiny first",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
			
	$options[] = array( "name" => __("Border Style","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonslistborderstyle",
				"class" => "tiny ",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "dotted",
					1 => "dashed",
					2 => "solid",
					3 => "none",
					));			
	
	$options[] = array( "name" => __("Border Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonslistbordercolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Border Radius","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonslistborderradius",
				"class" => "tiny last",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Background Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonslistbackgroundcolor",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");
	$options[] = array( "name" => __("Text Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonslisttextcolor",
				"class" => "medium last",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Apply Shadow?","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonslistshadowapply",
				"class" => "short first",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));			
	$options[] = array( "name" => __("Shadow Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonslistshadowcolor",
				"class" => "short",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Right Distance","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonslistshadowrightdistance",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Bottom Distance","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_gbuttonslistshadowbottomdistance",
					"class" => "short first",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Spread","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_gbuttonslistshadowspread",
					"class" => "short",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Size","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_gbuttonslistshadowsize",
					"class" => "short last",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");

	//COUPON & UPDATE Buttons
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "3.2 COUPON & UPDATE BUTTONS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");							
	$options[] = array( "name" => __("Border Size","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonscouponupdatebordersize",
				"class" => "tiny first",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
			
	$options[] = array( "name" => __("Border Style","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonscouponupdateborderstyle",
				"class" => "tiny ",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "dotted",
					1 => "dashed",
					2 => "solid",
					3 => "none",
					));			
	
	$options[] = array( "name" => __("Border Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonscouponupdatebordercolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Border Radius","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonscouponupdateborderradius",
				"class" => "tiny last",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Background Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonscouponupdatebackgroundcolor",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");
	$options[] = array( "name" => __("Text Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonscouponupdatetextcolor",
				"class" => "medium last",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Apply Shadow?","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonscouponupdateshadowapply",
				"class" => "short first",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));			
	$options[] = array( "name" => __("Shadow Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonscouponupdateshadowcolor",
				"class" => "short",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Right Distance","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonscouponupdateshadowrightdistance",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Bottom Distance","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_gbuttonscouponupdateshadowbottomdistance",
					"class" => "short first",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Spread","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_gbuttonscouponupdateshadowspread",
					"class" => "short",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Size","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_gbuttonscouponupdateshadowsize",
					"class" => "short last",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");
					
	//CTA BUTTONS
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "3.3 CALL TO ACTIONS BUTTONS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");							
	$options[] = array( "name" => __("Border Size","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonsctabordersize",
				"class" => "tiny first",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
			
	$options[] = array( "name" => __("Border Style","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonsctaborderstyle",
				"class" => "tiny ",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "dotted",
					1 => "dashed",
					2 => "solid",
					3 => "none",
					));			
	
	$options[] = array( "name" => __("Border Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonsctabordercolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Border Radius","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonsctaborderradius",
				"class" => "tiny last",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Background Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonsctabackgroundcolor",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");
	$options[] = array( "name" => __("Text Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonsctatextcolor",
				"class" => "medium last",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Apply Shadow?","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonsctashadowapply",
				"class" => "short first",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));			
	$options[] = array( "name" => __("Shadow Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonsctashadowcolor",
				"class" => "short",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Right Distance","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_gbuttonsctashadowrightdistance",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Bottom Distance","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_gbuttonsctashadowbottomdistance",
					"class" => "short first",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Spread","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_gbuttonsctashadowspread",
					"class" => "short",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Size","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_gbuttonsctashadowsize",
					"class" => "short last",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");
	
	//3.- END BUTTONS OPTIONS -------------------------------------------
	
	
	
	//4.- START ALERT OPTIONS ON CART PAGE -------------------------------------------
	$options[] = array( "name" => __('4.- Alerts & Coupons','woobizz-body'),
						"type" => "section");
						
	
	$options[] = array( "name" => __('4.- Alert & Coupons','woobizz-body'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-body"));
	
	$options[] = array("type" => "divider");
	
	//INFO ALERT
	
	$options[] = array( "name" => "4.1 INFO ALERT OPTIONS",
				"type" => "html",
				"std" => "");
				
				
	$options[] = array("type" => "divider");							
	$options[] = array( "name" => __("Border Size","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_infoalertbordersize",
				"class" => "tiny first",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
			
	$options[] = array( "name" => __("Border Style","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_infoalertborderstyle",
				"class" => "tiny ",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Dotted",
					1 => "Dashed",
					2 => "Solid",
					3 => "None",
					));			
	
	$options[] = array( "name" => __("Border Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_infoalertbordercolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Border Radius","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_infoalertborderradius",
				"class" => "tiny last",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Background Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_infoalertbackgroundcolor",
				"class" => "tiny first",
				"std" => '#2c2d33',
				"type" => "color");
	$options[] = array( "name" => __("Text Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_infoalerttextcolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Text Align","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_infoalerttextalign",
				"class" => "tiny ",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Left",
					1 => "Center",
					2 => "Right",
					
					));	
	$options[] = array( "name" => __("Text Transform","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_infoalerttexttransform",
				"class" => "tiny last ",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Capitalize",
					1 => "Lowercase",
					2 => "Uppercase",
					3 => "None",
					));						
				
				
	$options[] = array( "name" => __("Apply Shadow?","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_infoalertshadowapply",
				"class" => "short first",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));			
	$options[] = array( "name" => __("Shadow Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_infoalertshadowcolor",
				"class" => "short",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Right Distance","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_infoalertshadowrightdistance",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Bottom Distance","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_infoalertshadowbottomdistance",
					"class" => "short first",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Spread","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_infoalertshadowspread",
					"class" => "short",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Size","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_infoalertshadowsize",
					"class" => "short last",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
			

	//ERROR ALERT
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "4.2 ERROR ALERT OPTIONS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");							
	$options[] = array( "name" => __("Border Size","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_erroralertbordersize",
				"class" => "tiny first",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
			
	$options[] = array( "name" => __("Border Style","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_erroralertborderstyle",
				"class" => "tiny ",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "dotted",
					1 => "dashed",
					2 => "solid",
					3 => "none",
					));			
	
	$options[] = array( "name" => __("Border Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_erroralertbordercolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Border Radius","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_erroralertborderradius",
				"class" => "tiny last",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Background Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_erroralertbackgroundcolor",
				"class" => "tiny first",
				"std" => '#2c2d33',
				"type" => "color");
	$options[] = array( "name" => __("Text Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_erroralerttextcolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Text Align","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_erroralerttextalign",
				"class" => "tiny ",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Left",
					1 => "Center",
					2 => "Right",
					
					));	
	$options[] = array( "name" => __("Text Transform","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_erroralerttexttransform",
				"class" => "tiny last ",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Capitalize",
					1 => "Lowercase",
					2 => "Uppercase",
					3 => "None",
					));									
				
	$options[] = array( "name" => __("Apply Shadow?","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_erroralertshadowapply",
				"class" => "short first",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));			
	$options[] = array( "name" => __("Shadow Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_erroralertshadowcolor",
				"class" => "short",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Right Distance","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_erroralertshadowrightdistance",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Bottom Distance","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_erroralertshadowbottomdistance",
					"class" => "short first",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Spread","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_erroralertshadowspread",
					"class" => "short",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Size","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_erroralertshadowsize",
					"class" => "short last",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");				
	
	//MESSAGE ALERT
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "4.3 MESSAGE ALERT OPTIONS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");							
	$options[] = array( "name" => __("Border Size","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_messagealertbordersize",
				"class" => "tiny first",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
			
	$options[] = array( "name" => __("Border Style","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_messagealertborderstyle",
				"class" => "tiny ",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "dotted",
					1 => "dashed",
					2 => "solid",
					3 => "none",
					));			
	
	$options[] = array( "name" => __("Border Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_messagealertbordercolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Border Radius","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_messagealertborderradius",
				"class" => "tiny last",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Background Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_messagealertbackgroundcolor",
				"class" => "tiny first",
				"std" => '#2c2d33',
				"type" => "color");
	$options[] = array( "name" => __("Text Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_messagealerttextcolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Text Align","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_messagealerttextalign",
				"class" => "tiny ",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Left",
					1 => "Center",
					2 => "Right",
					
					));	
	$options[] = array( "name" => __("Text Transform","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_messagealerttexttransform",
				"class" => "tiny last ",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Capitalize",
					1 => "Lowercase",
					2 => "Uppercase",
					3 => "None",
					));							
				
	$options[] = array( "name" => __("Apply Shadow?","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_messagealertshadowapply",
				"class" => "short first",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));			
	$options[] = array( "name" => __("Shadow Color","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_messagealertshadowcolor",
				"class" => "short",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Right Distance","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_messagealertshadowrightdistance",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Bottom Distance","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_messagealertshadowbottomdistance",
					"class" => "short first",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Spread","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_messagealertshadowspread",
					"class" => "short",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Size","woobizz-body"),
					"desc" => __("", "woobizz-body"),
					"id" => WOOBIZZBODY."_woobizz_body_messagealertshadowsize",
					"class" => "short last",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");
	

	//COUPON OPTIONS 
	
	$options[] = array("type" => "divider");					
	
	$options[] = array( "name" => "4.4 SHOW/HIDE COUPONS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");							
	$options[] = array( "name" => __("Hide Coupon?","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_hidecoupon",
				"class" => "medium first",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));							
	$options[] = array( "name" => __("Where?","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_woobizz_body_hidecouponwhere",
				"class" => "medium last",
				"std" => 0,
				"type" => "select",
				"options" => array(
					0 => "Everywhere",
					1 => "Only on cart page",
					2 => "Only on checkout page",
					
					));		
	$options[] = array("type" => "divider");					
	//END COUPONS OPTIONS -------------------------------------------
	
	//5.- START BODY SIDEBAR OPTIONS--------------------------------------------------------------
	$options[] = array( "name" => __('5.- Sidebar Options','woobizz-body'),
						"type" => "section");	
	
	$options[] = array( "name" => __('5.- Sidebar Options','woobizz-body'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-body"));
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "5.1.- HIDE SIDEBAR IN ALL PAGES",
				"type" => "html",
				"class" => "medium first",
				"std" => "");
	$options[] = array( "name" => "Enable this Option?",
				"desc" => "",
				"id" => WOOBIZZBODY."_woobizz_body_hidesidebarallpages",
				"class" => "medium last",
				"std" => "false",
				"type" => "switch");
	$options[] = array("type" => "divider");
	//5.- END BODY SIDEBAR OPTIONS------------------------------------------------------------------------	
	
	//coming soon
	
	/**
	//START BODY SECTION -------------------------------------------
	$options[] = array( "name" => __('6.- Products Options','woobizz-body'),

						"type" => "section");
							
	//7.- FONT OPTIONS -------------------------------------------
	$options[] = array( "name" => __('7.- Fonts Options','woobizz-body'),
						"type" => "section");	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __('1.- Fonts Options','woobizz-body'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("COMING SOON...", "woobizz-body"));
	//START BODY SECTION -------------------------------------------
	$options[] = array( "name" => __('8.- Categories Options','woobizz-body'),
						"type" => "section");						
						
	//------------------------------------------------------------------------
	*/
	//BACKUP
	
	$options[] = array( "name" => __('Body Back-up & Reset','woobizz-body'),
						"type" => "section");
	// Backup Field		
		
	$options[] = array( "name" => __('Body Back-up & Reset','woobizz-body'), 
						"type" => "title",
						"class" => "medium first",
						"desc" => __(""));
	$options[] = array("type" => "divider");					
	$options[] = array( "name" => __("Back-up","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"id" => WOOBIZZBODY."_textarea",
				"class" => "first",
				"type" => "backup");
	$options[] = array("type" => "divider");			
	// Reset					
	$options[] = array( "name" => __("Reset","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"class" => "first",
				"type" => "reset");			
	$options[] = array("type" => "divider");
	//Body Import & Export
	
	$options[] = array( "name" => __('Body Import & Export','woobizz-body'),
						"type" => "section");
	$options[] = array( "name" => __('Body Import & Export','woobizz-body'), 
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-body"));					
	$options[] = array( "name" => __("Export Options","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"class" => "first",
				"type" => "export");
	// Import Field					
	$options[] = array( "name" => __("Import Options","woobizz-body"),
				"desc" => __("", "woobizz-body"),
				"class" => "first",
				"placeholder" => "Paste your code here",
				"type" => "import");
?>