<?php 
include_once '..\common.php';
?>
	

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Events TimeLine</title>
<link href="/creart.com/css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="js/cntl.css">


<link rel="stylesheet" type="text/css" href="css/style_common.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />



  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() -500;
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('fixed');
			 }
			 else {
				 $('nav').removeClass('fixed');
			 }
		});
	});
</script>

<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">



<script>
 
$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>
</head>


<body>

<div id="container">

         <?php include('../header_nav.php'); ?>

     
     <div id="featured">

     </div> <!--end  featured-->


        <div id="main">
        
        
        
        
        
        
        
          <div id="content">


          

          
<h1 align="center"><?php echo $lang['HCAL']; ?></h1>

<div class="cntl"> <span class="cntl-bar cntl-center"> <span class="cntl-bar-fill"></span> </span>
  <div class="cntl-states">
    <div class="cntl-state">
      <div class="cntl-content">
        <h4><?php echo $lang['JAN']; ?></h4>
        <p><?php include('Calendar\affichee.php');?></p>
        
    
      </div>
      <div class="cntl-icon cntl-center">01</div>
    </div>
    <div class="cntl-state">
      <div class="cntl-content">
        <h4><?php echo $lang['FEV']; ?></h4>
        <p><?php include('Calendar\fevrier.php');?>
          </p>
      </div>
      
      <div class="cntl-icon cntl-center">02</div>
    </div>
    <div class="cntl-state">
      <div class="cntl-content">
        <h4><?php echo $lang['MAR']; ?></h4>
        <p><?php include('Calendar\mars.php');?></p>
      </div>
      
      <div class="cntl-icon cntl-center">03</div>
    </div>
    <div class="cntl-state">
      <div class="cntl-content">
        <h4><?php echo $lang['AVR']; ?></h4>
        <p><?php include('Calendar\avril.php');?>
         </p>
      </div>
      
      <div class="cntl-icon cntl-center">04</div>
    </div>
    <div class="cntl-state">
      <div class="cntl-content">
        <h4><?php echo $lang['MAI']; ?></h4>
        <p><?php include('Calendar\mai.php');?></p>
      </div>
      
      <div class="cntl-icon cntl-center">05</div>
    </div>
	
	 <div class="cntl-state">
      <div class="cntl-content">
        <h4><?php echo $lang['JUIN']; ?></h4>
        <p><?php include('Calendar\juin.php');?></p>
      </div>
      
      <div class="cntl-icon cntl-center">06</div>
    </div>
	
	
	
		 <div class="cntl-state">
      <div class="cntl-content">
        <h4><?php echo $lang['JUI']; ?></h4>
        <p><?php include('Calendar\juillet.php');?></p>
      </div>
     
      <div class="cntl-icon cntl-center">07</div>
    </div>
	
	
		 <div class="cntl-state">
      <div class="cntl-content">
        <h4><?php echo $lang['AOU']; ?></h4>
        <p><?php include('Calendar\aout.php');?></p>
      </div>
      
      <div class="cntl-icon cntl-center">08</div>
    </div>
	
		 <div class="cntl-state">
      <div class="cntl-content">
        <h4><?php echo $lang['SEM']; ?></h4>
        <p><?php include('Calendar\septembre.php');?></p>
      </div>
      
      <div class="cntl-icon cntl-center">09</div>
    </div>
	
	
		 <div class="cntl-state">
      <div class="cntl-content">
        <h4><?php echo $lang['OCT']; ?></h4>
        <p><?php include('Calendar\octobre.php');?></p>
      </div>
      
      <div class="cntl-icon cntl-center">10</div>
    </div>
	
		 <div class="cntl-state">
      <div class="cntl-content">
        <h4><?php echo $lang['NOV']; ?></h4>
        <p><?php include('Calendar\novembre.php');?></p>
      </div>
      
      <div class="cntl-icon cntl-center">11</div>
    </div>
	
	
		 <div class="cntl-state">
      <div class="cntl-content">
        <h4><?php echo $lang['DEC']; ?></h4>
        <p><?php include('Calendar\decembre.php');?></p>
      </div>
      
      <div class="cntl-icon cntl-center">12</div>
    </div>
    		 <div class="cntl-state">
   
      <div class="cntl-icon cntl-center">...</div>
    </div>
	
	
	
	
  </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="js/jquery.cntl.js"></script> 
<script type="text/javascript">
	$(document).ready(function(e){
		$('.cntl').cntl({
			revealbefore: 300,
			anim_class: 'cntl-animate',
			onreveal: function(e){
				console.log(e);
			}
		});
	});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
            </div>



<div class="main">








  </div> <!--end content--> 
     </div> <!--end main-->  
     




          
   
     
<div class="arrierefooter">
         <?php include('../footer.php'); ?>

          </div> <!--end arrierefooter-->
          <div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-2x fa-arrow-circle-up"></i>
	</span>
</div>
</div> <!--end contrainer-->



</body>
</html>

