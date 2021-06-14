window.addEventListener('DOMContentLoaded', () =>{
    const formAgenda = document.querySelector('#form-agenda')
    const app = document.querySelector('#app')

    const addAgenda = document.querySelector('#add-agenda')
    const formClose = document.querySelector('#form-close')

    const formColor = document.querySelector('#form-color')
    
    const tipe = document.getElementById("dropdown-tipe")
    const subjek = document.getElementById("dropdown-subjek")
    const formDetail = document.getElementById("form-detail")
    

    // JADWAL\
    



    const toggleModal = () => {
        formAgenda.classList.toggle('translate-y-full')
        formAgenda.classList.toggle('scale-110')
        app.classList.toggle('brightness-50')
         
    }

    const changeFormColor = () => {
        var tipeValue = document.getElementById("dropdown-tipe").value
        console.log(tipeValue)
        if(tipeValue == 1){
            formColor.classList.add('from-tugas-primary')
            formColor.classList.add('to-tugas-secondary')
            formColor.classList.remove('from-ujian-primary')
            formColor.classList.remove('to-ujian-secondary')
            formColor.classList.remove('from-reminder-primary')
            formColor.classList.remove('to-reminder-secondary')

            subjek.disabled = false;
            subjek.value = 1;

            formDetail.disabled = false;
            formDetail.classList.remove('opacity-40')

        } else if(tipeValue == 2){
            formColor.classList.remove('from-tugas-primary')
            formColor.classList.remove('to-tugas-secondary')
            formColor.classList.add('from-ujian-primary')
            formColor.classList.add('to-ujian-secondary')
            formColor.classList.remove('from-reminder-primary')
            formColor.classList.remove('to-reminder-secondary')

            formDetail.disabled = false;
            subjek.disabled = false;
            subjek.value = 1;

            formDetail.classList.remove('opacity-40')
            
            
        } else if(tipeValue == 3){
            formColor.classList.remove('from-tugas-primary')
            formColor.classList.remove('to-tugas-secondary')
            formColor.classList.remove('from-ujian-primary')
            formColor.classList.remove('to-ujian-secondary')
            formColor.classList.add('from-reminder-primary')
            formColor.classList.add('to-reminder-secondary')

            formDetail.disabled = true;
            subjek.disabled = true;
            subjek.value = null;
            formDetail.value = null;
            formDetail.classList.add('opacity-40')
        }
    }

    addAgenda.addEventListener('click', toggleModal)

    formClose.addEventListener('click', toggleModal)

    tipe.addEventListener('change', changeFormColor)

  


})

function setJadwal(){
    const formAgenda = document.querySelector('#form-agenda')
    const app = document.querySelector('#app')


    formAgenda.classList.add('translate-y-full')
    formAgenda.classList.add('scale-110')
    app.classList.add('brightness-50')
    
}

function closeJadwal(){
    const formAgenda = document.querySelector('#form-agenda')
    const app = document.querySelector('#app')


    formAgenda.classList.remove('translate-y-full')
    formAgenda.classList.remove('scale-110')
    app.classList.remove('brightness-50')
    
}