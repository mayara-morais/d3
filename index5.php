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
<!-- No: of Elements = No: of Data Points (Update Selection) -->
    <!-- <p>Chair 1</p>
    <p>Chair 2</p>
    <p>Chair 3</p>
    <p>Chair 4</p> -->
    
    <!-- No: of Data Points  > No: of Elements (Enter Selection) -->
<!--     <p>Chair 1</p>
    <p>Chair 2</p>
    <p>Chair 3</p>
    <p>Chair 4</p>
     -->
    <!-- No:of Data Points < No:of Elements (Exit Selection) -->
<!--     <p>Chair 1</p>
    <p>Chair 2</p>
    <p>Chair 3</p>
    <p>Chair 4</p> -->

    <!-- generic case -->
    
    <script>
        // var myData = ["Person 1", "Person 2", "Person 3", "Person 4"];
        // d3.selectAll("p").data(myData).text(function(d)
        //     {return d;}).classed("person", true); 
        
        // var myData = ["Person 1", "Person 2", "Person 3", "Person 4", "Person 5", "Person 6"];
        // var update = d3.selectAll("p").data(myData);
        // update.enter().append("p").merge(update).text(function(d){return d;}).classed("person", true); 
        
        // var myData = ["Person 1", "Person 2"];
        // var update = d3.selectAll("p").data(myData);
        // update.exit().remove();
        // update.text(function(d)
        //     {return d;}).classed("person", true);

        var myData = ["Person 1", "Person 2", "Person 3", "Person 5"];
        var update = d3.selectAll("p").data(myData);
       //update.exit().remove();
        update.enter().append("p").merge(update).text(function(d, i){return d+i;}).classed("person", true); ;

    </script> 
</body>
</html>
