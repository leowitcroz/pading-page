<?php
require_once('db_connect.php');

session_start();

function getFileName($path, $extension)
{
    $file = $path . '/' . uniqid() . '.' . $extension;

    if (file_exists($file)) {
        return getFileName($path, $extension);
    }
    return $file;
}

if (isset($_POST['botao'])) {

    $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
    $descricaovideo = mysqli_real_escape_string($conn, $_POST['descricao-video']);
    $linkVideo = mysqli_real_escape_string($conn, $_POST['linkvideo']);
    $celular = mysqli_real_escape_string($conn, $_POST['celular']);
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $descricaoParticipante = mysqli_real_escape_string($conn,$_POST['descricaoparticipante']);
    $chamada = mysqli_real_escape_string($conn,$_POST['chamada']);
    $referencia = mysqli_real_escape_string($conn,$_POST['referencia']);
    $btnref = mysqli_real_escape_string($conn,$_POST['btn-ref']);
    $local = mysqli_real_escape_string($conn,$_POST['local']);
    $horaManhaInicio = mysqli_real_escape_string($conn,$_POST['horario-manha-inico']);
    $horaManhaFim = mysqli_real_escape_string($conn,$_POST['horario-manha-fim']);
    $horaTardeInico = mysqli_real_escape_string($conn,$_POST['horario-tarde-inico']);
    $horaTardeFim = mysqli_real_escape_string($conn,$_POST['horario-tarde-fim']);
    $horaNoiteInicio = mysqli_real_escape_string($conn,$_POST['horario-noite-inico']);
    $horaNoiteFim = mysqli_real_escape_string($conn,$_POST['horario-noite-fim']);
    $certificacao = mysqli_real_escape_string($conn,$_POST['certificacao']);
    $lote = mysqli_real_escape_string($conn,$_POST['lote']);
    $extra = mysqli_real_escape_string($conn,$_POST['extra']);
    $canal = mysqli_real_escape_string($conn,$_POST['canal']);
    $inicio = mysqli_real_escape_string($conn,$_POST['inicio']);
    $mes = mysqli_real_escape_string($conn,$_POST['mes']);
    $fim = mysqli_real_escape_string($conn,$_POST['fim']);
    $valor = mysqli_real_escape_string($conn,$_POST['valor']);
    $inscrever = mysqli_real_escape_string($conn,$_POST['inscrever']);
    $dias = mysqli_real_escape_string($conn,$_POST['dias']);
    $cidade = mysqli_real_escape_string($conn,$_POST['cidade']);
    $estado = mysqli_real_escape_string($conn,$_POST['estado']);
   
    


////////////////////////////////////////////    
    $formatosPermitidos = array("png", "jpeg", "jpg");
    $extensao = pathinfo($_FILES['fotouser']['name'], PATHINFO_EXTENSION);

    $fotouser = '';

    if (in_array($extensao, $formatosPermitidos)) {
        $pasta = "images";
        $temporario = $_FILES['fotouser']['tmp_name'];

        $file = getFileName($pasta, $extensao);

        if ( move_uploaded_file($temporario, $file) )
        {
            $fotouser = $file;
        }
    }
//////////////////////////////////////////////////////

    $data = [

        'titulo' => $titulo,
        'descricaovideo' => $descricaovideo,
        'video' => $linkVideo,
        'cel' => $celular,
        'nome' => $nome,
        'descricaouser' => $descricaoParticipante,
        'chamada' => $chamada,
        'referencia' => $referencia,
        'btnref' => $btnref,
        'fotouser' => $fotouser,
        'local' => $local,
        'hmanha' => $horaManhaInicio,
        'hmanhafim' => $horaManhaFim,
        'htarde' => $horaTardeInico,
        'htardefim' => $horaTardeFim,
        'hnoite' => $horaNoiteInicio,
        'hnoitefim' => $horaNoiteFim,
        'certificacao' => $certificacao,
        'lote' => $lote,
        'extra' => $extra,
        'canal' => $canal,
        'inicio' => $inicio,
        'mes' => $mes,
        'fim' => $fim,
        'valor' => $valor,
        'inscrever' => $inscrever,
        'dias' => $dias,
        'cidade' => $cidade,
        'estado' => $estado,
        


    ];

    // Insira os dados no banco de dados
    $sql = 'INSERT INTO par ( `' . implode('`, `',array_keys($data)) . '` ) VALUES ( \'' . implode('\', \'',array_values($data)) . ' \')';
    
    if (mysqli_query($conn, $sql)) {
        $id =  mysqli_insert_id($conn);
        // Redirecione para a página de destino
        header("Location: landing-page.php?id=$id?");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}



?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Formulário Participante</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="formulario">
                    <div class="fundo-form">

                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST' enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <input name='titulo' type="text" class="form-control" placeholder="Título" aria-label="Username" aria-describedby="basic-addon1">
                            </div>



                            <div class="input-group">
                                <textarea name="descricao-video" rows='5' class="form-control" aria-label="With textarea" placeholder="Descrição do video"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="basic-url" class="form-label" style='color:white;font-weight:bold;margin-top:5%'>Link video</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    <input name="linkvideo" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                </div>

                            </div>

                            <div class="input-group mb-3">
                                <input name="celular" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="(XX)XXXXX-XXXX">

                            </div>

                            <div class="input-group mb-3">
                                <input name='nome' type="text" class="form-control" placeholder="Nome participante" aria-label="Username">
                            </div>

                            <div class="input-group">
                                <textarea name="descricaoparticipante" rows='5' class="form-control" aria-label="With textarea" placeholder="Descrição Participante"></textarea>
                            </div>

                            <div class="input-group mb-3" style='margin-top: 5%;'>
                                <input name="chamada" type="text" class="form-control" placeholder="Chamada Participante" aria-label="Username">
                            </div>

                            <div class="input-group mb-3" style='margin-top: 5%;'>
                                <input name="referencia" type="text" class="form-control" placeholder="Referência Participante" aria-label="Username">
                            </div>

                            <div class="input-group mb-3" style='margin-top: 5%;'>
                                <input name="btn-ref" type="text" class="form-control" placeholder="Texto Botão Referência Participante" aria-label="Username">
                            </div>





                            <label for="date-end" style='margin-top: 5%;color:white;font-weight:bold;'>Foto participante</label>
                            <div class="input-group mb-3" style='margin-top:2%;'>
                                <input name='fotouser' type="file" class="form-control" id="inputGroupFile01">
                            </div>

                            <div class="input-group mb-3">
                                <input name="local" type="text" class="form-control" placeholder="Local do evento" aria-label="Username">
                            </div>

                            <label for="date-end" style='margin-top: 1%;color:white;font-weight:bold;'>Horário Manhã</label>
                            <div class="input-group mb-3" style='margin-top:1%;'>
                                <input name="horario-manha-inico" type="text" class="form-control" placeholder="Inicio" aria-label="Username" style='margin-right:5px'>

                                <input name="horario-manha-fim" type="text" class="form-control" placeholder="Fim" aria-label="Server">
                            </div>

                            <label for="date-end" style='margin-top: 1%;color:white;font-weight:bold;'>Horário Tarde</label>
                            <div class="input-group mb-3" style='margin-top:1%;'>
                                <input name="horario-tarde-inico" type="text" class="form-control" placeholder="Inicio" aria-label="Username" style='margin-right:5px'>

                                <input name="horario-tarde-fim"  type="text" class="form-control" placeholder="Fim" aria-label="Server">
                            </div>

                            <label  for="date-end" style='margin-top: 1%;color:white;font-weight:bold;'>Horário Noite</label>
                            <div class="input-group mb-3" style='margin-top:1%;'>
                                <input name="horario-noite-inico"  type="text" class="form-control" placeholder="Inicio" aria-label="Username" style='margin-right:5px'>

                                <input name="horario-noite-fim" type="text" class="form-control" placeholder="Fim" aria-label="Server">
                            </div>

                            <div class="input-group mb-3" style='margin-top:5%;'>
                                <input name="certificacao" type="text" class="form-control" placeholder="Horas de Certificação" aria-label="Username">
                            </div>

                            <div class="input-group mb-3">
                                <input name="lote" type="text" class="form-control" placeholder="Lote Atual. Exemplo: primeiro lote " aria-label="Username">
                            </div>

                            <div class="input-group mb-3">
                                <input name="extra" type="text" class="form-control" placeholder="Texto extra  " aria-label="Username">
                            </div>

                            <div class="mb-3">
                                <label for="basic-url" class="form-label" style='color:white;font-weight:bold;margin-top:0%'>Link canal do youtube</label>
                                <div class="input-group">
                                    <input name="canal" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder='https://www.youtube.com/canal-youtube'>
                                </div>


                                <label for="date-inicio" style='margin-top: 5%;color:white;font-weight:bold;'>Data do evento</label>
                                <div class="input-group" style='margin-top: 10px'>

                                    
                                <input name="inicio" placeholder="dia"  type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name='date-inicio'>
                                    <input name="mes"  type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name='date-inicio' placeholder='mes'>
                                </div>

                               
                                <div class="input-group" style='margin-top: 10px'>

                                    <input name="fim" placeholder="dia de encerramento"  type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name='date-end'>
                                </div>

                                <div class="input-group mb-3" style='margin-top: 5%'>
                                    <input name="valor" type="text" class="form-control" placeholder="Valor atual" aria-label="Username">
                                </div>

                                <div class="mb-3">
                                    <label for="basic-url" class="form-label" style='color:white;font-weight:bold;margin-top:0%'>Link para se inscrever</label>
                                    <div class="input-group">
                                        <input name="inscrever" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder='https://www.youtube.com/canal-youtube'>
                                    </div>

                                    <div class="input-group mb-3" style='margin-top: 5%'>
                                        <input name="dias" type="number" class="form-control" placeholder="Quantidade de dias" aria-label="Username" id='dias'>
                                    </div>

                                    <button type="button" class="btn btn-light" onclick="_dias()">Roteiro dos dias</button>

                                    <div class='col-lg-12' id="roteiro-container" style='margin-top:5%'>

                                    </div>

                                    <script>
                                        function _dias() {
                                            let dias = document.getElementById('dias').value

                                            for (let i = 0; i < dias; i++) {

                                                let textArea = `
                                            
                                            <div style = 'display:flex'>   
                                            <div class="input-group" style='margin-right: 5px; margin-top: 10px;borde'>
                                            <textarea name="manha_` + (i + 1) + `" rows='5' class="form-control" aria-label="With textarea" placeholder ="Roteiro dia ${i+1} manhã " id='manha${i+1}'></textarea>
                                            </div>

                                            <div class="input-group" style='margin-right: 5px; margin-top: 10px;borde'>
                                            <textarea name="tarde_` + (i + 1) + `" rows='5' class="form-control" aria-label="With textarea" placeholder ="Roteiro dia ${i+1} tarde " id='tarde${i+1}'></textarea>
                                            </div>

                                            <div class="input-group" style='margin-right: 5px; margin-top: 10px;borde' name="">
                                            <textarea name="noite_` + (i + 1) + `" rows='5' class="form-control" aria-label="With textarea" placeholder ="Roteiro dia ${i+1} noite " id='noite${i+1}'></textarea>
                                            </div>
                                            
                                            </div>
                                            `

                                                document.getElementById('roteiro-container').innerHTML += textArea
                                            }



                                        }
                                    </script>

                                    <div class="input-group mb-3" style='margin-top:5%;'>
                                        <input name="cidade" type="text" class="form-control" placeholder="Cidade" aria-label="Username" style='margin-right:5px'>

                                        <input type="text" class="form-control" placeholder="Estado" aria-label="Server" name="estado">
                                    </div>
                                    <label for="date-end" style='margin-top: 1%;color:white;font-weight:bold;'>Fotos</label>
                                    <div class="input-group mb-3" style='margin-top:2%;'>
                                        <input type="file" class="form-control" id="inputGroupFile01" multiple name='fotos[]'>
                                    </div>

                                    <button type="submit" class="btn btn-secondary btn-lg" name="botao">Gerar Landing-page</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');


        body {


            background-image: linear-gradient(90deg, #57AEB9 30%, #0c353a 100%);

            font-family: 'Lato', sans-serif;

        }

        .formulario {
            margin-top: 10%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fundo-form {
            border-radius: 10px;
            background-color: #51a1ac;
            padding: 60px
        }

        .fundo-form form label {
            margin-top: 10%;
        }

        @media only screen and (max-width: 991px) {
            .fundo-form {
                padding: 30px
            }
        }
    </style>


</body>

</html>

</html>