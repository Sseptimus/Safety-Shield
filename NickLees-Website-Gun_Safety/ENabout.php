<!DOCTYPE html>
<html lang = "en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="How to make your school safe">
<meta name="keywords" content="Product,safety,guns,schools">
<meta name="author" content="Nick Lees">
<title>Safety Shield&#153;</title>
<link rel = "stylesheet" href = "css/bookstyle_about.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
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
            <a>About Us</a> <!--link left for aesthetics but removed functionality-->
            &nbsp;
            |
            &nbsp;
            <a href = "ENinfo.php">The Product</a>
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
            <h1>About Us</h1>
            <!--the grid area for the header-->
        </div>
        <div class = "box main">
           <div class = "text">
               <p>We are a student run organisation based in New Zealand trying to solve the school shootings crisis<br> in America. Our aim is to prevent all school shootings in America by 2025 through the use of our<br> new technology the Safety Shield&#153;</p>
               <br>
               <p>Our key values are:</p>
               <ul>
                   <li><p>Safety</p></li>
                   <li><p>Security</p></li>
                   <li><p>Respect</p></li>
                   <li><p>Courage</p></li>
               </ul>
           </div>
            <div class = "img">
                <img src = "img/peace.jpg" width = "640" height = "452" alt = "loading...">
            </div>
            <!--the grid area for the main area-->
        </div>
        <div class = "box sep">
            &nbsp;&nbsp;
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
                    window.location.assign(`${value}about.php`);
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
