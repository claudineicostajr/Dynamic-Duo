//individuos
function callCadastroIndividuo(){
    $('#individuo').toggle('slow');
    $('#individuo').load('PHP/individuosPHP/cadastroIndividuoForm.php');
}
function callConsultaIndividuo(){
    $('#individuo').toggle('slow');
    $('#individuo').load('PHP/individuosPHP/consultaInviduoForm.php');
}
function callEditarIndividuo(){
    $('#editarIndividuo').toggle('slow');
    $('#editarIndividuo').load('PHP/individuosPHP/editarIndividuoForm.php');
}

function callPerfil(){
    $('img#corpo').attr('src','');
    var teste = $('img#corpo').attr('src');
    console.log(teste)
    var captura='';
    captura = $('img.selecaoPerfil').attr('src');
    var estagio1 = captura.replace('perfil','corpo');
    var  estagio2 = estagio1.replace('.jpg','.png');
    // console.log(captura);
    // console.log(estagio2); 
    $('img#corpo').attr('src',estagio2);
}

//individuos
//missão
function callCadastroMissao(){
    $('#missao').toggle('slow');
    $('#missao').load('PHP/missaoPHP/cadastroMissaoForm.php');
}
function callConsultaMissao(){
    $('#missao').toggle('slow');
    $('#missao').load('PHP/missaoPHP/consultaMissaoForm.php');
}
function callEditarMissao(){
    $('#editarMissao').toggle('slow');
    $('#editarMissao').load('PHP/missaoPHP/editarMissaoForm.php');
}
//missão
//recursos
function callCadastroRecurso(){
    $('#recursos').toggle('slow');
    $('#recursos').load('PHP/recursoPHP/cadastroRecursoForm.php');
}
function callConsultaRecurso(){
    $('#recursos').toggle('slow');
    $('#recursos').load('PHP/recursoPHP/consultaRecursosForm.php');
}
//recursos

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
