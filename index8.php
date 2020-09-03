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
  <!-- Vertical Chart Bar with labels above -->
    <script>
        var numbers = [31, 25, 35, 18, 9, 14];
        var width = 600;
        var height = 500;
        var svg = d3.select("body").append("svg")
                    .attr("width", width)
                    .attr("height", height)
                    .style("background", "pink");
        var rectangles = svg.selectAll("rect").data(numbers);
        rectangles.enter().append("rect") // o método enter() cria elementos no dom
                    .attr("width", 25)
                    .attr("height", function(d, i){return d*10;})
                    .attr("x", function(d,i){return (i*28);}) // distribue os retangulos ao longo de uma linha
                    .attr("y", function(d,i){return height - (d*10);}) // posiciona cada retangulo na parte inferior do svg.
                    .style("fill", "indigo");
        var data = svg.selectAll("text").data(numbers); // cria um ponteiro para o svg e atribue o d de data ao vetor numbers
        data.enter().append("text")
            .text(function(d){return d;})
            .style("stroke", "red")
            .style("font-size", "15px")
            .attr("x", function(d,i){return 5 + (i*28);}) // i começa no 0.. i é uma variável nativa de índice
            .attr("y", function(d,i){return (height - 5) - (d*10);}) // posiciona os rótulos acima dos valores


    </script> 
</body>
</html>
