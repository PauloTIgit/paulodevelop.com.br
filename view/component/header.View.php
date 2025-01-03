<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F9Q76Z61G1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        
        gtag('config', 'G-F9Q76Z61G1');
    </script>
    <script src="https://unpkg.com/@phosphor-icons/web"  async></script>
    <title>Paulo Ferreira</title>
    <meta name="descripetion" content="Soluções tecnológicas personalizadas para empresas e empreendedores: Desenvolvimento de software, consultoria em TI e muito mais. Impulsione seu negócio com inovação e expertise.">
    <meta name="keywords" content="website, business, developer, software, consultancy, technology, innovation, site, negócio, desenvolvedor, software, consultoria, TI, tecnologia, inovação e Paulo Ferreira.">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Paulo Ferreira">
    <meta property="og:description" content="Soluções tecnológicas personalizadas para empresas e empreendedores.">
    <meta name="twitter:title" content="Paulo Ferreira">
    <meta name="twitter:description" content="Soluções tecnológicas personalizadas para empresas e empreendedores.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./src/scss/main.css" >
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous"><!-- ICON -->

</head>

<body>


    <style>
        .container-btnUp{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 4rem;
            height: 4rem;
            border-radius: 50%;
            position: fixed;
            bottom: 23px;
            right: 18px;
            color: #ffff;
            background: var(--cor-pry-800);
            cursor: pointer;
            transition: all .5s;
            transform: translateX(20rem);
            z-index: 1000;
        }

        #container_btnUp.scrolled{
            transform: translateX(0);
        }
    </style>
    <div class="container-btnUp" id="container_btnUp">
        <i class="ph ph-caret-up" id="angle_up"></i>
    </div>
    <script>
        document.querySelector('#container_btnUp').addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>