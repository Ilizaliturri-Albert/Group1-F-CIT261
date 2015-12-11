<!DOCTYPE html>
<!--
Budget Page of Kiss My Budget App
-->
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Home | KrystalSnyder.com</title>
<link rel="stylesheet" type="text/css"
      media="screen" href="/style/style.css"/>
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
            </header>
              
            <nav role="navigation">
                
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/nav.php'; ?>
                
            </nav>
        <main role="main">
            <div id="pageheader">
                <h1>Your Budget<br><br>
            
                <div id="orange">BEWARE OF LITTLE EXPENSES;<br> A SMALL LEAK WILL SINK A GREAT SHIP.</div></h1>
            </div>
            <p>This is where you can enter all your budget information. Enter the appropriate expenses and their expected and actual cost. You can see where you are spending as expected and where you can or need to make changes to meet your goals.</p>
        </main>
        <aside role="complementary">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/user.php'; ?>
            </div>
        </aside>
        <div id="budget-list">
            
<!--            <ul class="title">
                <li class="title">Item</li>
                <li class="title">Expected</li>
                <li class="title">Actual</li>
            </ul>-->
            <ul id="budget-listing">
                <li><span><input type="text" id="expenseName" placeholder="enter expense name" ><input type="text" id="expectedExpense" placeholder="enter expected cost"><input type="text" id="actualExpense" placeholder="enter actual cost"></span></li>
                <li><span><input type="text" id="expenseName" placeholder="enter expense name" ><input type="text" id="expectedExpense" placeholder="enter expected cost"><input type="text" id="actualExpense" placeholder="enter actual cost"></span></li>
                <li><span><input type="text" id="expenseName" placeholder="enter expense name" ><input type="text" id="expectedExpense" placeholder="enter expected cost"><input type="text" id="actualExpense" placeholder="enter actual cost"></span></li>
            </ul>
                <button onclick="budgetList()">Add New Row</button>
            <input type="button" value="save" onclick="save()" />
        </div><!-- budget-list -->
        <footer role="contentinfo">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/footer.php'; ?>
            </div>
        </footer>
    </body>
</html>
