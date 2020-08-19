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

  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>

  <button onclick="addSVG();">Add element</button><br/><br/>  
	<script src="./js/dom.js"></script>
  <script>
        var myData = [20, 25, 30, 35, 40];
        d3.selectAll("p").data(myData).text(function(d, i){
            return i;
        }).style("font-size", function(d){
          return d + "px";
        }).classed("changecolor", function(d){
          return d>30;
        });   
  </script>  
</body>
</html>
