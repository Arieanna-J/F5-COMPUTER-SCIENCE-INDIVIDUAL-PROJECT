<!--MODUL UTAMA SISTEM-->
<?php
#SAMBUNG KE FAIL SETUP
include 'setup.php';
?>
<!--NAMA SISTEM DI TITLE BAR BROWSER-->
<center><title><?php echo $namasys; ?></title>
<!--INTERNAL CSS UNK HEADER-->
<style>
.mySlides {display:none;}

#bannerimage {
  width: 100%;
  background-image: url("<?php echo $banner; ?>");
  height: 150px;
  background-color:   ;
  background-position: center;

}
</style>
<body>
<div id="bannerimage" style="background-repeat:cover;">
<!--SLIDE1-->
  <div class="mySlides" style="max-width:800px; line-height: 120%">
    <center>
	  <h2 style="color:#ff1994; font-family:Lucida Handwriting"><b><?php echo $kata1; ?></b></h2>
    <h2 style="color:#ff1994; font-family:Lucida Handwriting"><b>NATIONAL STATE 2022</b></h2>

  <h2 style="color:#ff85ba; font-family: Copperplate Gothic Light; line-height: 20%">🌸🌸<i><?php echo $lanjut1; ?></i>🌸🌸</h2>
  <p>
  <h3 style="color:#6052e3; font-family: Copperplaye Gothic Light; font-size: 16px;"><i>Available to Secondary Schools, ages between 13 and 17 only. Both Traditional and Digital Creations are Allowed at the Date of the Competition. Good Luck and Happy Marking!</i></h3></p>
      </center>
  </div>
</div>
<!--ARAHAN JAVASCRIPT BANNER-->
<script>
var slideIndex=0;
carousel();

function carousel() {
var i;
var x=document.getElementsByClassName("mySlides");
for (i=0;i<x.length; i++) {
x[i].style.display="none";
}
slideIndex++;
if (slideIndex > x.length) {slideIndex=1}
x[slideIndex-1].style.display="block";
setTimeout(carousel, 2000);
}
</script>
</body>
</center>
</html>