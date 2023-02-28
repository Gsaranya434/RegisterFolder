

function loginFunc(){    
    var email = document.getElementById('logemail').value;
    var password = document.getElementById('logpassword').value;
    if(email && password){        
        window.localStorage.setItem("email",email);
        window.localStorage.setItem("password",password);

        var response = $.ajax({
            url:"logindbConnect.php",
            type: "POST",
            dataType: 'JSON',
            data: {'email':email,'password':password},
            success:function(response){          
                console.log(response.length);
            }
        });
        console.log(response);
        var emailData = sessionStorage.getItem("email");
        var pasData = sessionStorage.getItem("password");
        if(emailData==email && pasData==password){            
            document.getElementById('mainDiv').style.display="none";
            // divCon.style.display="none";
            var res = response['responseJSON'];
            console.log(res);
            // if(res){
            //     var tr_str = "<table><thead><tbody><tr>" +
            //             "<td align='center'>" + res + "</td>" +
            //             "<td align='center'>" + res + "</td>" +
            //             "<td align='center'>" + res + "</td>" +
            //             "<td align='center'>" + res + "</td>" +
            //             "<td align='center'>" + res + "</td>" +
            //             "<td align='center'>" + res + "</td>" +
            //             "</tr></tbody></thead></table>";
    
            //         $("#showProfile").append(tr_str);
            // }
        }
    }else{
        return alert("kindly fill email and password the details");
    }

    // debugger
    // sessionStorage.setItem("lastname", "Smith");
    // sessionStorage.getItem("lastname");
}