<!DOCTYPE html>
<html>
<body>
    <form action="advanced-2.php" method="post">
        <label for="tablerand">Tabelranddikte (px):</label>
        <input type="text" id="tablerand" name="tablerand"><br><br>
    
        <label for="celpadding">Cel-padding (px):</label>
        <input type="text" id="celpadding" name="celpadding"><br><br>

        <label for="bgcolor">Achtergrondkleur:</label>
        <select name="bgcolor" id="bgcolor">
            <?php
            $kleuren = array("red", "blue", "green", "black", "brown");

            echo $kleuren[0];

            foreach ($kleuren as $value) {
                echo '<option value="'.$value.'">'.$value.'</option>';
            }
            ?>
        </select>
        <br><br>

        <label for="textcolor">Tekstkleur:</label>
        <select name="textcolor" id="textcolor">
            <?php
            $kleuren = array("red", "blue", "green", "black", "brown");
            foreach ($kleuren as $value) {
                echo '<option value="'.$value.'">'.$value.'</option>';
            }
            ?>
        
        </select>
        <br><br>
        <input type="submit" value="Verstuur">
    </form>
</body>
</html>