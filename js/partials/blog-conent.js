// JS for partial: blog-conent\n
$(()=>{
    get_astral_guide();
});
var rout = _sajoURL_+'/wp-json/astral/guides';
let currentPage = 1;
const perPage = 9;
function get_astral_guide(){
    $.ajax({
        method: 'GET',
        url: rout,
        data:{
            page: currentPage,
            per_page: perPage,
        }
    }).done((resp)=>{
        print_astral_guides(resp);
        if (resp.page >= resp.max_pages) {
            $('.see-more').hide();
        } else {
            $('.see-more').show();
        }
    })
}
// See more
$('.see-more').on('click', function() {
    currentPage++;
    get_astral_guide(true);
});
// Print astral guides
function print_astral_guides(resp){
    var astral_guides = resp.astral_guide;
    console.log(astral_guides);
    var content = $('#astral-guides');
    if(astral_guides.length > 0){
        for(item of astral_guides){
            content.append(`
                <a href="${item.permalink}" class="the-guide">
                    ${item.feature_image}
                    <div class="text">
                        <h3 class="guide-name">${item.guide_name}</h3>
                        <hr>
                        <p class="date">${item.the_date}</p>
                    </div>
                </a>
            `)
        }
    }else{
        content.html(`<p class="there-are-no-guides">No tenemos contenido aun</p>`);
    }
}