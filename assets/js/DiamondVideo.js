
player2 = document.getElementById("DiamondVideo");
player2.addEventListener('click', DVideo);

function DVideo() {
  document.getElementById("Dplayerdiv").style.display = "block";
	document.getElementById("player2").src="media/DiamondDemo.mp4";
	document.getElementById("player2").play();
	document.getElementById("diamondclose").style.display="block";
  document.getElementById("DiamondVideo").style.display="none";
}	

document.getElementById("diamondclose").addEventListener('click',closePlayer2);
function closePlayer2(){
  document.getElementById("Dplayerdiv").style.display = "none";
  document.getElementById("diamondclose").style.display="none";
  document.getElementById("DiamondVideo").style.display="block";
}
