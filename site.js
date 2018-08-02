


function initialBar(){
	console.log("out");
	selectBar($(window).width());
}

function selectBar(size){
	option = 1;
	if( 420 <= size){
		option = 1;
	}
	else{
		option = 2;
	}
	let hamburgerNav = '<div><nav class="navbar bar navbar-inverse"><a class="navbar-brand" href="#">Home</a><button class="navbar-toggler hamburger-button-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15"aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarSupportedContent15"><ul class="navbar-nav mr-auto"><li class="nav-item active"><a class="nav-link" href="#">SignIn <span class="sr-only">(current)</span></a></li><li class="nav-item"><a class="nav-link" href="#">Job Seekers</a></li><li class="nav-item"><a class="nav-link" href="#">Employeers</a></li></ul></div></nav></div>';
	let webNav = '<div><nav class="navbar bar navbar-inverse">'
	+ '<a class="navbar-brand" href="#">Home</a>'
	+ '<a class="navbar-brand" href="#">Job Seekers</a>' 
	+ '<a class="navbar-brand" href="#">Employers</a>'
	+ '<a class="navbar-brand" href="#">Sign In</a>'
	+ '</nav></div>';
	if(option == 1){
		document.getElementById('nav').innerHTML = webNav;
	}
	else{
		document.getElementById('nav').innerHTML = hamburgerNav;
	}
}
