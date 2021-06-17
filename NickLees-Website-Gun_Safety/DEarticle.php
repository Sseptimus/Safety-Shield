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
<link rel = "stylesheet" href = "css/bookstyle_article.css">
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
            <a href = "DEindex.php">Start</a> 
            &nbsp;
            |
            &nbsp;
            <a href = "DEabout.php">&#220;ber uns</a>
            &nbsp;
            |
            &nbsp;
            <a href = "DEinfo.php">Das Produckt</a>
            &nbsp;
            |
            &nbsp;
            <a href = "DEcontact.php">Kontaktieren Sie uns</a>
            &nbsp;
            |
            &nbsp;
            <a>Info</a> <!--link left for aesthetics but removed functionality-->
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
                    var object = ["student","run","non-profit","solution","viable","provide","american","school","shootings","prevent","awareness","profit","organisation","raise","designed","new zealnd","New Zealand"]
                    for(var b in object){
                        var result = b.localeCompare(c)
                        if (result = 1){
                        window.location.replace("https://projectspace.nz/zhbykgkl/about.php")
                        }
                    }
                    var object = ["schools","safe","ensure","product","guranteed","gurantee","guns","property","kids","child","children","shooting","disable","technology","prevent","usage"]
                    for(var b in object){
                        var result = b.localeCompare(c)
                        if (result = 1){
                        window.location.replace("https://projectspace.nz/zhbykgkl/info.php")
                        }
                    }
                    var object = ["contact","question"]
                    for(var b in object){
                        var result = b.localeCompare(c)
                        if (result = 1){
                        window.location.replace("https://projectspace.nz/zhbykgkl/contact.php")
                        }
                    }
                }
            </script>

        </div>
        <div class = "box header">
            <h1>Information</h1>
        </div>
        
        <div class = "box main">
            <h2>Diese Seite ist leider nicht in Deutsch verfügbar</h2>
            <h2>Bitte schalten Sie auf Englisch um, um diese Seite zu sehen</h2>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
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
                    window.location.assign(`${value}article.php`);
                }
            </script>
            </p>
            <div class = "copyright">
                <p>&#169;2021 Safety Shield&trade; designed by Nick Lees</p>
            </div>
            <!--the grid area for the footer-->
        </div>
    </div>

</body>
</html>