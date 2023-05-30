function MostrarCheckbox(id) {
    if (id == "MensagemSMS") {
        telefone.style.display = "block";
        usuario.style.display = "none";


    }
    if (id == "Emailcaixa") {
        telefone.style.display = "none";
        usuario.style.display = "block";

    }

    if (id == "MensagemSMS") {
        caixabranca.style.display = "none";
        telefone.style.display = "block";
    }

    if (id == "Emailcaixa") {
        caixabranca.style.display = "none";
        usuario.style.display = "block";
        listaBandeiras.style.display = "none";

    }
}

function exibirBandeiras(){
    var lista = document.getElementById("listaBandeiras");
    if (lista.style.display === "none") {
      lista.style.display = "block";
    } else {
      lista.style.display = "none";
    }
  }    

function trocarBandeiras(src, id, n) {
    var imagem = document.getElementById('trocaBandeira');
    var imagemPais = document.getElementById(id);
    imagem.src = src;
    dddPais.value = n
  }

  function validarFormulario() {
  var email = document.getElementById('usuario').value;
  var telefone = document.getElementById('dddPais').value;
  var mensagemErroEmail = document.getElementById('mensagemErroEmail');
  var mensagemErroTelefone = document.getElementById('mensagemErroTelefone');

  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var telefoneRegex = /^(\+[0-9]{2,3})\s\([0-9]{2}\)\s[0-9]{4}-[0-9]{4}$|^\(\+[0-9]{2,3}\)[0-9]{11}$|^\(\+[0-9]{2,3}\)\s\([0-9]{2,3}\)\s[0-9]{9}$/;

  mensagemErroEmail.innerText = '';
  mensagemErroTelefone.innerText = '';

  if (email === '' && telefone === '') {
    alert('Por favor, preencha o campo de e-mail ou telefone.');
    return false;
  }

  if (email !== '' && !validarEmail(email)) {
    mensagemErroEmail.innerText = 'O e-mail informado é inválido.';
    return false;
  }

  if (telefone !== '' && !validarTelefone(telefone)) {
    mensagemErroTelefone.innerText = 'O telefone fornecido é inválido.';
    return false;
  }

  limparMensagensErro(); // Limpar as mensagens de erro antes de redirecionar

  setTimeout(function() {
    window.location.href = "../inserir_cód_sms/inserir_cód_sms.html";
  }, 0);
}

function validarEmail(email) {
  var emailRegex = /^[a-zA-Z0-9._-]{2,30}@(gmail|terra|yahoo|hotmail)\.com$/;
  return emailRegex.test(email);
}

function validarTelefone(telefone) {
  var telefoneRegex = /^(\+[0-9]{2,3})\s\([0-9]{2}\)\s[0-9]{4}-[0-9]{4}$|^\(\+[0-9]{2,3}\)[0-9]{11}$|^\(\+[0-9]{2,3}\)\s\([0-9]{2,3}\)\s[0-9]{9}$/;
  return telefoneRegex.test(telefone);
}

function limparMensagensErro() {
  var mensagemErroEmail = document.getElementById('mensagemErroEmail');
  var mensagemErroTelefone = document.getElementById('mensagemErroTelefone');

  mensagemErroEmail.innerText = '';
  mensagemErroTelefone.innerText = '';
}
