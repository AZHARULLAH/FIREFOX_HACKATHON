$(document).ready(function(){

	var one;
	var two,three,four,five,six,seven,eight,nine,ten,eleven;

	loaddata(function(){
	
		//alert(one + ten);
	
		var doughnutData = [
				{
					value: one,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Watch a movie/TV"
				},
				{
					value: two,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Gaming on your favourite console"
				},
				{
					value: three,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Read / Pen down something"
				},
				{
					value: four,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Spend some quality time with family"
				},
				{
					value: five,
					color: "#4D5360",
					highlight: "#616774",
					label: "Hang out with friends"
				},
				{
					value: six,
					color: "#4D5360",
					highlight: "#616774",
					label: "Pump some iron in the gym"
				},
				{
					value: seven,
					color: "#4D5360",
					highlight: "#616774",
					label: "Get lazy and sleep"
				},
				{
					value: eight,
					color: "#4D5360",
					highlight: "#616774",
					label: "Go out on a date with girlfriend"
				},
				{
					value: nine,
					color: "#4D5360",
					highlight: "#616774",
					label: "Spend the day coding"
				},
				{
					value: ten,
					color: "#4D5360",
					highlight: "#616774",
					label: "Go on a adventuerous trekking"
				},
				{
					value: eleven,
					color: "#4D5360",
					highlight: "#616774",
					label: "Hit the road for a long trip"
				},

			];
			
	last(doughnutData);
	});
		
	

	
			
function loaddata(cb)
{
	$.ajax({
	type: "POST",
	url: "return.php",
	data: { 'season' : "sunny" }

	}).done(function(data){

		var azhar = JSON.parse(data);
		var boby = [];
		$.each(azhar, function(i, item){

			one = item.movie;
			two = item.gaming;
			three = item.readwrite;
			four = item.family;
			five = item.friends;
			six = item.gym;
			seven = item.sleep;
			eight = item.girlfriend;
			nine = item.coding;
			ten = item.trekking;
			eleven = item.roadtrip;

		})
		
		cb();

		});
		}		

	function last(doughnutData){
	var ctx = document.getElementById("chart-area").getContext("2d");
	window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
	};
})



