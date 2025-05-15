<?php
    if(isset($_GET['page'])){

        switch ($_GET['page']) {
            case 'home':
                include 'base/home.php';
                break;
            // ---- ALUNOS ----///
            case 'lista_alu':
                include "sis/alunos/lista_alu.php";
                break;
            
            case 'fadd_alu':
                include "sis/alunos/fadd_alu.php";
                break;
            
            case 'insere_alu':
                include "sis/alunos/insere_alu.php";
                break;
            
            case 'fedita_alu':
                include "sis/alunos/fedita_alu.php";
                break;
                
            case 'view_alu':
                include "sis/alunos/view_alu.php";
                break;
            
            case 'excluir_alu':
                include "sis/alunos/excluir_alu.php";
                break;
            
            case 'atualiza_alu':
                include "sis/alunos/atualiza_alu.php";
                break;
            // ---- USUÁRIOS ----///
            case 'lista_usu':
                include "sis/usuarios/lista_usu.php";
                break;
            
            case 'fadd_usu':
                include "sis/usuarios/fadd_usu.php";
                break;
            
            case 'insere_usu':
                include "sis/usuarios/insere_usu.php";
                break;
            
            case 'fedita_usu':
                include "sis/usuarios/fedita_usu.php";
                break;
                
            case 'view_usu':
                include "sis/usuarios/view_usu.php";
                break;
            
            case 'atualiza_usu':
                include "sis/usuarios/atualiza_usu.php";
                break;
            
            case 'block_usu':
                include "sis/usuarios/block_usu.php";
                break;
            
            case 'ativa_usu':
                include "sis/usuarios/ativa_usu.php";
                break;
                       
            default:
                include "base/home.php";
                break;
            // ---- DISCIPLINAS ----///
            case 'lista_disc':
                include "sis/disciplina/lista_disc.php";
                break;
            
            case 'fadd_disc':
                include "sis/disciplina/fadd_disc.php";
                break;
            
            case 'insere_disc':
                include "sis/disciplina/insere_disc.php";
                break;
            
            case 'fedita_disc':
                include "sis/disciplina/fedita_disc.php";
                break;
                
            case 'view_disc':
                include "sis/disciplina/view_disc.php";
                break;
            
            case 'excluir_disc':
                include "sis/disciplina/excluir_disc.php";
                break;
            
            case 'atualiza_disc':
                include "sis/disciplina/atualiza_disc.php";
                break;
            // ---- PRODUTOS ----///
            case 'lista_prod':
                include "sis/produto/lista_prod.php";
                break;
            
            case 'fadd_prod':
                include "sis/produto/fadd_prod.php";
                break;
            
            case 'insere_prod':
                include "sis/produto/insere_prod.php";
                break;
            
            case 'fedita_prod':
                include "sis/produto/fedita_prod.php";
                break;
                
            case 'view_prod':
                include "sis/produto/view_prod.php";
                break;
            
            case 'excluir_prod':
                include "sis/produto/excluir_prod.php";
                break;
            
            case 'atualiza_prod':
                include "sis/produto/atualiza_prod.php";
                break;
        }
    }
?>