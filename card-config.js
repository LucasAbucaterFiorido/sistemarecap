//  PROFESSOR ->
// $("#aba_usuario").click(function(){
//     alert("Teste");
//     $("#teste").load("../sistemarecap/Produto/form_produto.php");
// })


$("#aba_usuario").click(function()
{
    $("#teste").load("Usuario/form_usuario.html");
});

$("#aba_fornecedor").click(function()
{
    $("#teste").load("Fornecedor/form_fornecedor.html");
});

$("#aba_categoria").click(function()
{
    $("#teste").load("Categoria/form_categoria.php");
});

$("#aba_produto").click(function()
{
    $("#teste").load("Produto/form_produto.php");
});