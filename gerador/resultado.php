<?php

    $Identificacao = [
        [
            "label" => "Nome Completo",
            "for"   => "nome_completo"
        ],
        [
            "label" => "Endereço",
            "for"   => "endereco_ident"
        ],
        [
            "label" => "Telefone",
            "for"   => "telefone"
        ],
        [
            "label" => "E-mail",
            "for"   => "email"
        ],
        [
            "label" => "Data de Nascimento",
            "for"   => "dataN"
        ],
        [
            "label" => "Estado Civil",
            "for"   => "estado_civil"
        ],
        [
            "label" => "Nacionalidade",
            "for"   => "nacionalidade"
        ],
        [
            "label" => "Naturalidade",
            "for"   => "natural"
        ]
    ];

    $Identificacao = json_decode(json_encode($Identificacao));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.scss">

    <title>Resultado Curriculo</title>
</head>

<body>

    <object class="header" type="text/html" data="../header/header.html"></object>

    <div class="body">

        <div class="title-body">
            <h3 class="title">Identificação</h3>
        </div>

        <div class="Identificacao">

            <?php

            for ( $campo = 0; $campo < sizeof($Identificacao); $campo++ ) {

               echo '<p>
                    <b>' . $Identificacao[$campo]->label . ': </b>' . $_POST[$Identificacao[$campo]->for] . '
                </p>';

            }

        ?>

        </div>
        <div class="title-body">
            <h3 class="title">Formação</h3>
        </div>

        <div id="formacao">
            <?php
    
                for( $formacao = 0; $formacao < sizeof($_POST['ano_inicio']); $formacao++ ) {
    
                    echo '
                        <p>
                            <div class="form-control">
                                <div class="formacao    ">
                
                                    <div class="anos" style="text-align: center;">
                
                                        <label for="ano_inicio"><b>Ano de inicio:</b><br></label>
                                        ' . $_POST['ano_inicio'][$formacao] . '
                
                                    </div>
                                    <div class="anos" style="text-align: center;">
                
                                        <label for="ano_termino"><b>Ano de termino:</b><br></label>
                                        ' . $_POST['ano_termino'][$formacao] . '
                
                                    </div>
                                    <div class="desc" style="word-break: break-all; text-align: justify;">
                
                                        <label for="desc"><b>Descrição:</b><br></label>
                                        ' . $_POST['desc'][$formacao] . '
                
                                    </div>
                
                                </div>
                            </div>
                        </p>
                    ';
    
                }
            ?>
        </div>

        <div class="title-body">
            <h3 class="title">Experiências Profissionais</h3>
        </div>

        <div id="XPprofissional">
                <?php
    
                for( $xpProf = 0; $xpProf < sizeof($_POST['dias_inicio']); $xpProf++ ) {
    
                    echo '
                        <p>
                                <div class="form-control">

                                        <div class="datas-DDMMAAAA">
                        
                                            <div style="width: 50%">
                        
                                                <label for="ano_inicio"><b>Data de Termino:</b></label>
                                                <div class="DDMMAAAA" style="width: 100%!important">
                                                    
                                                        <div class="datas" style="margin: 0 10px">
                                                            <label for="dias"><b>Dia:</b></label><br>
                                                            ' . $_POST['dias_inicio'][$xpProf] . '
                                                        </div>
                                                        <div class="datas" style="margin: 0 10px">
                                                            <label for="meses"><b>Mês:</b></label><br>
                                                            ' . $_POST['meses_inicio'][$xpProf] . '
                                                        </div>
                                                        <div class="datas" style="margin: 0 10px">
                                                            <label for="anos"><b>Ano:</b></label><br>
                                                            ' . $_POST['anos_inicio'][$xpProf] . '
                                                        </div>

                                                </div>
                        
                                            </div>
                                            <div style="width: 50%">
                        
                                                <label for="ano_inicio"><b>Data de Termino:</b></label>
                                                <div class="DDMMAAAA" style="width: 100%!important">
                                                    
                                                    <div class="datas" style="margin: 0 10px">
                                                        <label for="dias"><b>Dia:</b></label><br>
                                                        ' . $_POST['dias_termino'][$xpProf] . '
                                                    </div>
                                                    <div class="datas" style="margin: 0 10px">
                                                        <label for="meses"><b>Mês:</b></label><br>
                                                        ' . $_POST['meses_termino'][$xpProf] . '
                                                    </div>
                                                    <div class="datas" style="margin: 0 10px">
                                                        <label for="anos"><b>Ano:</b></label><br>
                                                        ' . $_POST['anos_termino'][$xpProf] . '
                                                    </div>

                                                </div>
                        
                                            </div>
                        
                                        </div>
                                        <div>
                        
                                            <label for="desc"><b>Empresa:</b><br></label>
                                            ' . $_POST['empresa'][$xpProf] . '
                        
                                        </div>
                                        <div>
                        
                                            <label for="desc"><b>Endereço:</b><br></label>
                                            ' . $_POST['endereco'][$xpProf] . '
                        
                                        </div>
                                        <div>
                        
                                            <label for="desc"><b>Cargo:</b><br></label>
                                            ' . $_POST['cargo'][$xpProf] . '
                        
                                        </div>
                                        <div>
                        
                                            <label for="desc"><b>Funções Desempenhadas:</b><br></label>
                                            ' . $_POST['funcaoDesempenhada'][$xpProf] . '
                        
                                        </div>
                        
                                    </div>
                    ';
    
                }
            ?>
            
        </div>

    </div>


</body>

</html>