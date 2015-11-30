<!DOCTYPE html>
<!--
Savings Page of Kiss My Budget App
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

    </head>
    <body id="home">
        <div>
            <header role="banner">
                <div>
            
                </div>
            </header>
            <nav role="navigation">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/nav.php'; ?>
                </div>
            </nav>
            <main role="main">
                
                <h1>Your Savings</h1>
                
                <p>You can watch you savings grow here! Make goals to increase your savings or specify plans to use your savings for.</p>
            
               
            </main>
            <aside role="complementary">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/user.php'; ?>
                </div>
            </aside>
            <footer role="contentinfo">
          
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/modularization/footer.php'; ?>
                </div>
                
            </footer>
        </div>
    </body>
</html>
