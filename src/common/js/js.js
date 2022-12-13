//aFunction- tualiza a consulta pegando o valor do input
function atualizaConsulta(){
var lik1 = document.querySelector('#buscar');
lik1 = lik1.value;

//recria a div que ira receber o resultado da consulta
var maninConteudo = document.querySelector('.main-conteudo');
    var newDiv = document.createElement("div");
    newDiv.classList.add("main-conteudo-consultado");
    maninConteudo.appendChild(newDiv);

    // Ajax faz a chamada para pagina consulta estoque e retorna na div.main-conteudo-consultado
$.ajax({
    url:"http:./consulta-estoque.php",
    method:'post',
    data:{lik:lik1},
    success:function(RES){
        $(".main-conteudo-consultado").append(RES);
    }});
}; //Fim da funcition atualiza consulta.

//Function- remove a div.main-conteudo-consultado e chama a nova consulta
function upconsulta(){
    var main = document.querySelector(".main-conteudo-consultado");
    main.remove();
    setTimeout(atualizaConsulta,500);
    
}
//Monitora os eventos de input na caixa de busca
var busca = document.querySelector("#buscar");
if(busca){
busca.addEventListener('input',upconsulta);
// Function- inicia a tela com o estoque total.
upconsulta();
};

//cria lista para dar entrada BD
var lista = [];
function addLista(){
 
    
    var input = document.getElementById('form-entrada-med');
    var inputs = input.querySelectorAll('input, select');
    inputs.forEach(function(a){
        //lista.unshift
        
        
        console.log(a.value)});

};


