function formatarTelefoneCelular(input) {
    var num = input.value.replace(/\D/g, '');

    if (num.length > 2) {
        input.value = '(' + num.substring(0, 2) + ')';
    }
    if (num.length > 7) {
        input.value += ' ' + num.substring(2, 7) + '-' + num.substring(7, 11);
    } else if (num.length > 2) {
        input.value += ' ' + num.substring(2, 7);
    }
}

function formatarTelefoneFixo(input) {
    var num = input.value.replace(/\D/g, '');

    if (num.length > 2) {
        input.value = '(' + num.substring(0, 2) + ')';
    }
    if (num.length > 6) {
        input.value += ' ' + num.substring(2, 6) + '-' + num.substring(6, 10);
    } else if (num.length > 2) {
        input.value += ' ' + num.substring(2, 6);
    }
}

function formatarCEP(input) {
    var cep = input.value.replace(/\D/g, '');

    input.value = cep.substring(0, 5) + '-' + cep.substring(5, 8);
}
