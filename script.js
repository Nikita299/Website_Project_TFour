function innerMenu(mAction){
	if(mAction=="1"){
		document.getElementById('openMenu').style.display = 'none'; 
		document.getElementById('closeMenu').style.display = 'block'; 
		document.getElementById('iMenu').style.display = 'block'; 
	}else{
		document.getElementById('openMenu').style.display = 'block'; 
		document.getElementById('closeMenu').style.display = 'none'; 
		document.getElementById('iMenu').style.display = 'none'; 
	}
}


