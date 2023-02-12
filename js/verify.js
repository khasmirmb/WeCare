// Select the otp_field
const otp = document.querySelectorAll('.otp_field');

// Focus on first input
otp[0].focus();

// For each number inputed automatically move to next and same for backspacing
otp.forEach((field, index) =>{

    field.addEventListener('keydown', (e) => {
        if(e.key >= 0 && e.key <=9){
            otp[index].value = "";
            setTimeout(() =>{
                otp[index+1].focus()
            }, 4);
        }
        else if(e.key === 'Backspace'){
            setTimeout(() =>{
                otp[index-1].focus()
            }, 4);
        }
    });
});