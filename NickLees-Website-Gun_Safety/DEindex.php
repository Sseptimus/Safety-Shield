<!DOCTYPE html>
<html lang = "en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="How to make your school safe">
<meta name="keywords" content="Product,safety,guns,schools">
<meta name="author" content="Nick Lees">
<link rel="shortcut icon" href="img/logo.png">
<title>SicherheitsSchild&#153;</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
<link rel = "stylesheet" href = "css/bookstyle.css">
</head>
<body style = "margin:0">
    <div class = "wrapper">
        
        <div class = "box logo">
            <a href = "DEindex.php">
                <img src = "img/logo.png" width="115" height="120" alt = "loading...">
            </a>

            <!--the grid area for the logo-->
        </div>
        <div class = "box nav">
            <a>Start</a> <!--link left for aesthetics but removed functionality-->
            &nbsp;
            |
            &nbsp;
            <a href = "DEabout.php">&#220;ber uns</a>
            &nbsp;
            |
            &nbsp;
            <a href = "DEinfo.php">das Produkt</a>
            &nbsp;
            |
            &nbsp;
            <a href = "DEcontact.php">Kontaktieren Sie uns</a>
            &nbsp;
            |
            &nbsp;
            <a href = "DEarticle.php">Info</a>
            <!--the grid area for the navigation bar-->
        </div>
        <div class = "box search">
            <input type ="text" id = 'search' name = 'search'>
            <button onclick="selectText()">Suche</button>
            <!--the search bar-->
            &nbsp;
            <script>
                function selectText(){
                    
                    var a = document.getElementById('search').value
                    
                    var c = String(a)
                    var object = ["student","run","non-profit","solution","viable","provide","american","school","shootings","prevent","awareness","profit","organisation","raise","designed"]
                    for(var b in object){
                        var result = b.localeCompare(c)
                        if (result = 1){
                        window.location.replace("https://projectspace.nz/zhbykgkl/about.php")
                        }
                    }
                    var object = ["schools","safe","ensure","product","guranteed"]
                    for(var b in object){
                        var result = b.localeCompare(c)
                        if (result = 1){
                        window.location.replace("https://projectspace.nz/zhbykgkl/info.php")
                        }
                    }
                }
            </script>

        </div>
            
        
        <div class = "box header">
            <h1>SicherheitsSchild&#153;</h1>
            <!--the grid area for the header-->
        </div>
        <div class = "box main">
            <a href="DEabout.php">
                <img src ="img/hall.jpg" width="640" height="388" style="float:left" alt = "loading...">
            </a>
            <div class="text">
            <p>Wir sind eine von Schülern geführte gemeinnützige<br> Organisation, die das Bewusstsein schärfen und<br> eine praktikable Lösung für amerikanische Schulen<br> zur Verhinderung von Schießereien an Schulen anbieten will</p>
            </div>
            <!--the grid area for the main area-->
        </div>
        <div class = "box sep">
            <br>
            <!--the grid area for the seperators-->
        </div>
        <div class = "box main2">
            <!--the grid area for the secondary main area-->
            <div class = "img">
            <a href ="DEproduct.php">
                <img src = "img/fence.jpg" width="640" height ="359" alt = "loading...">
            </a>
        </div>
            <div class="text">
                <p>Unser Produkt ist ein garantierter Weg,<br> um sicher zu stellen, dass deine Schule sicher bleibt</p>
                
            </div>
            
        </div>
        <div class = "box sep2">
            &nbsp;
            &nbsp;
            &nbsp;
            <!--the grid area for the seperators-->
        </div>
        <div class = "box main3">
            <!--the grid area for the tertiary main area-->
            <div class = "img">
                <a href ="DEproduct.php">
                    <img src = "img/contact.jpg" width="640" height ="426" alt = "loading...">
                </a>
            </div>
            <div class ="text">
                <br>
                <p>Nehmen Sie einfach über unser Formular Kontakt<br> mit uns auf</p>
            </div>
        </div>
        <div class = "box footer">
            <p>
            <select name="language" onchange="choice(this.value)">
                <option value="Empty">Wählen Sie eine Sprache</option>
                <option value="EN">Englisch</option>
                <option value="DE">Deutsch</option>
            </select>
            <script>
                function choice(value){
                    window.location.assign(`${value}index.php`);
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