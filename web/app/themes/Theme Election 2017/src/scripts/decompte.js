var date_election = new Date(2017, 4, 23, 20, 00);
var coutdown = document.querySelector('#coutdown');
coutdown.innerHTML = timeLeft(date_election);
console.log(timeLeft(date_election))

function timeLeft(date){
	var actual =date.getTime()-new Date().getTime();
	var month= new Date(actual).getMonth()-1;
	var day= new Date(actual).getDate()-1;

	if(day>=7){
		var week = parseInt(day/7);
		var day = day%7;
	}

	return '<strong>'+month+'</strong> MOIS <strong>'+week+'</strong> SEMAINES <strong>'+day+'</strong> JOURS ';

}

var timer = window.setInterval(function() {	


	coutdown.innerHTML= timeLeft(date_election);
	
	
}, 1000);

