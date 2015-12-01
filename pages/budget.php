<!DOCTYPE html>
<!--
Budget Page of Kiss My Budget App
-->
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Home | KrystalSnyder.com</title>
<!--        <link rel="stylesheet" type="text/css"
  media="screen" href="style/normalize.css" />-->
        <meta name="author" content="Krystal Snyder">
        <meta name="description" content="This is a mobile application being developed by BYU-I students to use for budgetting.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            function budgetList(){
                
                // get span tag. span tags only include the input tag
                var elmnt = document.getElementsByTagName("SPAN")[0];
                var cln = elmnt.cloneNode(true);
                var budgetListing = document.getElementById("budget-listing");
                budgetListing.appendChild(cln);
                
            
            }
            // save the data
            function save(){
                    var eName = document.getElementById('expenseName').value;
                    localStorage.setItem('text', eName);
            }
                //load the data 
            function load(){
                var storedValue = localStorage.getItem('text');
                if(storedValue){
                    document.getElementById('expenseName').value = storedValue;
                }   
            }
        </script>
    </head>
    <body id="home" onload="load()">
        <header role="banner">
            <div>
                <h1>Budget</h1>
            </div>
        </header>
        <nav role="navigation">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/nav.php'; ?>
            </div>
        </nav>
        <main role="main">
            <h1>Your Budget</h1>
            <p>This is your Budget. You can make goals for coming days, months, and years as well as add and remove budget items.</p>
        </main>
        <aside role="complementary">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/user.php'; ?>
            </div>
        </aside>
        <div id="budget-list">
            <button onclick="budgetList()">Add New Row</button>
            <input type="button" value="save" onclick="save()" />
            <ul class="title">
                <li class="title">Item</li>
                <li class="title">Expected</li>
                <li class="title">Actual</li>
            </ul>
            <ul id="budget-listing">
                <li><span><input type="text" id="expenseName" ><input type="text" id="expectedExpense" value="enter expected expense"><input type="text" id="actualExpense" value="enter actual expense"></span></li>
                <li><span><input type="text" id="expenseName" value=""><input type="text" id="expectedExpense" value="enter expected expense"><input type="text" id="actualExpense" value="enter actual expense"></span></li>
                <li><span><input type="text" id="expenseName" value="enter expensive name"><input type="text" id="expectedExpense" value="enter expected expense"><input type="text" id="actualExpense" value="enter actual expense"></span></li>                    
            </ul>
        </div><!-- budget-list -->
        <footer role="contentinfo">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/footer.php'; ?>
            </div>
        </footer>
    </body>
</html>
