<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<style>
<style>

</style>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
jQuery(document).ready(function($){

if (sessionStorage.getItem("advertOnce") !== "true") {
sessionStorage.setItem("advertOnce","true");
  $(".box").show();
}else{
  $(".box").hide();
  $(".overlay-verify").hide();
}
 
$("#refresh-page").on("click",function(){
var d = $( ".frmday" ).val();
var m = $( ".frmmonth" ).val();
var y = $( ".frmyear" ).val();
var dobstr = y+"-"+m+"-"+d
dob = new Date(dobstr);
var today = new Date();
var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
console.log(age);
if(d!="DD" && m!="Month" && y!="Year" && age>21)
{
$(".box").hide();
$(".overlay-verify").hide();
sessionStorage.setItem("advertOnce","true");
}
else
{
	$(".msg").text("Enter valid birth date");
}
});
  
$("#reset-session").on("click",function(){
$(".box").show();
sessionStorage.setItem("advertOnce","");
});
 
});
</script>
<main>
  <article class="box">
    
    <div class="box-right">
      <h2 class="hdage">Age Verification</h2>
      <p>This site contains information that is not intended for viewing by persons under the age of 21+ Please verify your age to get access to the content.</p>
      
      
      
      
	  <div class="row">
  <div class="col-sm-4"><p><label class="lblmonth">Day</label></p>
  <select name="" class="frmday">
		<option value="DD">DD</option>
		<option value="01">01</option>
		<option value="02">02</option>
		<option>03</option>
		<option>04</option>
		<option>05</option>
		<option>06</option>
		<option>07</option>
		<option>08</option>
		<option>09</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
	  </select>
  </div>
  <div class="col-sm-4">
  <p><label class="lblmonth">Month</label></p>
  <select class="frmmonth">
		<option value="Month">Month</option>
		<option value="Jan">Jan</option>
		<option value="Feb">Feb</option>
		<option>Mar</option>
		<option>Apr</option>
		<option>May</option>
		<option>Jun</option>
		<option>Jul</option>
		<option>Aug</option>
		<option>Sep</option>
		<option>Oct</option>
		<option>Nov</option>
		<option>Dec</option>
	  </select>
  </div>
  <div class="col-sm-4"><p><label class="lblmonth">Year</label></p>
  <select class="frmyear">
		<option value="Year">Year</option>
		<option value="1970">1970</option>
		<option value="1971">1971</option>
		<option value="2000">2000</option>
		<option value="2007">2007</option>
	  </select>
  </div>
  <div class="subdv">
  <a href="javascript:void(0)" class="btn btn-alpha"  id="refresh-page">Submit</a>
  
  </div>
</div>
	<div class="row">
<span class="msg"></span>
</div>	
    </div>
	
    </div>
  </article>
  
  <div class="overlay-verify"></div>
  
</main>