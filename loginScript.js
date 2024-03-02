document.getElementById('login').addEventListener('click',function(){
    
    const userFild = document.getElementById('username');
    const getuser = userFild.value;
    
    const passFild = document.getElementById('password');
    const getpass = passFild.value;
    // console.log(getpass);

    // if(getuser==window.username && getpass==window.pass){
    //     window.location.href='home.html';/// connect another html or file
    // }else{
    //     alert('Try Again Sir');
        
    // }
    window.location.href='home.html';
});