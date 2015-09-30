<?php
session_start();
?>
<?php
	
	if(!isset($_SESSION['user_id']))
	{
		header("location: http://localhost:/SAYipl/login/mysignin.php");
	}
?>
<?php 

include('connection.php');
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>Welcome To SAYIPL.com</title>
<style type="text/css">
@import url("MI/monsieurladoulaise_regular/stylesheet.css");
</style>
<!-- mobile -->
<link href="MI/monsieurladoulaise_regular/mobile.css" rel="stylesheet" type="text/css" media="only screen and (max-width:800px)">
<link href="MI/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="MI/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="MI/js/clearbox.js" type="text/javascript"></script>
<script src="MI/includes/jquery-1.4.2.js" type="text/javascript"></script>
<script src="MI/jQuery/js/jquery.jsocial.js" type="text/javascript"></script>
<style type="text/css">
/* BeginOAWidget_Instance_2648024: #OAWidget */
.container {
      width: 500px;
      height: 100px;
      margin-right:auto;
      margin-left:auto;
      margin-top:20px;
      margin-bottom:5px;
      font-size:11px;
      }
      
      
      .item a img {
      float:left;
      padding:3px;
      background-color: #FFF;
      margin: 5px;
      border:1px solid #cccccc;
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      -khtml-border-radius: 3px;
      border-radius: 3px;
      -moz-box-shadow:0 0 5px rgba(0,0,0,0.45),0px 1px 2px rgba(0,0,0,0.2);
			-webkit-box-shadow:0 0 5px rgba(0,0,0,0.45),0px 1px 2px rgba(0,0,0,0.2);
			box-shadow:0 0 5px rgba(0,0,0,0.45),0px 1px 2px rgba(0,0,0,0.2);
      
      filter:alpha(opacity=100);
      -moz-opacity: 1;
      -khtml-opacity: 1;
      opacity: 1;
      }
      
      .item a:hover img, .item a:active img {
      padding:3px;
      border:1px solid #cccccc;
      filter:alpha(opacity=80);
      -moz-opacity:0.80;
      -khtml-opacity: 0.80;
      opacity: 0.80;
      }
      
      .clearfix:after{
      clear:both;
      }
      #inline{
      visibility: hidden;
      color:#444;
      }
/* EndOAWidget_Instance_2648024 */
</style>
<link href="MI/jQuery/css/style.css" rel="stylesheet" type="text/css">
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2648024" binding="#OAWidget" />
  <oa:widget wid="2149023" binding="#social" />
</oa:widgets>
-->
</script>
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:986px;
	top:17px;
	width:100px;
	height:31px;
	z-index:11;
}
#apDiv2 {
	position:absolute;
	left:1121px;
	top:28px;
	width:80px;
	height:25px;
	z-index:12;
}
#apDiv3 {
	position:absolute;
	left:669px;
	top:657px;
	width:108px;
	height:24px;
	z-index:13;
}
#apDiv4 {
	position:absolute;
	left:853px;
	top:902px;
	width:103px;
	height:24px;
	z-index:13;
}
</style>
<link href="css/logout.css" rel="stylesheet" type="text/css">
</head>

<body>
<header></header>

<nav>
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="editindex.php">HOME</a></li>
    <li><a href="editnews.php">NEWS</a></li>
    <li><a href="editschedule.php">SCHEDULE</a>    </li>
    <li><a href="editvideos.php">VIDEOS</a></li>
<li><a href="editgallery.php">GALLERY</a></li>
     <li><a href="editshop.php">SHOP</a></li>
    <li><a href="editabout.php">ABOUT</a></li>
  </ul>
</nav>
<section>
  <h1>LIVE STREAMING</h1>
 
   <iframe frameborder="0" marginheight="0" marginwidth="0" height="510" src="<?php $result_set= mysql_query("SELECT * 
FROM  `videos`  
LIMIT 0 , 30");  
	while($row = mysql_fetch_array($result_set))
	{
  		echo $row["link"];
	}
	?>" scrolling="no" width="630" name="iframe1">Your browser does not support iframes.</iframe>

   <p>
    <script type="text/javascript">
// BeginOAWidget_Instance_2648024: #OAWidget
/*
      // 	ClearBox Config File (JavaScript)
      */
      
      var
      
      // CB layout:
      
      CB_MinWidth=300,				// minimum (only at images) or initial width of CB window
      CB_MinHeight=300,				// initial heigth of CB window
      CB_WinPadd=15,					// padding of the CB window from sides of the browser 
      CB_ImgBorder=3,					// border size around the picture in CB window
      CB_ImgBorderColor='#FFF',			// border color around the picture in CB window
      CB_Padd=4,					// padding around inside the CB window
      
      CB_BodyMarginLeft=0,				//
      CB_BodyMarginRight=0,				// if you set margin to <body>,
      CB_BodyMarginTop=0,				// please change these settings!
      CB_BodyMarginBottom=0,				//
      
      CB_ShowThumbnails='auto',			// it tells CB how to show the thumbnails ('auto', 'always' or 'off') thumbnails are only in picture-mode!
      CB_ThumbsBGColor='#000',			// color of the thumbnail layer
      CB_ThumbsBGOpacity=.35,				// opacity of the thumbnail layer
      CB_ActThumbOpacity=.65,				// thumbnail opacity of the current viewed image
      
      CB_SlideShowBarColor='#FFF',			// color of the slideshow bar
      CB_SlideShowBarOpacity=.60,			// opacity of the slideshow bar
      CB_SlideShowBarPadd=17,				// padding of the slideshow bar (left and right)
      CB_SlideShowBarTop=2,				// position of the slideshow bar from the top of the picture
      
      CB_SimpleDesign='off',				// if it's 'on', CB doesn't show the frame but only the content - really nice ;)
      
      CB_CloseBtnTop=-10,				// vertical position of the close button in picture mode
      CB_CloseBtnRight=-14,				// horizontal position of the close button in picture mode
      CB_CloseBtn2Top=-20,				// vertical position of the close button in content mode
      CB_CloseBtn2Right=-30,				// horizontal position of the close button in content mode
      
      CB_OSD='off',					// turns on OSD
      CB_OSDShowReady='off',				// when clearbox is loaded and ready, it shows an OSD message
      
      // CB font, text and navigation (at the bottom of CB window) settings:
      
      CB_FontT='Verdana',				//
      CB_FontSizeT=13,				// these variables are referring to the title or caption line
      CB_FontColorT='#777',				// 
      CB_FontWeightT='normal',			//
      
      CB_FontC='arial',				//
      CB_FontSizeC=11,				// these variables are referring to
      CB_FontColorC='#999',				// comment lines under the title
      CB_FontWeightC='normal',			//
      CB_TextAlignC='justify',			//
      CB_txtHCMax=120,				// maximum height of the comment box in pixels
      
      CB_FontG='arial',				//
      CB_FontSizeG=11,				// these variables are referring to the gallery name
      CB_FontColorG='normal',				//
      CB_FontWeightG='@@CB_FontWeightG@@',			//
      
      CB_PadT=10,					// space in pixels between the content and the title or caption line
      
      CB_OuterNavigation='off',			// turns outer navigation panel on
      
      CB_ShowURL='off',				// it shows the url of the content if no title or caption is given
      CB_ItemNum='on',				// it shows the ordinal number of the content in galleries
      CB_ItemNumBracket='()',				// whatever you want ;)
      
      CB_ShowGalName='',				// it shows gallery name
      CB_TextNav='on',				// it shows previous and next navigation
      CB_NavTextImgPrvNxt='on',			// it shows previous and next buttons instead of text
      CB_ShowDL='on',					// it shows download controls
      CB_NavTextImgDL='on',				// it shows download buttons instead of text
      
      CB_ImgRotation='on',				// it shows the image rotation controls
      CB_NavTextImgRot='on',				// it shows the image rotation buttons instead of text
      
      // Settings of the document-hiding layer:
      
      CB_HideColor='#000',				// color of the layer
      CB_HideOpacity=.8,				// opacity (0 is invisible, 1 is 100% color) of the layer
      CB_HideOpacitySpeed=400,			// speed of fading
      CB_CloseOnH='on',				// CB will close, if you click on background
      
      // CB animation settings:
      CB_Animation='double',				// 'double', 'normal', 'off', 'grow', 'growinout' or 'warp' (high cpu usage)
      CB_ImgOpacitySpeed=300,				// speed of content fading (in ms)
      CB_TextOpacitySpeed=300,			// speed of text fading under the picture (in ms)
      CB_AnimSpeed=300,				// speed of the resizing animation of CB window (in ms)
      CB_ImgTextFade='on',				// turns on or off the fading of content and text
      CB_FlashHide='on',				// it hides flash animations on the page before CB starts
      CB_SelectsHide='on',				// it hides select boxes on the page before CB starts
      CB_SlShowTime=3000,				// default speed of the slideshow (in sec)
      CB_Preload='on',				// preload neighbour pictures in galleries
      CB_ShowLoading='on'				// 
      
      
      
      ;
// EndOAWidget_Instance_2648024
    </script>
  </p>
  <div id="apDiv3"> <a href="edit1videos.php"> Edit Page </a></div>
  <h3><?php 
		$remarks=$_GET['remarks'];
		
		
		if ($remarks=='success')
		{
		echo 'Updation Successful !!';
		}
		
		
?></h3>

</section>
<div id="uname">
<p> Welcome, <?php echo $_SESSION['firstname']; ?></p>
</div>
<div id="logout">
<a href="logout.php"> Log Out </a>
</div>
<div id="apDiv4">
<a href="staff.php"> Back to Staff </a>
</div>
<p>&nbsp;</p>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h1>&nbsp;</h1>
<h2>&nbsp;</h2>
<footer>
	
  <br><br><br><br>
  <div class="social"></div>
  <script type="text/javascript">
// BeginOAWidget_Instance_2149023: #social
	
	$('.social').jsocial({
			twitter		:  'myID',
			facebook	:  'facebook.com/myID',
			flickr		:  '',
			delicious	:  '',
			linked		:  'linkedin.com/in/myID',
			youtube		:  'youtube.com/myID',
			feed		:  '',
			friendfeed	:  '',
			digg		:  '',
			lastfm		:  '',
			center		: false,	
			inline		: true,
			small		: false,
			newPage		: true
		});
	

// EndOAWidget_Instance_2149023
  </script>
  <br><br>
    
  <p><strong> &nbsp;&nbsp; sayipl.com &copy; 2013</strong></p>

</footer>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
<?php
mysql_close($con);
?>
