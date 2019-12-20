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

// Navbar with Logo and Categories animation
window.onload = function() {
    $('#nav').show().css('opacity','1');
    $('.first-hr').css('width','100%');
};

$(window).on('scroll', ()=>{
    if($(window).scrollTop()){
        $('#nav').addClass('black')
    }else{
        $('#nav').removeClass('black')
    }
});

// third-img
// First post animation
    gsap.from('#first-post', {opacity:0, duration: 1});

// Circle type
new CircleType(document.getElementById('demo1'))
    .radius(384);

if( window.pageYOffset > 902 ) {
    // $(".third-img").addClass('scale2');
    alert(window.pageYOffset);
}

//Green Shock
document.getElementById('cta').addEventListener('click', ()=>{

    TweenMax.to('.panel', 1, {scaleY: 1, height: '100vh',  ease: Circ.easeInOut});
    // ease: Power3.easeOut
    TweenMax.to('#img-gasp', 1, {opacity: 1, y:0, delay: 1});
    TweenMax.to('.p-gasp', 1, {opacity: 1, y:20, delay: 1.4});
    TweenMax.to('.box', 3, {opacity: 1, scale:1, ease: Elastic.easeOut.config(1,0.3)});
});
let nav = document.getElementById('nav');



