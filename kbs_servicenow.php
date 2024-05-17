<!doctype html>
<html lang="en" class="ls-theme-wine">

<head>
    <!--meta tags e CSS-->
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <?php require_once('meta_tags.php'); ?>
    <title>WhoIs</title>

    <style>
        * {
            list-style: none;
            font-size: 16px;
        }

        h1 {
            font-size: 26px;
        }

        h4 {
            padding: 6px 0px;
            margin-top: 20px;
        }

        .div_links_uteis {
            margin: 40px 0px;
            padding: 40px 0xp;
            border-bottom: 2px solid gray;
        }

        .div_links_uteis div {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            padding: 10px 0px;
        }

        .div_links_uteis a,
        .div_links_uteis input[type='submit'] {
            display: flex;
            justify-content: center;
            align-items: center;
            min-width: 100px;
            padding: 10px 12px;
            border: 1px solid gray;
            border-radius: 8px;
            background-color: #513335;
            color: white;
            cursor: pointer;
        }

        .div_links_uteis a:hover {
            background-color: #80595c;
        }

        .div_origem {
            display: grid;
            grid-template-columns: 1.5fr 2fr 1fr;
            grid-gap: 10px;
        }

        .div_spf_dmarc,
        .div_registro_br,
        .div_server_info,
        .div_cinco_site,
        .div_nslookup {
            border: 1px solid #ddd;
            padding: 10px;
        }

        .div_server_info {
            grid-column: span 3;
        }

        .div_registro_br,
        .div_spf_dmarc,
        .div_cinco_site {
            grid-column: span 1;
        }

        .div_nslookup {
            grid-column: span 3;
        }

        .dns_lookup {
            padding: 7px 0 7px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: black;
        }

        table tr td {
            padding: 14px 26px 14px 26px;
            border: 1px solid #ddd;
            max-width: 70vw;
            overflow: hidden;
            text-overflow: ellipsis;

            white-space: pre-wrap;
        }

        tr:nth-child(even) {
            background-color: #f0f0f0;
            /* Cor para linhas pares */
        }

        tr:nth-child(odd) {
            background-color: #e0e0e0;
            /* Cor para linhas ímpares */
        }

        ul li {
            padding: 6px 0px;
            font-size: 18px;
        }
    </style>

</head>

<body>
    <!--navbar - barra de navegação -->
    <?php
    require_once('navbar.php');
    require_once('aside.php');
    ?>
    <script type="text/javascript" src="scripts.js?n=1"></script>

    <!-- box -->
    <main class="ls-main">
        <div class="container-fluid">

            <h1 class="ls-title-intro ls-ico-search">Principais KB's no Service Now</h1>


            <h4>HOSPEDAGEM LINUX</h4>
            <ul>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=7e9837cd473019109a979cd3846d43b5&sysparm_rank=1&sysparm_tsqueryId=d363c87b47e04e14dbe77878c26d434d" 
                  target="_blank">KB0012215</a> - Troubleshooting - N1</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=423d4f9b473499905ce79e34846d43cb&sysparm_rank=1&sysparm_tsqueryId=e0a3403f47e04e14dbe77878c26d4349" 
                  target="_blank">KB0012276</a> - Hospedagem Linux</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=2dc26abc9777a5545a65fab0f053afb2&sysparm_rank=1&sysparm_tsqueryId=6ea3407f47e04e14dbe77878c26d435c" 
                  target="_blank">KB0012176</a> - Comandos Linux</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=3c73553547b011505ce79e34846d43d3&sysparm_rank=1&sysparm_tsqueryId=a5b38c7f47e04e14dbe77878c26d43d1" 
                  target="_blank">KB0012241</a> - Site invadido</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=fe35864347a13554dbe77878c26d4316&sysparm_rank=1&sysparm_tsqueryId=9bb304bf47e04e14dbe77878c26d435e" 
                  target="_blank">KB0016263</a> - Análise para abrir incidente (INC) Linux Shared (CentOS)</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=a8cf93ec47c151145ce79e34846d4386&sysparm_rank=1&sysparm_tsqueryId=3dc38cbf47e04e14dbe77878c26d43b5" 
                  target="_blank">KB0012327</a> - Direcionar domínio para TRAY</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=694fc867473cd9905ce79e34846d4395&sysparm_rank=1&sysparm_tsqueryId=38d34cff47e04e14dbe77878c26d43a1" 
                  target="_blank">KB0012280</a> - Anotações gerais Linux e Windows</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=d2e5736947e7f1588cc129f5926d431b&sysparm_rank=1&sysparm_tsqueryId=7ed3443347244e14dbe77878c26d4351" 
                  target="_blank">KB0016739</a> - Conexão Github</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=c849753897a08e505a65fab0f053afa1&sysparm_rank=1&sysparm_tsqueryId=07e6ccbb47a44e14dbe77878c26d43d4" 
                  target="_blank">KB0016900</a> - IPTables - Hospedagem Linux</li>
            </ul>

            <h4>HOSPEDAGEM WINDOWS</h4>
            <ul>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=85ec4db647463150dbe77878c26d4318&sysparm_rank=1&sysparm_tsqueryId=9e04ccb347244e14dbe77878c26d4387" 
                  target="_blank">KB0016388</a> - Acessando o IIS - Hospedagem Windows</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=299ec13647863150dbe77878c26d4301&sysparm_rank=1&sysparm_tsqueryId=8c1448f347244e14dbe77878c26d4374" 
                  target="_blank">KB0016390</a> - Acessando o Servidor - Hospedagem Windows</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=ab33f4ba470afd10dbe77878c26d430f&sysparm_rank=1&sysparm_tsqueryId=a114ccf347244e14dbe77878c26d4368" 
                  target="_blank">KB0016387</a> - Desempenho - Hospedagem Windows</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=9f96658497927510991c308d7553af87&sysparm_rank=1&sysparm_tsqueryId=8b14483747244e14dbe77878c26d4307" 
                  target="_blank">KB0016400</a> - Permissão de pasta - Hospedagem Windows</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=bcfe254597feb590991c308d7553afa4&sysparm_rank=1&sysparm_tsqueryId=3024807747244e14dbe77878c26d43ed" 
                  target="_blank">KB0016552</a> - Sites solicitando senha - Hospedagem Windows</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=70db697f97a67550991c308d7553af6e&sysparm_rank=1&sysparm_tsqueryId=5a24887747244e14dbe77878c26d4368" 
                  target="_blank">KB0016520</a> - Ativar e Desativar FTP - Hospedagem Windows</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=1fce5d039716fdd0991c308d7553af1c&sysparm_rank=1&sysparm_tsqueryId=d534c4b747244e14dbe77878c26d43fb" 
                  target="_blank">KB0016462</a> - Logs de FTP e HTTP - Hospedagem Windows</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=6f2e6655971a7190991c308d7553af50&sysparm_rank=1&sysparm_tsqueryId=2b444cf747244e14dbe77878c26d43c7" 
                  target="_blank">KB0016430</a> - Mime Types - Hospedagem Windows</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=ab5b320347827950dbe77878c26d43f2&sysparm_rank=1&sysparm_tsqueryId=1554083b47244e14dbe77878c26d43e4" 
                  target="_blank">KB0016396</a> - Converter diretório em aplicação - Hospedagem Windows</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=2144913397ea3550991c308d7553af02&sysparm_rank=14&sysparm_tsqueryId=4edc44b347e84e14dbe77878c26d4356" 
                  target="_blank">KB0016386</a> - Application Pool - Hospedagem Windows</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=9a7db62f9712b914991c308d7553affa&sysparm_rank=15&sysparm_tsqueryId=4edc44b347e84e14dbe77878c26d4356" 
                  target="_blank">KB0016472</a> - Alterar versão do PHP - Hospedagem Windows</li>
            </ul>

            <h4>CRIADOR DE SITES</h4>
            <ul>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=35e05e8047491dd09a979cd3846d43f3&sysparm_rank=1&sysparm_tsqueryId=f542ccf747a04e14dbe77878c26d43b5" 
                  target="_blank">KB0012311</a> - Migração do Trial para o plano Contratado e Incluso - Criador de Sites</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=97e12af49777a5545a65fab0f053af84&sysparm_rank=1&sysparm_tsqueryId=656240bb47a04e14dbe77878c26d4310" 
                  target="_blank">KB0012309</a> - Migração de conteúdo no mesmo usuário - Criador de Sites</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=00e5820447451dd09a979cd3846d4319&sysparm_rank=1&sysparm_tsqueryId=0e7280fb47a04e14dbe77878c26d4324" 
                  target="_blank">KB0012308</a> - Migração de conteúdo entre usuários - Criador de Sites</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=0d747b96472442d0dbe77878c26d4393&sysparm_rank=1&sysparm_tsqueryId=3d82403f47a04e14dbe77878c26d438e" 
                  target="_blank">KB0012305</a> - Migração de Conteúdo do Editor Antigo para o Novo - Criador de Sites</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=46f142c847c11dd09a979cd3846d4375&sysparm_rank=1&sysparm_tsqueryId=6092cc3f47a04e14dbe77878c26d43e8" 
                  target="_blank">KB0012301</a> - Migração de Conteúdo após deleção - Criador de Sites</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=be06aaaa97756114991c308d7553af7e&sysparm_rank=1&sysparm_tsqueryId=97928c7f47a04e14dbe77878c26d4316" 
                  target="_blank">KB0011908</a> - Habilitar Menu - Novo Criador de Sites</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=6bd3dcc797c8791c5a65fab0f053af38&sysparm_rank=1&sysparm_tsqueryId=c5a288bf47a04e14dbe77878c26d434e" 
                  target="_blank">KB0015071</a> - Downgrade e Upgrade de plano - Criador de Sites</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=30a518471b5b851451c5eb12b24bcbbb&sysparm_rank=1&sysparm_tsqueryId=49b248ff47a04e14dbe77878c26d4346" 
                  target="_blank">KB0011886</a> - Criador de Sites x Subdomínio</li>
            </ul>

            <h4>HOSPEDAGEM WORDPRESS</h4>
            <ul>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=c61bf8f297266d10991c308d7553afed&sysparm_rank=1&sysparm_tsqueryId=49848cbb47244e14dbe77878c26d43b3" 
                  target="_blank">KB0012062</a> - Backup - Hospedagem WordPress</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=ce9ae79447c55dd05ce79e34846d43a6&sysparm_rank=1&sysparm_tsqueryId=768484fb47244e14dbe77878c26d43a7" 
                  target="_blank">KB0012324</a> - Backup/Restore de instâncias Wordpress</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=23bd567897f3a5545a65fab0f053af2c&sysparm_rank=1&sysparm_tsqueryId=0d94843f47244e14dbe77878c26d43ca" 
                  target="_blank">KB0012323</a> - Procedimentos Internos - Hospedagem Wordpress (PLANO ANTIGO)</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=33775b1847cd1dd05ce79e34846d4327&sysparm_rank=1&sysparm_tsqueryId=0f948c3f47244e14dbe77878c26d43a1" 
                  target="_blank">KB0012322</a> - Hospedagem Wordpress - Novos Planos</li>
            </ul>

            <h4>REGISTRO DE DOMÍNIO</h4>
            <ul>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=1ec47280477a29d08cc129f5926d434e&sysparm_rank=1&sysparm_tsqueryId=f5a4487f47244e14dbe77878c26d4346" 
                  target="_blank">KB0012320</a> - Suporte Registro - Hospedagem</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=4fd4bf5647f231548cc129f5926d436a&sysparm_rank=5&sysparm_tsqueryId=3b7e0077472c4e14dbe77878c26d4394" 
                  target="_blank">KB0011804</a> - Liberação de domínio – Dados Cadastrais (domínio pertence a outro titular)</li>
            </ul>

            <h4>SSL LOCAWEB</h4>
            <ul>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=55225915479e291c8cc129f5926d4373&sysparm_rank=1&sysparm_tsqueryId=23a440bf47244e14dbe77878c26d4359" 
                  target="_blank">KB0012319</a> - Suporte SSL - Hospedagem</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=80eb15ab1b205150750b2f8a234bcbbc&sysparm_rank=1&sysparm_tsqueryId=71b448bf47244e14dbe77878c26d43cf" 
                  target="_blank">KB0012179</a> - Shared Hosting 2012 - How To - Certificado SSL Próprio</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=696af311479f25908cc129f5926d430b&sysparm_rank=1&sysparm_tsqueryId=27b440ff47244e14dbe77878c26d43e5" 
                  target="_blank">KB0015662</a> - Desmembrando de arquivo .PFX - Certificado SSL</li>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=f24e8d7247863150dbe77878c26d4372&sysparm_rank=1&sysparm_tsqueryId=c5c4c4ff47244e14dbe77878c26d4396" 
                  target="_blank">KB0016389</a> - Obter Chave Privada - SSL Locaweb</li>
            </ul>

            <h4>LETS ENCRYPT</h4>
            <ul>
                <li><a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=250875b547eea5108cc129f5926d43df&sysparm_rank=1&sysparm_tsqueryId=fbc4443347644e14dbe77878c26d434c" 
                  target="_blank">KB0015387</a> - Instalação SSL Let's Encrypt - Hospedagem</li>
            </ul>





        </div>
        <footer class="ls-footer" role="contentinfo">
            <nav class="ls-footer-menu">
                <h2 class="ls-title-footer">suporte e ajuda</h2>
                <ul class="ls-footer-list">
                    <li>
                        <a href="https://lwp.service-now.com/" target="_blank" class="bg-customer-support">
                            <span class="visible-lg">Service Now</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://locaweb.beedoo.io/feed" target="_blank" class="bg-my-tickets">
                            <span class="visible-lg">Beedoo</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://locaweb.com.br/ajuda" target="_blank" class="bg-help-desk">
                            <span class="visible-lg">Ajuda Locaweb</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://statusblog.locaweb.com.br/" target="_blank" class="bg-statusblog">
                            <span class="visible-lg">Statusblog</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="ls-footer-info">
                <span class="last-access ls-ico-screen"><strong>Último acesso: </strong>99/99/9999 99:99:99</span>
                <div class="set-ip"><strong>IP:</strong> 000.00.00.000</div>
                <p class="ls-copy-right">Copyright © 1997-2023 Serviços de Internet S/A.</p>
            </div>
        </footer>
    </main>

    <!--footer com js e notifications-->
    <?php require_once('javascript.php'); ?>

</body>

</html>