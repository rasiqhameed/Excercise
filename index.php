<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple </title>
</head>
<h2>Testing JS here </ph2>
<p id="demo"></p>

<script>
    // for loop in es6
    // {object} 
    const person = {fname:"rasiq" , lname:"Hameed", age:27};
    //[array]
    const cars = ["BMW","Audi","Inova"];
    //declare before loop
    var text = "";
    // for (key in object)
    for( let x in cars)
    {
        text += cars[x] + "<br>";
    }
    document.getElementById("demo").innerHTML = text;
</script>
<body>
    
</body>
</html>

