<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <title>D3.js experimentation 1</title>
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
  <!-- Color Scale -->
    <script>
        //var myNumbers = [3100, 250, 35, 1800, 90, 20, 4200, 140, 965];
        var myNumbers = [12, 43, 25, 83, 2, 50, 67, 22, 98, 75, 67];
        var width = 600;
        var height = 500;

        var myScale = d3.scaleLinear() // Linear Scale
                        .domain([d3.min(myNumbers, function(d){ return d - 50;}), 
                        d3.max(myNumbers, function(d){return d + 50;})]) // maximum and minimum
                        .range([0, height]); 
      
        var colorScale = d3.scaleLinear()
                        .domain([d3.min(myNumbers, function(d){return d;}), 
                                d3.max(myNumbers, function(d){return d;})])
                        .range(["silver", "red"]);               

        for (var i=0; i< myNumbers.length; i++)
        {
          //alert( myNumbers[i] + ": " + myScale(myNumbers[i]) );
        }       

        var svg = d3.select("body").append("svg") // O container
                    .attr("width", width)
                    .attr("height", height)
                    .style("background", "pink");

        var rectangles = svg.selectAll("rect").data(myNumbers);
        rectangles.enter().append("rect") // o método enter() cria elementos no dom
                    .attr("width", 25)
                    .attr("height", function(d, i){return myScale(d);})
                    .attr("x", function(d,i){return (i*28);}) // distribue os retangulos ao longo de uma linha
                    .attr("y", function(d,i){return height - myScale(d);}) // posiciona cada retangulo na parte inferior do svg.
                    .style("fill", function(d){ return colorScale(d);});

        //var data = svg.selectAll("text").data(myNumbers); // cria um ponteiro para o svg e atribue o d de data ao vetor myNumbers


    </script> 
    <script>
       

              
                

    </script>    
</body>
</html>
