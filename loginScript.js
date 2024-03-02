document.getElementById('login').addEventListener('click',function(){
    
    const emailFild = document.getElementById('username');
    const getemail = emailFild.value;
    
    const passFild = document.getElementById('password');
    const getpass = passFild.value;
    // console.log(getpass);

    // if(getemail=='arefinsaim@gmail.com' && getpass=='arefin'){
    //     window.location.href='home.html';/// connect another html or file
    // }else{
    //     alert('Try Again Sir');
    // }
    window.location.href='home.html';
});