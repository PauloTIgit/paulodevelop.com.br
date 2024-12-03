<style>
    .container-loader {
        position: absolute;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
        margin: 0;
        background: #ffff;
        z-index: 3; 
        overflow: hidden;
        background: #ffff;
    }

    .texto-info{
        font-family:'Work Sans', sans-serif;
        font-weight: 600;
        font-size: 1.3rem;
        color: var(--cor-grafit-800);
    }
    
    .content-loader {
        width: 30%;
        height: 6px;
        border-radius: 2px;
    }
    
    .content-loader{
        width: 20rem;
        height: 20rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    .content-loader img{
        overflow: hidden;
        background-position: center;
    }

    @media (prefers-color-scheme: dark){
        body{
            background: #ffff;
        }
        .container-loader{
            background: #ffff;
        }
    }

</style>
<?php
    $Controller = new Controller;
    $imagens = $Controller->settingImage();
    $maintenance = $imagens['maintenance'];
?>
<section class="container-loader" id="container-loader">
    <p class="texto-info">Maintenance</p>
    <div class="content-loader">
        <img src="<?php echo $maintenance; ?>" alt="">
    </div>
</section>

