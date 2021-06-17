<!DOCTYPE html>
<html lang = "en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="How to make your school safe">
<meta name="keywords" content="Product,safety,guns,schools">
<meta name="author" content="Nick Lees">
<title>Safety Field&#153;</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
<link rel = "stylesheet" href = "css/bookstyle_info.css">
</head>
<body style = "margin:0">
    <div class = "wrapper">
        
        <div class = "box logo">
            <a href = "ENindex.php">
                <img src = "img/logo.png" width="115" height="120" alt = "loading...">
            </a>

            <!--the grid area for the logo-->
        </div>
        <div class = "nav">
            <a href = "ENindex.php">Home</a>
            &nbsp;
            |
            &nbsp;
            <a href = "ENabout.php">About Us</a>
            &nbsp;
            |
            &nbsp;
            <a>The Product</a> <!--link left for aesthetics but removed functionality-->
            &nbsp;
            |
            &nbsp;
            <a href = "ENcontact.php">Contact Us</a>
            &nbsp;
            |
            &nbsp;
            <a href = "ENarticle.php">Info</a>
            <!--the grid area for the navigation bar-->
        </div>
        <div class = "box search">
            <input type ="text" id = 'search' name = 'search'>
            <button onclick="selectText()">Search</button>
            <!--the search bar-->
            &nbsp;
            <script>
                function selectText(){
                    
                    var a = document.getElementById('search').value
                    //the search function 
                    var c = String(a)
                    var object = ["student","run","non-profit","solution","viable","provide","american","school","shootings","prevent","awareness","profit","organisation","raise","designed","new zealnd","New Zealand"]
                    for(var b in object){
                        var result = b.localeCompare(c)
                        if (result = 1){
                        window.location.replace("https://projectspace.nz/zhbykgkl/ENabout.php")
                        }
                    }
                    var object = ["schools","safe","ensure","product","guranteed","gurantee","guns","property","kids","child","children","shooting","disable","technology","prevent","usage"]
                    for(var b in object){
                        var result = b.localeCompare(c)
                        if (result = 1){
                        window.location.replace("https://projectspace.nz/zhbykgkl/ENinfo.php")
                        }
                    }
                    var object = ["contact","question"]
                    for(var b in object){
                        var result = b.localeCompare(c)
                        if (result = 1){
                        window.location.replace("https://projectspace.nz/zhbykgkl/ENcontact.php")
                        }
                    }

                }
            </script>
        </div>
        <div class = "box header">
            <h1>The Product</h1>
            <!--the grid area for the header-->
        </div>
        <div class = "box main">
            <div class = "text">
                <p>Our product utilises the latest technology to prevent the usage of guns<br> on school property.
                     Through the use of a radio field surrounding the school<br> and our chips becoming compulsory in all guns, all guns that enter the property<br> are immediately disabled preventing any shootings from occurring.</p>
            </div>
            <div class = "img">
                <img src = "img/Gun.jpg" width="640" height = "426" alt = "loading...">
            </div>
            <!--the grid area for the main area-->
        </div>
        <div class = "box sep">
            &nbsp;
            &nbsp;
            &nbsp;
            <!--the grid area for the seperators-->
        </div>
        <div class = "box footer">
            <p>
            <select name="language" onchange="choice(this.value)">
                <option value="Empty">Please Select a Language</option>
                <option value="EN">English</option>
                <option value="DE">German</option>
            </select>
            <script>
                function choice(value){
                    window.location.assign(`${value}info.php`);
                }
            </script>
            </p>
            <div class = "copyright">
                <p>&#169;2021 Safety Shield&#153; designed by Nick Lees</p>
            </div>
            <!--the grid area for the footer-->
        </div>
    </div>
</body>
</html>
