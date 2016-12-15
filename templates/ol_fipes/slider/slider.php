<?php

defined('_JEXEC') or die;

$caption         = $this->params->get ('caption');
$menu            = $this->params->get ('menu');
$slides          = $this->params->get('slides');
$shadows         = $this->params->get('shadows');
$headHeigh	     = $this->params->get('headHeigh');
$bannerTime	     = $this->params->get('bannerTime');
$socialCode         = $this->params->get ('socialCode');
$jukenburn_thumb1 	= $this->params->get('jukenburn_thumb1', '' );
$jukenburn_thumb2 	= $this->params->get('jukenburn_thumb2', '' );
$jukenburn_thumb3 	= $this->params->get('jukenburn_thumb3', '' );
$jukenburn_thumb4 	= $this->params->get('jukenburn_thumb4', '' );
$jukenburn_thumb5 	= $this->params->get('jukenburn_thumb5', '' );
$jukenburn_thumb6 	= $this->params->get('jukenburn_thumb6', '' );
$jukenburn_thumb7 	= $this->params->get('jukenburn_thumb7', '' );


?>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slider/css/style.css" type="text/css" />
<style>
.fullwidthbanner-container{
width:100% !important;		
position:relative;
padding:0;
margin: 0px;
max-height:600px !important;
overflow:hidden;
background-repeat: repeat;
background-position:center;
}
.tp-bannertimer								{	width:100%; height:5px; background:rgba(255,255,255,0.3);position:absolute; z-index:200;bottom:0px;}
.tp-bannertimer.tp-bottom					{	bottom:0px;height:5px; top:auto;}
</style>
<div id="slideshow" class="slideshow">
<div id='slider_wrapper' class='slider_wrapper fullwidthbanner-container' >
<div id='rev-slider' class='rev_slider fullwidthabanner'>
<ul>
<?php if ($jukenburn_thumb1): ?>
<!-- FADE -->
<li data-transition='random' data-slotamount='7' data-masterspeed='1000' > <img src="<?php echo $jukenburn_thumb1; ?>">
</li>
<?php endif;?>
<?php if ($jukenburn_thumb2): ?>
<!-- SLIDEUP -->
<li data-transition='random' data-slotamount='7' data-masterspeed='1000' > <img src="<?php echo $jukenburn_thumb2; ?>">
</li>
<?php endif;?>
<?php if ($jukenburn_thumb3): ?>
<!-- SLIDEUP -->
<li data-transition='random' data-slotamount='7' data-masterspeed='1000' > <img src="<?php echo $jukenburn_thumb3; ?>">
</li>
<?php endif;?>
<?php if ($jukenburn_thumb4): ?>
<!-- SLIDEUP -->
<li data-transition='random' data-slotamount='7' data-masterspeed='1000' > <img src="<?php echo $jukenburn_thumb4; ?>">
</li>
<?php endif;?>
<?php if ($jukenburn_thumb5): ?>
<!-- SLIDEUP -->
<li data-transition='random' data-slotamount='7' data-masterspeed='1000' > <img src="<?php echo $jukenburn_thumb5; ?>">
</li>
<?php endif;?>
</ul>
</div>
</div>

<?php if($this->params->get('bannerTime')=='1') : ?>
<div class="tp-bannertimer"></div>
<?php endif;?>
</div>
<script type = "text/javascript" src = "<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slider/js/revslider.js"></script>			
<script type = "text/javascript" src = "<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slider/js/fullheight.js"></script>

<script type="text/javascript">
jQuery(document).ready(function(){
jQuery('#rev-slider').show().revolution({
dottedOverlay: 'none',
delay: 7000,
startwidth: 0,
startheight:400,

hideThumbs: 200,
thumbWidth: 200,
thumbHeight: 50,
thumbAmount: 2,

navigationType: 'none',
navigationArrows: 'verticalcentered',
navigationStyle: 'navbar',

touchenabled: 'on',
onHoverStop: 'on',

swipe_velocity: 0.7,
swipe_min_touches: 1,
swipe_max_touches: 1,
drag_block_vertical: false,

spinner: 'spinner0',
keyboardNavigation: 'on',

navigationHAlign: 'center',
navigationVAlign: 'bottom',
navigationHOffset: 0,
navigationVOffset: 20,

soloArrowLeftHalign: 'left',
soloArrowLeftValign: 'center',
soloArrowLeftHOffset: 20,
soloArrowLeftVOffset: 0,

soloArrowRightHalign: 'right',
soloArrowRightValign: 'center',
soloArrowRightHOffset: 20,
soloArrowRightVOffset: 0,

shadow:0,	
fullWidth: 'on',
fullScreen: 'on',

stopLoop: 'off',
stopAfterLoops: -1,
stopAtSlide: -1,

shuffle: 'off',

autoHeight: 'on',
forceFullWidth: 'off',
fullScreenAlignForce: 'off',
minFullScreenHeight: 0,
hideNavDelayOnMobile: 1500,

hideThumbsOnMobile: 'off',
hideBulletsOnMobile: 'off',
hideArrowsOnMobile: 'off',
hideThumbsUnderResolution: 0,

hideSliderAtLimit: 0,
hideCaptionAtLimit: 0,
hideAllCaptionAtLilmit: 0,
startWithSlide: 0,
fullScreenOffsetContainer: ''
});
});
</script>

<div class="clear"></div>       

