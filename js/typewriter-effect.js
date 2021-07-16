var i = 0;
var j = 0;
var txt1 = 'My Name is Joseph Whittle';
var txt2 = 'I am a Web Developer';
var speed = 50;


function typeWriter() {
  if (i < txt1.length) {
    document.getElementById("typewriter-hook-title").innerHTML += txt1.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }

  if(i >= txt1.length && j < txt2.length){
    document.getElementById("typewriter-hook-subtitle").innerHTML += txt2.charAt(j);
    j++;
    setTimeout(typeWriter, speed);
  }
}

//run the function
typeWriter();












//DO THIS LATER IF YOU HAVE TIME YOU ARE WASTING TIME

//To do list
//run delay on the entire functionality
//Run so long the counter is below the length
// get the actual place you want the 

var j = 0;
function typeyWriter (text) {
  //first hide the og text
  if(j=0) {
    text.innerHTML.text = "";
  }
  if (j < text.length) {
  
  }
}



