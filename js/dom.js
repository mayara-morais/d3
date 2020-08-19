// d3.selectAll("p").style("color", "blue");
// d3.select("body").style("background-color", "black");
// d3.select("body").style("background-color", "black");
// d3.select("h2").style("color", "white");

// d3.selectAll("p").style("color", function() {
//   return "hsl(" + Math.random() * 360 + ",100%,50%)";
// });

// d3.selectAll("p").style("color", function(d, i) {
//   return i % 2 ? "#ffff43" : "#eee";
// });


// d3.select("rect:nth-child(2)").style("fill", "pink");

// d3.select("#container").style("background","pink");
// d3.select("p").style("color", "red");
// // d3.selectAll("p").style("color", "red");
// // d3.selectAll("#inside").style("color", "red");

// d3.selectAll("circle").style("fill","indigo");
// // d3.selectAll("#two circle").style("fill","deeppink");
// // d3.selectAll("circle:nth-child(2)").style("fill","deeppink");
// d3.selectAll("#one circle:nth-child(even), #two circle:nth-child(odd)").style("fill","deeppink");
// d3.selectAll("#one circle:nth-child(odd), #two circle:nth-child(even)").style("fill","blue");

// function strokeWidth(data, index){
// 	return index*3;
// }

// function changeLook(){
// 	d3.selectAll("circle").style("stroke", "deeppink").style("fill", "indigo").style("stroke-width", strokeWidth);
// 	d3.selectAll("rect").style("stroke", "deeppink").style("fill", "indigo").style("stroke-width", "4");
// 	d3.selectAll("rect").style("opacity", function(){
// 		return Math.random();
// 	});
// }

// function addClass(){
// 	d3.selectAll("circle").classed("changeColor", true);
// }

// function changeBack(){
// 	d3.selectAll("circle").classed("changeColor", function(d,i){
// 		if(i%2 == 0)
// 			return true;
// 		else
// 			return false;
// 	});
// }

// function addBoxes(){
// 	d3.selectAll("div").classed("boxes", true);
// }


// function update(){
// 	// d3.selectAll("circle").attr("r","20");
// 	// d3.selectAll("circle").attr("r", function(){
// 	// 	return Math.random() * 40;
// 	// });
// 	d3.selectAll("circle").attr("cy", function(d,i){
// 		return i * 200;
// 	});

// 	d3.select("input[type=checkbox]").property("checked", true);

// }

// function update()
// {
// 	d3.select("p").text("New Cotent");
// 	d3.select("div").html("<b> New content </b>");
// 	d3.select("span").text("New Cotent");
// }

// function addElement(){
// 	d3.select("#parent").insert("p","p").text("Last paragraph").style("font-weight","bold");
// }


