<!------------------------------------------------ FOOTER -->
<style>
    .container-footer {
        width: 100%;
        background: var(--cor-qua-800);
        height: 280px;
        display: flex;
        justify-content: center;
    }

    .container-footer .content-footer {
        width: 80%;
        height: 80%;
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        justify-content: center;
    }

    .copyright-footer {
        font-family: var(--font-montserra);
        font-size: .9rem;
        font-weight: 400;
        color: #fff;
        text-align: center;
    }
</style>
<section class="container-footer" id="footer">
    <div class="content-footer">
        <div class="copyright-footer">
            <p>Copyright © <?php echo date('Y') ?> Paulo Ferreira.</p>
            <br>
            <p>Todos os direitos reservados.</p>
        </div>
    </div>
</section>

</body>
<script src="src/app.js"></script>


</html>