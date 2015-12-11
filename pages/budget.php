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
<style>
            .rowClass{
                margin:5px;
            }
            li{
                list-style: none;
                display: inline-block;
                width: 100%;
                max-width: 173px;
                font-weight: bold;
            }
        </style>
    </head>
    <body id="home" onload="load()">
        
         <header role="banner">
            </header>
              
            <nav role="navigation">
                
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/nav.php'; ?>
                
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
            <button onclick="addRow()">Add New Row</button>
            <input type="button" value="Save" onclick="save()" />
            <ul>
                <li>Expense Name</li>
                <li>Expected Amount</li>
                <li>Actual Amount</li>
            </ul>
            <div id="rowContent"></div>
        </div><!-- budget-list -->
        <footer role="contentinfo">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/footer.php'; ?>
            </div>
        </footer>
    </body>
</html>
<script>
    
    
         /* BUDGET APP
         
******** 1. add a new set of rows
******** 2. enter data into input
******** 3. save data to local storage
******** 4. load data from local storage inside respective input id's
******** 5. calculate the total costs of expected/actual columns
        */

    //a new line of rows
    function addRow(){
        
        var rowNumber = getCurrentCount();
        var html = "<div class='rowClass'><input id='name-"+rowNumber+"' type='text'><input id='expected-"+rowNumber+"' type='text'><input id='actual-"+rowNumber+"' type='text'></div>";
        
        var currentHtml = document.getElementById('rowContent').innerHTML;        
        document.getElementById('rowContent').innerHTML = currentHtml + html;

    }
    
    
    // count the number of divs under rowContent
    function getCurrentCount(){
        var parent = document.getElementById('rowContent');        
        return parent.getElementsByTagName('div').length;
    }
    
    
    // save the data
    function save(rowNumber){
        
        var rowNumber = getCurrentCount();
                
        // get the dynamic id for #name
        for(var i = 0; i < rowNumber; i++){
            var keyName = i;            
            var inputName = document.getElementById("name-" + [i]).value;
            var inputExpected = document.getElementById("expected-" + [i]).value;
            var inputActual = document.getElementById("actual-" + [i]).value;
            
            var allIds = [inputName, inputExpected, inputActual];
            var key_json = JSON.stringify(allIds);
            localStorage.setItem("Item-"+i, key_json);
        }
        
    }
    
    //load the data 
    function load(){
        
        // add a new row for the data that is loaded
        for(i = 0; i < localStorage.length; i++){
            addRow();
            
        }
        // loop through the input fields and parse the data
        for(i = 0; i < localStorage.length; i++){

            
            var row = localStorage.getItem(localStorage.key(i));
            var parsed = JSON.parse(row);
            
            document.getElementById("name-" + i).value = parsed[0];
            document.getElementById("expected-" + i).value = parsed[1];
            document.getElementById("actual-" + i).value = parsed[2];
            
        }
    }

    
    // initialize the app with a set of rows
    document.addEventListener("DOMContentLoaded", function(event) { 
      addRow();
    });
</script>


Status API Training Shop Blog About Pricing
© 2015 GitHub, Inc. Terms Privacy Security Contact Help
