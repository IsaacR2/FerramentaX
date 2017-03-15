<?php
        //require("../validaSessao.php");
        require("../db/questoes_db2.php");
        require("../db/conexao.php");        
        $id = addslashes($_POST['Nid']);

        /*

        $controle = 0;

        $questao = listarTextoRespostaQuestao($conn, $id);

        $text = $questao["texto"];

        function acharSrc(){
                global  $controle, $text;     
                if ($controle < strlen($text)) {
                        for ($i=$controle; $i < strlen($text); $i++) {
                                echo substr($text, $i, 4) . "<br>";                           
                                if(strcmp(substr($text, $i, 4),"src=")){
                                        for ($j=$i+4; $j <= strlen($text); $j++) {
                                                var_dump(substr($text, $j, 1));
                                                if(strcmp(substr($text, $j, 1),"\"")){
                                                        return substr($text,$i,$j-$i+1);
                                                }
                                        }
                                }
                                return 0;
                        }
                }
        }

        while (acharSrc() != 0) {
                echo acharSrc();
        }   

        */

        if(desativarQuestao($conn, $id)){
        	//echo "inseriu";
                echo "<script type='text/javascript'>window.location.href = '../todasQuestoes.php'</script>";
        	//header("Location: ../default.php");    	
        }else{
        	echo "Erro ao desativar";
        }

?>