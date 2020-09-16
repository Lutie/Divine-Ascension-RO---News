(function($) {
    displayTranslations();
})(jQuery);

function displayTranslations() {
    // Configurations
    const path = 'assets/translations/';

    // Get language
    const languages = ['en', 'fr'];
    var userLang = getCookie("lang") ? getCookie("lang") : (navigator.language || navigator.userLanguage);
    userLang = languages.includes(userLang) ? userLang : languages[0];

    // Parse code in order to put translations in elements
    $.getJSON(path + userLang + '.json', function(data) {
        const locales = data;
        $('*[data-trans]').each( function() {
            var keys = $(this).attr('data-trans').split('.');
            const locale = keys.reduce((acc, key) => {
                return acc[key];
            }, locales);
            $(this).html(locale);
        });
    });
}