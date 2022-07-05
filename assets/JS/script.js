function callCadastroIndividuo(){
    $('#individuo').toggle('slow');
    $('#individuo').removeClass('menu');
    $('#individuo').addClass('ativo');
    $('#individuo').load('PHP/inividuosPHP/cadastroIndividuoForm.php');
}
function callConsultaIndividuo(){
        $('#individuo').toggle('slow');
        $('#individuo').removeClass('menu');
        $('#individuo').addClass('ativo');
        $('#individuo').load('PHP/inividuosPHP/consultaInviduoForm.php');
}
function callCadastroMissao(){
    $('#missao').toggle('slow');
    $('#missao').removeClass('menu');
    $('#missao').addClass('ativo');
    $('#missao').load('PHP/missaoPHP/cadastroMissaoForm.php');
}
function callConsultaMissao(){
    $('#missao').toggle('slow');
    $('#missao').removeClass('menu');
    $('#missao').addClass('ativo');
    $('#missao').load('PHP/missaoPHP/consultaMissaoForm.php');
}

function callCadastroRecurso(){
    $('#recursos').toggle('slow');
    $('#recursos').removeClass('menu');
    $('#recursos').addClass('ativo');
    $('#recursos').load('PHP/recursoPHP/cadastroRecursoForm.php');
}
function callConsultaRecurso(){
    $('#recursos').toggle('slow');
    $('#recursos').removeClass('menu');
    $('#recursos').addClass('ativo');
    $('#recursos').load('PHP/recursoPHP/consultaRecursosForm.php');
}

//jQuery
$(function(){

    //btn aside
    $('#logo').on('click',function(){
        $('aside').toggle('slow');
    });
    //btn aside

    //login
    
    $('#iconVerSenha').on('mousedown',function(){
        $('#senhaUser').attr('type','text')
        $('#iconVerSenha').css('background-color','#222')
        $('#iconVerSenha').attr('src','assets/IMGs/icons/light_show_view_visible_icon.png')
    });
    $('#iconVerSenha').on('mouseup',function(){
        $('#senhaUser').attr('type','password')
        $('#iconVerSenha').css('background-color','#DDD')
        $('#iconVerSenha').attr('src','assets/IMGs/icons/hide_invisible_private_icon.png')
    });    
    //login

    
});
