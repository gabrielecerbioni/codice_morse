<html>
<form acrion="morse.php" method="get">
    messaggio da convertire
    <br>
    <input type="text" name="n">
    <br>
    <br>
    <button type="submit" >converti</button>
    <br>
    <br>
    <input type="text" name="m" disabled >
</form>
<?php
    $n = $_GET["n"];
    $m = $_GET["m"];
    $array = [
        'A' => '.-',    'B' => '-...',  'C' => '-.-.', 'D' => '-..',
        'E' => '.',     'F' => '..-.',  'G' => '--.',  'H' => '....',
        'I' => '..',    'J' => '.---',  'K' => '-.-',  'L' => '.-..',
        'M' => '--',    'N' => '-.',    'O' => '---',  'P' => '.--.',
        'Q' => '--.-',  'R' => '.-.',   'S' => '...',  'T' => '-',
        'U' => '..-',   'V' => '...-',  'W' => '.--',  'X' => '-..-',
        'Y' => '-.--',  'Z' => '--..',
        '0' => '-----', '1' => '.----', '2' => '..---','3' => '...--',
        '4' => '....-', '5' => '.....', '6' => '-....','7' => '--...',
        '8' => '---..', '9' => '----.',
        '.' => '.-.-.-', ',' => '--..--', '?' => '..--..', "'" => '.----.',
        '!' => '-.-.--', '/' => '-..-.',  '(' => '-.--.',  ')' => '-.--.-',
        ' ' => '/'
        ];
    if(isset($_GET['n'])) {
        $n = strtoupper($_GET['n']);
        $m = '';

        for($i = 0; $i < strlen($n); $i++) {
            $char = $n[$i];
            if(isset($array[$char])) {
                $m .= $array[$char] . ' ';
            }
        }

        echo "<script>document.getElementsByName('m')[0].value = '" . trim($m) . "';</script>";
    }
?>
</html>
?>
</html>