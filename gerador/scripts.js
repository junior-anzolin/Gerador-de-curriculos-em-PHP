function createFormacao() {
    var formacao = document.getElementById('formFormacao');
    var clone = formacao.cloneNode(true);
    document.getElementById('formacao').appendChild(clone);
}

function createXPprofissional() {
    var formacao = document.getElementById('formXPprofissional');
    var clone = formacao.cloneNode(true);
    document.getElementById('XPprofissional').appendChild(clone);
}

function createCurso() {
    var formacao = document.getElementById('formCurso');
    var clone = formacao.cloneNode(true);
    document.getElementById('curso').appendChild(clone);
}

function createContatoInfo() {
    var formacao = document.getElementById('formContatoInfo');
    var clone = formacao.cloneNode(true);
    document.getElementById('contatoInfo').appendChild(clone);
}

function removeFormacao() {
    var remove = document.getElementById('formacao');
    if ( remove.childNodes.length <= 3 ) {
        alert('É necessário ter no minimo um campo');
        return;
    }
    remove.removeChild(remove.childNodes[remove.childNodes.length - 1]);
}

function removeXPprofissional() {
    var remove = document.getElementById('XPprofissional');
    if ( remove.childNodes.length <= 3 ) {
        alert('É necessário ter no minimo um campo');
        return;
    }
    remove.removeChild(remove.childNodes[remove.childNodes.length - 1]);
}

function removeCurso() {
    var remove = document.getElementById('curso');
    if ( remove.childNodes.length <= 3 ) {
        alert('É necessário ter no minimo um campo');
        return;
    }
    remove.removeChild(remove.childNodes[remove.childNodes.length - 1]);
}

function removeContatoInfo() {
    var remove = document.getElementById('contatoInfo');
    if ( remove.childNodes.length <= 3 ) {
        alert('É necessário ter no minimo um campo');
        return;
    }
    remove.removeChild(remove.childNodes[remove.childNodes.length - 1]);
}