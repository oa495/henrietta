var fpImage1 = document.getElementsByClassName("fp-image")[0];
var fpImage2 = document.getElementsByClassName("fp-image")[1];


function changeBackground() {
	var body = document.getElementsByClassName("daBody")[0];
    var theBackground = document.getElementsByClassName('background')[0];
    console.log(theBackground.style.backgroundColor);
    if (body.style.backgroundColor == "white") {
    	body.style.backgroundColor = "rgb(255, 218, 241)";
    	theBackground.style.backgroundColor = "white";
    }
    else  {
    	body.style.backgroundColor = "white";
    	theBackground.style.backgroundColor = "rgb(255, 218, 241)";
    	//injectStyles('b-nav-item:hover { border-bottom: 6px solid rgb(225, 218, 241); }')
    }
   // console.log('ayee');
}


fpImage1.addEventListener("mouseover", changeBackground, false);
fpImage2.addEventListener("mouseover", changeBackground, false);

/*function injectStyles(rule) {
  var div = document.createElement('div');
  div.innerHTML = '&shy;<style>' + rule + '</style>';
  document.body.appendChild(div.childNodes[1]);
}

/*** NAV ITEMS **/