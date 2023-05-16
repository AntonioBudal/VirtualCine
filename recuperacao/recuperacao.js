function MostrarCheckbox(id)
{
    if(id=="MensagemSMS")
    {
        telefone.style.display="block";
        usuario.style.display="none";


    }
    if(id=="Emailcaixa")
    {
        telefone.style.display="none";
        usuario.style.display="block";

    }

    if(id=="MensagemSMS")
    {
        caixabranca.style.display="none";
        telefone.style.display="block";

    }

    if(id=="Emailcaixa")
    {
        caixabranca.style.display="none";
        usuario.style.display="block";
    } 
}  
    