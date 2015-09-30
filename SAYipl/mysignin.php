<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	
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
}
    #apDiv2 {
	position: absolute;
	left: 269px;
	top: 21px;
	width: 650px;
	height: 60px;
	z-index: 5;
	background-color: rgba(0,0,0,0.8);
}
</style>
</head>

<body>
	

	<div id="page-wrap">
	
	  <h1>The IPL Wall of Fame</h1>
		
		<div id="tech-slideshow">
        <div id="tech-slideshow-1"></div>
        <div id="tech-slideshow-2"></div>
    </div>
    
    <p>The heroes that made each Indian proud, the vitories that were hair-raising, the hoots and hugs that shook the stadium and the game that the country loves. </p>
    <p><strong>THE INDIAN PREMIERE LEAGUE. An ultimate experience.</strong></p>
	
	</div>
	
<div id="apDiv1"></div>
<div id="apDiv2">
  <table width="574" height="50" align="left" cellpadding="5" cellspacing="5" dir="ltr">
    <tr>
      <td width="90"><h3><strong>EMAIL ID:</strong></h3></td>
      <td width="93">&nbsp;</td>
      <td width="182"><h3><strong>PASSWORD:</strong></h3></td>
      <td width="62">&nbsp;</td>
      <td width="55">&nbsp;</td>
    </tr>
  </table>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>

</html>