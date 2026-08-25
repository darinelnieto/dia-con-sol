// JS for partial: footer\n
$(()=>{
    $('.button-submit').html(`
        <svg id="Grupo_381" data-name="Grupo 381" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="244.852" height="80.286" viewBox="0 0 244.852 80.286">
            <defs>
                <clipPath id="clip-path">
                <rect id="Rectángulo_353" data-name="Rectángulo 353" width="244.852" height="80.286" transform="translate(0 0)" fill="none"/>
                </clipPath>
            </defs>
            <g id="Grupo_378" data-name="Grupo 378">
                <g id="Grupo_377" data-name="Grupo 377" clip-path="url(#clip-path)">
                <path id="Trazado_66" data-name="Trazado 66" d="M206.4,1.694a38.449,38.449,0,0,0-34.828,22.157,13.662,13.662,0,0,1-6.439,4.945c-3.231,1.193-8.9,1.159-13.286-.057-2.532-.7-5.8-4.674-8.1-7.884A40.131,40.131,0,0,0,108.543,0h-68.4a40.143,40.143,0,0,0,0,80.286h68.4a40.081,40.081,0,0,0,32.4-16.444v.009l.065-.1q.894-1.227,1.7-2.521c2.287-3.288,6.309-8.665,9.055-10.064,4.378-2.23,10.188-2.623,13.419-1.429,2.221.82,4.419,3.282,6.17,6.185a38.431,38.431,0,0,0,1.852,3.594l.018.037a2.741,2.741,0,0,0,.41.687A38.449,38.449,0,1,0,206.4,1.694" fill="#373a36" fill-rule="evenodd"/>
                </g>
            </g>
            <text id="Enviar" transform="translate(33.074 48.756)" fill="#d9a428" font-size="31" font-family="CormorantInfant-Medium, Cormorant Infant" font-weight="500"><tspan x="0" y="0">Enviar</tspan></text>
            <g id="Grupo_380" data-name="Grupo 380">
                <g id="Grupo_379" data-name="Grupo 379" clip-path="url(#clip-path)">
                <path id="Trazado_67" data-name="Trazado 67" d="M221.227,42.094c-2.115,3.327-8.557,10-14.752,12.722-6.2-2.723-12.637-9.4-14.752-12.722a13.42,13.42,0,0,1-2.3-8.105,9,9,0,0,1,17.048-3.534,9,9,0,0,1,17.048,3.534,13.427,13.427,0,0,1-2.3,8.105" fill="#d9a428"/>
                </g>
            </g>
        </svg>    
    `);
    $('.policies-container').on('click', 'label', function(){
        var checked = $('input[type="checkbox"]', this);
        if(checked.prop('checked')){
            $('.checkbox', this).addClass('active');
        }else{
            $('.checkbox', this).removeClass('active');
        }
    });
});