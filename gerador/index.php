<?php

    $anos = '';
    $meses = '';
    $dias = '';
    for ($i = 1950; $i <= 2018; $i++) {
                            
        $anos = $anos . '<option value="'.$i.'">'.$i.'</option>';
        
    }
    for ($i = 1; $i <= 12; $i++) {
                            
        $meses = $meses . '<option value="'.$i.'">'.$i.'</option>';
        
    }
    for ($i = 1; $i <= 31; $i++) {
                            
        $dias = $dias . '<option value="'.$i.'">'.$i.'</option>';
        
    }

    $Identificacao = [
        [
            "label" => "Nome Completo",
            "for"   => "nome_completo"
        ],
        [
            "label" => "Endereço",
            "for"   => "endereco"
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
    <link rel="stylesheet" type="text/css" href="../global-style.scss">

    <title>Gerar Curriculo</title>
</head>

<body>

    <object class="header" type="text/html" data="../header/header.html"></object>

    <div class="body">
        <form action="">

            <div class="title-body">
                <h3 class="title">Identificação</h3>
            </div>

            <?php

                for( $campo = 0; $campo < sizeof($Identificacao); $campo++ ) {

                    echo '
                        <div class="form-control">
                            <label for="' . $Identificacao[$campo]->for . '">' . $Identificacao[$campo]->label . ':</label>
                            <input type="text" id="' . $Identificacao[$campo]->for . '">
                        </div>
                    ';

                }

            ?>

            <div class="title-body">
                <button class="btn btn-danger mais-campos" type="button" onclick="removeFormacao()">-</button>
                <button class="btn btn-success mais-campos" type="button" onclick="createFormacao()">+</button>
                <h3 class="title">Formação</h3>
            </div>

            <div id="formacao">
                <div id="formFormacao">
                    <div class="form-control">
                        <div class="formacao">

                            <div class="anos">

                                <label for="ano_inicio">Ano de inicio:</label>
                                <select id="ano_inicio">
                                    <option>Selecione o ano</option>
                                    <?php echo $anos ?>
                                    <option value="Cursando">Cursando</option>
                                </select>

                            </div>
                            <div class="anos">

                                <label for="ano_termino">Ano de termino:</label>
                                <select id="ano_termino">
                                    <option>Selecione o ano</option>
                                    <?php echo $anos ?>
                                    <option value="Cursando">Cursando</option>
                                </select>

                            </div>
                            <div class="desc">

                                <label for="desc">Descrição:</label>
                                <input type="text" id="desc">

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="title-body">
                <button class="btn btn-danger mais-campos" type="button" onclick="removeXPprofissional()">-</button>
                <button class="btn btn-success mais-campos" type="button" onclick="createXPprofissional()">+</button>
                <h3 class="title">Experiências Profissionais</h3>
            </div>

            <div id="XPprofissional">
                <div id="formXPprofissional">
                    <div class="form-control">

                        <div class="datas-DDMMAAAA">

                            <div class="DDMMAAAA">

                                <label>Data de inicio:</label>
                                <div class="datas">
                                    <label for="dias">Dia:</label>
                                    <select id="dias">
                                        <option>Selecione o Dia</option>
                                        <?php echo $dias ?>
                                    </select>
                                </div>
                                <div class="datas">
                                    <label for="meses">Mês</label>
                                    <select id="meses">
                                        <option>Selecione o Mês</option>
                                        <?php echo $meses ?>
                                    </select>
                                </div>
                                <div class="datas">
                                    <label for="anos">Ano</label>
                                    <select id="anos">
                                        <option>Selecione o ano</option>
                                        <?php echo $anos ?>
                                    </select>
                                </div>

                            </div>
                            <div class="DDMMAAAA">

                                <label for="ano_inicio">Data de Termino:</label>
                                <div class="datas">
                                    <label for="dias">Dia:</label>
                                    <select id="dias">
                                        <option>Selecione o Dia</option>
                                        <?php echo $dias ?>
                                    </select>
                                </div>
                                <div class="datas">
                                    <label for="meses">Mês</label>
                                    <select id="meses">
                                        <option>Selecione o Mês</option>
                                        <?php echo $meses ?>
                                    </select>
                                </div>
                                <div class="datas">
                                    <label for="anos">Ano</label>
                                    <select id="anos">
                                        <option>Selecione o ano</option>
                                        <?php echo $anos ?>
                                    </select>
                                </div>

                            </div>

                        </div>
                        <div>

                            <label for="empresa">Empresa:</label>
                            <input type="text" id="empresa">

                        </div>
                        <div>

                            <label for="endereco">Endereço:</label>
                            <input type="text" id="endereco">

                        </div>
                        <div>

                            <label for="cargo">Cargo:</label>
                            <input type="text" id="cargo">

                        </div>
                        <div>

                            <label for="funcaoDesempenhada">Funções Desempenhadas:</label>
                            <textarea id="funcaoDesempenhada" rows="10"></textarea>

                        </div>

                    </div>
                </div>
            </div>

            <div class="title-body">
                <button class="btn btn-danger mais-campos" type="button" onclick="removeCurso()">-</button>
                <button class="btn btn-success mais-campos" type="button" onclick="createCurso()">+</button>
                <h3 class="title">Cursos</h3>
            </div>

            <div id="curso">
                <div id="formCurso">
                    <div class="form-control">
                        <div class="formacao">

                            <div class="anos">

                                <label for="ano_inicio">Ano:</label>
                                <select id="ano_inicio">
                                    <option>Selecione ano</option>
                                    <?php echo $anos ?>
                                    <option value="Cursando">Cursando</option>
                                </select>

                            </div>
                            <div class="desc">

                                <label for="desc">Descrição:</label>
                                <input type="text" id="desc">

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="title-body">
                <button class="btn btn-danger mais-campos" type="button" onclick="removeContatoInfo()">-</button>
                <button class="btn btn-success mais-campos" type="button" onclick="createContatoInfo()">+</button>
                <h3 class="title">Contatos para informação</h3>
            </div>

            <div id="contatoInfo">
                <div id="formContatoInfo">
                    <div class="form-control">
                        <div class="formacao">

                            <div class="anos">

                                <label for="ano_inicio">Ano de inicio:</label>
                                <select id="ano_inicio">
                                    <option>Selecione ano</option>
                                    <?php echo $anos ?>
                                    <option value="Cursando">Cursando</option>
                                </select>

                            </div>
                            <div class="anos">

                                <label for="ano_termino">Ano de termino:</label>
                                <select id="ano_termino">
                                    <option>Selecione ano</option>
                                    <?php echo $anos ?>
                                    <option value="Cursando">Cursando</option>
                                </select>

                            </div>
                            <div class="desc">

                                <label for="desc">Descrição:</label>
                                <input type="text" id="desc">

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <!-- <object class="footer" type="text/html" data="../footer/footer.html"></object> -->

</body>
<script type="text/javascript" src="scripts.js"></script>

</html>