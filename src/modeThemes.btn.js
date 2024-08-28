const btnMode = document.getElementById('btnMode');
const iconMode = document.getElementById('iconMode');
const themeBrouse = localStorage.getItem('darkMode');
const view = document.getElementById('view');

// Verifica se o tema escuro está ativado no localStorage ao carregar a página
document.addEventListener("DOMContentLoaded", function () {
    var container_mode = document.getElementById('container_mode');
    if (supportsLocalStorage()){
        console.log('Brouse tem suporte a localStorage!');
        if (themeBrouse === 'true') {// se estiver de no tema preto 
            if(document.getElementById('view')){
                activatedNight();
            }
        }
        if (themeBrouse === null) {// se estiver de no tema branco 
            if (document.getElementById('view')){
                activatedMorning();
            }
        }
        btnMode.classList.remove('default');
        container_mode.style.display='block';
    }else{
        btnMode.remove()
        console.log('O navegador não tem suporte a LocalStorge. Botão de themaMode não será usado!');
    }
});

// Verifica se o navegador suporta o localStorage
function supportsLocalStorage() {
    try {
        return 'localStorage' in window && window['localStorage'] !== null;
    } catch (e) {
        return false;
    }
}

// Define um valor no localStorage para indicar que o tema escuro está ativado
function setDarkMode() {
    statusBtnTheme = btnMode.classList;
    for (let i = 0; i < statusBtnTheme.length; i++) {
        const value = statusBtnTheme[i];
        if (value === 'morning'){
            theme = 'night';
            themesMode(theme);
        }
        if (value === 'night') {
            theme = 'morning';
            themesMode(theme);
        }
    }
}

// matar a cobra e mostrar o pau
function activatedNight() {
    btnMode.classList.remove('night');
    iconMode.classList.remove('fa-moon-o');
    btnMode.classList.add('morning');
    iconMode.classList.add('fa-sun-o');
    var elementView = document.getElementById('view').classList;
    for (let i = 0; i < elementView.length; i++) {
        elementView.remove('mode-white')
        elementView.add('mode-dark');
        document.body.classList.remove('mode-white');
        document.body.classList.add('mode-dark');
    }
}

// matar a cobra e mostrar o pau
function activatedMorning() {
    btnMode.classList.remove('morning');
    iconMode.classList.remove('fa-sun-o');
    btnMode.classList.add('night');
    iconMode.classList.add('fa-moon-o');
    var elementView = document.getElementById('view').classList;
    for (let i = 0; i < elementView.length; i++) {
        elementView.remove('mode-dark');
        elementView.add('mode-white');
        document.body.classList.remove('mode-dark');
        document.body.classList.add('mode-white');
    }

}


function themesMode(theme) {
    
    if (theme === 'morning') {
        activatedNight();
    }
    if (theme === 'night') {
        activatedMorning();
    }
}