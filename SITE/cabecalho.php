<?php 
    $index = "..\index.php";
    $analiseForm = "../analiseMedicas/analiseForm.php";
    $listagemAnalise = "../analiseMedicas/listagemAnalise.php";
    $pacienteForm = "../paciente/Clinica.php";
    $listagemPaciente= "../paciente/ListagemClinica.php";
    $agendamentoForm = "../agendamento/agendamento.php";
    $listagemAgendamento ="../agendamento/listagem.php";
    $colaboradorForm = "../colaborador/formCad1.php";
    $listagemColaborador = "../colaborador/listagem1.php";
    if(isset($arquivo)){
        if($arquivo == "formCad1.php"||$arquivo == "listagem1.php"){
            $colaboradorForm = "formCad1.php";
            $listagemColaborador = "listagem1.php";
        }
        if($arquivo=="agendamento.php"||$arquivo=="listagem.php"){
            $agendamentoForm = "agendamento.php";
            $listagemAgendamento ="listagem.php";
        }
        if($arquivo=="Clinica.php"||$arquivo=="ListagemClinica.php"){
            $pacienteForm = "Clinica.php";
            $listagemPaciente = "ListagemClinica.php";
        }
        if($arquivo=="analiseForm.php"||$arquivo=="listagemAnalise.php"){
            $analiseForm = "analiseForm.php";
            $listagemAnalise = "listagemAnalise.php";
        }
        if($arquivo=="index.php"){    
            $index = "#";
            $analiseForm = "analiseMedicas/analiseForm.php";
            $listagemAnalise = "analiseMedicas/listagemAnalise.php";
            $pacienteForm = "paciente/Clinica.php";
            $listagemPaciente= "paciente/ListagemClinica.php";
            $agendamentoForm = "agendamento/agendamento.php";
            $listagemAgendamento ="agendamento/listagem.php";
            $colaboradorForm = "colaborador/formCad1.php";
            $listagemColaborador = "colaborador/listagem1.php";
        }
    }
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Clínica Odontológica</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $index?>">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                             Agendamento 
                        </a>
                        <div class="dropdown-menu bg-dark">
                            <a class="dropdown-item text-light" href="<?php echo $agendamentoForm ?>">Cadastro Agendamento</a>
                            <a class="dropdown-item text-light" href="<?php echo $listagemAgendamento ?>">Listagem Agendamento</a>
                        </div>  
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                             Analises 
                        </a>
                        <div class="dropdown-menu bg-dark">
                            <a class="dropdown-item text-light" href="<?php echo $analiseForm ?>">Cadastro Analise</a>
                            <a class="dropdown-item text-light" href="<?php echo $listagemAnalise ?>">Listagem Analise</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                             Paciente
                        </a>
                        <div class="dropdown-menu bg-dark">
                            <a class="dropdown-item text-light" href="<?php echo $pacienteForm ?>">Cadastro Paciente</a>
                            <a class="dropdown-item text-light" href="<?php echo $listagemPaciente ?>">Listagem Paciente</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                             Funcionarios 
                        </a>
                        <div class="dropdown-menu bg-dark">
                            <a class="dropdown-item text-light" href="<?php echo $colaboradorForm ?>">Cadastro Funcionarios</a>
                            <a class="dropdown-item text-light" href="<?php echo $listagemColaborador ?>">Listagem Funcionario</a>
                        </div>  
                    </li>
                    <li class="nav-item dropdown" >
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                                    Login 
                                </a>
                                <div class="dropdown-menu bg-dark">
                                    <form class="form-inline my-2 my-lg-0">
                                        <label class="mx-sm-2 text-light">
                                            Login:
                                        </labeL>
                                        <input class="form-control mx-sm-2" type="search" placeholder="Login" aria-label="Pesquisar">
                                        <br>
                                        <label class="mx-sm-2 text-light">
                                            Senha:
                                        </labeL>
                                        <input class="form-control mx-sm-2" type="search" placeholder="Senha" aria-label="Pesquisar">
                                        <br>
                                        <button class="btn btn-outline-primary my-2 my-sm-2 mx-sm-2" type="submit">Entrar</button>
                                    </form>
                                </div>
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                                    Social 
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Facebook</a>
                                    <a class="dropdown-item" href="#">Twitter</a>
                                    <a class="dropdown-item" href="#">Instagran</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Tel.(11)9999-9999</a>
                            </li>
                </ul>
                
            </div>
        </nav>

        