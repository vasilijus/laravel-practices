 // jQuery
// $(document).ready( function(){

//     getItems();
//     // Get items from API
//     function getItems() {
//         $.ajax({
//            url: 'http://localhost:8000/api/items' 
//         }).done( function( items ){
//             // console.log(items)
//              let output = '';
//              $.each( items, function(key, item) {
//                     output += `
//                          <li class="list-group-item">
//                            <b>${item.text}</b>${item.body}
//                          </li>
//                     `;
//              });
//              $('#items').append(output);
//         })
//     }
// })
// ECMAScript 
document.addEventListener('DOMContentLoaded', function(){
    console.info('Page Loaded')
    let url = 'http://localhost:8000/api/items';
    fetch(url).then(response => response.json() ).then( data => {
        console.log(items)
        // let items = data.map( (item, index, array) => {
        //     item += `
        //         <li class="list-group-item">
        //         <b>${item.text}</b>${item.body}
        //         </li>
        //     `;
        // })
        // document.querrySelector('#items').appendChild(item);
        
    })
})