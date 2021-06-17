<!DOCTYPE html>
<html lang = "en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="How to make your school safe">
<meta name="keywords" content="Product,safety,guns,schools">
<meta name="author" content="Nick Lees">
<title>SicherheitsSchild&#153;</title>
<link rel = "stylesheet" href = "css/bookstyle_about.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
</head>
<body style = "margin:0">
    <div class = "wrapper">
        
        <div class = "box logo">
            <a href = "DEindex.php">
                <img src = "img/logo.png" width="115" height="120" alt = "loading...">
            </a>

            <!--the grid area for the logo-->
        </div>
        <div class = "nav">
            <a href = "DEindex.php">Start</a>
            &nbsp;
            |
            &nbsp;
            <a>&#220;ber uns</a> <!--link left for aesthetics but removed functionality-->
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
                    //the code for the search bar
                    var a = document.getElementById('search').value
                    
                    var c = String(a)
                    var object = ["student","run","non-profit","solution","viable","provide","american","school","shootings","prevent","awareness","profit","organisation","raise","designed"]
                    for(var b in object){
                        var result = b.localeCompare(c)
                        if (result = 1){
                        window.location.replace("https://projectspace.nz/zhbykgkl/about.php")
                        }
                    }
                }
            </script>
        </div>
        <div class = "box header">
            <h1>&#220;ber uns</h1>
            <!--the grid area for the header-->
        </div>
        <div class = "box main">
            <div class = "text">
                <p>Wir sind eine von Studenten geführte Organisation mit Sitz in Neuseeland, die versucht,<br> die Krise der Schulschießereien in Amerika zu lösen. Unser Ziel ist es, alle Schulschießereien <br> in Amerika bis 2025 durch den Einsatz unserer neuen Technologie, dem Safety Shield, zu verhindern.</p>
                <br>
                <p>Unsere wichtigsten Werte sind</p>
                <ul>
                    <li><p>Sicherheit</p></li>
                    <li><p>Respekt</p></li>
                    <li><p>Mut</p></li>
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
                <option value="Empty">Wählen Sie eine Sprache</option>
                <option value="EN">Englisch</option>
                <option value="DE">Deutsch</option>
            </select>
            <script>
                function choice(value){
                    window.location.assign(`${value}about.php`);
                }
                //the code for the translator
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