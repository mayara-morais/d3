<!DOCTYPE html>
<html lang="pt-BR">
<head>

  	<title>D3.js experimentation</title>
  	<!-- <script src="https://d3js.org/d3.v5.min.js"></script> -->
  	<script src="./require/d3.min.js"></script>
  	<style>

    button{
      margin-bottom: 20px;
    }

  	</style>	
</head> 	
<body>

	<h2>D3.js Experimentation</h2>

  <button onclick="addSVG();">Add element</button><br/><br/>  
	<script src="./js/dom.js"></script>
  <script>
    function addSVG(){
        var svg = d3.select("body").append("svg").attr("width", 200).attr("height", 200).style("background", "pink");

        svg.append("rect").attr("width", 50).attr("height", 50).style("fill", "indigo")
        // svg.append("circle").attr("r",20).attr("cx",100).attr("cy",100);
        svg.append("g").attr("transform", "translate(35,100)").append("circle").attr("r",20).style("fill","deeppink");
        svg.append("g").attr("transform","translate(35,100)").append("circle").attr("r",20).style("fill","deeppink");;
    }

  </script>  
</body>
</html>
