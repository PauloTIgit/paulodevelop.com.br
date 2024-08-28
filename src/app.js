// Adiciona um ouvinte de eventos de clique aos links do menu
document.querySelectorAll('nav a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault(); // Impede o comportamento padrão de navegação
        const targetId = this.getAttribute('href').substring(1); // Obtém o ID da seção alvo
        scrollToSection(targetId); // Rola suavemente até a seção alvo
    });
});

// Função para rolar suavemente até a seção desejada
function scrollToSection(id) {
    const section = document.getElementById(id);
    if (section) {
        window.scrollTo({
            top: section.offsetTop,
            behavior: 'smooth' // Ativa a animação de rolagem suave
        });
    }
}


// Força o recarregamento da página, ignorando o cache
function limparCache() {
    location.reload(true);
}

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (window.scrollY >= 400) {
        var navbar = document.getElementById("navbar");
        if (navbar) {
            navbar.classList.add("show");
        }
    }
    // if (window.scrollY > 500) {
    //     var navbar = document.getElementById("navbar");
    //     if (navbar) {
    //         navbar.classList.remove("show");
    //     }
    // }
}



document.addEventListener('DOMContentLoaded', function() {
    const fadeElements = document.querySelectorAll('.efeito-fade-right');

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.3
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-right');
                observer.unobserve(entry.target); // Stop observing after class is added
            }
        });
    }, observerOptions);

    fadeElements.forEach(element => {
        observer.observe(element);
    });
});
