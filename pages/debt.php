<!DOCTYPE html>
<!--
Debts Page of Kiss My Budget App
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
            function debtList(){
                
                // get span tag. span tags only include the input tag
                var elmnt = document.getElementsByTagName("SPAN")[0];
                var cln = elmnt.cloneNode(true);
                var debtListing = document.getElementById("debt-listing");
                debtListing.appendChild(cln);
                
            
            }
            // save the data
            function save(){
                    var eName = document.getElementById('debtName').value;
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
    <body id="home">
        
             <header role="banner">
            </header>
              
            <nav role="navigation">
                
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/nav.php'; ?>
                
            </nav>
            <main role="main">
                <div id="pageheader">
                <h1>Your Debts</h1>
                </div>
                <p>Here you can track your debts. Make goals to pay off your debts and see a running balance of when you can expect your debts to be paid off.</p>
            
               
            </main>
            <aside role="complementary">
                 <div id="debt-list">
            
<!--            <ul class="title">
                <li class="title">Item</li>
                <li class="title">Expected</li>
                <li class="title">Actual</li>
            </ul>-->
            <ul id="debt-listing">
               <li><span><input type="text" id="debtName" placeholder="enter debt name" ><input type="text" id="debtTotal" placeholder="enter debt total"><input type="text" id="plannedPayment" placeholder="enter planned payment"></span></li>
               <li><span><input type="text" id="debtName" placeholder="enter debt name" ><input type="text" id="debtTotal" placeholder="enter debt total"><input type="text" id="plannedPayment" placeholder="enter planned payment"></span></li>
               <li><span><input type="text" id="debtName" placeholder="enter debt name" ><input type="text" id="debtTotal" placeholder="enter debt total"><input type="text" id="plannedPayment" placeholder="enter planned payment"></span></li>
            </ul>
                <button onclick="debtList()">Add New Row</button>
                <button onclick="save()">Save</button>
<!--                <input type="button" value="save" onclick="save()" />-->
        </div><!-- debt-list -->
                
            </aside>
            <footer role="contentinfo">
          
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/footer.php'; ?>
                </div>
                
            </footer>
        </div
    </body>
</html>
