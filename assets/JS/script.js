$(function(){
    $('#btnCadastrar').bind('click',function(){
        $('#individuo').toggle('slow');
        $('#individuo').load('PHP/cadastroIndividuoForm.php');
        $('#individuo').removeClass('menu');
        $('#individuo').addClass('ativo');
    })
    $('#btnMissao').bind('click',function(){
        $('#missao').load('PHP/cadastroMissaoForm.php');
        $('#missao').toggle('slow');
        $('#missao').removeClass('menu');
        $('#missao').addClass('ativo');
    })
    $('#btnRecursos').bind('click',function(){
        $('#recursos').load('PHP/cadastroRecursoForm.php');
        $('#recursos').toggle('slow');
        $('#recursos').removeClass('menu');
        $('#recursos').addClass('ativo');
    })
    $('#logo').bind('click',function(){
        $('aside').toggle('slow');
    })
    
    

})
