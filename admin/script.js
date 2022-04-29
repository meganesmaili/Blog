

const btnDelete = document.querySelectorAll('.btnDelete');

btnDelete.forEach(btn=>
    {
    btn.addEventListener('click',(event)=>{
    
        event.preventDefault();

        const myModal = new bootstrap.Modal(document.querySelector('confirmDelete'));

        console.log('ok');

        modal.show();
});
    })

