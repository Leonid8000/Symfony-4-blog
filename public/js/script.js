// Delete question
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
// // Delete answer
// const answer = document.getElementById('answer_table');
//
// if(answer){
//     answer.addEventListener('click', e => {
//         if(e.target.className === 'btn btn-danger answer-delete'){
//         if(confirm('Are you sure?')){
//             const id = e.target.getAttribute('data-id');
//
//             fetch(`/admin/answer/delete/${id}`,{
//                 method: 'DELETE'
//             }).then(res => window.location.reload());
//         }
//     }
// });
// }
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

