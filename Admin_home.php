
<!DOCTYPE html>
<html>
    <head>
        <title>Home/Sports/Cricket</title>
	
        <link rel="stylesheet" href="CSS/Admin_home.css"/>
	    <link rel="stylesheet" href="CSS/Admin_home1.css"/>
        <style>
          .money{
              width:670px;
              height:100px;
	background-color:purple;
	position:absolute;
	top:500px;
        padding:15px;line-height:60px;
		} .money p , .money b , .money i{font-size:40px;line-height:40px;}
	
	    </style>
    </head> 
    <body>
        
	 <div class="menu">   
	<div id="sidebar">
        <div class="toggle" onclick="gg()" >
             <span></span> 
             <span></span>
             <span></span>
          </div>
    
	<img src="https://t3.ftcdn.net/jpg/00/94/45/72/240_F_94457263_BtdFoRIdMnTzLoaxAaAbDMoqgqYpedsf.jpg" width="200px"
	    height="200px" style="border:1px solid black;border-radius:50%;position:absolute;left:220px;top:100px;padding:20px;"/>      
     
	   <p id="Name">Name</p>
		
		<div class="money">
                <p>Available Balance&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>&#x20B9 </b><i id="availablebalance">0</i></p>
		</div>
		
	    <div class="block" style="width:660px;position:absolute;top:600.5px;margin-top:30px;padding:20px; height:1000px;background-color:white;">
            <ul>
        <li><a href="#">Home</a></li>
	    <li><a href="#">How to play</a></li>
        <li><a href="#">Your Matches</a></li>
        <li><a href="#">Point System</a></li><hr>
        <li><a href="#">About Us</a></li>
	<li><a href="#">Terms and conditions</a></li>
	</ul></div>
		    
			 
		
</div>
	</div>  
      <div class="main" id="zz">
	  <h1>PLAY 11</h1>
         <div class="r" style="margin-left:0px;margin-right:0px;padding:0px;background-color:rgb(66,137,185);width:100%;height:130px;"> <h3>Cricket</h3></div>
	     
	      
	      
	      <div class="mbox" onclick="fun(1);">
	     <figure> 
		     <img src="https://i.pinimg.com/236x/64/34/72/64347217c361eb874da10a17b72dabe4.jpg" class="img1"/>
		     <figcaption>MI</figcaption>
             </figure>
		      <p>Indian Premier League</p>
	     <figure> 
	     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3Qwttju0b60Pmi-VAXVR2fBvHP1yzcrEATDANuWvHvP--WyH7" class="img2"/>
		     <figcaption class="cap">CSK</figcaption>
             </figure>	      
	      
    <table class="counter">
	    <tr class="time">
	    <td id="days"></td>
	<td id="hours"></td>
	<td id="minutes"></td>
	<td id="seconds"></td>
	    </tr>
   </table>
		      
		      <script>	
        counter();
        
function counter() { 
     var currentdate = new Date(); 
var matchdate = 
 new Date("May 1,2019 00:00:00");      
var presenttime = currentdate.getTime(); 
var matchtime = matchdate.getTime(); 
var rtime = matchtime - presenttime ; 
var s1 = Math.floor(rtime/1000); 
var m1 = Math.floor(s1/60); 
var h1 = Math.floor(m1/60); 
var d1 = Math.floor(h1/24); 
h1 %= 24; 
m1 %= 60; 
s1 %= 60; 
h1 = (h1<10)? "0"+h1 : h1; 
m1 = (m1<10)? "0"+m1 : m1; 
s1 = (s1<10)? "0"+s1 : s1;
 document.getElementById("days").innerHTML = d1 + "d :"; document.getElementById("hours").innerHTML = h1 + "h :"; document.getElementById("minutes").innerHTML = m1 + "m :"; document.getElementById("seconds").innerHTML = s1 + "s"; 
setTimeout(counter,1000);
 }
        
        </script>
		      
	    </div>
	    
	      
	      
	      
	      <div class="mbox">
	     <figure> 
		     <img src="https://i.pinimg.com/236x/64/34/72/64347217c361eb874da10a17b72dabe4.jpg" class="img1"/>
		     <figcaption>RCB</figcaption>
             </figure>
		      <p style="font-size:45px;color:black;position:absolute;left:250px;top:615px;float:left;">Indian Premier League</p>
	     <figure> 
	     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3Qwttju0b60Pmi-VAXVR2fBvHP1yzcrEATDANuWvHvP--WyH7" style=" width:150px;
      height:150px;
      margin:5px;
      border:1px solid black;
      border-radius:50%;	
      padding:5px;
      position:absolute;
      right:50px;
	top:630px; "  />
		     <figcaption style="position:absolute;
      right:90px;
	top:795px;">KKR</figcaption>
             </figure>	      
	      
    <table style="position:absolute;left:270px;top:790px;">
	    <tr class="time">
	    <td id="day"></td>
	<td id="hour"></td>
	<td id="minute"></td>
	<td id="second"></td>
	    </tr>
   </table>
		      
		 <script>	
        counter1();
        
function counter1() { 
     var currentdate = new Date(); 
var matchdate = 
 new Date("May 20,2019 00:00:00");      
var presenttime = currentdate.getTime(); 
var matchtime = matchdate.getTime(); 
var rtime = matchtime - presenttime ; 
var s1 = Math.floor(rtime/1000); 
var m1 = Math.floor(s1/60); 
var h1 = Math.floor(m1/60); 
var d1 = Math.floor(h1/24); 
h1 %= 24; 
m1 %= 60; 
s1 %= 60; 
h1 = (h1<10)? "0"+h1 : h1; 
m1 = (m1<10)? "0"+m1 : m1; 
s1 = (s1<10)? "0"+s1 : s1;
 document.getElementById("day").innerHTML = d1 + "d :"; document.getElementById("hour").innerHTML = h1 + "h :"; document.getElementById("minute").innerHTML = m1 + "m :"; document.getElementById("second").innerHTML = s1 + "s"; 
setTimeout(counter1,1000);
 }
        
        </script>           
	    </div>
	      
	      
	      
	      
	      <div class="mbox">
	     <figure> 
		     <img src="https://i.pinimg.com/236x/64/34/72/64347217c361eb874da10a17b72dabe4.jpg" class="img1"/>
		     <figcaption>RCB</figcaption>
             </figure>
		      <p style="font-size:45px;color:black;position:absolute;left:250px;top:925px;float:left;">Indian Premier League</p>
	     <figure> 
	     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3Qwttju0b60Pmi-VAXVR2fBvHP1yzcrEATDANuWvHvP--WyH7" style=" width:150px;
      height:150px;
      margin:5px;
      border:1px solid black;
      border-radius:50%;	
      padding:5px;
      position:absolute;
      right:50px;
	top:940px; "  />
		     <figcaption style="position:absolute;
      right:90px;
	top:1110px;">KKR</figcaption>
             </figure>	      
	      
    <table style="position:absolute;left:270px;top:1100px;">
	    <tr class="time">
	    <td id="da"></td>
	<td id="hou"></td>
	<td id="minut"></td>
	<td id="secon"></td>
	    </tr>
   </table>
		      
		 <script>	
        counter2();
        
function counter2() { 
     var currentdate = new Date(); 
var matchdate = 
 new Date("april 29,2019 06:00:00");      
var presenttime = currentdate.getTime(); 
var matchtime = matchdate.getTime(); 
var rtime = matchtime - presenttime ; 
var s1 = Math.floor(rtime/1000); 
var m1 = Math.floor(s1/60); 
var h1 = Math.floor(m1/60); 
var d1 = Math.floor(h1/24); 
h1 %= 24; 
m1 %= 60; 
s1 %= 60; 
h1 = (h1<10)? "0"+h1 : h1; 
m1 = (m1<10)? "0"+m1 : m1; 
s1 = (s1<10)? "0"+s1 : s1;
 document.getElementById("da").innerHTML = d1 + "d :"; document.getElementById("hou").innerHTML = h1 + "h :"; document.getElementById("minut").innerHTML = m1 + "m :"; document.getElementById("secon").innerHTML = s1 + "s"; 
setTimeout(counter2,1000);
 }
        
        </script>  
	    </div>
	      
	
	
	      
	      
	      
	      <div class="mbox">
	     <figure> 
		     <img src="https://i.pinimg.com/236x/64/34/72/64347217c361eb874da10a17b72dabe4.jpg" class="img1"/>
		     <figcaption>RCB</figcaption>
             </figure>
		      <p style="font-size:45px;color:black;position:absolute;left:250px;top:1235px;float:left;">Indian Premier League</p>
	     <figure> 
	     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3Qwttju0b60Pmi-VAXVR2fBvHP1yzcrEATDANuWvHvP--WyH7" style=" width:150px;
      height:150px;
      margin:5px;
      border:1px solid black;
      border-radius:50%;	
      padding:5px;
      position:absolute;
      right:50px;
	top:1250px;"/>
		     <figcaption style="position:absolute;
      right:90px;
	top:1425px;">KKR</figcaption>
             </figure>	      
	      
    <table style="position:absolute;left:270px;top:1430px;">
	    <tr class="time">
	    <td id="dt"></td>
	<td id="ho"></td>
	<td id="minu"></td>
	<td id="seco"></td>
	    </tr>
   </table>
		      
		 <script>	
        counter3();
        
function counter3() { 
     var currentdate = new Date(); 
var matchdate = 
 new Date("april 29,2019 06:00:00");      
var presenttime = currentdate.getTime(); 
var matchtime = matchdate.getTime(); 
var rtime = matchtime - presenttime ; 
var s1 = Math.floor(rtime/1000); 
var m1 = Math.floor(s1/60); 
var h1 = Math.floor(m1/60); 
var d1 = Math.floor(h1/24); 
h1 %= 24; 
m1 %= 60; 
s1 %= 60; 
h1 = (h1<10)? "0"+h1 : h1; 
m1 = (m1<10)? "0"+m1 : m1; 
s1 = (s1<10)? "0"+s1 : s1;
 document.getElementById("dt").innerHTML = d1 + "d :"; document.getElementById("ho").innerHTML = h1 + "h :"; document.getElementById("minu").innerHTML = m1 + "m :"; document.getElementById("seco").innerHTML = s1 + "s"; 
setTimeout(counter3,1000);
 }
        
        </script>  
	    </div>    
	      
	      
	     
	      </div>
	      <script>
    var i=0;
    function gg()
{  
document.getElementById("sidebar").classList.toggle('active');
i++;
  ff(i);
}
function ff(i){
   if((i%2)!=0) 
   {  
      document.getElementById("zz").style.display="none";
   }
else
{
   document.getElementById("zz").style.display="block"; 
}
}
      </script>      












     


    </body>
</html>