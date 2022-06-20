$(function(){
    $('#btnCadastrar').bind('click',function(){
        $('#individuo').toggle('slow');
    })
    $('#btnMissao').bind('click',function(){
        $('#missao').toggle('slow');
    })
    $('#btnRecursos').bind('click',function(){
        $('#recursos').toggle('slow');
    })
    $('#logo').bind('click',function(){
        $('aside').toggle('slow');
    })
    

    $('#btnTeste').on('click',function(){
        $('#teste').load('teste2.html');
    })



})
