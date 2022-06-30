$(function(){

    
    $('#logo').on('click',function(){
        $('aside').toggle('slow');
    })



    $('#btnCadastrarInviduo').on('click',function(){
        $('#individuo').load('PHP/inividuosPHP/cadastroIndividuoForm.php');
        $('#individuo').slideToggle('slow');
    })
    $('#btnConsultarInviduo').on('click',function(){
        $('#individuo').load('PHP/inividuosPHP/consultaInviduoForm.php');
        $('#individuo').slideToggle('slow');
    })


    $('#btnCadastrarMissao').on('click',function(){
        $('#missao').slideToggle('slow');
        $('#missao').load('PHP/missaoPHP/cadastroMissaoForm.php');
    })
    $('#btnConsultarMissao').on('click',function(){
        $('#missao').slideToggle('slow');
        $('#missao').load('PHP/missaoPHP/consultaMissaoForm.php');
    })
    $('#btnCadastrarRecursos').on('click',function(){
        $('#recursos').slideToggle('slow');
        $('#recursos').load('PHP/recursoPHP/cadastroRecursoForm.php');
    })    

    $('#btnConsultarRecursos').on('click',function(){
        $('#recursos').slideToggle('slow');
        $('#recursos').load('PHP/recursoPHP/consultaRecursosForm.php');
    })

    $('#btnEditarIndividuo').on('click',function(){
        $('#editarIndividuo').slideToggle('slow');
        $('#editarIndividuo').slideToggle('PHP/inividuosPHP/editarIndividuoForm.php');
    })

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

    
})
