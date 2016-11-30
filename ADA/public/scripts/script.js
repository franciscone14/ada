var object = new Object();

function updateCampos(href){
    //Aluno
    if (href == 'src/view/cadastros/cadastroAluno/dadosPessoais.php') {
        $('#nomeUser').val(object.nomeUser);
        $('#cpfUser').val(object.cpfUser);
        $('#rgUser').val(object.rgUser);
        $('#nomePaiAluno').val(object.nomePaiAluno);
        $('#nomeMaeAluno').val(object.nomeMaeAluno);
        $('#foneUser').val(object.foneUser);
        $('#celularUser').val(object.celularUser);
        $('#dataNascUser').val(object.dataNascUser);
        $('#sexoUser').checked;
    }

    else if(href == 'src/view/cadastros/cadastroAluno/dadosEscolares.php'){
        $('#idTurmaAluno').val(object.idTurmaAluno);
        $('#anoIngressoAluno').val(object.anoIngressoAluno);
    }

    else if(href == 'src/view/cadastros/cadastroAluno/dadosdeEndereco.php'){
        $('#cepEnd').val(object.cepEnd);
        $('#ruaEnd').val(object.ruaEnd);
        $('#bairroEnd').val(object.bairroEnd);
        $('#cidadeEnd').val(object.cidadeEnd);
        $('#estadoEnd').val(object.estadoEnd);
        $('#complementoEnd').val(object.complementoEnd);
        $('#numeroEnd').val(object.numeroEnd);
    }

    else if(href == 'src/view/cadastros/cadastroAluno/dadosdeLogin.php'){
        $('#codLogin').val(object.codLogin);
        $('#emailLogin').val(object.emailLogin);                
    }

    //Professor
    else if(href == 'src/view/cadastros/cadastroProfessor/dadosPessoais.php'){
        $('#nomeUser').val(object.nomeUser);
        $('#cpfUser').val(object.cpfUser);
        $('#rgUser').val(object.rgUser);                
        $('#foneUser').val(object.foneUser);
        $('#celularUser').val(object.celularUser);
        $('#dataNascUser').val(object.dataNascUser);
        $('#sexoUser').checked;                
    }

    else if(href == 'src/view/cadastros/cadastroProfessor/dadosdeEndereco.php'){
        $('#cepEnd').val(object.cepEnd);
        $('#ruaEnd').val(object.ruaEnd);
        $('#bairroEnd').val(object.bairroEnd);
        $('#cidadeEnd').val(object.cidadeEnd);
        $('#estadoEnd').val(object.estadoEnd);
        $('#complementoEnd').val(object.complementoEnd);
        $('#numeroEnd').val(object.numeroEnd);
    }

    else if(href == 'src/view/cadastros/cadastroProfessor/dadosdeLogin.php'){
        $('#codLogin').val(object.codLogin);
        $('#emailLogin').val(object.emailLogin);
        $('#dataAdmissaoProf').val(object.dataAdmissaoProf);                
    }

    //Disciplinas
    else if(href == 'src/view/cadastros/cadastroDisciplina/cadastroDisciplina.php'){
        $('#nomeDisc').val(object.nomeDisc);                            
    }

    //Instituição
    else if(href == 'src/view/cadastros/cadastroInstituicao/dadosPessoais.php'){
        $('#nomeInst').val(object.nomeInst);
        $('#cnpjInst').val(object.cnpjInst);
        $('#emailInst').val(object.emailInst);
        $('#facebookInst').val(object.facebookInst);
        $('#twitterInst').val(object.twitterInst);
        $('#instagramInst').val(object.instagramInst);
        $('#foneInst').val(object.foneInst);
        $('#celularInst').val(object.calularInst);
        $('#modeloBoletimInst').val(object.modeloBoletimInst);
        $('#senhaLogin').val(object.senhaLogin);
        $('#senhaLogin1').val(object.senhaLogin1);
    }

    //Turma
    else if(href == 'src/view/cadastros/cadastroTurma/cadastroTurma.php'){
        $('#serieTurma').val(object.serieTurma);
        $('#descricaoTurma').val(object.descricaoTurma);
        $('#turnoTurma').val(object.turnoTurma);
        $('#salaTurma').val(object.salaTurma);
        $('#idGradeTurma').val(object.idGradeTurma);               
    }

    //Grade
    else if(href == 'src/view/cadastros/gradeCurricular/gradeCurricular.php'){
        $('#anoGrade').val(object.anoGrade);
        $('#descricaoGrade').val(object.descricaoGrade);
        $('#tipoGrade').val(object.tipoGrade);          
    }

    //Avaliacoes
    else if(href == 'src/view/diarios/inserirGrade.php'){
        $('#dataAva').val(object.dataAva);
        $('#descricaoAva').val(object.descricaoAva);
        $('#tipoAva').val(object.tipoAva);
        $('#pesoAva').val(object.pesoAva);
        $('#obsAva').val(object.obsAva);          
    }
}

function verificaCampos(type){
    if((type == 'aluno') || (type == 'professor')){
        if((object.nomeUser == "") || (object.cpfUser == "") || (object.rgUser == "") || (object.foneUser == "") || (object.celularUser == "") || (object.sexoUser == "") || (object.dataNascUser == "")){
            return false;
        }
        else if((object.cepEnd == "") || (object.ruaEnd == "") || (object.bairroEnd == "") || (object.cidadeEnd == "") || (object.estadoEnd == "") || (object.numeroEnd == "")){
            if(object.complementoEnd == ""){
                object.complementoEnd = 'NULL';
            }
            return false;
        }
        else if((object.codLogin == "") || (object.emailLogin == "")){
            return false;
        }
        
        else if(((object.nomePaiAluno == "") || (object.nomeMaeAluno == "") || (object.idTurmaAluno == "") || (object.anoIngressoAluno == "")) && type == 'aluno'){
            return false;
        }
    }
    else if(type == 'disciplina'){
        if(object.nomeDisc == ""){
            return false;
        }
    }
    else if(type == 'instituicao'){
        if((object.nomeInst == "") || (object.cnpjInst == "") || (object.emailInst == "") || (object.facebookInst == "") || (object.modeloBoletimInst == "")){
            return false;
        }
        else if((object.twitterInst == "") || (object.instagramInst == "") || (object.foneInst == "") || (object.celularInst == "") || (object.senhaInst == "")){
            return false;
        }
    }
    else if(type == 'turma'){
        if((object.serieTurma == "") || (object.descricaoTurma == "") || (object.turnoTurma == "") || (object.salaTurma == "") || (object.idGradeTurma == "")){
            return false;
        }
    }
    else if(type == 'grade'){
        if((object.anoGrade == "") || (object.descricaoGrade == "") || (object.tipoGrade == "")){
            return false;
        }
    }
    else if(type == 'avaliacoes'){
        if((object.dataAva == "") || (object.obsAva == "") || (object.pesoAva == "") || (object.descricaoAva == "") || (object.tipoAva == "")){
            return false;
        }
    }
    else if(type == 'gradeDisc'){
        if((object.idDisc == "") || (object.idGrade == "")){
            return false;
        }
    }
    else if(type == 'lecionaEm'){
        if((object.idTurma == "") || (object.idProf == "") || (object.idDisc == "")){
            return false;
        }
    }
    else if(type == 'alunoDisc'){
        if((object.idAluno == "") || (object.idDiscAlu == "")){
            return false;
        }
    }
    else if(type == 'frequencia'){
        if((object.contProgFreq == "") || (object.dataFreq == "")){
            return false;
        }
    }
}

function verificaIsset(type){
    if((type == 'aluno') || (type == 'professor')){
        if((object.nomeUser == undefined) || (object.cpfUser == undefined) || (object.rgUser == undefined) || (object.foneUser == undefined) || (object.celularUser == undefined) || (object.sexoUser == undefined) || (object.dataNascUser == undefined)){
            return false;
        }
        else if((object.cepEnd == undefined) || (object.ruaEnd == undefined) || (object.bairroEnd == undefined) || (object.cidadeEnd == undefined) || (object.estadoEnd == undefined) || (object.numeroEnd == undefined)){
            if(object.complementoEnd == undefined){
                object.complementoEnd = 'NULL';
            }
            return false;
        }
        else if((object.codLogin == undefined) || (object.emailLogin == undefined)){
            return false;
        }
        
        else if(((object.nomePaiAluno == undefined) || (object.nomeMaeAluno == undefined) || (object.idTurmaAluno == undefined) || (object.anoIngressoAluno == undefined)) && type == 'aluno'){
            return false;
        }
    }
    else if(type == 'disciplina'){
        if(object.nomeDisc == undefined){
            return false;
        }
    }
    else if(type == 'instituicao'){
        if((object.nomeInst == undefined) || (object.cnpjInst == undefined) || (object.emailInst == undefined) || (object.facebookInst == undefined) || (object.modeloBoletimInst == undefined)){
            return false;
        }
        else if((object.twitterInst == undefined) || (object.instagramInst == undefined) || (object.foneInst == undefined) || (object.celularInst == undefined)){
            return false;
        }
    }
    else if(type == 'turma'){
        if((object.serieTurma == undefined) || (object.descricaoTurma == undefined) || (object.turnoTurma == undefined) || (object.salaTurma == undefined) || (object.idGradeTurma == undefined)){
            return false;
        }
    }
    else if(type == 'grade'){
        if((object.anoGrade == undefined) || (object.descricaoGrade == undefined) || (object.tipoGrade == undefined)){
            return false;
        }
    }
    else if(type == 'avaliacoes'){
        if((object.dataAva == undefined) || (object.obsAva == undefined) || (object.pesoAva == undefined) || (object.descricaoAva == undefined) || (object.tipoAva == undefined)){
            return false;
        }
    }
    else if(type == 'gradeDisc'){
        if((object.idDisc == undefined) || (object.idGrade == undefined)){
            return false;
        }
    }
    else if(type == 'lecionaEm'){
        if((object.idTurma == undefined) || (object.idProf == undefined) || (object.idDisc == undefined)){
            return false;
        }
    }
    else if(type == 'alunoDisc'){
        if((object.idAluno == undefined) || (object.idDiscAlu == undefined)){
            return false;
        }
    }
    else if(type == 'frequencia'){
        if((object.contProgFreq == undefined) || (object.dataFreq == undefined)){
            return false;
        }
    }
}

function verifica(type){
    var retorno = verificaCampos(type);
    if(retorno == false){
        return false;
    }
    else{
        retorno = verificaIsset(type);
        if(retorno == false){
            return false;
        }
        else{
            return true;
        }
    }
}

function setMask(){
    $('#cpfUser').mask("999.999.999-99");
    $('#cnpjInst').mask("99.999.999/9999-99");
    $('#dataNascUser').mask("99/99/9999");    
    $('#rgUser').mask("aa99.999.999");
    $('#celularInst').mask("(99) 99999-9999");
    $('#celularUser').mask("(99) 99999-9999");
    $('#foneInst').mask("(99) 9999-9999");
    $('#foneUser').mask("(99) 9999-9999");
    $('#cepEnd').mask("99.999-999");
    $('#cepInst').mask("99.999-999");
}

function cleanInstituicao() {
    $('#nomeInst').val("");
    $('#cnpjInst').val("");
    $('#emailInst').val("");
    $('#facebookInst').val("");
    $('#twitterInst').val("");
    $('#instagramInst').val("");
    $('#foneInst').val("");
    $('#celularInst').val("");
    //$('#senhaInst').val("");
    $('#modeloBoletimInst').val("");
    $('#cepInst').val("");
    $('#ruaInst').val("");
    $('#bairroInst').val("");
    $('#cidadeInst').val("");
    $('#estadoInst').val("");
    $('#complementoInst').val("");
    $('#numeroInst').val("");
}

function cleanTurma() {
    $("#serieTurma").val("");
    $("#turnoTurma").val("");
    $("#salaTurma").val("");
    $("#descricaoTurma").val("");
}

function cleanDisciplinas() {$("#nomeDisc").val("");}

function cleanAluno() {
    $("#nomeUser").val("");
    $("#cpfUser").val("");
    $("#rgUser").val("");
    $("#nomePaiAluno").val("");
    $("#nomeMaeAluno").val("");
    $("#foneUser").val("");
    $("#celularUser").val("");
    $("#dataNascUser").val("");
    $("#sexoUser").val("");
    $("#idTurmaAluno").val("");
    $("#anoIngressoAluno").val("");
    $("#cepEnd").val("");
    $("#ruaEnd").val("");
    $("#bairroEnd").val("");
    $("#cidadeEnd").val("");
    $("#estadoEnd").val("");
    $("#complementoEnd").val("");
    $("#numeroEnd").val("");
    $("#codLogin").val("");
    $("#emailLogin").val("");
}

function cleanProfessor() {
    $("#nomeUser").val("");
    $("#cpfUser").val("");
    $("#rgUser").val("");   
    $("#foneUser").val("");
    $("#celularUser").val("");
    $("#dataNascUser").val("");
    $("#sexoUser").val("");    
    $("#cepEnd").val("");
    $("#ruaEnd").val("");
    $("#bairroEnd").val("");
    $("#cidadeEnd").val("");
    $("#estadoEnd").val("");
    $("#complementoEnd").val("");
    $("#numeroEnd").val("");
    $("#codLogin").val("");
    $("#emailLogin").val("");
}

function doRequest(href, callback) {
    $.ajax({
        url: href,
        success: function (response) {
            //forçando o parser
            $('#article').html(response);
            if (callback != undefined) {
                callback();
            }
        }
    });
}

function doRequestEdit(id, ty){
    $.ajax({
        method: "POST",
        url: "src/controllers/updateController.php",
        data: {
            reference: "doRequestDelete",
            id: id,
            type1: "fillFields",
            type2: ty
        }
    }).done(function (resposta) {
        object = jQuery.parseJSON(resposta);
    });   
}

//Atualiza a pagina para a edição
function sendRequestEdit(href, type, id){
    $.ajax({
            url: href,
            success: function (response) {
                //forçando o parser
                $('#article').html(response);
                setMask();
                updateCampos(href);
                //Altera os valores do botão para atualização
                object.type = type;
                $('#btnSalvar').attr("onclick","update('"+type+"');");
                $('#btnSalvar').html("<i class=\"glyphicon glyphicon-ok\"></i>Atualizar");
                $('#tituloForm').html("Alteração");
                //apenas atrasando a troca, para mostrarmos o loading
                // window.setTimeout( function(){
                //     content.fadeOut('slow', function(){
                //         content.html( data ).fadeIn();
                //     });
                // }, 500 );
            }
        });
}

function dispatcher(action, type) {
        $.ajax({
            method: "POST",
            url: "src/controllers/dispatcher.php",
            data: {
                object: object,
                class: type,
                action: action
            },
        }).done(function (resposta) {
            alert(resposta);
        });
}

function sendId(value){
    $('#excluirGrade').attr("onclick","del('avaliacoes', "+value+");");
    $('#alterarGrade').attr("onclick","edit('avaliacoes', "+value+");"); 
}

function addAttr(campo) {
    var id = $(campo).attr('id');
    object[id] = $(campo).val();
}

function save(type) {
    dispatcher("insert", type);
}

function edit(type, id) {
    if(type == 'disciplinas'){
        var href = "src/view/cadastros/cadastroDisciplina/cadastroDisciplina.php";
    }
    else if(type == 'turmas'){
        var href = "src/view/cadastros/cadastroTurma/cadastroTurma.php";
    }
    else if(type == 'alunos'){
        var href = "src/view/cadastros/cadastroAluno/dadosPessoais.php";
    }
    else if(type == 'professores'){
        var href = "src/view/cadastros/cadastroProfessor/dadosPessoais.php";
    }
    else if(type == 'grades'){
        var href = "src/view/cadastros/gradeCurricular/gradeCurricular.php";
    }
    else if(type == 'avaliacoes'){
        var href = "src/view/diarios/inserirGrade.php";
    }
    doRequestEdit(id, type);
    sendRequestEdit(href, type, id);
}

function setPresenca(attr, indice){
    if($('#'+attr).val() == "P"){
        $('#'+attr).val("A");
        valueAluno[indice] = false;
    }
    else if($('#'+attr).val() == "A"){
        $('#'+attr).val("P");
        valueAluno[indice] = true;
    }
}

function update(type) {
    doRequestUpdate(type, object);
    object = new Object;
    
    if (type == 'turma') {
        cleanTurma();
    }
    else if (type == 'disciplinas') {
        cleanDisciplinas();
    }
    else if (type == 'instituicao') {
        cleanInstituicao();
    }
    //else if (type == 'aluno') {
      //  cleanAluno();
    //}
    else if (type == 'professor') {
        cleanProfessor();
    }
    doRequest("src/view/home/home.php");
}

//Funcao chamada no onclick para apagar
function del(type, id){
    if(confirm("Esta ação é permanente. Deseja realmente excluir?")){
        object.id = id;
        dispatcher("delete", type);
    }
    // doRequest("src/view/home/home.php");
}

$(document).ready(function (e) {
    var content = $('#article');
    object.url = "src/view/barraNavegacao/navIndex.php";
    doRequest("src/view/home/home.php");

    $('.request').on('click', 'a', function (e) {
        e.preventDefault();

        var href = $(this).attr('href');

        $.ajax({
            url: href,
            success: function (response) {
                //forçando o parser
                $('#article').html(response);
                setMask();
                updateCampos(href);
            }
        });
    });

    $('#article').on('click', '.requestPaggination', function (e) {
        e.preventDefault();

        var href = $(this).attr('href');

        doRequest(href, function () {
            setMask();
            updateCampos(href);
            if((object.idProf != undefined) || (object.idAluno != undefined)){
                $('#btnSalvar').attr("onclick","update('"+object.type+"');");
                $('#btnSalvar').html("<i class=\"glyphicon glyphicon-ok\"></i>Atualizar");
                $('#tituloForm').html("Alteração");
                $('#campoLogin').html('<input type="password" id = "senhaLogin" class="form-control" disabled>');
                $('#campoLogin2').html('<input type="password" id = "senhaLogin1" class="form-control" disabled>')
            }
        });
    });
});
