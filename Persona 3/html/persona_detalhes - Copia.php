<?php
    include "../php/conectar.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <!--esse aqui é para chamar o css-->
		<link rel="stylesheet" href="../css/normalize.css" type="text/css">
		<link rel="stylesheet" href="../css/geral.css" type="text/css">
		<link rel="stylesheet" href="../css/persona_detalhes.css" type="text/css">
    </head>
    <body>
        <?php
            $id = $_GET['id'];
            //pesquisa os dados basicos da persona escolhida e os guarda em variaveis
            $dados = mysqli_query($sql, "SELECT * FROM persona WHERE id_persona = '$id'");
            while($coluna = mysqli_fetch_array($dados)){
                $nome = $coluna['nome_persona'];
                $nivel = $coluna['nivel'];
                $arcano = $coluna['arcano'];
                $descricao = $coluna['descricao'];
                $img = $coluna['perfil_persona'];
            }
            //pesquisa os status da persona escolhida
            $dados = mysqli_query($sql, "SELECT * FROM `status` WHERE id_persona = '$id'");
            while($coluna = mysqli_fetch_array($dados)){
                $forca       = $coluna['forca'];
                $magia       = $coluna['magia'];
                $resistencia = $coluna['resistencia'];
                $agilidade   = $coluna['agilidade'];
                $sorte       = $coluna['sorte'];
            }
            //pesquisa as caracteristcas elementais da perso na
            $dados = mysqli_query($sql, "SELECT * FROM `elementos` WHERE id_persona_id = '$id'");
            while($coluna = mysqli_fetch_array($dados)){
                $corte        = $coluna['corte'];
                $impacto      = $coluna['impacto'];
                $perfurante   = $coluna['perfurante'];
                $fogo         = $coluna['fogo'];
                $gelo         = $coluna['gelo'];
                $vento        = $coluna['vento'];
                $eletricidade = $coluna['eletricidade'];
                $luz          = $coluna['luz'];
                $trevas       = $coluna['trevas'];
            }
            //pesquisa as skills da persona
            //pesquisa os ids das pesonas e pesquisa os ids das skills
            $dados = mysqli_query($sql, "SELECT * FROM `persona_habilidade` WHERE id_persona_hab = '$id'" );
            $vetor = [];
            while($coluna = mysqli_fetch_array($dados)){
                $temp = $coluna['id_habilidade_per'];
                $vetor[] = $temp;
            }
            //aqui armazena os ids a serem pesquisados
            $vetor = (array) $vetor;
            //pesquisa os ids da skills pesquisados
            $cont = count($vetor);
            $col = 0;
            while($col < $cont){
                $temp = $vetor[$col];
                $col++;
                $dados = mysqli_query($sql, "SELECT * FROM `lista_habilidade` where id_habilidade = '$temp'");
                while($coluna = mysqli_fetch_array($dados)){
                    $skill[] = $coluna['nome_habilidade'];
                } 
            }
            $cont = 0;
            while(count($skill) < 8){
                $skill[] = "-";
            }
            
        ?>
        <header>
            <div class = "nome_nv">
                <label id ='nome'><?php echo $nome ?></label>
                <label id ='nivel'></label>Lvl: <?php echo $nivel ?></label>
                <br>
                <label>Arcano: <?php echo $arcano?></label>
            </div>
        </header>
        <section>
            <div class = "descricao">
                <label><?php echo $descricao?></label>
            </div>

            <div class="status">
                <div class = "status_lbl">                
                    <label>St</label>
                    <label>Ma</label>
                    <label>En</label>
                    <label>Ag</label>
                    <label>Lu</label>
                </div>
                <?php
                ?>
			    <div class ="status_num">
                    <div class ="status_bar" style = "background: linear-gradient(to right, rgb(76, 5, 158)  <?php echo $forca?>%,  rgba(153, 153, 153, 0.233) <?php echo $forca?>%"><label><?php echo $forca?></label></div>
                    <div class ="status_bar" style = "background: linear-gradient(to right, rgb(76, 5, 158)  <?php echo $magia?>%,  rgba(153, 153, 153, 0.233) <?php echo $magia?>%"><label><?php echo $magia?></label></div>
                    <div class ="status_bar" style = "background: linear-gradient(to right, rgb(76, 5, 158)  <?php echo $resistencia?>%,  rgba(153, 153, 153, 0.233) <?php echo $resistencia?>%"><label><?php echo $resistencia?></label></div>
                    <div class ="status_bar" style = "background: linear-gradient(to right, rgb(76, 5, 158)  <?php echo $agilidade?>%,  rgba(153, 153, 153, 0.233) <?php echo $agilidade?>%"><label><?php echo $agilidade?></label></div>
                    <div class ="status_bar" style = "background: linear-gradient(to right, rgb(76, 5, 158)  <?php echo $sorte?>%,  rgba(153, 153, 153, 0.233) <?php echo $sorte?>%"><label><?php echo $sorte?></label></div>
                </div>
		    </div>
            <div class = "imagem_persona">
                <img src = <?php echo $img?>>
            </div>
            <div class ="habilidades">
                <div class = "habilidade_slot"><?php echo $skill[0]?></div>
                <div class = "habilidade_slot"><?php echo $skill[1]?></div>
                <div class = "habilidade_slot"><?php echo $skill[2]?></div>
                <div class = "habilidade_slot"><?php echo $skill[3]?></div>
                <div class = "habilidade_slot"><?php echo $skill[4]?></div>
                <div class = "habilidade_slot"><?php echo $skill[5]?></div>
                <div class = "habilidade_slot"><?php echo $skill[6]?></div>
                <div class = "habilidade_slot"><?php echo $skill[7]?></div>
            </div>

            <div class = "caracteristicas">
                <!-- elemento: corte-->
                <div class = "elemento">
                    <img src ="../img/ico/slash.jpg"><br>
                    <label><?php echo $corte?></label>
                </div>
                <!--elemento: impacto-->
                <div class = "elemento">
                    <img src ="../img/ico/impacto.jpg"><br>
                    <label><?php echo $impacto?></label>
                </div>
                <!--elemento: perfurante-->
                <div class = "elemento">
                    <img src ="../img/ico/perfurante.jpg"><br>
                    <label><?php echo $perfurante?></label>
                </div>
                &nbsp
                <!--elemento: fogo-->
                <div class = "elemento">
                    <img src ="../img/ico/fogo.jpg"><br>
                    <label><?php echo $fogo?></label>
                </div>
                <!--elemento:  gelo-->
                <div class = "elemento">
                    <img src ="../img/ico/gelo.jpg"><br>
                    <label><?php echo $gelo?></label>
                </div>
                <!--elemento: eletricidade-->
                <div class = "elemento">
                    <img src ="../img/ico/eletricidade.jpg"><br>
                    <label><?php echo $eletricidade?></label>
                </div>
                <!--elemento: vento-->
                <div class = "elemento">
                    <img src ="../img/ico/vento.jpg"><br>
                    <label><?php echo $vento?></label>
                </div>
                <!--elemento: luz-->
                <div class = "elemento">
                    <img src ="../img/ico/luz.jpg"><br>
                    <label><?php echo $luz?></label>
                </div>
                <!--elemento: trevas-->
                <div class = "elemento">
                    <img src ="../img/ico/trevas.jpg"><br>
                    <label><?php echo $trevas?></label>
                </div>
            </div>
        </section>
    </body>
</html>