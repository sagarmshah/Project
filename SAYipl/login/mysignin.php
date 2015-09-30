<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	
	<title>WELCOME TO sayipl.com</title>
	
	<link rel='stylesheet' href='css/style.css'>
	
<style>
    #tech-slideshow {
        height: 200px;
        position: relative;
        overflow: hidden;
    }
    #tech-slideshow > div {
	height: 200px;
	width: 2526px;
	position: absolute;
	top: 0;
	left: 0;
	height: 100%;
	-moz-transition:  opacity 0.5s ease-out;
	-o-transition: opacity 0.5s ease-out;
	-webkit-transition: opacity 0.5s ease-out;
	-ms-transition: opacity 0.5s ease-out;
	/* Slow */
        -webkit-animation: moveSlideshow 60s linear infinite;
	-moz-animation:    moveSlideshow 60s linear infinite;
	-webkit-transform: translate3d(0,0,0); /* Performance */
	background-image: url(images/finalcollage.png);
    }
    #tech-slideshow #tech-slideshow-1 {
        /* Sprite */
        background-position: 0 200px;
        
        /* Fast */
        -webkit-animation: moveSlideshow 20s linear infinite;
        -moz-animation:    moveSlideshow 20s linear infinite;
    }
    #tech-slideshow:hover #tech-slideshow-2 {
        opacity: 0;
    }
    
    @-webkit-keyframes moveSlideshow {
        0%   { 
            -webkit-transform: translateX(0); 
            -moz-transform:    translateX(0); 
            -ms-transform:     translateX(0); 
            -o-transform:      translateX(0); 
            transform:         translateX(0); 
        }    
        100% { 
            -webkit-transform: translateX(-1684px); 
            -moz-transform:    translateX(-1684px); 
            -ms-transform:     translateX(-1684px); 
            -o-transform:      translateX(-1684px); 
            transform:         translateX(-1684px); 
        }
    }
    @-moz-keyframes moveSlideshow {
        0%   { 
            -webkit-transform: translateX(0); 
            -moz-transform:    translateX(0); 
            -ms-transform:     translateX(0); 
            -o-transform:      translateX(0); 
            transform:         translateX(0); 
        }    
        100% { 
            -webkit-transform: translateX(-1684px); 
            -moz-transform:    translateX(-1684px); 
            -ms-transform:     translateX(-1684px); 
            -o-transform:      translateX(-1684px); 
            transform:         translateX(-1684px); 
        }
    }
	#apDiv1 {
	position: absolute;
	left: 0px;
	top: 637px;
	width: 1199px;
	height: 128px;
	z-index: 10;
	background-image: url(images/common-footer-psd.png);
	background-repeat: repeat;
	opacity: 0.8;
}
    h3 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 11px;
	color: rgba(255,255,255,1);
	font-weight: bold;
}
    #apDiv2 {
	position: absolute;
	left: 269px;
	top: 21px;
	width: 650px;
	height: 67px;
	z-index: 5;
	background-color: rgba(0,0,0,0.8);
}
</style>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css">
<style type="text/css">
a:link {
	text-decoration: none;
	color: rgba(255,255,255,1);
	font-style: italic;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
a {
	font-size: 14px;
}
</style>
</head>

<body>
	

	<div id="page-wrap">
	
	  <h1>WELCOME TO SAYIPL </h1>
	  <h1>IPL WALL OF FAME</h1>
		
		<div id="tech-slideshow">
        <div id="tech-slideshow-1"></div>
        <div id="tech-slideshow-2"></div>
    </div>
    
    <p>The heroes that made each Indian proud, the victories that were hair-raising, the hoots and hugs that shook the stadium and the game that the country loves. </p>
    <p><strong>THE INDIAN PREMIERE LEAGUE. An ultimate experience.</strong></p>
</div>
	

<div id="apDiv2">
  <form name="form1" method="post" action="http://localhost:/SAYipl/code1.php"><br>
    <h3><span id="sprytextfield3">
      <label for="USERNAME"></label>
      EMAIL ID:&nbsp;&nbsp;&nbsp;
      <input type="text" name="username" id="username">
    &nbsp;&nbsp;</span>  PASSWORD:&nbsp;&nbsp;&nbsp;<span id="sprypassword3">
    <label for="PASSWORD"></label>
    <input type="password" name="password" id="password">
    <span class="passwordRequiredMsg">A value is required.</span></span>
    &nbsp;&nbsp;&nbsp;<input type="submit" name="LOG IN" id="LOG IN" value="LOG IN"> 
    <a href="http://localhost:/SAYipl/mysignup.php">&nbsp;&nbsp;&nbsp;SIGN UP</a></h3>
    <span><span class="textfieldRequiredMsg">A value is required.</span></span>
  </form>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprypassword3 = new Spry.Widget.ValidationPassword("sprypassword3");
</script>
</body>

</html>