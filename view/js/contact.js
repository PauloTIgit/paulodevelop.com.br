var options = {
    onKeyPress: function (phone, e, field, options) {
        var masks = ['(00) 0000-00000', '(00) 00000-0000'];
        var mask = (phone.length > 14) ? masks[1] : masks[0];
        $('#phone').mask(mask, options);
    }
};

document.addEventListener("DOMContentLoaded", function() {
    var inputs = document.querySelectorAll('.form-contact .input');

    inputs.forEach(function(input) {
        input.addEventListener("focus", function() {
            this.parentNode.querySelector('.form-label').classList.add("focused-label");
        });

        input.addEventListener("blur", function() {
            if (this.value === "") {
                this.parentNode.querySelector('.form-label').classList.remove("focused-label");
            }
        });
    });
});

function formatName(input) {
    // Verifica se o valor foi preenchido automaticamente pelo navegador
    if (input.value !== input.defaultValue) {
        input.style.fontFamily = 'var(--font-montserra)';
    }
}

$(document).ready(function () {
    $('#budget').mask('000.000.000.000.000,00', { reverse: true });
});


$('#phone').mask('(00) 00000-0000', options);
