document.getElementById('contatoForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio padrão do formulário

    var formData = new FormData(this);

    fetch('/contato', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        var mensagemDiv = document.getElementById('mensagem');
        mensagemDiv.innerText = data;
        mensagemDiv.style.display = 'block'; // Exibe a mensagem
    })
    .catch(error => console.error('Erro:', error));
});
