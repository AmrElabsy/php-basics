/*global document*/


// Sign In & Up Forms

var SU 		= document.getElementById("SU"),
	SI 		= document.getElementById("SI"),
	SignUp 	= document.getElementById("SignUp"),	
	SignIn 	= document.getElementById("SignIn");

	SU.onclick = function() {
		SignIn.style.display = "none";
		SignUp.style.display = "block";
		SU.style.boxShadow = "2px 6px 2px #BBB";
		SI.style.boxShadow = "0px 0px 0px #BBB";
	}

	SI.onclick = function() {
		SignUp.style.display = "none";
		SignIn.style.display = "block";
		SI.style.boxShadow = "2px 6px 2px #BBB";
		SU.style.boxShadow = "0px 0px 0px #BBB";
	}


/*	
	good[2].onclick = function() {
		ads[0].style.display = 'block';
	}

*/