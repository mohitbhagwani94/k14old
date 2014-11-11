//file to resize the container according to size of the window

//sizing on loading of the window
window.onload=function(){
	document.getElementById("container").style.height=window.innerHeight-(100+20+70);
}
//sizing on resizing of the window
window.onresize=function(){
	document.getElementById("contaciner").style.height=window.innerHeight-(100+20+70);
}