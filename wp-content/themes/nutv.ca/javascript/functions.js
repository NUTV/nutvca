// JavaScript Document

	var count = 0;
	function slide(var1, var2, len) {		
		if (count == 1) {
			divId = document.getElementById(var1);
			divContentId = document.getElementById(var2);
			divId.style.height = "0px";
			divContentId.style.display = "none";
			count = 0;
			
		} else {		
			divId = document.getElementById(var1);
			divContentId = document.getElementById(var2);
			divContentId.style.display = "inline";
			divId.style.height = len;
			count = 1;
			
		}
	}
	
function showMap(mapName) {
	mapToOpen = document.getElementById(mapName);
	mapToOpen.style.display = "inline";
}
function hideMap(mapName) {
	mapToClose = document.getElementById(mapName);
	mapToClose.style.display = "none";
}