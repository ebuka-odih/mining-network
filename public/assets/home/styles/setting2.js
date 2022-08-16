$(document).ready(function(){
	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();

	var percent 	= [10,12,15,20,25,30];
	var minMoney 	= [20,2001,5001,10001,25001,50001];
	var maxMoney	= [2000,5000,10000,50000, 500000];
	$("#amount").val(minMoney[0]);
	
	//Calculator
	function calc(){
		amount = parseFloat($("#amount").val());
		id = -1;
		var length = percent.length;
		var i = 0;
		do {
			if(minMoney[i] <= amount && amount <= maxMoney[i]){
				id = i;
				i = i + length;
			}
			i++
		}
		while(i < length)
		
		if(id != -1){

			profitHourly = amount / 100 * percent[id];
			profitHourly = profitHourly.toFixed(2);
			profitDaily = amount / 100 * percent[id];
			profitDaily = profitDaily.toFixed(2);
			profitWeekly = profitDaily * 7;
			profitWeekly = profitWeekly.toFixed(2);
			profitMonthly = profitWeekly * 4;
			profitMonthly = profitMonthly.toFixed(2);


			if(amount < minMoney[id] || isNaN(amount) == true){
				$("#profitHourly").text("Error!");
				$("#profitDaily").text("Error!");
				$("#profitWeekly").text("Error!");
				$("#profitMonthly").text("Error!");
			} else {
				$("#profitHourly").text(profitHourly + " USD");
				$("#profitDaily").text(profitDaily + " USD");
				$("#profitWeekly").text(profitWeekly + " USD");
				$("#profitMonthly").text(profitMonthly + " USD");
			}
		} else {
			$("#profitHourly").text("Error!");
			$("#profitDaily").text("Error!");
			$("#profitWeekly").text("Error!");
			$("#profitMonthly").text("Error!");
		}
	}
	if($("#amount").length){
		calc();
	}
	$("#amount").keyup(function(){
		calc();
	});

});
