const form = document.querySelector('form');
statusTxt = form.querySelector('.button-area span');

form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from submitting
    statusTxt.style.display = 'block';

   
    let formData = new FormData(form); //creating new FormData obj. This obj is used to send form data
    xhr.send(formData);//sending form data to server
}
