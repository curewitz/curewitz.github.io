<?php
include('ssi/header.php');
print "<link rel=\"stylesheet\" type=\"text/css\" href=\"../styles/index.css\">";
?>
<section id="slide">
<script language="JavaScript" class="script">
var i = 0;
var path = new Array();
 
// LIST OF IMAGES
path[0] = "../img/1.jpg";
path[1] = "../img/3.jpg";
path[2] = "../img/4.jpg";
path[3] = "../img/9.jpg";
path[4] = "../img/32.jpg";
path[5] = "../img/33.jpg";
path[6] = "../img/31.jpg";
path[7] = "../img/26.jpg";
path[8] = "../img/38.jpg";
path[9] = "../img/30.jpg";
path[10] = "../img/34.jpg";

function swapImage()
{
   document.slide.src = path[i];
   if(i < path.length - 1) i++; else i = 0;
   setTimeout("swapImage()",10000);
}
window.onload=swapImage;
</script>
<center><img name="slide" height="300" width=auto /></center></section>
<div class="first">
	
	
	<section id="top">
<div id="col1"><br>
<h1>Experience Does Make a Difference...</h1><br>

<p>UpRight Upholstery, Inc., provides expert craftsmanship for antique through modern furniture décor. We are a third generation (plus) of professional upholsterers, operating since 1920. From receipt to delivery of your distinctive piece, our friendly staff will ensure your upholstered furniture reflects our high-quality standards and your complete satisfaction. UpRight Upholstery offers a wide collection of fabric samples from leading textile companies. Select fabric in our showroom or take samples home. Our upholstery services range from dining room and kitchen chairs, window cushions and toss pillows, to sofas, chairs, love seats and more. Have your cushions refilled or furniture repaired. And, for your outdoor needs, rely on us for porch, deck, or sunroom cushions, and boat interiors. Our family-owned business is available to work directly with you or your interior designer.</p>
</div>
<div id="col2">
<p>
<h1>Antique Restoration & Custom Pieces</h1>
Antique Furniture (UpRight Upholstery restores heirloom pieces)

<li>Complete Restoration</li>
<li>New Filling</li>
<li>Gluing</li>
<li>Fabrication of Missing Pieces</li>
<li>Veneers</li>
<li>Finish, Touch Up, and Repair</li>
<li>Replacement of Casters</li>

New Furniture (UpRight Upholstery builds custom furniture)

<li>Benches</li>
<li>Stools</li>
<li>Headboards</li>
<li>Sofas</li>
<li>Chairs & Parson Chairs</li>
<li>Chaise Lounges</li>
<li>Storage Ottomans</li></p>

</section>
</div>
<div class="middle">
<section id="middle">
<p>


<br>
<br>
<br>
<br>
<br>
<br>

</p>
</section>
</div>
<div class="bottom">
	<section id="bottom">
	<p>
                "The materials posted on this website are for personal, non-commercial use only and may be downloaded only for personal use. Republication, retransmission or reproduction of any images is strictly prohibited."
	</p>
</section>
</div>

<?php
include('ssi/footer.html');
?>
