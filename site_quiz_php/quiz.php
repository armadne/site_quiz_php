<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="quiz.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,200;1,100&display=swap" rel="stylesheet"> 

        <style> 
        @media print /*bloc_page */
        {
            .btnImpression
            {
                display: none;
            }
        }
    </style>
    </head>

    <body>

    <nav>
            <ul>
                <a href="../petition/index.php"><li>Petition</li></a>
                <a href="quiz.php"><li>Quiz PHP</li></a>
                <a href="../site_journal/journal.html"><li>Blog</li></a>
            </ul>
    </nav><br><br>





    <h1>Quiz PHP</h1>

    <div id="bloc_page">

        
        <form action="" method="post">
            <section class="question1">
    
    
                <h2>1. Quel balise ouvrir pour écrire du code PHP dans un fichier HTML ? </h2>
                <select name="choix" class="choix">
                    <option value="item1" selected>&lt html &gt</option>
                    <option value="item2">&lt body &gt</option>
                    <option value="item3">&lt?php ?&gt</option>
                </select>
            </section>
    
            <?php 

            $points = 0;

            $valor = isset($_POST['choix']) ? $valor=$_POST['choix'] : 0;
            switch ($valor) {
                case "item1":
                    echo "<h4>Mauvaise Réponse</h4>";
                    $points--;
                    echo "Vous avez " . $points . " points";
                    break;
                    
                    case "item2":
                    echo "<h4>Mauvaise Réponse<h4>";
                    $points--;
                    echo "Vous avez " . $points . " points";
                    break;
                    
                    case "item3":
                    echo "<h4>Bonne Réponse<h4>";
                    $points++;
                    echo "Vous avez " . $points . " points";
                    break;
            }
            
            ?>
    
    

    
    
            <section class="question2">
    
                <h2>2. Comment nomme t-on une variable ?</h2>
                <select name="choix2" class="choix2">
                    <option name="item4" value="var1">&variable = hello</option>
                    <option name="item5" value="var2">!variable = "0"</option>
                    <option name="item6" value="var3">$variable = "hello";</option>
                </select>
            </section>
    
    
            <?php 

            
            $valor = isset($_POST['choix2']) ? $valor=$_POST['choix2'] : 0; /* SI name=choix2 existe... */
            switch ($valor)  {  /* switch similaire a l'instruction if */
                case "var1":
                    echo "<h4>Mauvaise Réponse</h4>";
                    $points--;
                    echo "Vous avez " . $points . " points";
                    break;
                    
                    case "var2":
                    echo "<h4>Mauvaise Réponse<h4>";
                    $points--;
                    echo "Vous avez " . $points . " points";
                    break;
                    
                    case "var3":
                    echo "<h4>Bonne Réponse<h4>";
                    $points++;
                    echo "Vous avez " . $points . " points";
                    break;
            }
            
            ?>
    
    
    
    
    
    
    
    
            <section class="question3">
                <h2>3. Comment afficher un texte ?</h2>
                <select name="choix3" class="choix3">
                    <option name="item7" value="item7">print()</option>
                    <option name="item8" value="item8">echo</option>
                    <option name="item9" value="item9">str()</option>
                </select>
            </section>
    
    
            <?php

    
            $valor = isset($_POST['choix3']) ? $valor=$_POST['choix3'] : 0;
            switch ($valor) {
                case "item7":
                    echo "<h4>Mauvaise Réponse</h4>";
                    $points--;
                    echo "Vous avez " . $points . " points";
                    break;
                    
                    case "item8":
                    echo "<h4>Bonne Réponse<h4>";
                    $points++;
                    echo "Vous avez " . $points . " points";
                    break;
                    
                    case "item9":
                    echo "<h4>Mauvaise Réponse<h4>";
                    $points--;
                    echo "Vous avez " . $points . " points";
                    break;
            }
            
            ?>
    

    
    
    
            <section class="question4">
                <h2>4. Qu'est ce qu'un "Integer" ?</h2>
                <select name="choix4" class="choix4">
                    <option name="item10" value="item10">un nombre entier(1, 4, 34)</option>
                    <option name="item11" value="item11" selected>caractère spéciale(&,$,*)</option>
                    <option name="item12" value="item12">une chaine de charactère(hello world)</option>
                </select>
            </section>
    
    
            <?php

           
    
    $valor = isset($_POST['choix4']) ? $valor=$_POST['choix4'] : 0;
    switch ($valor) {
        case "item10":
            echo "<h4>Bonne Réponse</h4>";
            $points++;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item11":
            echo "<h4>Mauvaise Réponse<h4>";
            $points--;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item12":
            echo "<h4>Mauvaise Réponse<h4>";
            $points--;
            echo "Vous avez " . $points . " points";
            break;
    }
    
    ?>
    
    
    
    
    
            <section class="question5">
                <h2>5. Qu'est ce qu'un "String" ?</h2>
                <select name="choix5" class="choix5">
                    <option name="item13" value="item13">Une chaine de charactere(hello_world)</option>
                    <option name="item14" value="item14" selected>Nombre Décimaux (12,2)</option>
                    <option name="item15" value="item15">Une Boucle</option>
                </select>
            </section>
    
    
            <?php

          
    
    $valor = isset($_POST['choix5']) ? $valor=$_POST['choix5'] : 0;
    switch ($valor) {
        case "item13":
            echo "<h4>Bonne Réponse</h4>";
            $points++;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item14":
            echo "<h4>Mauvaise Réponse<h4>";
            $points--;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item15":
            echo "<h4>Mauvaise Réponse<h4>";
            $points--;
            echo "Vous avez " . $points . " points";
            break;
    }
    
    ?>
    
   
    
    
    
            <section class="question6">
                <h2>6. Qu'est ce qu'un "float"</h2>
                <select name="choix6" class="choix6">
                    <option name="item16" value="item16">Une chaine de charactere(hello world)</option>
                    <option name="item17" value="item17">un nombre décimal (ex: 13,2)</option>
                    <option name="item18" value="item18">Une Boucle</option>
                </select>
            </section>
    
    
            <?php

       
    
    $valor = isset($_POST['choix6']) ? $valor=$_POST['choix6'] : 0;
    switch ($valor) {
        case "item16":
            echo "<h4>Mauvaise Réponse</h4>";
            $points--;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item17":
            echo "<h4>Bonne Réponse<h4>";
            $points++;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item18":
            echo "<h4>Mauvaise Réponse<h4>";
            $points--;
            echo "Vous avez " . $points . " points";
            break;
    }
    
    ?>
    
  
    
        
            <section class="question7">
                <h2>7. Comment écrire une condition if ?</h2>
                <select name="choix7" class="choix7">
                    <option name="item19" value="item19">
                        if...
                        elif...
                        else...
                    </option>
                    <option name="item20" value="item20" selected>
                        if...
                        while...
                        elif...
                    </option>
                </select>
            </section>
    
    
    
    <?php

   

            $valor = isset($_POST['choix7']) ? $valor=$_POST['choix7'] : 0;
    switch ($valor) {
        case "item19":
            echo "<h4>Bonne Réponse<h4>";
            $points++;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item20":
            echo "<h4>Mauvaise Réponse<h4>";
            $points--;
            echo "Vous avez " . $points . " points";
            break;
    
    }
    
    ?>
    
    
    
    
        
    
            <section class="question8">
                <h2>8. Qu'est ce qu'une concaténation ? </h2>
                <select name="choix8" class="choix8">
                    <option name="item21" value="item21">Avec un . (echo "Hello" . "$name")</option>
                    <option name="item22" value="item22" selected>Avec un +</option>
                    <option name="item23" value="item23">Avec un *</option>
                </select>
            </section>
    
    
    
    <?php



            $valor = isset($_POST['choix8']) ? $valor=$_POST['choix8'] : 0;
    switch ($valor) {
        case "item21":
            echo "<h4>Bonne Réponse</h4>";
            $points++;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item22":
            echo "<h4>Mauvaise Réponse<h4>";
            $points--;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item23":
            echo "<h4>Mauvaise Réponse<h4>";
            $points--;
            echo "Vous avez " . $points . " points";
            break;
    }
    
    ?>
    

    
        
    
            <section class="question9">
                <h2>9. Comment écrire un commentaire ? </h2>
                <select name="choix9" class="choix9">
                    <option name="item24" value="item24">/*Commentaire*/</option>
                    <option name="item25" value="item25">&lt-- Commentaire --&gt</option>
                    <option name="item26" value="item26" selected>//Commentaire//</option>
                </select>
                
            </section>
    
    
    
    
    <?php

 

            $valor = isset($_POST['choix9']) ? $valor=$_POST['choix9'] : 0;
    switch ($valor) {
        case "item24":
            echo "<h4>Bonne Réponse</h4>";
            $points++;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item25":
            echo "<h4>Mauvaise Réponse<h4>";
            $points--;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item26":
            echo "<h4>Mauvaise Réponse<h4>";
            $points--;
            echo "Vous avez " . $points . " points";
            break;
    }
    
    ?>
    
 
    
    
            <section class="question10">
                <h2>10. Selectionnez la ligne de code qui est correct ? </h2>
                <select name="choix10" class="choix10">
                    <option name="item27" value="item27">&ltphp &gt echo "hello" $name="Paul"  ?&gt</option>
                    <option name="item28" value="item28">&lt?php echo "hello" . $name="Paul"  &gt</option>
                    <option name="item29" value="item29">&lt?php echo "hello" . $name="paul"  ?&gt</option>
                </select><br><br>
            </section>
    
    
            <?php

           

            $valor = isset($_POST['choix10']) ? $valor=$_POST['choix10'] : 0;
    switch ($valor) {
        case "item27":
            echo "<h4>Mauvaise Réponse</h4>";
            $points--;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item28":
            echo "<h4>Mauvaise Réponse<h4>";
            $points++;
            echo "Vous avez " . $points . " points";
            break;
            
            case "item29":
            echo "<h4>Bonne Réponse<h4>";
            $points++;
            echo "Vous avez " . $points . " points";
            break;

    }
    
    ?>
    
    <input type="submit" name="button" id="button" value="Valider" />

    <?php 
    
    if($points == 10)
    {
        echo "Bravo, vous avez fait un sans faute !";
    }
    else
    {
        echo "Réessayez, Vous avez encore des lacunes...";
    }
    
    ?>


    </div>



       


    </body>
</html>