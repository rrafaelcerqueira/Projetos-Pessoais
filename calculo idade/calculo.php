<?php
        if (isset($_GET['ano_atual']) && isset($_GET['ano_nascimento'])) {
            $ano_atual = (int) $_GET['ano_atual'];
            $ano_nascimento = (int) $_GET['ano_nascimento'];
        
            $idade = $ano_atual - $ano_nascimento;
        
            echo "Você tem $idade anos.";
        }
?>