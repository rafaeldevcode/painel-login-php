function exibirSenha(){
    document.getElementById('btn-eyes').addEventListener('click', ()=>{
        let pass = document.getElementById('password');
        let eyes = document.getElementById('eyes');
        
        if(pass.type === 'password'){
            pass.type = 'text';
            eyes.classList.remove('fa-eye');
            eyes.classList.add('fa-eye-slash');
        }else{
            pass.type = 'password';
            eyes.classList.remove('fa-eye-slash');
            eyes.classList.add('fa-eye');
        }
    })
}
exibirSenha();

let fields = document.querySelectorAll('[required]');

function validateField(field){
    function verifyError(){
        let foundError = false;

        for(let error in field.validity){
            if(field.validity[error] && !field.validity.valid){
                foundError = error;
            }
        }

        return foundError;
    }

    function setCustomMessage(message){
        let spanError = field.parentNode.querySelector('span.error');
        let avatar = document.getElementById('avatar');

        if(message){
            if(avatar){
                avatar.classList.add('shake');
            };
            spanError.classList.add('danger');
            spanError.innerHTML = message;
        }else{
            if(avatar){
                avatar.classList.remove('shake');
            }
            spanError.classList.remove('danger');
            spanError.innerHTML = '';
        }
    }

    function customMessage(typeError){
        const messages = {
            text: {
                valueMissing: 'Por favor, preencha este campo!'
            },
            email: {
                valueMissing: 'Por favor, preencha este campo!',
                typeMismatch: 'Por favor, preencha com um email válido!'
            },
            password: {
                valueMissing: 'Por favor, preencha este campo!'
            }
        }

        return messages[field.type][typeError];
    }

    return function(){
        let error = verifyError();

        if(error){
            let message = customMessage(error);

            setCustomMessage(message);
        }else{
            setCustomMessage();
        }
    };
}

function customValidation(event){
    let field = event.target;
    let validation = validateField(field);

    validation();
}

for(let field of fields){
    field.addEventListener('invalid', event => {
        // Eliminar bubble
        event.preventDefault();
        customValidation(event)
    });
    field.addEventListener('blur', customValidation);
}

// document.querySelector('form').addEventListener('submit', (event)=>{
//     let avatar = document.getElementById('avatar');

//     if(avatar){
//         avatar.classList.remove('fa-user-lock');
//         avatar.classList.add('fa-user-unlock')
//     }

//     event.preventDefault();
// })