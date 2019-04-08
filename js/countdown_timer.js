var limit = 8;
if(localStorage.getItem("ch1-counter")){
	if(localStorage.getItem("ch1-counter") == "Over"){
		var value = limit;
		loadHint1_Login();
	}else{
		var value = localStorage.getItem("ch1-counter");
	}
	}else{
		var value = 0;
	}
//document.getElementById('demo').innerHTML = value;
var timesRun = 0;
var counter = function (){
if(timesRun > limit){
    clearInterval(interval);
    loadHint1_Login();
}
timesRun += 1;
if(value != NaN){
	if(value >= limit){
	  localStorage.setItem("ch1-counter", "Over");
	  timesRun += 1;
	}else{
	  value = parseInt(value)+1;
	  localStorage.setItem("ch1-counter", value);
	}
	var rem = limit - value;
	var mins = Math.floor(rem/60);
	var sec = Math.floor(rem % 60);
	document.getElementById('demo').innerHTML = "Hint: " + mins +"m " + sec + "s ";
}};

var interval = setInterval(function (){counter();}, 1000);



/*---------------------------------------------------------------------------

//----- Method 1 ------------------------------------------------------------
//---------------------------------------------------------------------------
var currentT = new Date();
currentT.setSeconds(currentT.getSeconds()+ 300);
//var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();
var countDownDate = currentT.getTime();
// Update the count down every 1 second
var x = setInterval(function() {
	// Get todays date and time
	var now = new Date().getTime();	
	// Find the distance between now and the count down date
	var distance = countDownDate - now;
	// Time calculations for days, hours, minutes and seconds
	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	var curtime = {"mins": minutes, "sec": seconds };
	localStorage.setItem('countDownValue', JSON.stringify(curtime));	
	// Output the result in an element with id="demo"
	document.getElementById("demo").innerHTML =  "Hint: "+ minutes + "m " + seconds + "s ";
		
	// If the count down is over, write some text 
	if (distance < 0) {
		clearInterval(x);
		document.getElementById("demo").innerHTML = "EXPIRED";
		loadHint1_Login();
	}
}, 1000);
*/
function loadHint1_Login() {
	var urlSend = "42E6AE8EA03B/show_hint.php";
	var value = localStorage.getItem("ch1-counter");
	var param = "store="+value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
		document.getElementById("claude").innerHTML =
		this.responseText;
	  }
	};
	xhttp.open("GET", urlSend+"?"+param, true);
	xhttp.send();
}