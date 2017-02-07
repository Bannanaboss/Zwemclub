<?php
    print("<table border='1'>");
        $alle["De spartelkuikens"] = 25;
        $alle["De waterbuffels"] = 32;
        $alle["Plonsmderin"] = 11;
        $alle["Bommetje"] = 23;

        foreach ($alle as $label => $waarde) {
            $totaal = $waarde / 5;
            echo "<tr>"."<td colspan='2'>".$label."&nbsp&nbsp&nbsp&nbsp&nbsp"."</td>".
                "<td colspan='2'>".$waarde."&nbsp&nbsp&nbsp&nbsp&nbsp"."</td>"."</tr>"."<br>";
            for ($i = 0; $i < $totaal; $i++){
                echo "<img src='img/swim.png'>";
            }
        }
    print("</table>");