let nomeDeUsuario;
let senhaDoUsuario;
const MENSAGEMDEERRO = "ERRO: Senha igual ao nome";
const MENSAGEMDESUCESSO = `${nomeDeUsuario} Parabens, cadastro realizado!`;

nomeDeUsuario = prompt("Nome de usuario: ");
senhaDoUsuario = prompt("Senha:");

while (nomeDeUsuario === senhaDoUsuario) {
    alert(MENSAGEMDEERRO);
    nomeDeUsuario = prompt("Nome de usuario: ");
    senhaDoUsuario = prompt("Senha:");
}

alert(MENSAGEMDESUCESSO);