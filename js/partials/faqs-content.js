// JS for partial: faqs-content\n
$(()=>{
    $('.faq-question').on('click', function(){
        var $this = $(this);
        var $faq = $this.closest('.the-faq');
        var $answer = $faq.find('.faq-answer');
        // Si ya está abierto, ciérralo
        if ($faq.hasClass('active')) {
            $faq.removeClass('active');
            $answer.slideUp(200);
        } else {
            // Cierra todos los abiertos
            $('.the-faq.active').removeClass('active').find('.faq-answer').slideUp(200);

            // Abre el actual
            $faq.addClass('active');
            $answer.slideDown(200);
        }
    });
})