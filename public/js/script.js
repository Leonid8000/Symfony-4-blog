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
// //Reset poll result
// const poll = document.getElementById('poll_reset');
// poll.addEventListener('click', funk = () =>{
//     if(confirm('Are you sure?')){
//         fetch(`/admin/results/delete`,{
//             method: 'DELETE'
//         }).then(res => window.location.reload());
//
//     }
// });

