
<style>
    .container-404{
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: var(--cor-grafit-50);
    }
    
    .content-404{
        width: 50%;
        height: 50%;
        background: var(--cor-pry-800);
        border-radius: 6px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .content-404 p{
        font-family: var(--font-montserra);
    }
    
    .title-404{
        display: flex;
        flex-direction: row;
        height: 15%;
    }
    
    .title-404 p{
        display: block;
        font-weight: 800;
        font-size: 5rem;
        color: var(--cor-grafit-50);
    }

    .title-404 p:nth-child(1){
        /* animation: name duration timing-function delay iteration-count direction fill-mode; */
        animation: erro404 4s infinite;
    }
    .title-404 p:nth-child(2){
        animation: erro404 4.3s infinite;
    }
    .title-404 p:nth-child(3){
        animation: erro404 4.5s infinite;
    }
    
    @keyframes erro404{
        0%{
            transform: translateY(0);
        }
        50%{
            transform: translateY(-2rem);
        }
        100%{
            transform: translateY(0);
        }
    }

    .description-404{
        font-size: 1.2rem;
        font-weight: 500;
        color: #fff;
        padding: 1rem 0 1.5rem 0;
    }

    .btn-404{
        text-decoration: none;
        font-family: var(--font-montserra);
        font-weight: 600;
        background: var(--cor-ter-800);
        padding: .5rem 1rem;
        border-radius: 5px;
    }

    .btn-404:hover{
        background: var(--cor-ter-1000);
        color: #fff;
    }

</style>

<section class="container-404">
    <div class="content-404">
        <div class="title-404">
            <p>4</p>
            <p>0</p>
            <p>4</p>
        </div>
        <p class="description-404">Pagina não encontrada!</p>
        <a class="btn-404" href="?pagina=home">Voltar</a>
    </div>
</section>
