<?php
 // WOOBIZZ BODY PLUGIN (functions.php) 
 
 //TRASFORM HEX TO RGB
  function woobizz_body_hextorgb($hex) {
   $hex = str_replace("#", "", $hex);
   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   return implode(",", $rgb); 
}

  //CSS GENERAL OPTIONS   	
  function woobizz_body_allcssoptions(){
	// GET VAR ADMIN
	//WEBSITE WIDTH SIZE
	$woobizz_body_websitewidth= get_option(WOOBIZZBODY.'_woobizz_body_websitewidth');
	$woobizz_body_websitemaxwidth= get_option(WOOBIZZBODY.'_woobizz_body_websitemaxwidth');
	//1.2 BODY MARGINS
	//Margin Top
	$woobizz_body_bodymargintopsize= get_option(WOOBIZZBODY.'_woobizz_body_bodymargintopsize');
	$woobizz_body_bodymarginunittop= get_option(WOOBIZZBODY.'_woobizz_body_bodymarginunittop');
	if ($woobizz_body_bodymarginunittop==0){
		$woobizz_body_bodymarginunittop="px";
	} elseif($woobizz_body_bodymarginunittop==1) {
		$woobizz_body_bodymarginunittop="%";
	} elseif($woobizz_body_bodymarginunittop==2) {
		$woobizz_body_bodymarginunittop="em";
	} elseif($woobizz_body_bodymarginunittop==3) {
		$woobizz_body_bodymarginunittop="pt";
	} else {
		$woobizz_body_bodymarginunittop="initial";
	} 
	//Margin Right
	$woobizz_body_bodymarginrightsize= get_option(WOOBIZZBODY.'_woobizz_body_bodymarginrightsize');
	$woobizz_body_bodymarginunitright= get_option(WOOBIZZBODY.'_woobizz_body_bodymarginunitright');
	if ($woobizz_body_bodymarginunitright==0){
		$woobizz_body_bodymarginunitright="px";
	} elseif($woobizz_body_bodymarginunitright==1) {
		$woobizz_body_bodymarginunitright="%";
	} elseif($woobizz_body_bodymarginunitright==2) {
		$woobizz_body_bodymarginunitright="em";
	} elseif($woobizz_body_bodymarginunitright==3) {
		$woobizz_body_bodymarginunitright="pt";
	} else {
		$woobizz_body_bodymarginunitright="initial";
	}	
	//Margin Bottom
	$woobizz_body_bodymarginbottomsize= get_option(WOOBIZZBODY.'_woobizz_body_bodymarginbottomsize');
	
	$woobizz_body_bodymarginunitbottom= get_option(WOOBIZZBODY.'_woobizz_body_bodymarginunitbottom');
	if ($woobizz_body_bodymarginunitbottom==0){
		$woobizz_body_bodymarginunitbottom="px";
		$woobizz_body_bodymarginunitbottommobile=67;
		$woobizz_body_bodymarginunitbottommobiletotal=$woobizz_body_bodymarginunitbottommobile+$woobizz_body_bodymarginbottomsize;
		
	} elseif($woobizz_body_bodymarginunitbottom==1) {		
		$woobizz_body_bodymarginunitbottom="%";
		
	} elseif($woobizz_body_bodymarginunitbottom==2) {
		$woobizz_body_bodymarginunitbottom="em";
		
	} elseif($woobizz_body_bodymarginunitbottom==3) {
		$woobizz_body_bodymarginunitbottom="pt";
	} else {
		$woobizz_body_bodymarginunitbottom="initial";
	}	
	//Margin Left
	$woobizz_body_bodymarginleftsize= get_option(WOOBIZZBODY.'_woobizz_body_bodymarginleftsize');
	$woobizz_body_bodymarginunitleft= get_option(WOOBIZZBODY.'_woobizz_body_bodymarginunitleft');
	if ($woobizz_body_bodymarginunitleft==0){
		$woobizz_body_bodymarginunitleft="px";
	} elseif($woobizz_body_bodymarginunitleft==1) {
		$woobizz_body_bodymarginunitleft="%";
	} elseif($woobizz_body_bodymarginunitleft==2) {
		$woobizz_body_bodymarginunitleft="em";
	} elseif($woobizz_body_bodymarginunitleft==3) {
		$woobizz_body_bodymarginunitleft="pt";
	} else {
		$woobizz_body_bodymarginunitleft="initial";
	}	
	//END BODY MARGINS 	
 // 1.1 BODY BACKGROUND IMAGE & COLORS---------------------------------------------------
	$woobizz_body_bodybackgroundimage= get_option(WOOBIZZBODY.'_woobizz_body_bodybackgroundimage');
	$woobizz_body_bodybackgroundcolor= get_option(WOOBIZZBODY.'_woobizz_body_bodybackgroundcolor');
	$woobizz_body_bodybackgroundsize= get_option(WOOBIZZBODY.'_woobizz_body_bodybackgroundsize');
	if ($woobizz_body_bodybackgroundsize==0){
			$woobizz_body_bodybackgroundsize="contain";
		} elseif($woobizz_body_bodybackgroundsize==1) {
			$woobizz_body_bodybackgroundsize="cover";
		} elseif($woobizz_body_bodybackgroundsize==2) {
			$woobizz_body_bodybackgroundsize="inherit";
		} elseif($woobizz_body_bodybackgroundsize==3) {
			$woobizz_body_bodybackgroundsize="initial";
		} else {
			$woobizz_body_bodybackgroundsize="initial";
	} 
 	$woobizz_body_bodybackgroundrepeat= get_option(WOOBIZZBODY.'_woobizz_body_bodybackgroundrepeat');
	if ($woobizz_body_bodybackgroundrepeat==0){
			$woobizz_body_bodybackgroundrepeat="no-repeat";
		} elseif($woobizz_body_bodybackgroundrepeat==1) {
			$woobizz_body_bodybackgroundrepeat="repeat";
		} elseif($woobizz_body_bodybackgroundrepeat==2) {
			$woobizz_body_bodybackgroundrepeat="repeat-x";
		} elseif($woobizz_body_bodybackgroundrepeat==3) {
			$woobizz_body_bodybackgroundrepeat="repeat-y";
		} elseif($woobizz_body_bodybackgroundrepeat==4) {
			$woobizz_body_bodybackgroundrepeat="round";
		} elseif($woobizz_body_bodybackgroundrepeat==5) {
			$woobizz_body_bodybackgroundrepeat="space";
		} elseif($woobizz_body_bodybackgroundrepeat==6) {
			$woobizz_body_bodybackgroundrepeat="inherit";	
		} elseif($woobizz_body_bodybackgroundrepeat==5) {
			$woobizz_body_bodybackgroundrepeat="initial";		
		} else {
			$woobizz_body_bodybackgroundrepeat="initial";
	} 
	$woobizz_body_bodybackgroundposition= get_option(WOOBIZZBODY.'_woobizz_body_bodybackgroundposition');
	if ($woobizz_body_bodybackgroundposition==0){
			$woobizz_body_bodybackgroundposition="left top";
		} elseif($woobizz_body_bodybackgroundposition==1) {
			$woobizz_body_bodybackgroundposition="left center";
		} elseif($woobizz_body_bodybackgroundposition==2) {
			$woobizz_body_bodybackgroundposition="left bottom";
		} elseif($woobizz_body_bodybackgroundposition==3) {
			$woobizz_body_bodybackgroundposition="right top";
		} elseif($woobizz_body_bodybackgroundposition==4) {
			$woobizz_body_bodybackgroundposition="right center";
		} elseif($woobizz_body_bodybackgroundposition==5) {
			$woobizz_body_bodybackgroundposition="right bottom";
		} elseif($woobizz_body_bodybackgroundposition==6) {
			$woobizz_body_bodybackgroundposition="center top";	
		} elseif($woobizz_body_bodybackgroundposition==7) {
			$woobizz_body_bodybackgroundposition="center center";	
		} elseif($woobizz_body_bodybackgroundposition==8) {
			$woobizz_body_bodybackgroundposition="center bottom";	
		} elseif($woobizz_body_bodybackgroundposition==9) {
			$woobizz_body_bodybackgroundposition="initial";	
		} elseif($woobizz_body_bodybackgroundposition==10) {
			$woobizz_body_bodybackgroundposition="initial";		
		} else {
			$woobizz_body_bodybackgroundposition="initial";
	} 
	//Body Background Attachment
	$woobizz_body_bodybackgroundattachment= get_option(WOOBIZZBODY.'_woobizz_body_bodybackgroundattachment');
	if ($woobizz_body_bodybackgroundattachment==0){
			$woobizz_body_bodybackgroundattachment="scroll";
		} elseif($woobizz_body_bodybackgroundattachment==1) {
			$woobizz_body_bodybackgroundattachment="fixed";
		} elseif($woobizz_body_bodybackgroundattachment==2) {
			$woobizz_body_bodybackgroundattachment="local";
		} elseif($woobizz_body_bodybackgroundattachment==3) {
			$woobizz_body_bodybackgroundattachment="inherit";
		} else {
			$woobizz_body_bodybackgroundattachment="scroll";
	} 
	// 1.2 BODY BACKGROUND GRADIENTS-------------------------------------------------------------------	
	$woobizz_body_bodybackgroundgradient1= get_option(WOOBIZZBODY.'_woobizz_body_bodybackgroundgradient1');
	$woobizz_body_bodybackgroundgradient1opacity= get_option(WOOBIZZBODY.'_woobizz_body_bodybackgroundgradient1opacity');
	$trasnform_woobizz_body_bodybackgroundgradient1=woobizz_body_hextorgb($woobizz_body_bodybackgroundgradient1);
	$woobizz_body_bodybackgroundfullgradient1=$trasnform_woobizz_body_bodybackgroundgradient1.",".$woobizz_body_bodybackgroundgradient1opacity;
	$woobizz_body_bodybackgroundgradient2= get_option(WOOBIZZBODY.'_woobizz_body_bodybackgroundgradient2');
	$woobizz_body_bodybackgroundgradient2opacity= get_option(WOOBIZZBODY.'_woobizz_body_bodybackgroundgradient2opacity');
	$trasnform_woobizz_body_bodybackgroundgradient2=woobizz_body_hextorgb($woobizz_body_bodybackgroundgradient2);
	$woobizz_body_bodybackgroundfullgradient2=$trasnform_woobizz_body_bodybackgroundgradient2.",".$woobizz_body_bodybackgroundgradient2opacity;
	//PAGE BACKGROUND OPTIONS
	// 1.1 BODY BACKGROUND IMAGE & COLORS---------------------------------------------------
	$woobizz_body_pagebackgroundimage= get_option(WOOBIZZBODY.'_woobizz_body_pagebackgroundimage');
	$woobizz_body_pagebackgroundcolor= get_option(WOOBIZZBODY.'_woobizz_body_pagebackgroundcolor');
	$woobizz_body_pagebackgroundsize= get_option(WOOBIZZBODY.'_woobizz_body_pagebackgroundsize');
	if ($woobizz_body_pagebackgroundsize==0){
			$woobizz_body_pagebackgroundsize="contain";
		} elseif($woobizz_body_pagebackgroundsize==1) {
			$woobizz_body_pagebackgroundsize="cover";
		} elseif($woobizz_body_pagebackgroundsize==2) {
			$woobizz_body_pagebackgroundsize="inherit";
		} elseif($woobizz_body_pagebackgroundsize==3) {
			$woobizz_body_pagebackgroundsize="initial";
		} else {
			$woobizz_body_pagebackgroundsize="initial";
	} 
 	$woobizz_body_pagebackgroundrepeat= get_option(WOOBIZZBODY.'_woobizz_body_pagebackgroundrepeat');
	if ($woobizz_body_pagebackgroundrepeat==0){
			$woobizz_body_pagebackgroundrepeat="no-repeat";
		} elseif($woobizz_body_pagebackgroundrepeat==1) {
			$woobizz_body_pagebackgroundrepeat="repeat";
		} elseif($woobizz_body_pagebackgroundrepeat==2) {
			$woobizz_body_pagebackgroundrepeat="repeat-x";
		} elseif($woobizz_body_pagebackgroundrepeat==3) {
			$woobizz_body_pagebackgroundrepeat="repeat-y";
		} elseif($woobizz_body_pagebackgroundrepeat==4) {
			$woobizz_body_pagebackgroundrepeat="round";
		} elseif($woobizz_body_pagebackgroundrepeat==5) {
			$woobizz_body_pagebackgroundrepeat="space";
		} elseif($woobizz_body_pagebackgroundrepeat==6) {
			$woobizz_body_pagebackgroundrepeat="inherit";	
		} elseif($woobizz_body_pagebackgroundrepeat==5) {
			$woobizz_body_pagebackgroundrepeat="initial";		
		} else {
			$woobizz_body_pagebackgroundrepeat="initial";
	} 
	$woobizz_body_pagebackgroundposition= get_option(WOOBIZZBODY.'_woobizz_body_pagebackgroundposition');
	if ($woobizz_body_pagebackgroundposition==0){
			$woobizz_body_pagebackgroundposition="left top";
		} elseif($woobizz_body_pagebackgroundposition==1) {
			$woobizz_body_pagebackgroundposition="left center";
		} elseif($woobizz_body_pagebackgroundposition==2) {
			$woobizz_body_pagebackgroundposition="left bottom";
		} elseif($woobizz_body_pagebackgroundposition==3) {
			$woobizz_body_pagebackgroundposition="right top";
		} elseif($woobizz_body_pagebackgroundposition==4) {
			$woobizz_body_pagebackgroundposition="right center";
		} elseif($woobizz_body_pagebackgroundposition==5) {
			$woobizz_body_pagebackgroundposition="right bottom";
		} elseif($woobizz_body_pagebackgroundposition==6) {
			$woobizz_body_pagebackgroundposition="center top";	
		} elseif($woobizz_body_pagebackgroundposition==7) {
			$woobizz_body_pagebackgroundposition="center center";	
		} elseif($woobizz_body_pagebackgroundposition==8) {
			$woobizz_body_pagebackgroundposition="center bottom";	
		} elseif($woobizz_body_pagebackgroundposition==9) {
			$woobizz_body_pagebackgroundposition="initial";	
		} elseif($woobizz_body_pagebackgroundposition==10) {
			$woobizz_body_pagebackgroundposition="initial";		
		} else {
			$woobizz_body_pagebackgroundposition="initial";
	} 
	//2.2 PAGE BACKGROUND GRADIENTS-------------------------------------------------------------------	
	$woobizz_body_pagebackgroundgradient1= get_option(WOOBIZZBODY.'_woobizz_body_pagebackgroundgradient1');
	$woobizz_body_pagebackgroundgradient1opacity= get_option(WOOBIZZBODY.'_woobizz_body_pagebackgroundgradient1opacity');
	$trasnform_woobizz_body_pagebackgroundgradient1=woobizz_body_hextorgb($woobizz_body_pagebackgroundgradient1);
	$woobizz_body_pagebackgroundfullgradient1=$trasnform_woobizz_body_pagebackgroundgradient1.",".$woobizz_body_pagebackgroundgradient1opacity;
	$woobizz_body_pagebackgroundgradient2= get_option(WOOBIZZBODY.'_woobizz_body_pagebackgroundgradient2');
	$woobizz_body_pagebackgroundgradient2opacity= get_option(WOOBIZZBODY.'_woobizz_body_pagebackgroundgradient2opacity');
	$trasnform_woobizz_body_pagebackgroundgradient2=woobizz_body_hextorgb($woobizz_body_pagebackgroundgradient2);
	$woobizz_body_pagebackgroundfullgradient2=$trasnform_woobizz_body_pagebackgroundgradient2.",".$woobizz_body_pagebackgroundgradient2opacity;
	//1.5 PAGE BACGROUND SHADOWS
	$woobizz_body_pageshadowcolor= get_option(WOOBIZZBODY.'_woobizz_body_pageshadowcolor');
	$woobizz_body_pageshadowrightdistance= get_option(WOOBIZZBODY.'_woobizz_body_pageshadowrightdistance');
	$woobizz_body_pageshadowbottomdistance= get_option(WOOBIZZBODY.'_woobizz_body_pageshadowbottomdistance');
	$woobizz_body_pageshadowspread= get_option(WOOBIZZBODY.'_woobizz_body_pageshadowspread');
	$woobizz_body_pageshadowsize= get_option(WOOBIZZBODY.'_woobizz_body_pageshadowsize');
	$woobizz_body_pageshadowapply= get_option(WOOBIZZBODY.'_woobizz_body_pageshadowapply');
	if ($woobizz_body_pageshadowapply==0){
			$woobizz_body_pageshadowfull=$woobizz_body_pageshadowrightdistance."px "
												.$woobizz_body_pageshadowbottomdistance."px "
												.$woobizz_body_pageshadowspread."px "
												.$woobizz_body_pageshadowsize."px "
												.$woobizz_body_pageshadowcolor;
		} elseif($woobizz_body_pageshadowapply==1) {
			$woobizz_body_pageshadowfull="none";
		} else {
			$woobizz_body_pageshadowfull="none";
	} 
	//echo $woobizz_body_pageshadowfull;
	//1.6 START BODY BORDER OPTIONS	
	$woobizz_body_bordersize= get_option(WOOBIZZBODY.'_woobizz_body_bordersize');
	$woobizz_body_bordercolor= get_option(WOOBIZZBODY.'_woobizz_body_bordercolor');
	$woobizz_body_borderradius= get_option(WOOBIZZBODY.'_woobizz_body_borderradius');
	$woobizz_body_borderstyle= get_option(WOOBIZZBODY.'_woobizz_body_borderstyle');
	if ($woobizz_body_borderstyle==0){
			$woobizz_body_borderstyle="dotted";
		} elseif($woobizz_body_borderstyle==1) {
			$woobizz_body_borderstyle="dashed";
		} elseif($woobizz_body_borderstyle==2) {
			$woobizz_body_borderstyle="solid";
		} elseif($woobizz_body_borderstyle==2) {
			$woobizz_body_borderstyle="none";
		} else {$woobizz_body_borderstyle="none";
	} 
	$woobizz_body_borderfull=$woobizz_body_bordersize."px "
									.$woobizz_body_borderstyle." "
									.$woobizz_body_bordercolor." ";
	//echo $woobizz_body_borderfull; 
    //1.6 END BODY BORDER OPTIONS	
	//--------------------------------------------------------------------------------------
	// 3.- BUTTONS OPTIONS -----------------------------------------------------------------
	//--------------------------------------------------------------------------------------
	// 3.1 GENERAL BUTTONS SHADOWS
	$woobizz_body_gbuttonsshadowcolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsshadowcolor');
	$woobizz_body_gbuttonsshadowrightdistance= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsshadowrightdistance');
	$woobizz_body_gbuttonsshadowbottomdistance= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsshadowbottomdistance');
	$woobizz_body_gbuttonsshadowspread= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsshadowspread');
	$woobizz_body_gbuttonsshadowsize= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsshadowsize');
	$woobizz_body_gbuttonsshadowapply= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsshadowapply');
	if ($woobizz_body_gbuttonsshadowapply==0){
			$woobizz_body_gbuttonsshadowfull=$woobizz_body_gbuttonsshadowrightdistance."px "
											.$woobizz_body_gbuttonsshadowbottomdistance."px "
											.$woobizz_body_gbuttonsshadowspread."px "
											.$woobizz_body_gbuttonsshadowsize."px "
											.$woobizz_body_gbuttonsshadowcolor;
		} elseif($woobizz_body_gbuttonsshadowapply==1) {
			$woobizz_body_gbuttonsshadowfull="none";
		} else {
			$woobizz_body_gbuttonsshadowfull="none";
	} 
	//echo $woobizz_body_gbuttonsshadowfull;
	//3.1 GENERAL BUTTONS BORDERS	
	$woobizz_body_gbuttonsbordersize= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsbordersize');
	$woobizz_body_gbuttonsbordercolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsbordercolor');
	$woobizz_body_gbuttonsborderradius= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsborderradius');
	$woobizz_body_gbuttonsborderstyle= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsborderstyle');
	if ($woobizz_body_gbuttonsborderstyle==0){
			$woobizz_body_gbuttonsborderstyle="dotted";
		} elseif($woobizz_body_gbuttonsborderstyle==1) {
			$woobizz_body_gbuttonsborderstyle="dashed";
		} elseif($woobizz_body_gbuttonsborderstyle==2) {
			$woobizz_body_gbuttonsborderstyle="solid";
		} elseif($woobizz_body_gbuttonsborderstyle==2) {
			$woobizz_body_gbuttonsborderstyle="none";
		} else {$woobizz_body_gbuttonsborderstyle="none";
	} 
	$woobizz_body_gbuttonsborderfull=$woobizz_body_gbuttonsbordersize."px "
									.$woobizz_body_gbuttonsborderstyle." "
									.$woobizz_body_gbuttonsbordercolor." ";
	//echo $woobizz_body_gbuttonsborderfull;
	//3.3 PRODUCT LIST BUTTONS
	$woobizz_body_gbuttonslistbordersize= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonslistbordersize');
	$woobizz_body_gbuttonslistbordercolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonslistbordercolor');
	$woobizz_body_gbuttonslistborderradius= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonslistborderradius');
	$woobizz_body_gbuttonslistborderstyle= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonslistborderstyle');
	if ($woobizz_body_gbuttonslistborderstyle==0){
			$woobizz_body_gbuttonslistborderstyle="dotted";
		} elseif($woobizz_body_gbuttonslistborderstyle==1) {
			$woobizz_body_gbuttonslistborderstyle="dashed";
		} elseif($woobizz_body_gbuttonslistborderstyle==2) {
			$woobizz_body_gbuttonslistborderstyle="solid";
		} elseif($woobizz_body_gbuttonslistborderstyle==2) {
			$woobizz_body_gbuttonslistborderstyle="none";
		} else {$woobizz_body_gbuttonslistborderstyle="none";
	} 
	$woobizz_body_gbuttonslistborderfull=$woobizz_body_gbuttonslistbordersize."px "
										.$woobizz_body_gbuttonslistborderstyle." "
										.$woobizz_body_gbuttonslistbordercolor." ";
	$woobizz_body_gbuttonslistbackgroundcolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonslistbackgroundcolor');
	$woobizz_body_gbuttonslisttextcolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonslisttextcolor');
	$woobizz_body_gbuttonslistshadowcolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonslistshadowcolor');
	$woobizz_body_gbuttonslistshadowrightdistance= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonslistshadowrightdistance');
	$woobizz_body_gbuttonslistshadowbottomdistance= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonslistshadowbottomdistance');
	$woobizz_body_gbuttonslistshadowspread= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonslistshadowspread');
	$woobizz_body_gbuttonslistshadowsize= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonslistshadowsize');
	$woobizz_body_gbuttonslistshadowapply= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonslistshadowapply');
	if ($woobizz_body_gbuttonslistshadowapply==0){
			$woobizz_body_gbuttonslistshadowfull=$woobizz_body_gbuttonslistshadowrightdistance."px "
												.$woobizz_body_gbuttonslistshadowbottomdistance."px "
												.$woobizz_body_gbuttonslistshadowspread."px "
												.$woobizz_body_gbuttonslistshadowsize."px "
												.$woobizz_body_gbuttonslistshadowcolor;
		} elseif($woobizz_body_gbuttonslistshadowapply==1) {
			$woobizz_body_gbuttonslistshadowfull="none";
		} else {
			$woobizz_body_gbuttonslistshadowfull="none";
	} 
	//echo $woobizz_body_gbuttonslistshadowapply;
	//3.4 COUPON & UPDATE BUTTONS
	$woobizz_body_gbuttonscouponupdatebordersize= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonscouponupdatebordersize');
	$woobizz_body_gbuttonscouponupdatebordercolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonscouponupdatebordercolor');
	$woobizz_body_gbuttonscouponupdateborderradius= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonscouponupdateborderradius');
	$woobizz_body_gbuttonscouponupdateborderstyle= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonscouponupdateborderstyle');
	if ($woobizz_body_gbuttonscouponupdateborderstyle==0){
			$woobizz_body_gbuttonscouponupdateborderstyle="dotted";
		} elseif($woobizz_body_gbuttonscouponupdateborderstyle==1) {
			$woobizz_body_gbuttonscouponupdateborderstyle="dashed";
		} elseif($woobizz_body_gbuttonscouponupdateborderstyle==2) {
			$woobizz_body_gbuttonscouponupdateborderstyle="solid";
		} elseif($woobizz_body_gbuttonscouponupdateborderstyle==2) {
			$woobizz_body_gbuttonscouponupdateborderstyle="none";
		} else {$woobizz_body_gbuttonscouponupdateborderstyle="none";
	} 
	$woobizz_body_gbuttonscouponupdateborderfull=$woobizz_body_gbuttonscouponupdatebordersize."px "
										.$woobizz_body_gbuttonscouponupdateborderstyle." "
										.$woobizz_body_gbuttonscouponupdatebordercolor." ";
	$woobizz_body_gbuttonscouponupdatebackgroundcolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonscouponupdatebackgroundcolor');
	$woobizz_body_gbuttonscouponupdatetextcolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonscouponupdatetextcolor');
	$woobizz_body_gbuttonscouponupdateshadowcolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonscouponupdateshadowcolor');
	$woobizz_body_gbuttonscouponupdateshadowrightdistance= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonscouponupdateshadowrightdistance');
	$woobizz_body_gbuttonscouponupdateshadowbottomdistance= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonscouponupdateshadowbottomdistance');
	$woobizz_body_gbuttonscouponupdateshadowspread= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonscouponupdateshadowspread');
	$woobizz_body_gbuttonscouponupdateshadowsize= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonscouponupdateshadowsize');
	$woobizz_body_gbuttonscouponupdateshadowapply= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonscouponupdateshadowapply');
	if ($woobizz_body_gbuttonscouponupdateshadowapply==0){
			$woobizz_body_gbuttonscouponupdateshadowfull=$woobizz_body_gbuttonscouponupdateshadowrightdistance."px "
												.$woobizz_body_gbuttonscouponupdateshadowbottomdistance."px "
												.$woobizz_body_gbuttonscouponupdateshadowspread."px "
												.$woobizz_body_gbuttonscouponupdateshadowsize."px "
												.$woobizz_body_gbuttonscouponupdateshadowcolor;
		} elseif($woobizz_body_gbuttonscouponupdateshadowapply==1) {
			$woobizz_body_gbuttonscouponupdateshadowfull="none";
		} else {
			$woobizz_body_gbuttonscouponupdateshadowfull="none";
	} 
	//echo $woobizz_body_gbuttonscouponupdateshadowapply;
	//3.3 CALL TO ACTIONS BUTTONS
	$woobizz_body_gbuttonsctabordersize= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsctabordersize');
	$woobizz_body_gbuttonsctabordercolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsctabordercolor');
	$woobizz_body_gbuttonsctaborderradius= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsctaborderradius');
	$woobizz_body_gbuttonsctaborderstyle= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsctaborderstyle');
	if ($woobizz_body_gbuttonsctaborderstyle==0){
			$woobizz_body_gbuttonsctaborderstyle="dotted";
		} elseif($woobizz_body_gbuttonsctaborderstyle==1) {
			$woobizz_body_gbuttonsctaborderstyle="dashed";
		} elseif($woobizz_body_gbuttonsctaborderstyle==2) {
			$woobizz_body_gbuttonsctaborderstyle="solid";
		} elseif($woobizz_body_gbuttonsctaborderstyle==3) {
			$woobizz_body_gbuttonsctaborderstyle="none";
		} else {$woobizz_body_gbuttonsctaborderstyle="none";
	} 
	$woobizz_body_gbuttonsctaborderfull=$woobizz_body_gbuttonsctabordersize."px "
										.$woobizz_body_gbuttonsctaborderstyle." "
										.$woobizz_body_gbuttonsctabordercolor." ";
	$woobizz_body_gbuttonsctabackgroundcolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsctabackgroundcolor');
	$woobizz_body_gbuttonsctatextcolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsctatextcolor');
	$woobizz_body_gbuttonsctashadowcolor= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsctashadowcolor');
	$woobizz_body_gbuttonsctashadowrightdistance= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsctashadowrightdistance');
	$woobizz_body_gbuttonsctashadowbottomdistance= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsctashadowbottomdistance');
	$woobizz_body_gbuttonsctashadowspread= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsctashadowspread');
	$woobizz_body_gbuttonsctashadowsize= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsctashadowsize');
	$woobizz_body_gbuttonsctashadowapply= get_option(WOOBIZZBODY.'_woobizz_body_gbuttonsctashadowapply');
	if ($woobizz_body_gbuttonsctashadowapply==0){
			$woobizz_body_gbuttonsctashadowfull=$woobizz_body_gbuttonsctashadowrightdistance."px "
												.$woobizz_body_gbuttonsctashadowbottomdistance."px "
												.$woobizz_body_gbuttonsctashadowspread."px "
												.$woobizz_body_gbuttonsctashadowsize."px "
												.$woobizz_body_gbuttonsctashadowcolor;
		} elseif($woobizz_body_gbuttonsctashadowapply==1) {
			$woobizz_body_gbuttonsctashadowfull="none";
		} else {
			$woobizz_body_gbuttonsctashadowfull="none";
	} 
	//echo $woobizz_body_gbuttonsctashadowapply;
	//4.1-ALERT OPTIONS		
	$woobizz_body_infoalertbordersize= get_option(WOOBIZZBODY.'_woobizz_body_infoalertbordersize');
	$woobizz_body_infoalertbordercolor= get_option(WOOBIZZBODY.'_woobizz_body_infoalertbordercolor');
	$woobizz_body_infoalertborderradius= get_option(WOOBIZZBODY.'_woobizz_body_infoalertborderradius');
	$woobizz_body_infoalertborderstyle= get_option(WOOBIZZBODY.'_woobizz_body_infoalertborderstyle');
	if ($woobizz_body_infoalertborderstyle==0){
			$woobizz_body_infoalertborderstyle="dotted";
		} elseif($woobizz_body_infoalertborderstyle==1) {
			$woobizz_body_infoalertborderstyle="dashed";
		} elseif($woobizz_body_infoalertborderstyle==2) {
			$woobizz_body_infoalertborderstyle="solid";
		} elseif($woobizz_body_infoalertborderstyle==3) {
			$woobizz_body_infoalertborderstyle="none";
		} else {$woobizz_body_infoalertborderstyle="none";
	} 
	$woobizz_body_infoalertborderfull=$woobizz_body_infoalertbordersize."px "
										.$woobizz_body_infoalertborderstyle." "
										.$woobizz_body_infoalertbordercolor." ";
	$woobizz_body_infoalertbackgroundcolor= get_option(WOOBIZZBODY.'_woobizz_body_infoalertbackgroundcolor');
	$woobizz_body_infoalerttextcolor= get_option(WOOBIZZBODY.'_woobizz_body_infoalerttextcolor');
	$woobizz_body_infoalerttextalign= get_option(WOOBIZZBODY.'_woobizz_body_infoalerttextalign');
	if ($woobizz_body_infoalerttextalign==0){
			$woobizz_body_infoalerttextalign="left";
		} elseif($woobizz_body_infoalerttextalign==1) {
			$woobizz_body_infoalerttextalign="center";
		} elseif($woobizz_body_infoalerttextalign==2) {
			$woobizz_body_infoalerttextalign="right";
		} else {$woobizz_body_infoalerttextalign="left";
	} 
	$woobizz_body_infoalerttexttransform= get_option(WOOBIZZBODY.'_woobizz_body_infoalerttexttransform');
	if ($woobizz_body_infoalerttexttransform==0){
			$woobizz_body_infoalerttexttransform="capitalize";
		} elseif($woobizz_body_infoalerttexttransform==1) {
			$woobizz_body_infoalerttexttransform="lowercase";
		} elseif($woobizz_body_infoalerttexttransform==2) {
			$woobizz_body_infoalerttexttransform="uppercase";
		} elseif($woobizz_body_infoalerttexttransform==3) {
			$woobizz_body_infoalerttexttransform="none";
		} else {$woobizz_body_infoalerttexttransform="none";
	} 	
	$woobizz_body_infoalertshadowcolor= get_option(WOOBIZZBODY.'_woobizz_body_infoalertshadowcolor');
	$woobizz_body_infoalertshadowrightdistance= get_option(WOOBIZZBODY.'_woobizz_body_infoalertshadowrightdistance');
	$woobizz_body_infoalertshadowbottomdistance= get_option(WOOBIZZBODY.'_woobizz_body_infoalertshadowbottomdistance');
	$woobizz_body_infoalertshadowspread= get_option(WOOBIZZBODY.'_woobizz_body_infoalertshadowspread');
	$woobizz_body_infoalertshadowsize= get_option(WOOBIZZBODY.'_woobizz_body_infoalertshadowsize');
	$woobizz_body_infoalertshadowapply= get_option(WOOBIZZBODY.'_woobizz_body_infoalertshadowapply');
	if ($woobizz_body_infoalertshadowapply==0){
			$woobizz_body_infoalertshadowfull=$woobizz_body_infoalertshadowrightdistance."px "
												.$woobizz_body_infoalertshadowbottomdistance."px "
												.$woobizz_body_infoalertshadowspread."px "
												.$woobizz_body_infoalertshadowsize."px "
												.$woobizz_body_infoalertshadowcolor;
		} elseif($woobizz_body_infoalertshadowapply==1) {
			$woobizz_body_infoalertshadowfull="none";
		} else {
			$woobizz_body_infoalertshadowfull="none";
	} 
	//4.2-ERROR OPTIONS		
	$woobizz_body_erroralertbordersize= get_option(WOOBIZZBODY.'_woobizz_body_erroralertbordersize');
	$woobizz_body_erroralertbordercolor= get_option(WOOBIZZBODY.'_woobizz_body_erroralertbordercolor');
	$woobizz_body_erroralertborderradius= get_option(WOOBIZZBODY.'_woobizz_body_erroralertborderradius');
	$woobizz_body_erroralertborderstyle= get_option(WOOBIZZBODY.'_woobizz_body_erroralertborderstyle');
	if ($woobizz_body_erroralertborderstyle==0){
			$woobizz_body_erroralertborderstyle="dotted";
		} elseif($woobizz_body_erroralertborderstyle==1) {
			$woobizz_body_erroralertborderstyle="dashed";
		} elseif($woobizz_body_erroralertborderstyle==2) {
			$woobizz_body_erroralertborderstyle="solid";
		} elseif($woobizz_body_erroralertborderstyle==3) {
			$woobizz_body_erroralertborderstyle="none";
		} else {$woobizz_body_erroralertborderstyle="none";
	} 
	$woobizz_body_erroralertborderfull=$woobizz_body_erroralertbordersize."px "
										.$woobizz_body_erroralertborderstyle." "
										.$woobizz_body_erroralertbordercolor." ";
	$woobizz_body_erroralertbackgroundcolor= get_option(WOOBIZZBODY.'_woobizz_body_erroralertbackgroundcolor');
	$woobizz_body_erroralerttextcolor= get_option(WOOBIZZBODY.'_woobizz_body_erroralerttextcolor');
	$woobizz_body_erroralerttextalign= get_option(WOOBIZZBODY.'_woobizz_body_erroralerttextalign');
	if ($woobizz_body_erroralerttextalign==0){
			$woobizz_body_erroralerttextalign="left";
		} elseif($woobizz_body_erroralerttextalign==1) {
			$woobizz_body_erroralerttextalign="center";
		} elseif($woobizz_body_erroralerttextalign==2) {
			$woobizz_body_erroralerttextalign="right";
		} else {$woobizz_body_erroralerttextalign="left";
	} 
	$woobizz_body_erroralerttexttransform= get_option(WOOBIZZBODY.'_woobizz_body_erroralerttexttransform');
	if ($woobizz_body_erroralerttexttransform==0){
			$woobizz_body_erroralerttexttransform="capitalize";
		} elseif($woobizz_body_erroralerttexttransform==1) {
			$woobizz_body_erroralerttexttransform="lowercase";
		} elseif($woobizz_body_erroralerttexttransform==2) {
			$woobizz_body_erroralerttexttransform="uppercase";
		} elseif($woobizz_body_erroralerttexttransform==3) {
			$woobizz_body_erroralerttexttransform="none";
		} else {$woobizz_body_erroralerttexttransform="none";
	} 	
	$woobizz_body_erroralertshadowcolor= get_option(WOOBIZZBODY.'_woobizz_body_erroralertshadowcolor');
	$woobizz_body_erroralertshadowrightdistance= get_option(WOOBIZZBODY.'_woobizz_body_erroralertshadowrightdistance');
	$woobizz_body_erroralertshadowbottomdistance= get_option(WOOBIZZBODY.'_woobizz_body_erroralertshadowbottomdistance');
	$woobizz_body_erroralertshadowspread= get_option(WOOBIZZBODY.'_woobizz_body_erroralertshadowspread');
	$woobizz_body_erroralertshadowsize= get_option(WOOBIZZBODY.'_woobizz_body_erroralertshadowsize');
	$woobizz_body_erroralertshadowapply= get_option(WOOBIZZBODY.'_woobizz_body_erroralertshadowapply');
	if ($woobizz_body_erroralertshadowapply==0){
			$woobizz_body_erroralertshadowfull=$woobizz_body_erroralertshadowrightdistance."px "
												.$woobizz_body_erroralertshadowbottomdistance."px "
												.$woobizz_body_erroralertshadowspread."px "
												.$woobizz_body_erroralertshadowsize."px "
												.$woobizz_body_erroralertshadowcolor;
		} elseif($woobizz_body_erroralertshadowapply==1) {
			$woobizz_body_erroralertshadowfull="none";
		} else {
			$woobizz_body_erroralertshadowfull="none";
	} 
	//4.3-MESSAGE OPTIONS		
	$woobizz_body_messagealertbordersize= get_option(WOOBIZZBODY.'_woobizz_body_messagealertbordersize');
	$woobizz_body_messagealertbordercolor= get_option(WOOBIZZBODY.'_woobizz_body_messagealertbordercolor');
	$woobizz_body_messagealertborderradius= get_option(WOOBIZZBODY.'_woobizz_body_messagealertborderradius');
	$woobizz_body_messagealertborderstyle= get_option(WOOBIZZBODY.'_woobizz_body_messagealertborderstyle');
	if ($woobizz_body_messagealertborderstyle==0){
			$woobizz_body_messagealertborderstyle="dotted";
		} elseif($woobizz_body_messagealertborderstyle==1) {
			$woobizz_body_messagealertborderstyle="dashed";
		} elseif($woobizz_body_messagealertborderstyle==2) {
			$woobizz_body_messagealertborderstyle="solid";
		} elseif($woobizz_body_messagealertborderstyle==3) {
			$woobizz_body_messagealertborderstyle="none";
		} else {$woobizz_body_messagealertborderstyle="none";
	} 
	$woobizz_body_messagealertborderfull=$woobizz_body_messagealertbordersize."px "
										.$woobizz_body_messagealertborderstyle." "
										.$woobizz_body_messagealertbordercolor." ";
	$woobizz_body_messagealertbackgroundcolor= get_option(WOOBIZZBODY.'_woobizz_body_messagealertbackgroundcolor');
	$woobizz_body_messagealerttextcolor= get_option(WOOBIZZBODY.'_woobizz_body_messagealerttextcolor');
	$woobizz_body_messagealerttextalign= get_option(WOOBIZZBODY.'_woobizz_body_messagealerttextalign');
	if ($woobizz_body_messagealerttextalign==0){
			$woobizz_body_messagealerttextalign="left";
		} elseif($woobizz_body_messagealerttextalign==1) {
			$woobizz_body_messagealerttextalign="center";
		} elseif($woobizz_body_messagealerttextalign==2) {
			$woobizz_body_messagealerttextalign="right";
		} else {$woobizz_body_messagealerttextalign="left";
	} 
	$woobizz_body_messagealerttexttransform= get_option(WOOBIZZBODY.'_woobizz_body_messagealerttexttransform');
	if ($woobizz_body_messagealerttexttransform==0){
			$woobizz_body_messagealerttexttransform="capitalize";
		} elseif($woobizz_body_messagealerttexttransform==1) {
			$woobizz_body_messagealerttexttransform="lowercase";
		} elseif($woobizz_body_messagealerttexttransform==2) {
			$woobizz_body_messagealerttexttransform="uppercase";
		} elseif($woobizz_body_messagealerttexttransform==3) {
			$woobizz_body_messagealerttexttransform="none";
		} else {$woobizz_body_messagealerttexttransform="none";
	} 	
	$woobizz_body_messagealertshadowcolor= get_option(WOOBIZZBODY.'_woobizz_body_messagealertshadowcolor');
	$woobizz_body_messagealertshadowrightdistance= get_option(WOOBIZZBODY.'_woobizz_body_messagealertshadowrightdistance');
	$woobizz_body_messagealertshadowbottomdistance= get_option(WOOBIZZBODY.'_woobizz_body_messagealertshadowbottomdistance');
	$woobizz_body_messagealertshadowspread= get_option(WOOBIZZBODY.'_woobizz_body_messagealertshadowspread');
	$woobizz_body_messagealertshadowsize= get_option(WOOBIZZBODY.'_woobizz_body_messagealertshadowsize');
	$woobizz_body_messagealertshadowapply= get_option(WOOBIZZBODY.'_woobizz_body_messagealertshadowapply');
	if ($woobizz_body_messagealertshadowapply==0){
			$woobizz_body_messagealertshadowfull=$woobizz_body_messagealertshadowrightdistance."px "
												.$woobizz_body_messagealertshadowbottomdistance."px "
												.$woobizz_body_messagealertshadowspread."px "
												.$woobizz_body_messagealertshadowsize."px "
												.$woobizz_body_messagealertshadowcolor;
		} elseif($woobizz_body_messagealertshadowapply==1) {
			$woobizz_body_messagealertshadowfull="none";
		} else {
			$woobizz_body_messagealertshadowfull="none";
	} 
	//ADD ALL CSS OPTIONS--------------------------------------------------------------------------
	echo"
	<style>
	body{
		margin-top:".$woobizz_body_bodymargintopsize."".$woobizz_body_bodymarginunittop.";
		margin-right:".$woobizz_body_bodymarginrightsize."".$woobizz_body_bodymarginunitright.";
		margin-bottom:".$woobizz_body_bodymarginbottomsize."".$woobizz_body_bodymarginunitbottom.";
		margin-left:".$woobizz_body_bodymarginleftsize."".$woobizz_body_bodymarginunitleft.";
		background:linear-gradient(rgba(".$woobizz_body_bodybackgroundfullgradient1."),
								   rgba(".$woobizz_body_bodybackgroundfullgradient2.")),
								   url(".$woobizz_body_bodybackgroundimage.");
		background-color:".$woobizz_body_bodybackgroundcolor.";
		background-size:".$woobizz_body_bodybackgroundsize.";
		background-attachment:".$woobizz_body_bodybackgroundattachment.";
		background-repeat:".$woobizz_body_bodybackgroundrepeat.";
		background-position:".$woobizz_body_bodybackgroundposition.";
		box-shadow:".$woobizz_body_pageshadowfull.";
		border:".$woobizz_body_borderfull.";
		border-radius:".$woobizz_body_borderradius."px;
	}
	@media screen and (max-width: 767px){
		body{
			margin-bottom:".$woobizz_body_bodymarginunitbottommobiletotal."".$woobizz_body_bodymarginunitbottom."!important;
			
		}
	}
	
	.site-content {
		background:linear-gradient(rgba(".$woobizz_body_pagebackgroundfullgradient1."),
								   rgba(".$woobizz_body_pagebackgroundfullgradient2.")),
								   url(".$woobizz_body_pagebackgroundimage.");
		background-color:".$woobizz_body_pagebackgroundcolor.";
		background-size:".$woobizz_body_pagebackgroundsize.";
		background-repeat:".$woobizz_body_pagebackgroundrepeat.";
		background-position:".$woobizz_body_pagebackgroundposition.";
		
	}
	.col-full {
		width:".$woobizz_body_websitewidth."%;
		max-width:".$woobizz_body_websitemaxwidth."px;
		padding: 0;
		margin:0 auto!important;
	}
	
	/** END GENERAL */
	/** BUTTONS */
	ul.products li.product .button {
		background:".$woobizz_body_gbuttonslistbackgroundcolor.";
		color:".$woobizz_body_gbuttonslisttextcolor.";
		border:".$woobizz_body_gbuttonslistborderfull.";
		border-radius:".$woobizz_body_gbuttonslistborderradius."px;
		box-shadow:".$woobizz_body_gbuttonslistshadowfull.";
	}
	table.cart td.actions input {
        margin: 5px;
	}
	.woocommerce-cart table.cart td.actions .button{
		background:".$woobizz_body_gbuttonscouponupdatebackgroundcolor.";
		color:".$woobizz_body_gbuttonscouponupdatetextcolor.";
		border:".$woobizz_body_gbuttonscouponupdateborderfull.";
		border-radius:".$woobizz_body_gbuttonscouponupdateborderradius."px;
		box-shadow:".$woobizz_body_gbuttonscouponupdateshadowfull.";
	}
	.single-product div.product form.cart .button {
		background:".$woobizz_body_gbuttonsctabackgroundcolor.";
		color:".$woobizz_body_gbuttonsctatextcolor.";
		border:".$woobizz_body_gbuttonsctaborderfull.";
		border-radius:".$woobizz_body_gbuttonsctaborderradius."px;
		box-shadow:".$woobizz_body_gbuttonsctashadowfull.";
	}
	.woocommerce-cart .wc-proceed-to-checkout .button.checkout-button{
		background:".$woobizz_body_gbuttonsctabackgroundcolor.";
		color:".$woobizz_body_gbuttonsctatextcolor.";
		border:".$woobizz_body_gbuttonsctaborderfull.";
		border-radius:".$woobizz_body_gbuttonsctaborderradius."px;
		box-shadow:".$woobizz_body_gbuttonsctashadowfull.";
	}
	#payment .place-order .button {
		background:".$woobizz_body_gbuttonsctabackgroundcolor.";
		color:".$woobizz_body_gbuttonsctatextcolor.";
		border:".$woobizz_body_gbuttonsctaborderfull.";
		border-radius:".$woobizz_body_gbuttonsctaborderradius."px;
		box-shadow:".$woobizz_body_gbuttonsctashadowfull.";
	}
	/** END BUTTONS */
	/**	INFO & ALERT GENERAL OPTIONS */
	.woocommerce-info{
		background:".$woobizz_body_infoalertbackgroundcolor.";
		color:".$woobizz_body_infoalerttextcolor.";
		border:".$woobizz_body_infoalertborderfull.";
		border-radius:".$woobizz_body_infoalertborderradius."px;
		box-shadow:".$woobizz_body_infoalertshadowfull.";
		text-align:".$woobizz_body_infoalerttextalign.";
		text-transform:".$woobizz_body_infoalerttexttransform.";
		margin-bottom:0!important;
		text-align:center;
		text-transform:none;
	}
	a.showcoupon {
		color:".$woobizz_body_infoalerttextcolor.";
	}
	a.showcoupon:hover {
		color:".$woobizz_body_infoalerttextcolor."!important;
	}
	.woocommerce-error{
		background:".$woobizz_body_erroralertbackgroundcolor.";
		color:".$woobizz_body_erroralerttextcolor.";
		border:".$woobizz_body_erroralertborderfull.";
		border-radius:".$woobizz_body_erroralertborderradius."px;
		box-shadow:".$woobizz_body_erroralertshadowfull.";
		text-align:".$woobizz_body_erroralerttextalign.";
		text-transform:".$woobizz_body_erroralerttexttransform.";
		margin-bottom:0!important;
		text-align:center;
		text-transform:none;
	}
	.woocommerce-message{
		background:".$woobizz_body_messagealertbackgroundcolor.";
		color:".$woobizz_body_messagealerttextcolor.";
		border:".$woobizz_body_messagealertborderfull.";
		border-radius:".$woobizz_body_messagealertborderradius."px;
		box-shadow:".$woobizz_body_messagealertshadowfull.";
		text-align:".$woobizz_body_messagealerttextalign.";
		text-transform:".$woobizz_body_messagealerttexttransform.";
		margin-bottom:0!important;
		text-align:center;
		text-transform:none;
	}
	a.button.wc-forward {
		color:".$woobizz_body_messagealerttextcolor.";
	}
	a.button.wc-forward:hover {
		color:".$woobizz_body_messagealerttextcolor.";
	}
	a.showlogin {
		color:".$woobizz_body_infoalerttextcolor.";
	}
	a.showlogin:hover {
		color:".$woobizz_body_infoalerttextcolor.";
	}
	a.showcoupon:hover {
		color:".$woobizz_body_infoalerttextcolor.";
	}
	/**------------------------------------------------------*/
	/**BODY CSS IN PROOGRESS*/
	/**------------------------------------------------------*/
	
	html {
	overflow-y: scroll!important;
	overflow: -moz-scrollbars-vertical;
	}
	body{
	overflow:hidden!important;
	}

	.site{
	overflow:initial;
	}
	.site-content {
	outline: 0;
	overflow: initial;
	}
	h1, h2, h3, h4, h5, h6 {
	color: inherit!important;
	font-family: inherit!important;
	font-weight: normal;
	line-height:normal;
	}
	p{
	font-family:arial;
	}
	font-size:16px;

	.widget .panel-grid {
	margin-left: 0!important;
	margin-right: 0!important;
	}
	/*
	* Natura CSS
	*/
	@media (min-width: 768px){
	.woocommerce-active .site-header #mega-menu-wrap-primary {
	width: 100%;
	float: left;
	margin-right: 0;
	clear: both;
	background: none;
	font-family: inherit;
	}
	}
	#mega-menu-wrap-primary #mega-menu-primary img {
	max-width: 20%;
	}
	.product_list_widget li {
	padding: 1%;
	}
	header ul.menu li.current-menu-item > a {
	color: #676767!important;
	text-decoration: underline;
	}
	ul.mega-sub-menu {
	padding: 4%!important;
	}
	.archive .term-description {
	display: block;
	text-align: center;
	}
	.widgetcontainercol4 {
	width: 100.1%!important;
	display: table;
	background: white;
	}
	@media (min-width: 768px){
	.woocommerce-active .site-header #mega-menu-wrap-primary {
	width: auto!important;
	float: left;
	margin-right: 0;
	clear: both;
	background: none;
	font-family: inherit;
	}
	}
	#mega-menu-wrap-primary #mega-menu-primary > li.mega-menu-item > a.mega-menu-link {
	height:50px;
	line-height:50px;
	}
	input.wpcf7-form-control {
	width: 100%;
	}
	textarea.wpcf7-form-control.wpcf7-textarea {
	height: 150px;
	}
	input.wpcf7-form-control.wpcf7-submit {
	background: #a9d276;
	color: #525252;
	font-family: inherit;
	font-size: 20px;
	}
	.box-acd379 {
	background: #acd379;
	padding: 4%;
	}
	/*wb-Custom Classes*/
	@keyframes blinkit { 
	50% { border-color: transparent; } 
	}
	.wb-typewrite > .wrap { 
	animation: blinkit .5s step-end infinite alternate;
	border-right: 5px solid white;
	color:#b0d57f;
	text-align:left;
	}
	.wb-image-circle{
	border-radius:50%!important;
	}
	.wb-content-bounce {
	animation: bounce 3.6s ease infinite;
	}
	.wb-number-circle:before {
		content:'1';
		border-radius: 50%;
		behavior: url(PIE.htc); /* remove if you don't care about IE8 */
		padding: 4px 8px;
		background: #95c15a;
		border: 1px solid #9a9a9a;
		color: #fff;
		text-align: center;
	}
	.wb-number-circle-o {
		border-radius: 50%;
		behavior: url(PIE.htc); /* remove if you don't care about IE8 */

		width: 36px;
		height: 36px;
		padding: 8px;
		
		background: #fff;
		border: 2px solid #666;
		color: #666;
		text-align: center;
		
		font: 32px Arial, sans-serif;
	}
	@media (min-width:767px) {
	.wb-hero-text{
	  font-size: 2vw;
	  line-height:1vw;
	  
	}
	}
	@keyframes bounce {
	0% { transform:translateY(0) }
	5.55556% { transform:translateY(0) }
	11.11111% { transform:translateY(0) }
	22.22222% { transform:translateY(-15px) }
	27.77778% { transform:translateY(0) }
	33.33333% { transform:translateY(-15px) }
	44.44444% { transform:translateY(0) }
	100% { transform:translateY(0) }
	}
	/*BODY*/
	.checkout_coupon {
		margin-bottom: 0;
		background: white;
		padding: 3% 3% 1% 3%;
		border: 1px solid #DEDEDE;
		border-radius: 5px;
	}
	/** END INFO & ALERT OPTIONS */
	/** WIDGETS OPTIONS */	
	 .woocommerce-checkout input[type='text'], input[type='email'], input[type='url'], input[type='password'], textarea, .input-text{
		box-shadow:none;
		background: white;
		border-radius:5px;
	}	
	.select2-container .select2-choice {
		display: block;
		padding: .418em;
	}	
	.single-product div.product form.cart .button {
		float: left;
		margin-left: 10px;
	}
	/** END SINGLE PRODUCT */
	/**	CART PAGE */
	.woocommerce-cart .site-footer {
		display: none;
	}
	.woocommerce-cart .cart-collaterals h2{
		text-align:center!important;
	}
	.woocommerce-cart table.cart {
		//border: 1px solid #E4E4E4;
	}
	.woocommerce-cart .wc-proceed-to-checkout {
		background: white;
		padding: 6%;
		margin-top: -24px;
	}
	.woocommerce-cart .wc-proceed-to-checkout .button.checkout-button {
		font-size: 1.387em;
		text-transform: uppercase;
		font-weight: normal;
		font-family: inherit;
	}
	/**	END CART PAGE */
	.hentry .entry-header {
		border-bottom: none;
		margin-bottom: 0;
	}
	.woocommerce-checkout .site-footer {
		display: none;
	}
	.wc-proceed-to-checkout .button {
		margin-bottom: 0;
	}
	table.shop_table.shop_table_responsive {
		background: white;
	}
	table thead th {
		border-bottom: 1px solid #E4E4E4;
		text-transform: none;
	}
	h2 {
		text-align: center;
	}
	.woocommerce-checkout h3{
		text-align:center;
		text-transform:uppercase;
		padding-top: .618em;
	}
	#order_review_heading, #order_review {
		border-color: #F5F5F5;
	}
	#order_review .shop_table {
		margin-bottom: 2.618em;
		background: white;
		border: 1px solid #D8D3D3;
	}
	#order_review{
		background:none;
	}
	#payment {
		border-top: 3px solid rgba(0,0,0,.1);
		background: white;
		border: 1px solid #D8D3D3;
		border-radius:5px;
	}
	ul.order_details {
		border: 1px solid rgba(0,0,0,.1);
		position: relative;
		background: white;
	}
	table.shop_table.order_details {
		background: white;
		border: 1px solid #D8D8D8;
	}
	table.shop_table.customer_details {
		background: white;
		border: 1px solid #D8D8D8;
	}
	.col-1.address {
		background: white;
		padding: 4%;
		border: 1px solid #D8D8D8;
	}
	.col-2.address {
		background: white;
		padding: 4%;
		border: 1px solid #D8D8D8;
	}
	.col2-set#customer_login .col-1 {
		background: white;
		padding-right: 4%;
		border: 1px solid #D8D8D8;
		padding-left: 4%;
		padding-top: 2%;
	}
	.col2-set#customer_login .col-2 {
		padding-right: 4%;
		border: 1px solid #D8D8D8;
		padding-left: 4%;
		padding-top: 2%;
		background: white;
	}
	form.lost_reset_password {
		background: white;
		border: 1px solid #D8D8D8;
		padding:4%;
	}
	/** FIX DETAILS CART NOT SHOWING ON TABLE LIST */
	@media (min-width: 768px){
	table.cart thead th, table.cart td, table.cart th {padding: .857em 1.387em;}
	table.cart thead {font-size: 1em;text-indent: 0;}
	table.shop_table_responsive thead {display: table-header-group;}
	}
	/** Fix quantity imput text on mobile showing only a half */
	table.cart .qty {
		padding: .236em;
		max-width: 3.618em;
	}
	
	/**TO WORK */
	.archive h1.page-title {
		text-align:center!important;
	}
	.archive .term-description {
		display:block;
	}
	h3.widget-title {
		padding: 5px!important;
		text-align: center;
	}
	/** WORK IN PROGRESS*/
	/**Hide text on image popup on single page*/
	 div.ppt {
		display:none!important;
	}
	.form-row.woocommerce-validated input.input-text {
		box-shadow: none;
	}
	.form-row.woocommerce-invalid input.input-text {
		box-shadow: inset 2px 0 0 #DD6C6C;
		background: #DD6C6C;
		color: white;
	}
	p.woocommerce-thankyou-order-received {
		text-align: center;
	}
	p.myaccount_address {
		text-align: center;
	}
	.woocommerce-account h2{
		margin-top:0!important;
	}
	p.order-info {
		text-align: center;
	}
	.addresses header.title h3 {
		float: none;
		text-align: center;
	}
	address {
		text-align: center;
	}
	section.error-404.not-found {
		text-align: center;
	}
	.error404 .site-content .widget_product_search {
		padding: 1.618em;
		background-color: rgba(255, 255, 255, 0.93);
		border-radius: 15px;
	}
	input#username {
		border-bottom: 1px dotted #5D5D5D;
		border-radius:0!important;
	}
	input#password {
		border-bottom: 1px dotted #5D5D5D;
		border-radius:0!important;
		background:white!important;
	}

	.star-rating span:before, .quantity .plus, .quantity .minus, p.stars a:hover:after, p.stars a:after, .star-rating span:before, #payment .payment_methods li input[type=radio]:first-child:checked+label:before {
		color: #FFA960;
	}
	body, button, input, select, textarea {
		font-family: inherit;
	}
	p.cart-empty {
		text-align: center!important;
	}
	p.return-to-shop {
		text-align: center!important;
	}
	.hentry.type-page .entry-header {
		margin-bottom: 0!important;
	}
	p.myaccount_user {
		background: white;
		padding: 4%;
		border-radius: 5px;
	}
	p.order-info {
		background: white;
		padding: 4%;
		border-radius: 5px;
	}
	/*Widget Before Cart*/
	.woobizz-before-cart-div{
		list-style: none;
		margin: 0;
	}
	.sidebars-column-1 {
		width: 100%!important;
		max-width: none;
	}
	.site-footer {
		margin:0!important;
		padding:0 0!important;
	}
	/*Cart Steps*/
	.wb-cart-step1:before{
		display: inline-block;
		font-weight: 600;
		-webkit-font-smoothing: antialiased;
		content: '1';
		font-size: 16px;
		color: #ffffff;
		margin: 5px;
		border: 1px solid  #bbbbbb;
		padding: 0px 8px;
		border-radius: 50%;
		background: #afcc89;
	}
	.wb-cart-step2:before{
		display: inline-block;
		font-weight: 400;
		-webkit-font-smoothing: antialiased;
		content: '2';
		font-size: 16px;
		margin: 5px;
		border: 1px solid #cccccc;
		padding: 0px 8px;
		border-radius: 50%;
		background: #ffffff;
	}
	.wb-cart-step3:before{
		display: inline-block;
		font-weight: 400;
		-webkit-font-smoothing: antialiased;
		content: '3';
		font-size: 16px;
		margin: 5px;
		border: 1px solid #cccccc;
		padding: 0px 8px;
		border-radius: 50%;
		background: #ffffff;
	}
	/*Checkout Steps*/
	.wb-checkout-step1:before{
		display: inline-block;
		font-weight: 600;
		-webkit-font-smoothing: antialiased;
		content: '1';
		font-size: 16px;
		color: #ffffff;
		margin: 5px;
		padding: 0px 8px;
		border-radius: 50%;
		background: #afcc89;
	}
	.wb-checkout-step2:before{
		display: inline-block;
		font-weight: 600;
		-webkit-font-smoothing: antialiased;
		content: '2';
		font-size: 16px;
		color: #ffffff;
		margin: 5px;
		padding: 0px 8px;
		border-radius: 50%;
		background: #afcc89;
	}
	.wb-checkout-step3:before{
		display: inline-block;
		font-weight: 400;
		-webkit-font-smoothing: antialiased;
		content: '3';
		font-size: 16px;
		margin: 5px;
		border: 1px solid #cccccc;
		padding: 0px 8px;
		border-radius: 50%;
		background: #ffffff;
	}

	/*End Font Awsome*/
	.woocommerce-breadcrumb {
		background: transparent;
		margin: 0;
		padding: 0;	
	}
	/*Widgets*/
	.widget{
		list-style: none;
		margin:0;
	}
	li#wb_welcome_message-2 {
		text-align: right;
	}
	header.entry-header {
		text-align: center;
	}
	
	/*Welcome Message*/
	.widget_wb_welcome_message {
		text-align: right;
	}

	.woocommerce-cart h1.entry-title:before{
		display: inline-block;
		font-size: inherit;
		-webkit-font-smoothing: antialiased;
		content: '\f07a';
		font: normal normal normal 1em/1 FontAwesome;
		color: #95c15a;
		margin-right:10px;
	}
	/*CART PAGE*/
	.woocommerce-cart .input-text {
		border: 1px solid #c1c1c1!important;
	}
	/*CHECKOUT PAGE*/

	.woocommerce-checkout .input-text {
		border: 1px solid #c1c1c1!important;
	}
	.woocommerce-checkout .hentry .wp-post-image {
		width: 3.706325903em;
		margin: 0;
	}
	.woocommerce-checkout .select2-container--default .select2-selection--single {
		padding: 2%;
		height:46px;
	}
	.woocommerce-checkout table th {
		padding: 1% 7%;
		text-align: left;
		vertical-align: top;
		border: 1px solid #e0e0e0;
	}
	.woocommerce-checkout table td {
		padding: 1% 7%;
		text-align: left;
		vertical-align: top;
		border: 1px solid #e0e0e0;
	}
	.woocommerce-checkout h3 {
		text-transform: none!important;
	}
	.woocommerce-checkout h1.entry-title:before{
		display: inline-block;
		font-size: inherit;
		-webkit-font-smoothing: antialiased;
		content: '\f290';
		font: normal normal normal 1em/1 FontAwesome;
		color: #95c15a;
		margin-right:10px;
	}
	.wb_numbercircle {
		border-radius: 50%;
		behavior: url(PIE.htc); /* remove if you don't care about IE8 */

		width: 36px;
		height: 36px;
		padding: 8px;
		
		background: #fff;
		border: 2px solid #666;
		color: #666;
		text-align: center;
		
		font: 32px Arial, sans-serif;
	}
	.button br {
		display: none !important;
	}
	.siteorigin-widget-tinymce textwidget{
		padding:0;
	}
	.woocommerce-cart .textwidget, .woocommerce-checkout .textwidget, .woocommerce-order-received .textwidget{
		padding:0!important;
		margin:0!important
	}
	table {
		border-collapse: collapse;
	}
	.wb-categorycontent-sidebar-content .textwidget{
		padding:0% 25px!important;
	}
	header.entry-header {
    padding:35px!important;
    }
	.hentry.type-page .entry-header {
		padding: 35px!important;
		margin: 0!important;
	}	
	
	.woocommerce-cart table.cart td.actions .button {
    background: rgba(221, 221, 221, 0);
    text-decoration: underline;
	}
	
	</style>";
  }
    add_action('wp_head', 'woobizz_body_allcssoptions', 100);
	
	//CHECK IF SIDEBAR IS ACTIVE
	function woobizz_body_is_active_sidebar() {
		
		if (is_active_sidebar('sidebar-1')){
			//echo "is active sidebar";
			echo "<style>
			div#content{padding:4%6%;			}
			</style>";			
		} else {
			//echo "is not active sidebar";
			echo "<style>
			div#content{padding:4%6%;			}
			</style>";		
		}
	}
	add_action('wp_head', 'woobizz_body_is_active_sidebar', 100);
	//CHECK IF WOOBIZZ HOOK 29 IS ACTIVE
	Function woobizz_body_hook24_is_active() {
		
		if (is_active_sidebar('woobizzhook24_id')){
			//echo "is active woobizzhook24_id";
			echo "<style>
			div#content{padding-top:0%;
			}
			header.woocommerce-products-header {
				display: none;
			}
			.woobizzhook24-widget-div {
				margin-bottom: 35px;
			}
			h1 {
				margin: 10px;
			}
			.storefront-sorting {
			margin-top: 10px!important;
			}
			</style>";			
		}
	}
	add_action('wp_head', 'woobizz_body_hook24_is_active', 100);
	
	//ADMIN CSS
	//CSS MY ACCOUNT PAGE & IS ACTIVE SIDEBAR
	function woobizz_body_wp_admin_css() {
		
			
			echo "<style>
			#tinymce{
				background:#dadada!important;
			}
			body#tinymce{
				background:#dadada!important;
			}
			.mce-content-body{
				background:#dadada!important;
			}
									
			</style>";			
		
	}
	add_action('in_admin_header','woobizz_body_wp_admin_css');
	
	/** IN PROGRESS
	
	//CSS CART PAGE EMPTY
	function woobizz_body_cart_is_empty() {
    
		if ( WC()->cart->get_cart_contents_count() == 0 && is_cart() ) {
				echo "<style>
				.woocommerce {
					background: white!important;
					padding: 2%!important;
					margin:0px!important;
				}
				.hentry.type-page .entry-header {
					background:#e7e7e7!important;
				}
				.woocommerce-message {
					display: none;
				}
				
				</style>";
		}

	}
	add_action('woocommerce_cart_is_empty', 'woobizz_body_cart_is_empty');
	
	//CSS IS PRODUCT
	function woobizz_body_product_page_css() {
		
		if(is_product()){
			//echo "is product";
			echo "<style>
			div#content{padding:6%12%;			}
			</style>";			
		}		
	}
	add_action('wp_head', 'woobizz_body_product_page_css', 100);
	//CSS CART PAGE
	function woobizz_body_cart_page_css() {
		
		if(is_cart()){
			//echo "is cart";
			echo "<style>
			
			div#content{
			padding: 2% 12%;
			}
			
			</style>";
			
			}		
		
	}
	add_action('wp_head', 'woobizz_body_cart_page_css', 100);
	//CSS CHECKOUT PAGE
	function woobizz_body_checkout_page_css() {
		
		if(is_checkout()){
			//echo "is checkout";
			echo "<style>
			div#content{padding:2%12%;			}
			</style>";			
		}		
	}
	add_action('wp_head', 'woobizz_body_checkout_page_css', 100);
	//CSS MY ACCOUNT PAGE & IS ACTIVE SIDEBAR
	function woobizz_body_is_account_page_and_is_active_sidebar() {
		
		if (is_account_page()&& !is_active_sidebar('sidebar-1')){
			echo "is my account page & active sidebar";
			echo "<style>
			div#content{padding:4%6%;			}
			</style>";			
		}
	}
	add_action('wp_head', 'woobizz_body_is_account_page_and_is_active_sidebar', 100);
	
	*/	
	
	
	