
function shoot() {
	d1 = Math.floor(Math.random() * 6) + 1;
	d2 = Math.floor(Math.random() * 6) + 1;
	dice = d1 + d2;
	return dice;
}

var passline = [7,11];
var dontline = [2,3,12];

var comelist = [2,3,7,11,12];
var pointnumbers = [4,5,6,8,9,10]; //set list of numbers points can be established on

var craps = {
	point_on: false,
	point : 0,
	roll_hist : [], // empty array to track history of rolls
	init : () => {
		craps.hdstand = document.getElementById("deal-stand");
        craps.hdpoints = document.getElementById("deal-points");
        craps.hdhand = document.getElementById("deal-cards");
        craps.hpstand = document.getElementById("play-stand");
        craps.hppoints = document.getElementById("play-points");
        craps.hphand = document.getElementById("play-cards");
        craps.hpcon = document.getElementById("play-control");
        craps.bank = document.getElementById("player-bank"); //working to here
	},
	checkopen : () => {
		// first check on come out
		if (passline.includes(craps.point)==true) {
			//passline wins
			p=1; //filler
		}
		else if (dontline.includes(craps.point)==true) {
			//dont pass wins
			d=1; //filler
		}

	},
	startgame : () => {
		//craps.d1 = Math.floor(Math.random() * 6) + 1;
		//craps.d2 = Math.floor(Math.random() * 6) + 1;
		craps.roll = shoot();
		if (comelist.includes(craps.roll) == true) {
			craps.checkopen;	
		}
		else if (pointnumbers.includes(craps.roll)) {
			craps.point_on = true;
			craps.point = craps.roll;
			craps.shooter_on;
		}
	},
		// should end function here and make next stage in sequence

	shooter_on : () => {
		// while the point is on, shooter keeps going until off again
		while (craps.point_on==true) { 
			craps.roll = shoot();
			// first check for 
			if (craps.roll == craps.point) {
				pass = "win";
				craps.point_on = false;
			}
			else if (craps.roll==7) {
				dontpassbettors = "win";
				craps.point_on = false;
			}
			else {
				// keep shooting if not point or 7 out
				// add side bet options
				keepshooting = true;
				
			}
		}
	},
}