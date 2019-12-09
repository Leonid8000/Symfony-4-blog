// Delete category
const category = document.getElementById('category_table');

if(category){
    category.addEventListener('click', e => {
        if(e.target.className === 'btn btn-sm btn-danger category-delete'){
        if(confirm('Deleting?')){
            const id = e.target.getAttribute('data-id');

            fetch(`/admin/category/delete/${id}`,{
                method: 'DELETE'
            }).then(res => window.location.reload());
        }
    }
});
}
// Delete post
const post = document.getElementById('post_table');

if(post){
    post.addEventListener('click', e => {
        if(e.target.className === 'btn btn-sm btn-danger post-delete'){
        if(confirm('Deleting Post?')){
            const id = e.target.getAttribute('data-id');

            fetch(`/admin/post/delete/${id}`,{
                method: 'DELETE'
            }).then(res => window.location.reload());
        }
    }
});
}
// Delete tag
const tag = document.getElementById('post_table');

if(tag){
    tag.addEventListener('click', e => {
        if(e.target.className === 'btn btn-sm btn-danger tag-delete'){
            if(confirm('Deleting Tag?')){
                const id = e.target.getAttribute('data-id');

                fetch(`/admin/tag/delete/${id}`,{
                    method: 'DELETE'
                }).then(res => window.location.reload());
            }
        }
    });
}

// const navCtegories = document.getElementById('nav-category');
//
// window.addEventListener('scroll', () => {
//     $('.section-home').addClass('pos-fix');
// });

// $(document).ready(function(){
//     var scroll_pos = 0;
//     $(document).scroll(function() {
//         scroll_pos = $(this).scrollTop();
//         // if(scroll_pos > 50 || scroll_pos == 100) {
//         //     $(".section-home").css('background-color', 'blue');
//         // }
//         if(scroll_pos >= 200) {
//             $(".section-home").addClass('pos-dark');
//             $(".card-body").addClass('grey-bg');
//             $(".card-text").addClass('color-light');
//         } else {
//             $(".section-home").removeClass('pos-dark');
//             $(".card-body").removeClass('grey-bg');
//             $(".card-text").removeClass('color-light');
//             // $(".card-text").addClass('color-dark');
//         }
//     });
// });


//Green Shock
document.getElementById('cta').addEventListener('click', ()=>{

    TweenMax.to('.panel', 1, {scaleY: 1, height: '100vh',  ease: Circ.easeInOut});
    // ease: Power3.easeOut
    TweenMax.to('#img-gasp', 1, {opacity: 1, y:0, delay: 1});
    TweenMax.to('.p-gasp', 1, {opacity: 1, y:20, delay: 1.4});
    TweenMax.to('.box', 3, {opacity: 1, scale:1, ease: Elastic.easeOut.config(1,0.3)});

});
