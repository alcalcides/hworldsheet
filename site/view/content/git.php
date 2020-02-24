<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Git | Then Record</title>
</head>
<body>
    
    <?php
        $sheetFile = "../../../subjects/git/sheet/git-sheet.txt";
        $sheetLines = file($sheetFile);
        $obsFile = "../../../subjects/git/sheet/comments/git-pt-br.txt";
        $obsLines = file($obsFile);

        if(count($sheetLines) != count($obsLines)){
            echo "Error: the sheet file has a different number of lines of comment file";
        }
        else{
            $numberOfLines = count($obsLines);
            for ($i = 0; $i < $numberOfLines; $i++) { 
                $setLine = "";
                $setLine .= ($i + 1) . "&nbsp;&nbsp;&nbsp;";
                $setLine .= htmlspecialchars($sheetLines[$i]) . "&nbsp;&nbsp;&nbsp;";
                if(strlen($obsLines[$i]) > 1) $setLine .= "//";
                $setLine .= htmlspecialchars($obsLines[$i]);
                echo "<p>" . $setLine . "</p>";
            }
        }
    ?>
</body>
</html>