$(function() {
	var pointVal;
	var lotteryNum;
	$("#submit").click(function() {
		var badValue = 0;
		var count = 0;
		$(".lotteryvalue").each(function() {
			if($(this).val() == "") {
				badValue = 1;
			}
			else if(/^\d+$/.test($(this).val()) == false) {
				badValue = -1;
			}
			else {
				if(count == 0) {
					pointVal = $(this).val();
				}
				else if(count == 1) {
					lotteryNum = $(this).val();
				}
			}
			count++;
		})
		if(badValue == 1) {
			$('#flasherror').html("<p class='alert-box'>You forgot to enter in a value!</p>");
		}
		else if(badValue == -1) {
			$('#flasherror').html("<p class='alert-box'>You entered a non-numerical value!</p>");
		}
		else {
			$('#flasherror').html("");
			$('#options').load("http://idealsans.com/shaft13/projectedhousingcounts/get-options.php", {pointValue: pointVal, lotteryNumber: lotteryNum});
		}
	});
});