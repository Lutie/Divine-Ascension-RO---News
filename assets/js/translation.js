(function($) {
    console.log("Loading the translation module...");
    $('[data-trans!=""]').each(function( index ) {
        // display the key of the trad
        console.log( $(this).getAttribute("trans") );
    });
})(jQuery);