<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <title>CV - Recherche d'un stage</title>
</head>
<body>
    <nav>
        <a href="index.php?page=presentation">Présentation</a>
        <a href="index.php?page=langues">Langues</a>
        <a href="index.php?page=ecoles">Lycées</a>
    </nav>    

<main>
        <?php $page = isset($_GET["page"]) ? $_GET["page"] : "presentation";
        switch ($page) {
            case "presentation":
                include "pages/presentation.php";
                break;
            case "langues":
                include "pages/langues.php";
                break;
            case "ecoles":
                include "pages/ecoles.php";
                break;
            default:
                echo "<h1>Page introuvable</h1>";
                break;
        }
        ?>
    </main>
<h1>
     <?php
         ?>
</h1>
</body>
</html>
