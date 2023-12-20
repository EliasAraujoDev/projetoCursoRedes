function toggleDiv(divId) {
    // Esconder todas as divs
    var allDivs = document.querySelectorAll('#optionsContainer > div');
    allDivs.forEach(function (div) {
        div.classList.add('hidden');
    });

    // Mostrar a div correspondente ao checkbox selecionado
    var selectedDiv = document.getElementById(divId);
    selectedDiv.classList.remove('hidden');
}