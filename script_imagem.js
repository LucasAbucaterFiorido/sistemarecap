function previewImg(imagem) 
{
    // let preview = $("#preImg");
    // let file = $("#arquivoimg").file[0];
    var preview = document.getElementById("preImg");
    var file = document.getElementById("arquivoimg").files[0];
    // console.log(preview);
    let leitor = new FileReader();

    leitor.onloadend = function(){
        let caminho = leitor.result;

        preview.src = caminho;
        $("#base64Code").val(caminho);
    }

    if(file)
    {
        leitor.readAsDataURL(file);
    }
    else
    {
        preview.src = "";
    }
}