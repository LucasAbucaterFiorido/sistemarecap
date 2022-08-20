$(function(){

    var callback = $("#callback");
    var action = "";

    function loading(datas)
    {
        callback.empty().html("Carregando...");
    }

    function cheirinho_de_sucesso(datas)
    {
        callback.empty().html("<pre>"+ datas +"</pre>");
        $("#txtcod").val($("#cod_pesquisa").html());
    }

    function erro_enviar(datas)
    {
        callback.empty().html("Erro ao enviar.");
    }

    // function limpar()
    // {
    //     $("#txtcod").val("");
    //     $("#txtnome").val("");
    //     $("#txtlogin").val("");
    //     $("#txtsenha").val("");
    //     $("#arquivoimg").val("");
    //     $("#selectsts").val("");
    //     $("#base64Code").val("");
    //     $("#txtobs").val("");
    // }

    function successPesquisa(datas)
    {
        callback.empty().html("<pre>"+ datas +"</pre>");

        $("#txtcod").val($("#cod_pesquisa").html());
        $("#txtnome").val($("#nome_pesquisa").html());
        $("#txtlogin").val($("#login_pesquisa").html());
        $("#txtsenha").val($("#senha_pesquisa").html());
        $("#arquivoimg").val($("#imagem_pesquisa").html());
        $('#txtdata').val($('#cadastro_pesquisa').html());
        $("#selectsts").val($("#status_pesquisa").html());
        $("#txtobs").val($("#obs_pesquisa").html());

        var preview = document.getElementById("preImg")

        $("#base64Code").val($("#imagem_pesquisa").html());
        preview.src = $("#imagem_pesquisa").html();
    }

    $.ajaxSetup({
        type:           'POST',
        beforeSend:     loading,
        error:          erro_enviar,
        success:        cheirinho_de_sucesso
    })

    $("#btt_pesquisar").click(function()
    {
        action= "Usuario/pesquisar_usuario.php";

        $.ajax({
            url:    action,
            data:{
                txtcod: $("#txtcod").val()
            },
            success:    successPesquisa
        });
    });

    $("#btt_cadastrar").click(function()
    {
        action = "Usuario/cadastrar_usuario.php";

        $.ajax({
            url:        action,
            data:{
                txtnome: $("#txtnome").val(),
                txtlogin: $("#txtlogin").val(),
                txtsenha: $("#txtsenha").val(),
                arquivoimg: $("#base64Code").val(),
                selectsts: $("#selectsts").val(),
                txtobs: $("#txtobs").val()
            }
        });
    });

    $("#btt_alterar").click(function()
    {
        action = "Usuario/alterar_usuario.php";

        $.ajax({
            url:    action,
            data:{
                txtcod: $("#txtcod").val(),
                txtnome: $("#txtnome").val(),
                txtlogin: $("#txtlogin").val(),
                txtsenha: $("#txtsenha").val(),
                arquivoimg: $("#base64Code").val(),
                selectsts: $("#selectsts").val(),
                txtobs: $("#txtobs").val()
            }
        });
    });


    

});