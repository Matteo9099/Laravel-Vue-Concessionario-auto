require('./bootstrap');


// ELIMINAZIONE ARTICOLO
const deleteUserProfile = document.getElementById('deleteUser');
if(deleteUserProfile){
    deleteUserProfile.addEventListener('click',
        (e)=>{
            if(!confirm('Vuoi davvero eliminare il profilo?')){
                e.preventDefault();
            }
        }
    )
}