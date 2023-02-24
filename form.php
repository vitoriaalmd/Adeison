<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<section class="bcgb">
        <div class="container">
            <br>
            <h2 class="cnt">Dados do Aluno</h2>
            <div class="line"></div>
            

            <form method="post" action="salvar.php" id="form">

                <div class="row mb-1">
                    <div class="col-sm-6">
                        Nome Completo: <input type="text" class="form-control form-control-sm" placeholder="Nome" name="nome" required>
                    </div>
                    <div class="col-sm-2">
                        <label>Data de Nascimento:</label>
                        <div class="input-group" required>
                            <input type="date" name="DataN" class="form-control form-control form-control-sm" id="dataNascimento" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        RG ou dados da certidão de nascimento: <input type="text" name="RG" placeholder="00.000.000-00" class="form-control form-control-sm" id="RG" maxlength="11" oninput="mascaraa('RG')" required>
                    </div>
                </div>


                <div class="row mb-1"></div>
                <div class="row mb-1"></div>


                 <div class="row mb-1">
                    <div class="col-sm-6">
                        Email do Aluno: <input type="text" name="RG" placeholder="example@aluno.ce.gov.br" class="form-control form-control-sm" id="RG" maxlength="11" oninput="mascaraa('RG')" required>
                    </div>
                    
                    <div class="col-sm-4">
                        Endereço Residencial: <input type="text" class="form-control form-control-sm" placeholder="Nome" name="nome" required>
                    </div>
                 </div>
 

                <br>
            <h2 class="cnt">Dados dos Pais</h2>
                <div class="row mb-1">
                    <div class="col-sm-6">
                        Nome da Mãe: <input type="text" class="form-control form-control-sm" placeholder="Nome da Mãe" name="nomemae" required>
                    </div>
                    <div class="col-sm-3">
                        Nº do CPF: <input type="text" name="cpfmae" placeholder="000.000.000-00" class="form-control form-control-sm" id="cpfmae" maxlength="11" oninput="mascaraa('RG')" required>
                    </div>
                    <div class="col-sm-3">
                        Local de Trabalho (nome/endereço): <input type="text" class="form-control form-control-sm"  name="ltmae" required>
                    </div>
                </div>

                <div class="row mb-1"></div>

                 <div class="row mb-1">
                    <div class="col-sm-6">
                        Email para contato: <input type="text" name="emailmae" placeholder="example@example.com" class="form-control form-control-sm" id="emailmae" maxlength="11" oninput="mascaraa('RG')" required>
                    </div>
                    
                    <div class="col-sm-4">
                        Telefone de contato: <input type="text" name="telefone" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telefone" maxlength="11" oninput="mascaraa('TelFixo')" required>
                    </div>
                 </div>

                <div class="row mb-1"></div>
                <div class="row mb-1"></div>
                <div class="row mb-1"></div>


                 <div class="row mb-1">
                    <div class="col-sm-6">
                        Nome do Pai: <input type="text" class="form-control form-control-sm" placeholder="Nome do Pai" name="nomepai" required>
                    </div>
                    <div class="col-sm-3">
                        Nº do CPF: <input type="text" name="cpfpai" placeholder="000.000.000-00" class="form-control form-control-sm" id="cpfpai" maxlength="11" oninput="mascaraa('RG')" required>
                    </div>
                    <div class="col-sm-3">
                        Local de Trabalho (nome/endereço): <input type="text" class="form-control form-control-sm"  name="ltpai" required>
                    </div>
                </div>

                <div class="row mb-1"></div>


                 <div class="row mb-1">
                    <div class="col-sm-6">
                        Email para contato: <input type="text" name="emailpai" placeholder="example@example.com" class="form-control form-control-sm" id="emailpai" maxlength="11" oninput="mascaraa('RG')" required>
                    </div>
                    
                    <div class="col-sm-4">
                        Telefone de contato: <input type="text" name="telpai" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelFixo')" required>
                    </div>
                 </div>

                 <br>

                 <div class="row mb-1">
                    <div class="col-sm-5">
                        <label> Em caso de EMERGÊNCIA, para quem ligar e em qual número?</label>
                        <input type="radio" id="dad" name="emg" value="dad">
                        <label for="dad">Pai</label> &nbsp; &nbsp;
                        <input type="radio" id="mom" name="emg" value="mom">
                        <label for="mom">Mãe</label>
                    </div>
                    
                    <div class="col-sm-1"></div>

                    <div class="col-sm-6">
                        Observações:
                        <textarea style="width: 450px; height: 60px;" class="form-control form-control-sm"></textarea> 
                    </div>
                </div>


                 
                <h2 class="cnt">Ficha de Saúde da(o) aluna(o)</h2>

                <div class="row mb-1">
                    <div class="col-sm-12">
                        <label> É dependente em plano de saúde?</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="ps" value="">
                        <label for="">Não</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="ps" value="">
                        <label for="">Sim</label> 
                    </div>

                    <br>
                    <br>

                    <div class="row mb-1">
                    <div class="col-sm-12">
                        <label> Tem algum problema de saúde crônico?</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="sc" value="">
                        <label for="">Não</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="sc" value="">
                        <label for="">Sim</label> 
                    </div>

                    <br>
                    <br>

                    <div class="row mb-1">
                    <div class="col-sm-12">
                        <label> Tem Alergia?</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="ale" value="">
                        <label for="">Não</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="ale" value="">
                        <label for="">Sim</label> 
                    </div>

                    <br>
                    <br>

                    <div class="col-sm-12">
                        <label> Possui alguma restrição alimentar? </label> &nbsp; &nbsp;
                        <input type="radio" id="" name="ra" value="">
                        <label for="">Não</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="ra" value="">
                        <label for="">Sim</label> 
                    </div>

                    <br>
                    <br>

                    <div class="col-sm-12">
                        <label> Já recebeu diagnóstico médico de deficiência? </label> &nbsp; &nbsp;
                        <input type="radio" id="" name="def" value="">
                        <label for="">Não</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="def" value="">
                        <label for="">Sim</label> 
                    </div>

                    <br>
                    <br>

                    <div class="col-sm-12">
                        <label> Apresenta alguma dificuldade motora, auditiva, visual, na fala ou emocional?</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="dif" value="">
                        <label for="">Não</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="dif" value="">
                        <label for="">Sim</label> 
                    </div>

                    <br>
                    <br>

                    <div class="col-sm-12">
                        <label> Está em tratamento médico? Se sim, qual e para que doença? </label> &nbsp; &nbsp;
                        <input type="radio" id="" name="trat" value="">
                        <label for="">Não</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="trat" value="">
                        <label for="">Sim</label> 
                    </div>

                    <br>
                    <br>

                    <div class="col-sm-12">
                        <label> Está em uso de alguma medicação? Qual? Quando encerrará o uso? </label> &nbsp; &nbsp;
                        <input type="radio" id="" name="" value="">
                        <label for="">Não</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="" value="">
                        <label for="">Sim</label> 
                    </div>

                    <br>
                    <br> 

                    <div class="col-sm-12">
                        <label> As vacinas do calendário de vacinação do Ministério da Saúde estão em dia? </label> &nbsp; &nbsp;
                        <input type="radio" id="" name="" value="">
                        <label for="">Não</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="" value="">
                        <label for="">Sim</label> 
                    </div>

                    <br>
                    <br>

                    <div class="col-sm-12">
                        <label>É acompanhado por psicólogo, terapeuta ocupacional ou fonoaudiólogo? </label> &nbsp; &nbsp;
                        <input type="radio" id="" name="" value="">
                        <label for="">Não</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="" value="">
                        <label for="">Sim</label> 
                    </div>
                    <br>
                    <br>

                    <div class="col-sm-12">
                        <label> Em caso de emergência para quem ligar e em qual número? </label> &nbsp; &nbsp;
                        <input type="radio" id="" name="" value="">
                        <label for="">Não</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="" value="">
                        <label for="">Sim</label> 
                    </div>

                    <br>
                    <br>

                    <div class="col-sm-12">
                        <label> Existe alguma outra informação a respeito da saúde do aluno que o responsável queira fazer constar desta ficha? </label> &nbsp; &nbsp;
                        <input type="radio" id="" name="" value="">
                        <label for="">Não</label> &nbsp; &nbsp;
                        <input type="radio" id="" name="" value="">
                        <label for="">Sim</label> 
                    </div>

                    <br>
                    <br>
              
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-dark" id="btnSalvar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Enviar
                    </button>
                </div>

                <br>
            </form>
        </div>

        <br>
</section>
</body>
</html>