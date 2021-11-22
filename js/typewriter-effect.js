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



