<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" id="viewport" content="target-densitydpi=high-dpi,initial-scale=1.0,user-scalable=no" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Home SlideShowTry Title</title>
<script>
var slideIndex = 0;
var t;
var dots;
var maxheight = 0;
var timedelay = 5000;

window.onload = function() {
var x = document.getElementsByClassName("mySlides");
var parent_elem = document.getElementById('myslideFrame')
var widthRatio = parseInt(parent_elem.offsetWidth) / parseInt(x[0].width)

for (i = 0; i < x.length; i++) {

if (x[i].height > maxheight)
{
maxheight = x[i].height;
}
}

document.getElementById('myslideFrame').style.height = maxheight * widthRatio + "px";
showDivs(slideIndex);
carousel();
};

 function plusDivs(n) {
showDivs(slideIndex += n);
}

function currentDiv(n) {
showDivs(slideIndex = n);
}

function showDivs(n) {
var i;
var x = document.getElementsByClassName("mySlides");
dots = document.getElementsByClassName("demo");

if (n > x.length) {
slideIndex = 1;
}

if (n < 1) {
slideIndex = x.length;
}

for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
}

for (i = 0; i < dots.length; i++) {

dots[i].className = dots[i].className.replace(" w3-border-red", "");

}

x[slideIndex - 1].style.display = "inline-block";
dots[slideIndex - 1].className += " w3-border-red";

}

function carousel() {

var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
dots[i].className = dots[i].className.replace(" w3-border-red", "");
}
slideIndex++;

if (slideIndex > x.length) {
slideIndex = 1
}

x[slideIndex - 1].style.display = "inline-block";
dots[slideIndex - 1].className += " w3-border-red";
t = setTimeout(carousel, timedelay);
}

function pauseCarousel() {
clearTimeout(t)
}

function startCarousel() {
t = setTimeout(carousel, timedelay);
}

</script>

<style type="text/css">

.w3-content {max-width:500px; margin: 10px auto; }
.mySlides {width: 100%;} /**/
.mySlides {display: none; vertical-align: middle; }
#myslideFrame{text-align: center; font-size:0;min-height:100%; font-size:0; text-align: center;position:relative;}
#myslideFrame:before, .flexbox > div:before {content: ""; height: 100%; vertical-align: middle; width: 0; background: red; display: inline-block;}

.flexbox {
display: flex;
flex-wrap: wrap;
margin: 2% 0 !important;

}

.flexbox > div{
flex: 1;
vertical-align: middle;
font-size:0;
}

.flexbox > div img {vertical-align: middle;}

.w3-left, .w3-right, .w3-badge {cursor:pointer}

.w3-badge {height:13px;width:13px;padding:0}

</style>
</head>
<body>

<div class="w3-content">
<div id="myslideFrame">
<img class="mySlides" src="http://www.w3schools.com/w3css/img_nature_wide.jpg" >
<img class="mySlides" src="http://www.w3schools.com/w3css/img_fjords_wide.jpg" >
<img class="mySlides" src="http://www.w3schools.com/w3css/img_mountains_wide.jpg" >

<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)" onmouseover="pauseCarousel();" onmouseout="startCarousel()">❮</a>

<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)" onmouseover="pauseCarousel();" onmouseout="startCarousel()">❯</a>

<div style="width:100%" class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft">

<span onclick="currentDiv(1)" class="w3-badge demo w3-border w3-transparent w3-hover-white" onmouseover="pauseCarousel();" onmouseout="startCarousel()"></span>

<span onclick="currentDiv(2)" class="w3-badge demo w3-border w3-transparent w3-hover-white" onmouseover="pauseCarousel();" onmouseout="startCarousel()"></span>

<span onclick="currentDiv(3)" class="w3-badge demo w3-border w3-transparent w3-hover-white" onmouseover="pauseCarousel();" onmouseout="startCarousel()"></span>
</div>
</div>
<div class="w3-row-padding w3-section flexbox">
<div class="w3-col s4">
<img class="demo w3-border w3-hover-shadow" src="http://www.w3schools.com/w3css/img_nature_wide.jpg" style="width:100%" onclick="currentDiv(1)" onmouseover="pauseCarousel();" onmouseout="startCarousel()">
</div>
<div class="w3-col s4">
<img class="demo w3-border w3-hover-shadow" src="http://www.w3schools.com/w3css/img_fjords_wide.jpg" style="width:100%" onclick="currentDiv(2)" onmouseover="pauseCarousel();" onmouseout="startCarousel()">
</div>
<div class="w3-col s4">
<img class="demo w3-border w3-hover-shadow" src="http://www.w3schools.com/w3css/img_mountains_wide.jpg" style="width:100%" onclick="currentDiv(3)" onmouseover="pauseCarousel();" onmouseout="startCarousel()">
</div>
</div>
</div>
</body>
</html> 
