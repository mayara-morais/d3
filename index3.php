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

    .changecolor{
      background: deeppink;
      color: indigo;
      width: 50px;
    }

  	</style>	
</head> 	
<body>

	<h2>D3.js Experimentation</h2>

  <svg width="600" height="600" id="one">
      <circle></circle>
      <circle></circle>
      <circle></circle>
      <circle></circle>
      <circle></circle>
  </svg><br/><br/>

  <button onclick="addSVG();">Add element</button><br/><br/>  
	<script src="./js/dom.js"></script>
  <script>
       var myDetails = [{radius: 20, x:50, y:50, color:"red"},
                        {radius: 25, x:150, y:50, color:"deepink"},
                        {radius: 30, x:250, y:50, color:"indigo"},
                        {radius: 35, x:350, y:50, color:"pink"},
                        {radius: 40, x:450, y:50, color:"green"}];  
        d3.selectAll("circle").data(myDetails)
        .attr("r", function(d){ return d.radius}) 
        .attr("cx", function(d){ return d.x})
        .attr("cy", function(d){ return d.y})               
        .attr("fill", function(d){ return d.color})               
  </script>  
</body>
</html>
