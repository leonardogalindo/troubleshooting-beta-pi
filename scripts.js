function Executa3() {

    var login = document.forms["impers"]["login"].value;
    window.open("https://painelhospedagem.locaweb.com.br/ops/impersonate?login=" + login);
    return false;
}
function Executa4() {

    var login = document.forms["impers"]["login"].value;
    window.open("https://painelssl.locaweb.com.br/ops/impersonate?login=" + login);
    return false;
}



function filtering() {
    // Declare variables
    var input, filter, table, tr, td1, td2, i, txtValue1, txtValue1;
    input = document.getElementById("filter1");
    filter = input.value.toUpperCase();
    table = document.getElementById("lista");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td1 = tr[i].getElementsByTagName("td")[0];
        td2 = tr[i].getElementsByTagName("td")[1];
        if (td1 || td2) {
            txtValue1 = td1.textContent || td1.innerText;
            txtValue2 = td2.textContent || td2.innerText;
            if (txtValue1.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function selectradio(name) {
    var rads = document.getElementsByName(name);

    for (var i = 0; i < rads.length; i++) {
        if (rads[i].checked) {
            return rads[i].value;
        }

    }

    return null;
}




function backupsite() {

    var domain = document.getElementById("dominios").value;
    var pasta = document.getElementById("pastas").value;
    var data = document.getElementById("datepickersite").value;
    var motivo = document.getElementById("motivo").value;
    var radiobakres = selectradio("radinho");
    var alvo = document.getElementById("printer");


    alvo.innerHTML = "<p>Título: []" + radiobakres + " de site - " + domain + "</p>";
    alvo.innerHTML += "</br>";
    alvo.innerHTML += "<p>Olá,</p>";
    alvo.innerHTML += "<p>Este chamado visa disponibilizar o " + radiobakres + " dos arquivos do seu site conforme descrição abaixo:</p>";
    alvo.innerHTML += "<p>Arquivo/Pasta a ser disponibilizada: " + pasta + "</p>";
    alvo.innerHTML += "<p>Data aproximada do Backup DD/MM/AAAA: " + data + " </p>";
    alvo.innerHTML += "<p>Horário aproximado: O backup dos dados do site são gerados todos os dias às 18:50h.</p>";
    alvo.innerHTML += "<p>Diretório onde deve ser disponibilizado o backup: </p>";
    alvo.innerHTML += "<p>Motivo da solicitação: " + motivo + "</p>";
    alvo.innerHTML += "<p>BACKUP: Disponibilização dos arquivos de backup na raiz da hospedagem (você ficará responsável em enviar os arquivos para o diretório que desejar);</p>";
    alvo.innerHTML += "<p>RESTORE: Substituição completa dos arquivos (FTP), sendo assim caso tenhas colocado um arquivo no site hoje, será substituído para a data do restore solicitada por você, por isso perderá o arquivo que adicionou hoje.</p>";
    alvo.innerHTML += "</br><p>OBS:</p>";
    alvo.innerHTML += "<p>Temos rotatividade em nosso sistema de backup, e por isso garantimos o backup das informações por um período de 7 dias corridos. Assim, pedimos fortemente que responda este chamado o mais rapidamente possível.</p>";
    alvo.innerHTML += "<p>Considera-se como unidade de backup qualquer pedido referente à recuperação de dados de uma data/hora específica independente do seu conteúdo: arquivos do site ou do banco de dados.</p>";
    alvo.innerHTML += "<p>O cliente pode solicitar gratuitamente 1 backup ou restore do site e 1 backup/restore do banco de dados por mês. Qualquer solicitação que exceder o contratualmente previsto de 1 backup/restore de banco de dados e 1 backup/restore web será cobrado o valor de R$150,00.**</p>";
    alvo.innerHTML += "<p>Após utilizar o arquivo de backup solicitamos que exclua o mesmo da sua área de hospedagem. Segue a nossa política do ILIMITADO http://www.locaweb.com.br/sobre-locaweb/contratos-politicas.htmlhttp://confluence.locaweb.com.br/images/icons/linkext7.gif **</p>";
    alvo.innerHTML += "<p>Mais informações sobre nosso sistema de backup podem ser obtidas em http://wiki.locaweb.com.br/pt-br/Como_funciona_o_sistema_de_backup_da_Locaweb%3F</p>";
    alvo.innerHTML += "<p>Ficamos no aguardo de sua confirmação neste chamado, para darmos continuidade ao pedido.</p>";
    alvo.innerHTML += "<p>Atenciosamente,</p>";
}

function backupbanco() {

    var host = document.getElementById("host").value;
    var user = document.getElementById("user").value;
    var data = document.getElementById("datepickerbanco").value;
    var motivo = document.getElementById("motivo2").value;
    var senha = document.getElementById("senha2").value;
    var radiobakres = selectradio("radinho2");
    var alvo = document.getElementById("printer");

    var date1 = new Date("7/11/2010");
    var date2 = new Date("12/12/2010");
    var timeDiff = Math.abs(date2.getTime() - date1.getTime());
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));



    alvo.innerHTML = "<p>Título:[]" + radiobakres + " de banco - " + user + "</p>";
    alvo.innerHTML += "</br>";
    alvo.innerHTML += "<p>Olá,</p>";
    alvo.innerHTML += "<p>Para realizarmos o " + radiobakres + " de sua base de dados MySQL, por favor nos informe:</p>";
    alvo.innerHTML += "<p>Nome da base: " + user + "</p>";
    alvo.innerHTML += "<p>IP ou Hostname do servidor em que se encontra a base: " + host + "</p>";
    alvo.innerHTML += "<p>Data do backup a ser restaurado DD/MM/AAAA: " + data + "</p>";
    alvo.innerHTML += "<p>Horário ( O backup das bases de dados são gerados todos os dias às 02:00h ).</p>";
    alvo.innerHTML += "<p>Usuário: " + user + "</p>";
    alvo.innerHTML += "<p>Senha do banco de dados: " + senha + "</p>";
    alvo.innerHTML += "<p>Motivo da Solicitação: " + motivo + "</p>";
    alvo.innerHTML += "<p>Atenção! Caso solicite para que nós façamos o restore, as tabelas solicitadas serão sobrescritas com as informações do backup da data e horário informados, qualquer informação adicionada ao banco após este período será perdida.No procedimento de restore só é possível recuperar e sobrescrever a base completa. Caso deseje somente algumas tabelas, será necessário seguir um procedimento de backup em que vai ser disponibilizado o arquivo de backup completo para que você extraia e restaure apenas as tabelas que desejar.O backup das bases de dados são gerados todos os dias às 02:00h.Será utilizado o backup mais próximo a data e hora informado.Sua solicitação será atendida dentro do horário comercial, de segunda a sexta-feira das 08:00 às 18:00</p>";
    alvo.innerHTML += "<p>OBS:</p>";
    alvo.innerHTML += "<p>Temos rotatividade em nosso sistema de backup, e por isso garantimos o backup das informações por um período de 7 dias corridos. Assim, pedimos fortemente que responda este chamado o mais rapidamente possível.</p>";
    alvo.innerHTML += "<p>Considera-se como unidade de backup qualquer pedido referente à recuperação de dados de uma data/hora específica independente do seu conteúdo: arquivos do site ou do banco de dados.</p>";
    alvo.innerHTML += "<p>O cliente pode solicitar gratuitamente 1 backup ou restore do site e 1 backup/restore do banco de dados por mês. Qualquer solicitação que exceder o contratualmente previsto de 1 backup/restore de banco de dados e 1 backup/restore web será cobrado o valor de R$150,00.**</p>";
    alvo.innerHTML += "<p>Ficamos no aguardo de sua confirmação neste chamado para darmos continuidade ao pedido.</p>";
    alvo.innerHTML += "<p>Atenciosamente,</p>";

}


