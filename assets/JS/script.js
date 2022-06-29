$(function(){

    
    $('#logo').on('click',function(){
        $('aside').toggle('slow');
    })
    
    
    
    $('#btnCadastrarInviduo').on('click',function(){
        $('#individuo').toggle('slow');
        $('#individuo').load('PHP/inividuosPHP/cadastroIndividuoForm.php');
    })
    $('#btnConsultarInviduo').on('click',function(){
        $('#individuo').toggle('slow');
        $('#individuo').load('PHP/inividuosPHP/consultaInviduoForm.php');
    })
    $('#btnCadastrarMissao').on('click',function(){
        $('#missao').toggle('slow');
        $('#missao').load('PHP/missaoPHP/cadastroMissaoForm.php');
    })
    $('#btnConsultarMissao').on('click',function(){
        $('#missao').toggle('slow');
        $('#missao').load('PHP/missaoPHP/consultaMissaoForm.php');
    })
    $('#btnCadastrarRecursos').on('click',function(){
        $('#recursos').toggle('slow');
        $('#recursos').load('PHP/recursoPHP/cadastroRecursoForm.php');
    })    

    $('#btnConsultarRecursos').on('click',function(){
        $('#recursos').toggle('slow');
        $('#recursos').load('PHP/recursoPHP/consultaRecursosForm.php');
    })

    $('#btnEditarIndividuo').on('click',function(){
        $('#editarIndividuo').toggle('slow');
        $('#editarIndividuo').load('PHP/inividuosPHP/editarIndividuoForm.php');
    })


    
})
