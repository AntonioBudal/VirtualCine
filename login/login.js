  function Login(){
            var email=document.getElementById('email').value;
            email = email.toLowerCase();
            // var senha=document.getElementById('senha').value;
            window.open('../telaInicial/novaTelaInicial.html?email='+email);
           

        }