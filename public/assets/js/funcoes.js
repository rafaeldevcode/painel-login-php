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