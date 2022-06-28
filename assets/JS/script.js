$(function(){

    $('#btnCadastrarInviduo').on('click',function(){
        $('#individuo').toggle('slow');
        $('#individuo').removeClass('menu');
        $('#individuo').addClass('ativo');
        $('#individuo').load('PHP/inividuosPHP/cadastroIndividuoForm.php');
    })
    $('#btnConsultarInviduo').on('click',function(){
        $('#individuo').toggle('slow');
        $('#individuo').removeClass('menu');
        $('#individuo').addClass('ativo');
        $('#individuo').load('PHP/inividuosPHP/consultaInviduoForm.php');
    })
    $('#btnCadastrarMissao').on('click',function(){
        $('#missao').toggle('slow');
        $('#missao').removeClass('menu');
        $('#missao').addClass('ativo');
        $('#missao').load('PHP/missaoPHP/cadastroMissaoForm.php');
    })
    $('#btnConsultarMissao').on('click',function(){
        $('#missao').toggle('slow');
        $('#missao').removeClass('menu');
        $('#missao').addClass('ativo');
        $('#missao').load('PHP/missaoPHP/consultaMissaoForm.php');
    })
    $('#btnCadastrarRecursos').on('click',function(){
        $('#recursos').toggle('slow');
        $('#recursos').removeClass('menu');
        $('#recursos').addClass('ativo');
        $('#recursos').load('PHP/recursoPHP/cadastroRecursoForm.php');
    })    

    $('#btnConsultarRecursos').on('click',function(){
        $('#recursos').toggle('slow');
        $('#recursos').removeClass('menu');
        $('#recursos').addClass('ativo');
        $('#recursos').load('PHP/recursoPHP/consultaRecursosForm.php');
    })

    $('#logo').on('click',function(){
        $('aside').toggle('slow');
    })
    
})
