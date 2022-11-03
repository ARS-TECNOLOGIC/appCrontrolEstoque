function atualizaConsulta(){
var main = document.querySelector(".main-conteudo");
main.innerHTML=" ";

var lik1 = document.querySelector('#buscar');
lik1 = lik1.value;

setTimeout(()=>{
$.ajax({
    url:"http:./estoque.php",
    method:'post',
    data:{lik:lik1},
    success:function(RES){
        $(".main-conteudo").append(RES);
    }})},100);
}

var busca = document.querySelector("#buscar");
busca.addEventListener('input',atualizaConsulta);



