

const btnDelete = document.querySelectorAll('.btnDelete');

btnDelete.forEach(btn=>
    {
    btn.addEventListener('click',(event)=>{
    
        event.preventDefault();

        // Récupère l'attribut href
        const href =btn.href;
        const modalDelete = document.querySelector('.btnDeleteModal');
        modalDelete.href = href ;

        const modal = new bootstrap.Modal(document.querySelector('confirmDelete'));

        console.log('ok');

        modal.show();
});
    })

