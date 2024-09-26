<!------------------------------------------------ SETTINGS  -->
<?php

$Controller = new Controller;
$imagens = $Controller->settingImage();
if ($imagens != []) {
    $about = $imagens['about'];
    $portfolioDefault = $imagens['portfolio'];
    $C_BASIC = $imagens['c#Basic'];
}

?>
<main class="view" id="view">
    <!------------------------------------------------ HOME  -->
    <section class="container-home" id="home">
        <div class="container-presentation">
            <div class="content-presentation">
                <div class="text">
                    <p class="title  efeito-fade-right"><br> Paulo Ferreira</p>
                    <p class="description efeito-fade-right">Sou um profissional apaixonados por tecnologia, comprometido a oferecer soluções inovadoras e eficientes para nossos clientes.</p>
                    <br>
                    <p class="description efeito-fade-right">
                        Com experiência em suporte técnico, infraestrutura e desenvolvimento web, estou aqui para ajudá-lo alcançar seus objetivos digitais e tecnicos.</p>
                    <div class="container-button efeito-fade-right">
                        <a href="#contact" class="button" type="submit">Diga olá!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------------ ABOUT  -->
    <section class="container-about" id="about">
        <div class="box-about">
            <div class="content-about">
                <div class="container-bio">
                    <div class="text-bio">
                        <p class="title">Paulo Ferreira</p>
                        <p class="description text-bio2">
                            Minha paixão reside em criar soluções digitais, com uma abordagem centrada no usuário, meu objetivo é criar experiências digitais que não apenas atendam às necessidades específicas, mas superem as expectativas dos clientes.
                        </p>
                        <div class="btn">
                            <a href="#my-project" class="my-project">Meus projetos</a>
                            <a href="#services" class="services">Meus servicos</a>
                            <!-- <a href="#download-cv" class="my-cv">Download CV</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------ PROCESS  -->
    <section class="container-process" id="process">
        <div class="work-process">
            <div class="text-process">
                <p class="title-process efeito-fade-right">Processo de trabalho</p>
                <p class="description-process efeito-fade-right">
                    Um processo bem definido é essencial para garantir a consistência, qualidade e eficiência das operações.
                </p>
                <p class="description-process efeito-fade-right">
                    Fornecendo clareza no desenvolvimento do trabalho, incentivando a transparência, promovendo a busca pela melhoria contínua e contribuindo para a redução de falhas
                </p>
            </div>
            <div class="box-process">
                <div class="item-process">
                    <div style="opacity: 0;" class="container-item efeito-fade-right">
                        <i class="fa-solid fa-clipboard-list"></i>
                        <p class="title-item">1. Planejar</p>
                        <p class="description-item">Desenvolver estratégias, a identificar recursos necessários e compreender as expectativas.</p>
                    </div>
                    <div style="opacity: 0;" class="container-item efeito-fade-right">
                        <i class="fa-solid fa-chart-line"></i>
                        <p class="title-item">2. Monitorar</p>
                        <p class="description-item">Acompanhar o progresso do projeto, identificar possíveis desvios e realizar ajustes conforme necessário para garantir que os objetivos sejam alcançados.</p>
                    </div>
                </div>
                <div class="item-process">
                    <div style="opacity: 0;" class="container-item efeito-fade-right">
                        <i class="fa-solid fa-pencil"></i>
                        <p class="title-item">3. Otimizar </p>
                        <p class="description-item">Analisar os resultados obtidos, identificar pontos fortes e áreas de melhoria e utilizar essas informações para otimizar o projetos.</p>
                    </div>
                    <div style="opacity: 0;" class="container-item efeito-fade-right">
                        <i class="fa-solid fa-rocket"></i>
                        <p class="title-item">4. Lançar</p>
                        <p class="description-item">E Realizada as últimas verificações para garantir que todos os objetivos foram alcançados, antes da transição para a próxima fase ou a entrega do projeto.</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const fadeElements = document.querySelectorAll('.container-item-process');

                const observerOptions = {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.3
                };

                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('fade-left');
                            observer.unobserve(entry.target); // Stop observing after class is added
                        }
                    });
                }, observerOptions);

                fadeElements.forEach(element => {
                    observer.observe(element);
                });
            });
        </script>
    </section>

    <!------------------------------------------------ PORTFOLIO  -->
    <section class="container-portfolio" id="my-project">
        <div class="content-portfolio">
            <div class="title-portfolio">
                <p class="title">Portfólio</p>
                <p class="description">Cada projeto reflete minha paixão e dedicação.</p>
            </div>
            <div class="container-item-portfolio container-item-card-services" style="opacity: 0;">
                <div class="box-item-portfolio">
                    <div class="item-portfolio slide">
                        <div class="imagen-item-portfolio">
                            <img src="<?php echo $portfolioDefault ?>" alt="">
                        </div>
                        <div class="container-description-item-portfolio">
                            <div class="description-item-portfolio">
                                <span>Agendamento online</span>
                                <p class="title-item-portfolio">Makeflix</p>
                                <p class="description-portfolio">Serviço de maquiagem, plano de assinatura e agendamento online!</p>
                            </div>
                            <div class="btn-item-portfolio">                                
                                <a class="btn-portfolio" href="https://makeflix.renataclara.com" target="_black">Visitar <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-item-portfolio container-item-card-services" style="opacity: 0;">
                    <div class="item-portfolio slide">
                        <div class="imagen-item-portfolio">
                            <img src="./image/portfolio/thalispersonal.png" alt="">
                        </div>
                        <div class="container-description-item-portfolio">
                            <div class="description-item-portfolio">
                                <span>Landing page</span>
                                <p class="title-item-portfolio">Thalis Personal</p>
                                <p class="description-portfolio">Apresentação do servico de personal trainer</p>
                            </div>
                            <div class="btn-item-portfolio">
                                <a class="btn-portfolio" href="https://thalispersonal.paulodevelop.com/" target="_black">Visitar <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-item-portfolio container-item-card-services" style="opacity: 0;">
                    <div class="item-portfolio slide">
                        <div class="imagen-item-portfolio">
                            <img src="./image/portfolio/auto.png" alt="">
                        </div>
                        <div class="container-description-item-portfolio">
                            <div class="description-item-portfolio">
                                <span>Landing page</span>
                                <p class="title-item-portfolio">Auto Car</p>
                                <p class="description-portfolio">Site para concessionaria apresentação de carros</p>
                            </div>
                            <div class="btn-item-portfolio">
                                <a class="btn-portfolio" href="https://auto.paulodevelop.com/" target="_black">Visitar <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container-btn-portfolio">
                <a href="#more_project">Ver Mais Projetos</a>
            </div> -->
    </section>

    <!------------------------------------------------ SKILLS -->
    <section class="container-skills" id="my-skills">
        <div class="content-skills">
            <div class="title-skills">
                <p class="title">Habilidades</p>
                <p class="description">Busca por conhecimento e curiosidade inabalável.</p>
            </div>
            <div class="container-item-skills">
                <div class="box-item-skills">
                    <div class="skills-list ">
                        <ul class="soft-skills">    
                            <li style="opacity: 0;" class="container-item-card-services">SCRUM</li>
                            <li style="opacity: 0;" class="container-item-card-services">GIT & GITHUB</li>
                            <li style="opacity: 0;" class="container-item-card-services">API RESQUEST</li>
                            <li style="opacity: 0;" class="container-item-card-services">LINUX</li>
                            <li style="opacity: 0;" class="container-item-card-services">AWS</li>
                            <li style="opacity: 0;" class="container-item-card-services">DOCKER</li>
                        </ul>
                        <ul class="hard-skills">    
                            <li style="opacity: 0;" class="container-item-card-services">SQL</li>
                            <li style="opacity: 0;" class="container-item-card-services">.NET</li>
                            <li style="opacity: 0;" class="container-item-card-services">C#</li>
                            <li style="opacity: 0;" class="container-item-card-services">Node.js</li>
                            <li style="opacity: 0;" class="container-item-card-services">PHP</li>
                            <li style="opacity: 0;" class="container-item-card-services">JavaScript</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------ CERTIFICADEB -->
    <!-- <section class="container-certificate" id="my-certificate">
        <div class="content-certificate">
            <div class="title-certificate">
                <p class="title">Certificado</p>
                <p class="description">Sempre evoluindo.</p>
            </div>
            <div class="container-item-certificate">
                <div class="box-item-certificate">
                    <div class="certificate-list ">
                        <div class="certificate-item">
                            <img src="<?= $C_BASIC ?>" alt="C# Basic">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!------------------------------------------------ CALL  -->
    <section class="container-call-action">
        <div class="content-call-action">
            <div>
                <p class="title-call-action">Procurando novas oportunidades?</p>
                <p class="description-call-action">Junte-se a mim para transformar grandes ideias em projetos de sucesso. Se você é freelancer e busca parcerias que fazem a diferença, vamos criar algo incrível juntos!</p>
            </div>
            <div class="container-btn-call-action">
                <a class="btn-call-action" href="https://wa.me/5562999589427">Vamos colaborar
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>


    <!------------------------------------------------ SERVICES -->
    <section class="container-services" id="services">
        <div class="content-services">
            <div class="colun-text-description">
                <p class="title-text">Soluções Digitais</p>
                <div class="description-text">
                    <p>As soluções digitais são meticulosamente elaboradas para oferecer a você uma vantagem competitiva única no mundo online. </p>
                    <br>
                    <p>Desde o design e desenvolvimento de sites sob medida até a implementação de sistemas web avançados e lojas online, minha equipe está comprometida em traduzir suas visões em realidade digital.</p>
                    <br>
                    <p> Cada solução é cuidadosamente adaptada para atender às suas necessidades específicas e objetivos comerciais, garantindo uma experiência digital excepcional para você e seus clientes, estou aqui para impulsionar o seu sucesso digital.</p>
                </div>
            </div>
            <div class="container-card-services">
                <div style="opacity: 0;" class="container-item-card-services" id="car-services-pry">
                    <p class="title-services">Design e Desenvolvimento Web</p>
                    <p class="description-services">Desde sites corporativos informativos até plataformas web dinâmicas, estou preparado para transformar suas ideias em realidade digital. Utilizo as mais recentes tecnologias e tendências de design para garantir que seu site se destaque na multidão.</p>
                </div>
                <div style="opacity: 0;" class="container-item-card-services" id="car-services-seg">
                    <p class="title-services">Desenvolvimento de Lojas Online</p>
                    <p class="description-services">Se você está procurando lançar uma loja virtual ou atualizar uma existente, posso ajudar a criar uma experiência de compra online intuitiva e segura. Desde a configuração inicial até a integração de sistemas de pagamento, estou aqui para simplificar o processo.</p>
                </div>
                <div style="opacity: 0;" class="container-item-card-services" id="car-services-ter">
                    <p class="title-services">Suporte Técnico Personalizado</p>
                    <p class="description-services">O suporte técnico é a espinha dorsal de qualquer operação digital. Ofereço serviços abrangentes de suporte técnico para garantir que suas operações permaneçam eficientes e seguras. Desde a resolução de problemas do dia a dia até a implementação de soluções de segurança avançadas, estou comprometido em manter seu sistema funcionando sem problemas.</p>
                </div>
            </div>
        </div>
        <div class="btn-services"></div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const fadeElements = document.querySelectorAll('.container-item-card-services');

                const observerOptions = {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.2
                };

                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('fade-up');
                            observer.unobserve(entry.target); // Stop observing after class is added
                        }
                    });
                }, observerOptions);

                fadeElements.forEach(element => {
                    observer.observe(element);
                });
            });
        </script>
    </section>


    <!------------------------------------------------ CONTACT -->
    <section class="container-contact" id="contact">
        <div class="content-contact">
            <div class="container-my-information">
                <div class="text-information">
                    <p class="title-information">Vamos discutir o seu projeto?</p>
                    <p class="description-information">Aqui estão algumas informações sobre mim, como endereço, e-mail, telefone e redes sociais.</p>
                </div>
                <div class="container-social-media">
                    <a href="https://www.instagram.com/pauloferreira.tec/" target="_blank" class="instagram">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="https://t.me/pauloferreiradev" target="_blank" class="telegram">
                        <i class="fa fa-telegram" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/paulo-ferreiradevs" target="_blank" class="linkedin">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="https://github.com/PauloTIgit" target="_blank" class="github">
                        <i class="fa fa-github" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="container-form-contact">
                <div class="form-contact-title">
                    <p class="title">Utilize o formulário abaixo para enviar-me uma mensagem</p>
                </div>
                <div class="content-form-contact">
                    <form method="POST">
                        <div class="form-contact form-contact-name">
                            <label for="name" class="form-label">Nome*</label>
                            <input type="text" class="input name" id="name" name="name" oninput="formatName(this)" required>
                        </div>
                        <div class="form-contact form-contact-email">
                            <label for="email" class="form-label">E-mail*</label>
                            <input type="email" class="input email" id="email" name="email" required>
                        </div>
                        <div class="form-contact form-contact-phone">
                            <label for="phone" class="form-label">Celular*</label>
                            <input type="tel" class="input phone" id="phone" name="phone" minlength="15" maxlength="15" required>
                        </div>
                        <div class="box-form-contact">
                            <div class="form-contact form-contact-subject">
                                <label for="subject" class="form-label">Assunto*</label>
                                <input type="text" class="input subject" id="subject" name="subject" required>
                            </div>
                        </div>
                        <div class="form-contact form-contact-message">
                            <label for="message" class="form-label">Mensagem*</label>
                            <textarea class="input message" id="message" name="message" required></textarea>
                        </div>
                        <style>
                            .notification {
                                padding: 1rem;
                                color: antiquewhite;
                            }

                            .notification.erro {
                                background: #9e1e1e;
                            }

                            .notification.sucesso {
                                background: #217c35;

                            }
                        </style>
                        <div class="notification">

                        </div>
                        <div class="btn-form-contact">
                            <button type="submit">Enviar <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------------------ CONTACT -->
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('form').on('submit', function(event) {
            event.preventDefault(); // Impede o envio padrão do formulário

            $('.btn-form-contact').html('<button> Enviando... <i class="fa fa-spinner fa-spin"></i> </button>');

            // Coleta os dados do formulário
            var formData = $(this).serialize();

            $.ajax({
                url: '?send_email=contact',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    
                    if (response.sucesso == true) {
                        $('.notification').addClass('sucesso').html('<p>Mensagem enviada</p>');
                        console.log(response.mensagem);
                    } else {
                        $('.notification').addClass('erro').append('Erro interno, estamos ajustando');
                        console.log(response.mensagem);
                    }
                    $('form')[0].reset();
                },
                error: function(xhr, status, error) {
                    $('.notification').addClass('erro').append('Erro interno, estamos ajustando');
                    console.log('Ocorreu um erro ao enviar a mensagem.');
                },
                complete: function() {
                    $('.btn-form-contact').html('<button type="submit">Enviar <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>');

                    setTimeout(function() {
                        $('.notification').fadeOut();
                    }, 5000);
                }
            });
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="view/js/contact.js"></script>
<span class="coockie">
    <!-------------------- COOCKIE -->
    <script type="text/javascript" charset="UTF-8" data-cookiescriptreport="report" src="//report.cookie-script.com/r/85836292fd84e940ca15fe2c37336b1a.js"></script>
    <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/85836292fd84e940ca15fe2c37336b1a.js"></script>
    <!-------------------- COOCKIE -->
</span>