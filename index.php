<!DOCTYPE html>
<html lang="pt-BR">
<head>

  	<title>D3.js experimentation</title>
  	<!-- <script src="https://d3js.org/d3.v5.min.js"></script> -->
  	<script src="./require/d3.min.js"></script>
  	<style>

    .changeColor
    {
      stroke: indigo;
      fill: deeppink;
    }

    .boxes{
      width: 100px;
      height: 100px;
      border: 1px solid black;
      background: pink;
      float: left;
      margin: 10px;
    }
  

  	</style>	
</head> 	
<body>

	<h2>D3.js Experimentation</h2>

  <!--   <button onclick="addClass();">Change</button>
    <button onclick="changeBack();">Change back</button><br/><br/>
    <svg width="500" height="100" id="one">
    	<circle cx="50" cy="50" r="40"></circle>
    	<circle cx="140" cy="50" r="40"></circle>
    	<circle cx="230" cy="50" r="40"></circle>
    	<circle cx="320" cy="50" r="40"></circle>
    </svg><br/><br/>
    <button onclick="addBoxes();">Add</button>
    <div id="parent">
      <div></div>
      <div></div>
      <div></div>
    </div>  -->
    <!-- <button onclick="update();">Change</button><br/><br/>
    <p>First paragraph</p>
    <div>Here goes the result.</div>
    <span></span> -->
    <button onclick="addElement();">Add element</button><br/><br/>
    <div id="parent">
      <p>First paragraph</p>
      <p>Second paragraph</p>
      <p>Third paragraph</p>
    </div>


	<script src="./js/dom.js"></script>
</body>
</html>
