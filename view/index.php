<style>
.subdv
{
	margin-top:10px;
}
.hdage
{
	font-weight:600;
	
}
.lblmonth
{
	font-weight:600;
}
.msg
{
	color:#ff0000;
	font-weight:600;
}
.ageblk
{
	margin-top:20px;
}
.page-title-section{
	height:20%;
}
.btn-alpha
{
	margin-top:10px;
}
a.btn{
  background-color: #54A984;
  color: #fff;
  text-decoration: none;
  display:inline-block;
  letter-spacing: 0.1em;
  /*padding: 0.5em 0em;*/
  
  &.btn-beta{
    background-color: #e36e3a;
  }
}
.decor-line {
	position:	relative;
	top:	0.7em;
  border-top: 1px solid #ccc;
  text-align:center;
  max-width: 40%;
  margin: 0.5em auto;
  display: block;
  padding: 0.1em 1em;
  color: #ccc;
  
  span{
    background: #fff;
    color: #ccc;
    position: relative;
    top: -.7em;
    padding: 0.5em;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight:	900;
  }
}
.overlay-verify{
  background: #fff;
  position:fixed;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 1;
}

.box{
  background: #fff;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: 0 auto;
  z-index: 9;
  width: 35%;
  height: 25%;
  display:table;
  
  .box-left, .box-right{
    width: 100%;
    position: relative;
    text-align: center;
    padding: 5%;
    
    @media (min-width: 54em){
    	display:table-cell;
    	vertical-align:middle;
    	width: 50%;
    }
    
    p{
      //padding: 5%;
      position: relative;
      z-index: 3;
    }
  }
  .box-left{
     background:url(http://uiclients.com/thinc/assets/images/block-bg-2.jpg) 50% 50%;
    background-size: cover;
    color: #fff;
    
    img{
      position: relative;
      z-index: 4;
      width: 9em;
    }
    
    &:after{
      content: '';
      position: absolute;
      z-index: 0;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(0,0,0,0.4);
    }
  }
  
  .box-right{
    text-align: center;
    
    h3 {
      color: #555;
      text-transform: uppercase;
      letter-spacing: 0.07em;
      border-bottom: 1px solid #eee;
      padding-bottom: 1em;
      margin: 0 auto;
    }
    p{
      color: #aaa;
    }
    small{
      color: #ccc;
    }
    .btn{
      font-weight: 600;
      letter-spacing: 0.2em;
      padding: 0.9em 1em 0.7em;
      margin: 1em auto;
      display: block;
    }
  }
}
</style>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
jQuery(document).ready(function($){

if (sessionStorage.getItem("advertOnce") !== "true") {
//sessionStorage.setItem("advertOnce","true");
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
<div class="row ageblk">
<div class="col-sm-4"><p><label class="lblmonth">Day</label></p>
<select class="frmday">
	<option value="DD">DD</option>
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
</select>
  
</div>
<div class="col-sm-4">
  <p><label class="lblmonth">Month</label></p>
  <select class="frmmonth">
		<option value="Month">Month</option>
		<option value="Jan">Jan</option>
		<option value="Feb">Feb</option>
		<option value="Mar">Mar</option>
		<option value="Apr">Apr</option>
		<option value="May">May</option>
		<option value="Jun">Jun</option>
		<option value="Jul">Jul</option>
		<option value="Aug">Aug</option>
		<option value="Sep">Sep</option>
		<option value="Oct">Oct</option>
		<option value="Nov">Nov</option>
		<option value="Dec">Dec</option>
	  </select>
  </div>
  <div class="col-sm-4"><p><label class="lblmonth">Year</label></p>
  <select class="frmyear">
		<option value="Year">Year</option>
		<?php
		for($i=1970;$i<=2023;$i++){
		?>
		<option value="<?php echo $i;?>"><?php echo $i;?></option>
		<?php
		}
		?>
	  </select>
  </div>
  <div class="subdv">
  <a href="javascript:void(0)" class="btn btn-alpha"  id="refresh-page">Submit</a>
  
  </div>
<div class="row">
<span class="msg"></span>
</div>
</div>
</div>

</article>
<div class="overlay-verify"></div>
</main>