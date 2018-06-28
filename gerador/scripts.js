function createFormacao() {
    var formacao = document.getElementById('formFormacao');
    var clone = formacao.cloneNode(true);
    document.getElementById('formacao').appendChild(clone);
}

function removeFormacao() {
    var remove = document.getElementById('formacao');
    if ( remove.childNodes.length <= 3 ) {
        alert('É necessário ter no minimo um campo');
        return;
    }
    remove.removeChild(remove.childNodes[remove.childNodes.length - 1]);
}

function createXPprofissional() {
    var formacao = document.getElementById('formXPprofissional');
    var clone = formacao.cloneNode(true);
    document.getElementById('XPprofissional').appendChild(clone);
}

function removeXPprofissional() {
    var remove = document.getElementById('XPprofissional');
    if ( remove.childNodes.length <= 3 ) {
        alert('É necessário ter no minimo um campo');
        return;
    }
    remove.removeChild(remove.childNodes[remove.childNodes.length - 1]);
}