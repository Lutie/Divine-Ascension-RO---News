function switchLangu(e) {
    e.preventDefault();
    setCookie("lang", e.target.getAttribute('data-language'), 7);
    
    displayTranslations();
}