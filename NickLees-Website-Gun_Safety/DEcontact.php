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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "css/bookstyle_contact.css">
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
                <a href = "DEabout.php">&#220;ber uns</a>
                &nbsp;
                |
                &nbsp;
                <a href = "DEinfo.php">das Produkt</a>
                &nbsp;
                |
                &nbsp;
                <a>Kontaktieren Sie uns</a> <!--link left for aesthetics but removed functionality-->
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
                }
            </script>
            </div>
            <div class = "box header">
                <h1>Kontaktieren Sie uns</h1>
                <!--the grid area for the header-->
            </div>
            <div class = "box main">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScomYeSXnC9t4WgSt14OSqB7VsChk-YvzNE1yz80GIDW1SZHg/viewform?embedded=true" width="640" height="673" frameborder="0">Loading…</iframe>
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
                        window.location.assign(`${value}contact.php`);
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