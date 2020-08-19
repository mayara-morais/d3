<!DOCTYPE html>
<html lang="pt-BR">
<head>

  	<title>D3.js experimentation</title>
  	<!-- <script src="https://d3js.org/d3.v5.min.js"></script> -->
  	<script src="./require/d3.min.js"></script>
  	<style>

    p{
      background: black;
      color: white;
      font-size: 30px;
      width: 120px;
      margin: 20px;
      padding: 10px;
    }

    .person{
      background: indigo;
      color: deeppink;
      font-size: 30px;
      width: 120px;
      margin: 20px;
      padding: 10px;
    }

  	</style>	
</head> 	
<body>

    
    <script>

        var length = [25, 45, 65, 85];

        var svg = d3.select("body").append("svg").attr("width", 800).attr("height", 600).style("background", "pink");

        var squares = svg.selectAll("rect").data(length);
        squares.enter().append("rect").attr("width", function(d){return d;})
        .attr("height", function(d){ return d*2;})
        .attr("x", function(d,i){ return 2*(i+1)*d;})
        .attr("y", function(d,i){ return (i+1)*80; })
        .style("fill", "deeppink")
        .style("stroke","indigo")
        .style("stroke-width", 5)
    
    </script> 
</body>
</html>
