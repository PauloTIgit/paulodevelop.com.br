<style>
    /* Estilos para o tema escuro */
    @media (prefers-color-scheme: dark) {

        /* Estilos padrão */
        .container-loader {
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            margin: 0;
            background: #fdfdef;
            z-index: 3;
            overflow: hidden;
        }

        .texto-info {
            font-family: 'Work Sans', sans-serif;
            font-weight: 600;
            font-size: 1.3rem;
            color: var(--cor-grafit-800);
            /* Cor de texto padrão */
        }

        .content-loader {
            width: 30%;
            height: 6px;
            border-radius: 2px;
        }

        .content-loader {
            width: 20rem;
            height: 20rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content-loader img {
            overflow: hidden;
            background-position: center;
        }

        /* Estilos para tema escuro */
        @media (prefers-color-scheme: dark) {
            .container-loader {
                background: #333;
                /* Cor de fundo escura */
            }

            .texto-info {
                color: #fff;
                /* Cor de texto branca */
            }
        }
    }

    .container-loader {
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
        margin: 0;
        background: #fdfdef;
        z-index: 1000;
        overflow: hidden;
    }

    .texto-info {
        font-family: 'Work Sans', sans-serif;
        font-weight: 600;
        font-size: 1.3rem;
        color: var(--cor-grafit-800);
    }

    .content-loader {
        width: 30%;
        height: 6px;
        border-radius: 2px;
    }

    .content-loader {
        width: 20rem;
        height: 20rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .content-loader img {
        overflow: hidden;
        background-position: center;
    }
</style>
<?php
$loading = './src/image/loading/loading.gif';
?>

<section class="container-loader" id="container-loader">
    <div class="content-loader">
        <img src="<?php echo $loading ?>" alt="">
    </div>
</section>

<script>
    // funcionalidade de Loader
    document.addEventListener("DOMContentLoaded", function() {
        var view = document.getElementById('view');
        var timeout = 5600;
        if (view) {
            hiddenElement('view');
            setTimeout(() => {
                ableElement('view');
                hiddenElement('container-loader');
                window.scrollTo({
                    top: 0,
                    behavior: 'auto'
                });
            }, timeout);
        } else {
            setTimeout(() => {
                ableElement('view');
                hiddenElement('container-loader');
                window.scrollTo({
                    top: 0,
                    behavior: 'auto'
                });
            }, '1' + timeout);
        }

    });

    function hiddenElement($elementID) {
        var loader = document.getElementById($elementID);
        if (loader) {
            loader.style.display = 'none';
        }
    }

    function ableElement($elementID) {
        var loader = document.getElementById($elementID);
        if (loader) {
            loader.style.display = 'block';
        }
    }
</script>