player = document.getElementById("playButton");
player.addEventListener('click', VideoPlay);

function VideoPlay() {
	document.getElementById("playerdiv").style.display = "block";
	document.getElementById("player").src="media/RESTdemo.mp4";
	document.getElementById("player").play();
	document.getElementById("close").style.display="block";
  document.getElementById("playButton").style.display="none";
}	

document.getElementById("close").addEventListener('click',closePlayer);
function closePlayer(){
  document.getElementById("playerdiv").style.display = "none";
  document.getElementById("close").style.display="none";
  document.getElementById("playButton").style.display="block";
}
