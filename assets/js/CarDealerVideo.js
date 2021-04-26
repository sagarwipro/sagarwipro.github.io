player = document.getElementById("CarDealerVideo");
player.addEventListener('click', carVideo);

function carVideo() {
	document.getElementById("playerdiv").style.display = "block";
	document.getElementById("player").src="media/CarDealerDemo.mp4";
	document.getElementById("player").play();
	document.getElementById("carclose").style.display="block";
  document.getElementById("CarDealerVideo").style.display="none";
}			


	document.getElementById("carclose").addEventListener('click',closePlayer);
	function closePlayer(){
		document.getElementById("playerdiv").style.display = "none";
		document.getElementById("carclose").style.display="none";
    document.getElementById("CarDealerVideo").style.display="block";
	}