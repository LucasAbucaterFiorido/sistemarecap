//  PROFESSOR ->
// $("#aba_usuario").click(function(){
//     alert("Teste");
//     $("#teste").load("../sistemarecap/Produto/form_produto.php");
// })

$(window).on("load", function()
{
    $("#aba_usuario").click(function()
    {
        $("#teste").load("Usuario/form_usuario.html");

        $("#aba_usuario").addClass("active");
        $("#aba_fornecedor").removeClass("active");
        $("#aba_categoria").removeClass("active");
        $("#aba_produto").removeClass("active");
    });

    $("#aba_fornecedor").click(function()
    {
        $("#teste").load("Fornecedor/form_fornecedor.html");
        
        $("#aba_usuario").removeClass("active");
        $("#aba_fornecedor").addClass("active");
        $("#aba_categoria").removeClass("active");
        $("#aba_produto").removeClass("active");
    });

    $("#aba_categoria").click(function()
    {
        $("#teste").load("Categoria/form_categoria.html");
        
        $("#aba_usuario").removeClass("active");
        $("#aba_fornecedor").removeClass("active");
        $("#aba_categoria").addClass("active");
        $("#aba_produto").removeClass("active");
    });

    $("#aba_produto").click(function()
    {
        $("#teste").load("Produto/form_produto.php");

        $("#aba_usuario").removeClass("active");
        $("#aba_fornecedor").removeClass("active");
        $("#aba_categoria").removeClass("active");
        $("#aba_produto").addClass("active");
    });    
});

// $(document).ready(function()
// {
//     $("#aba_usuario").click(function()
//     {
//         $("#teste").load("Usuario/form_usuario.html");
//     });

//     $("#aba_fornecedor").click(function()
//     {
//         $("#teste").load("Fornecedor/form_fornecedor.html");
//     });

//     $("#aba_categoria").click(function()
//     {
//         $("#teste").load("Categoria/form_categoria.html");
//     });

//     $("#aba_produto").click(function()
//     {
//         $("#teste").load("Produto/form_produto.php");
//     }); 
// })



// vai carregar os scripts apenas depois carregar toda tela, ação necessaria por colocar os scripts no head. Tudo dentro do head não aparece quando inspecionam a pagina no google.
// $(document).load(function()
// {

// })