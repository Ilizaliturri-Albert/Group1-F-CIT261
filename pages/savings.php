<!DOCTYPE html>
<!--
Savings Page of Kiss My Budget App
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
            function savingsList(){
                
                // get span tag. span tags only include the input tag
                var elmnt = document.getElementsByTagName("SPAN")[0];
                var cln = elmnt.cloneNode(true);
                var debtListing = document.getElementById("savings-listing");
                debtListing.appendChild(cln);
                
            
            }
            // save the data
            function save(){
                    var eName = document.getElementById('savingsAccountName').value;
                    localStorage.setItem('text', eName);
            }
                //load the data 
            function load(){
                var storedValue = localStorage.getItem('text');
                if(storedValue){
                    document.getElementById('savingsAccountName').value = storedValue;
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
                    <h1>YOUR SAVINGS<br><br>
                        <div id="orange">Saving — for anything — requires us to not get things now <br> so we can get bigger ones later.</div>
                </h1>
                </div>
                <p>You can watch you savings grow here! Make goals to increase your savings or specify plans to use your savings for.</p>
            
               
            </main>
            <aside role="complementary">
               <div id="savings-list">
            
<!--            <ul class="title">
                <li class="title">Item</li>
                <li class="title">Expected</li>
                <li class="title">Actual</li>
            </ul>-->
            <ul id="savings-listing">
               <li><span><input type="text" id="savingsAccountName" placeholder="savings account name" ><input type="text" id="savingsTotal" placeholder="enter current total"><input type="text" id="plannedPayment" placeholder="enter planned payment"></span></li>
               <li><span><input type="text" id="savingsAccountName" placeholder="savings account name" ><input type="text" id="savingsTotal" placeholder="enter current total"><input type="text" id="plannedPayment" placeholder="enter planned payment"></span></li>
               <li><span><input type="text" id="savingsAccountName" placeholder="savings account name" ><input type="text" id="savingsTotal" placeholder="enter current total"><input type="text" id="plannedPayment" placeholder="enter planned payment"></span></li>
            </ul>
                <button onclick="savingsList()">Add New Row</button>
                <button onclick="save()">Save</button>
<!--                <input type="button" value="save" onclick="save()" />-->
        </div><!-- savings-list -->
            </aside>
            <footer role="contentinfo">
          
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/footer.php'; ?>
                </div>
                
            </footer>
       
    </body>
</html>
