<style>
    .container-menu {
        z-index: 100;
        position: fixed;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        height: 105px;
        width: 100%;
        background: #fdfdef;
    }

    .container-logo {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    .imagen {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .imagen img {
        width: 60px;
        border-radius: 6px;
        padding: .4rem .6rem;
    }

    .slogan {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .slogan p {
        font-family: "Montserrat Alternates", sans-serif;
        font-weight: 600;
        font-size: 1.5rem;
        padding-left: 12px;
        color: var(--cor-grafit-800);
    }

    .content-menu,
    .container-menu ul {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .container-menu ul li{
        width: 100%;
    }
    
    .navbar {
        list-style: none;
    }

    .navbar a {
        display: block;
        padding: 1rem;
        text-decoration: none;
        font-family: var(--font-montserra);
        font-weight: 600;
        color: var(--cor-pry-100);
    }

    .navbar .link:hover {
        transition: all 5ms;
        border-bottom: solid 3px var(--cor-seg-100);
        /* color: #ffffff; */

        /* border-radius: 4px; */
    }
   
    @media (max-width: 786px) {
        .container-menu #menuHaburge {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: auto;
            color: white;
            padding: 28px;
            display: none;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            transition: all .5s;
        }

        #menuHaburge.scrolled{
            backdrop-filter: blur(6px);
            border-bottom: solid 1px #faaa2a5c;
        }

        .logo {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .headerLogo img{
            width:  50px;
            height: 50px;
        }

        header h1 {
            font-family: var(--font-Open);
            padding-left: .5rem ;
            font-size: 24px;
        }

        .menuHaburge{
            cursor: pointer;
            margin-right: 1rem;
        }

        .menuHaburge > .haburge:nth-child(1){
            transition: all .4s;
            transform: rotate(0) translateY(0);
        }
        .menuHaburge > .haburge:nth-child(2){
            transition: all .5s;
            transform: rotate(0) translateY(0);

        }
        .menuHaburge > .haburge:nth-child(3){
            transition: all .3s;
            transform: translateX(0);
        }

        .menuHaburge.ativo > .haburge:nth-child(1){
            transition: all .4s;
            transform: rotate(45deg) translateY(6px);
        }
        .menuHaburge.ativo > .haburge:nth-child(2){
            transition: all .5s;
            transform: rotate(-45deg) translateY(-6px);

        }
        .menuHaburge.ativo > .haburge:nth-child(3){
            transition: all .3s;
            transform: translateX(-100px);
        }

        .content-menu.ativo {
            display: flex !important;
            z-index: 200;
        }
        .content-menu.ativo, .container-menu ul{
            position: absolute;
            top: 0;
            right: 0;
            background: #d3d3d3;
            flex-direction: column;
            justify-content: flex-start;
            height: 100vh;
            padding: 2rem;
            text-align: center;
        }


        .haburge{
            display: block;
            margin: 3px 0;
            width: 30px;
            height: 5px;
            border-radius: 5px;
            background: var(--cor-pry-800);
        }
    }


</style>

<section class="container-menu" id="menu-desktop">
    <div class="container-logo">
        <div class="imagen">
            <a href="#">
                <img src="image/icon/logo.png" alt="" srcset="">
            </a>
        </div>
        <div class="slogan">
            <!-- <p>Paulo Ferreria</p> -->
        </div>
    </div>

    
    <header id="menuHaburge">
        <div class="menuHaburge" >
            <div class="haburge"></div>
            <div class="haburge"></div>
            <div class="haburge"></div>
        </div>
    </header>

    

    <nav class="content-menu">
        <ul class="navbar">
            <li><a class="link" href="#home">Inicio</a></li>
            <li><a class="link" href="#about">Sobre</a></li>
            <li><a class="link" href="#process">Processo</a></li>
            <li><a class="link" href="#my-project">Portfólio</a></li>
            <li><a class="link" href="#my-skills">Habilidades</a></li>
            <li><a class="link" href="#services">Serviço</a></li>
            <li><a class="link" href="#contact">Contato</a></li>
        </ul>
    </nav>
</section>

<script>


    window.addEventListener('scroll', function() {
                
        if (window.scrollY > 1000) {
            document.querySelector('#menuHaburge').classList.add('scrolled');
            document.querySelector('#container_btnUp').classList.add('scrolled');
        } 
        
        if (window.scrollY < 500){
            document.querySelector('#menuHaburge').classList.remove('scrolled');
            document.querySelector('#container_btnUp').classList.remove('scrolled');

        }
    });
    
    document.querySelector('#menuHaburge').addEventListener('click', () => {
        document.querySelector('.content-menu').classList.toggle('ativo')
        document.querySelector('.menuHaburge').classList.toggle('ativo')
    });
    

    document.querySelectorAll('nav ul li a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').replace('./', '');

            console.log(window.location.pathname);
            
            document.querySelector(targetId).scrollIntoView({
                behavior: 'smooth'
            });
            document.querySelector('.content-menu').classList.toggle('ativo')
            document.querySelector('.menuHaburge').classList.toggle('ativo')
        });
    });

    // Código para lidar com o scroll suave após o redirecionamento (caso tenha hash)
    window.addEventListener('load', () => {
        const hash = window.location.hash;
        if (hash) {
            document.querySelector(hash).scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
</script>