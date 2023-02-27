<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <section class="bcgb">
        <div class="container">
            <br>
            <h2 class="cnt">Dados do Aluno</h2>
            <hr class="hr4">
            


            <form method="post" action="salvar.php" id="form">

                <div class="row mb-1">
                    <div class="col-sm-6">
                        Nome Completo: <input type="text" class="form-control form-control-sm" placeholder="Nome" name="nome" required>
                    </div>
                    <div class="col-sm-3">
                        <label>Data de Nascimento:</label>
                        <div class="input-group" required>
                            <input type="date" name="DataN" class="form-control form-control form-control-sm" id="dataNascimento" required>
                        </div>
                    </div>
                </div>


                <div class="row mb-1"></div>
                <div class="row mb-1"></div>


                <div class="row mb-1">
                    <div class="col-sm-6">
                        Endereço Residencial: <input type="text" class="form-control form-control-sm" placeholder="Endereço Residencial" name="nome" required>
                    </div>
                    <div class="col-sm-3">
                        RG: <input type="text" name="RG" placeholder="0000000000000" class="form-control form-control-sm" id="RG" maxlength="11" oninput="mascaraRG('RG')" required>
                    </div>
                </div>


                <br>
                <h2 class="cnt">Dados dos Pais</h2>
                <hr class="hr4">
                
                <div class="row mb-1">
                    <div class="col-sm-6">
                        Nome da Mãe: <input type="text" class="form-control form-control-sm" placeholder="Nome da Mãe" name="nomemae" required>
                    </div>
                    <div class="col-sm-3">
                        Nº do CPF: <input type="text" name="cpfmae" placeholder="000.000.000-00" class="form-control form-control-sm" id="cpfmae" maxlength="11" oninput="mascaraCM('CpfMae')" required>
                    </div>
                    <div class="col-sm-3">
                        Telefone de contato: <input type="text" name="telmae" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telmae" maxlength="11" oninput="mascara('TelMae')" required>
                    </div>
                </div>

                <div class="row mb-1"></div>

                <div class="row mb-1">
                    <div class="col-sm-6">
                        Email para contato: <input type="text" name="emailmae" placeholder="example@example.com" class="form-control form-control-sm" id="emailmae" maxlength="11" oninput="mascaraa('RG')" required>
                    </div>
                    <div class="col-sm-6">
                        Local de Trabalho (nome/endereço): <input type="text" class="form-control form-control-sm" placeholder="Nome" name="ltmae" required>
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
                        Nº do CPF: <input type="text" name="cpfpai" placeholder="000.000.000-00" class="form-control form-control-sm" id="cpfpai" maxlength="11" oninput="mascaraCP('CpfPai')" required>
                    </div>
                    <div class="col-sm-3">
                        Telefone de contato: <input type="text" name="telpai" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                    </div>
                </div>

                <div class="row mb-1"></div>


                <div class="row mb-1">
                    <div class="col-sm-6">
                        Email para contato: <input type="text" name="emailpai" placeholder="example@example.com" class="form-control form-control-sm" id="emailpai" maxlength="11" oninput="mascaraa('RG')" required>
                    </div>

                    <div class="col-sm-6">
                        Local de Trabalho (nome/endereço): <input type="text" class="form-control form-control-sm" placeholder="Nome" name="ltmae" required>
                    </div>
                </div>
<br>

                <div class="row mb-1">
                    <div class="col-sm-5">
                    <br>
                        <label> Em caso de EMERGÊNCIA, para quem ligar e em qual número?</label> <br>
                        <input type="radio" id="dad" name="emg" value="dad">
                        <label for="dad">Pai</label> &nbsp; &nbsp; &nbsp; &nbsp;
                        <input type="radio" id="mom" name="emg" value="mom">
                        <label for="mom">Mãe</label>
                    </br>
                    </div>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-6">
                        Observações:
                        <textarea style="width: 640px; height: 60px;" class="form-control form-control-sm"></textarea>
                    </div>
                </div>
                <br>
          
                <h2 class="cnt">Ficha de Saúde da(o) aluna(o)</h2>
                <hr class="hr4">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td style="width:500px"> <label> É dependente em plano de saúde?</label> </td>
                            <td style="width: 150px;"> </i> <select class="form-select" name="" id="">
                                    <option value="">Sim</option>
                                    <option value="">Não</option>
                                </select> </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td> <label> Tem algum problema de saúde crônico?</label> </td>
                            <td> <select class="form-select" name="" id="">
                                    <option value="">Sim</option>
                                    <option value="">Não</option>
                                </select> </td>
                            <td> </td>
                            <td> </td>

                        </tr>

                        <tr>
                            <th scope="row">3</th>

                            <td>
                                <label> Tem alergia(s)?</label>
                            </td>
                            <td>
                                <select class="form-select" name="" id="">
                                    <option value="">Sim</option>
                                    <option value="">Não</option>
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <label> Se sim, qual(is)?</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Digite aqui" id="" class="form-control form-control-sm">
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td> <label> Possui alguma restrição alimentar?</label> </td>

                            <td> <select class="form-select" name="" id="">
                                    <option value="">Sim</option>
                                    <option value="">Não</option>
                                </select> </td>
                            <td style="text-align: center;">
                                <label> Se sim, qual(is)?</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Digite aqui" id="" class="form-control form-control-sm">
                            </td>
                        </tr>


                        <tr>
                            <th scope="row">5</th>
                            <td>
                                <label> Já recebeu diagnóstico médico de deficiência?</label>
                            </td>
                            <td>
                                <select class="form-select" name="" id="">
                                    <option value="">Sim</option>
                                    <option value="">Não</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>


                        <tr>
                            <th scope="row">6</th>
                            <td>
                                <label> Apresenta alguma dificuldade motora, auditiva, visual, na fala ou emocional?</label>
                            </td>
                            <td style="height: 15px;">
                                <select class="form-select" name="" id="">
                                    <option value="">Sim</option>
                                    <option value="">Não</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">7</th>
                            <td>
                                <label> Está em tratamento médico? </label>
                            </td>
                            <td>
                                <select class="form-select" name="" id="">
                                    <option value="">Sim</option>
                                    <option value="">Não</option>
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <label> Se sim, qual? E para que doença?</label>
                            </td>
                            <td>
                                <input type="text" id="" placeholder="Digite aqui" class="form-control form-control-sm">
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">8</th>
                            <td> <label> Está em uso de alguma medicação? </label> </td>
                            <td>
                                <select class="form-select" name="" id="">
                                    <option value="">Sim</option>
                                    <option value="">Não</option>
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <label> Qual? Quando encerrará o uso?</label>
                            </td>
                            <td>
                                <input type="text" id="" placeholder="Digite aqui" class="form-control form-control-sm">
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">9</th>
                            <td>
                                <label> As vacinas do calendário de vacinação do Ministério da Saúde estão em dia?</label>
                            </td>
                            <td>
                                <select class="form-select" name="" id="">
                                    <option value="">Sim</option>
                                    <option value="">Não</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">10</th>
                            <td>
                                <label> É acompanhado por psicólogo, terapeuta ocupacional ou fonoaudiólogo?</label>
                            </td>
                            <td>
                                <select class="form-select" name="" id="">
                                    <option value="">Sim</option>
                                    <option value="">Não</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">10</th>
                            <td>
                                <label> Em caso de emergência para quem ligar e em qual número?</label>
                            </td>
                            <td>
                                <select class="form-select" name="" id="">
                                    <option value="">Pai</option>
                                    <option value="">Mãe</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <br>
                        <tr>
                            <th scope="row">11</th>
                            <td>
                                <label> Existe alguma outra informação a respeito da saúde do aluno que o responsável queira fazer constar desta ficha?</label>
                            </td>
                            <td>
                                <select class="form-select" name="" id="">
                                    <option value="">Sim</option>
                                    <option value="">Não</option>
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <label> Se sim, qual(is)? </label>
                            </td>
                            <td>
                                <input type="text" placeholder="Digite aqui" id="" class="form-control form-control-sm">
                            </td>
                        </tr>
                    </tbody>
                </table>
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
    <script src="mask.js"></script>
</body>

</html>