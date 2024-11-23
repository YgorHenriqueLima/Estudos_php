<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $estado = $_POST["estado"];
            $regiao = "";

            switch ($estado) {
                // Região Norte
                case "AC": case "AP": case "AM": case "PA": case "RO": case "RR": case "TO":
                    $regiao = "Norte";
                    break;

                // Região Nordeste
                case "AL": case "BA": case "CE": case "MA": case "PB": case "PE": case "PI": case "RN": case "SE":
                    $regiao = "Nordeste";
                    break;

                // Região Centro-Oeste
                case "GO": case "MT": case "MS":
                    $regiao = "Centro-Oeste";
                    break;

                // Região Sudeste
                case "ES": case "MG": case "RJ": case "SP":
                    $regiao = "Sudeste";
                    break;

                // Região Sul
                case "PR": case "SC": case "RS":
                    $regiao = "Sul";
                    break;

                default:
                    $regiao = "Desconhecida";
                    break;
            }

            echo "<p>O estado selecionado pertence à região: <strong>$regiao</strong>.</p>";
        }
        ?>