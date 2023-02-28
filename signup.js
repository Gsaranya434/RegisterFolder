
function signupFunc(){    
    var dict = {
        "user":document.getElementById('username').value,
        "email":document.getElementById('email').value,
        "password":document.getElementById('password').value,
        "age":document.getElementById('age').value,
        "location":document.getElementById('location').value,
        "number":document.getElementById('number').value
    };

    var response = $.ajax({
        url:"signupConnect.php",
        type: "POST",
        dataType: 'json',
        data: dict,
        success:function(res){          
            console.log(res);
        }
    });
    var pas = document.getElementById('password').value;
    var ema = document.getElementById('email').value;
    if(ema&&pas){
        sessionStorage.setItem("email",ema);
        sessionStorage.setItem("password",pas);
        // window.localStorage.setItem("email",ema);
        // window.localStorage.setItem("password",pas);
        alert('You are registered successfully.');
    }
    
}