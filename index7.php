<!DOCTYPE html>
<html lang="pt-BR">
<head>

  	<title>D3.js experimentation</title>
  	<!-- <script src="https://d3js.org/d3.v5.min.js"></script> -->
  	<script src="./require/d3.min.js"></script>
  	<style>

      div
      {
        height: 25px;
        margin: 10px;
        background: pink;
        color: red;
        text-align: center;
      }

  	</style>	
</head> 	
<body>
  <!-- Horizontal Chart Bar -->
    <script>
      var numbers = [31, 25, 35, 18, 9 ,14];
      var bars = d3.select("body").selectAll("div").data(numbers);
      bars.enter().append("div")
          .style("width", function(d){
            return (d*10) + "px";
          })
          .text(function(d){
            return d;
          })
        
    </script> 
</body>
</html>
