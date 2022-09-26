/* QUIZZ USERS */
var respostas = {};

var pergunta1 = document.getElementById('question-1');
var pergunta2 = document.getElementById('question-2');
var pergunta3 = document.getElementById('question-3');
var pergunta4 = document.getElementById('question-4');
var pergunta5 = document.getElementById('question-5');

function guardarResposta(numero_pergunta, evento){
    if(evento.target.type === 'radio'){
        console.log(evento.target.value);
        respostas['pergunta'+ numero_pergunta] = parseInt(evento.target.value);
        console.log(respostas);
    }
}

pergunta1.addEventListener('click', function(evento){
    escolherResposta(1);
    guardarResposta(1, evento)
})
pergunta2.addEventListener('click', function(evento){
    escolherResposta(2);
    guardarResposta(2, evento)
})
pergunta3.addEventListener('click', function(evento){
    escolherResposta(3);
    guardarResposta(3, evento)
})
pergunta4.addEventListener('click', function(evento){
    escolherResposta(4);
    guardarResposta(4, evento)
})
pergunta5.addEventListener('click', function(evento){
    escolherResposta(5);
    guardarResposta(5, evento)
})

function pontuacaoTotal(){
    var pontuacao_total =
    respostas.pergunta1+
    respostas.pergunta2+
    respostas.pergunta3+
    respostas.pergunta4+
    respostas.pergunta5;

    return pontuacao_total;
}

function infoPontuacao(){
    if(pontuacaoTotal() < 3){
        var info_pontuacao = "Continua na categoria de 'F1 Dummie'!"
    }else if (pontuacaoTotal() >=3 && pontuacaoTotal() < 5){
        var info_pontuacao = "Está a fazer imensos progressos. Só é 'médio- F1 Dummie'!"
    }else{
        var info_pontuacao = "O conteúdo desta página foi mesmo útil! Já não é mais um(a) 'F1 Dummie'!"
    }

    return info_pontuacao;
}

var submit1 = document.getElementById('submit1');
var submit2 = document.getElementById('submit2');
var submit3 = document.getElementById('submit3');
var submit4 = document.getElementById('submit4');
var submit5 = document.getElementById('submit5');

function proximaPergunta(numero_pergunta){
    var numero_pergunta_atual = numero_pergunta - 1;
    var numero_pergunta = numero_pergunta.toString();
    var numero_pergunta_atual = numero_pergunta_atual.toString();

    var el = document.getElementById('question-'+numero_pergunta);
    var el2 = document.getElementById('question-'+numero_pergunta_atual);

    el.style.display = "block";
    el2.style.display = "none";
}

submit1.addEventListener('click', function(){
    proximaPergunta(2);
    barraProgresso('40%');
})
submit2.addEventListener('click', function(){
    proximaPergunta(3);
    barraProgresso('60%');
})
submit3.addEventListener('click', function(){
    proximaPergunta(4);
    barraProgresso('80%');
})
submit4.addEventListener('click', function(){
    proximaPergunta(5);
    barraProgresso('100%');
})
submit5.addEventListener('click', function(){
    proximaPergunta(6);
})

submit5.addEventListener('click', function(){
    document.getElementById("printtotalscore").innerHTML = pontuacaoTotal();
    document.getElementById("printscoreinfo").innerHTML = infoPontuacao();
})

function barraProgresso(percentagem_width){
    var bar = document.getElementById("progress_bar");
    bar.style.width = percentagem_width;
}

function escolherResposta(nrPergunta){
    document.getElementById(`question-${nrPergunta}`).addEventListener('change', (e) => {
        document.getElementById(`escolha${nrPergunta}`).hidden = true;
        document.getElementById(`submit${nrPergunta}`).disabled = false;
})
}

/* NOTICIAS */

function loadNews(){
    var setint = setInterval(function(){
        var x = new XMLHttpRequest();
        x.onreadystatechange=function(){
            if(x.readyState==4 && x.status==200){
                document.getElementById('destaque').innerHTML = x.responseText;
            }
        }
        x.open("GET","db/news.php",true);
        x.send();
    },3000);    //executar de 10s em 10s
}

/* CRUD USERS */
var username;
function account_edit(){
    document.getElementById('account_btn_edit').style.display='none'
    document.getElementById('account_btn_cancel').style.display='inline'
    document.getElementById('account_btn_save').style.display='inline'
    document.getElementById('account_btn_delete').style.display='none'
    document.getElementById('account_btn_save_image').style.display='inline'
    document.getElementById('account_btn_select_img').style.display='inline'
    document.getElementById('account_btn_save_image').style.display='inline'

    document.getElementById('form-username').removeAttribute('readonly')
    document.getElementById('form-password').removeAttribute('readonly')
    document.getElementById('form-email').removeAttribute('readonly')


    username=document.getElementById('form-username').value
}

function account_cancel(){
    window.location.replace("index.php?p=minhaconta")
}


/* UPDATE DRIVERS */
function drivers_ranking_edit(id){
    document.getElementById('drivers-points-btn-edit-'+id).style.display='none'
    document.getElementById('input-points-'+id).style.display='inline'
    document.getElementById('save-btn-points-'+id).style.display='inline'
}

function drivers_ranking_save(id){
    document.getElementById('drivers-points-btn-edit-'+id).style.display='inline'
    document.getElementById('input-points-'+id).readOnly = true;
    document.getElementById('save-btn-points-'+id).style.display='none'
}