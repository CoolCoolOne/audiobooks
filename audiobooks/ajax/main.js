let servResp = document.querySelector('#response');

document.forms.formSender.onsubmit = function(event){
    event.preventDefault();

    let userInput;
    userInput = document.forms.formSender.formInput.value;
    let encUserInput = encodeURIComponent(userInput);

    let req = new XMLHttpRequest();

    req.open('POST', './form.php');
    // req.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    let form_data = new FormData(document.forms.formSender);


    req.onreadystatechange = function(){
        if(req.readyState === 4 && req.status === 200){
            servResp.textContent = req.responseText;
        }
    }


    // req.send('formInput=' + encUserInput);
    req.send(form_data);
}