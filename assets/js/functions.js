function register()
{
    var f_name = document.getElementById("tbIme").value;
    var l_name = document.getElementById("tbPrezime").value;
    var email = document.getElementById("tbEmail").value;
    var password = document.getElementById("tbPassword").value;

    var f_name_message = "";
    var l_name_message = "";
    var email_message = "";
    var password_message = "";

    var f_name_error = false;
    var l_name_error = false;
    var email_error = false;
    var password_error = false;

    if(f_name == "")
    {
        f_name_message = "Ime je obavezno!";
    }
    else
    {
        var regex = /^[a-zA-Z ]*$/;

        if(regex.test(f_name) == false)
        {
            f_name_message = "Samo su slova i razmaci dozvoljeni!";
        }
        else
        {
            f_name_message = "";
            f_name_error = true;
        }
    }

    if(l_name == "")
    {
        l_name_message = "Prezime je obavezno!";
    }
    else
    {
        var regex = /^[a-zA-Z ]*$/;

        if(regex.test(l_name) == false)
        {
            l_name_message = "Samo su slova i razmaci dozvoljeni!";
        }
        else
        {
            l_name_message = "";
            l_name_error = true;
        }
    }

    if(email == "")
    {
        email_message = "Email je obavezan!";
    }
    else
    {
        var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(regex.test(email) == false)
        {
            email_message = "Neispravan email format";
        }
        else
        {
            email_message = "";
            email_error = true;
        }
    }

    if(password == "")
    {
        password_message = "Password je obavezan!";
    }
    else
    {
        if(password.length <= 4)
        {
            password_message = "Password mora imati najmanje 5 karaktera!";
        }
        else
        {
            var numbers = [1,2,3,4,5,6,7,8,9];
            var counter_numbers = 0;

            for(var i=0; i<numbers.length; i++)
            {
                var number = password.search(numbers[i]);
                
                if(number == -1)
                {
                    counter_numbers += 1;
                }
                else
                {
                    counter_numbers -= 1;
                }

                if(counter_numbers == 9)
                {
                    password_message = "Password mora sadržati makar jedan broj bez nule!";
                }
                else
                {
                    password_message = "";
                    password_error = true;
                }
            }            
        }
    }

    document.getElementById("fname-error").innerText = f_name_message;
    document.getElementById("lname-error").innerText = l_name_message;
    document.getElementById("email-error").innerText = email_message;
    document.getElementById("password-error").innerText = password_message;

    if(f_name_error == true && l_name_error == true && email_error == true && password_error)
    {
        document.getElementById("message-info").innerText = "";
        document.getElementById("message-info").style.color = "green";

        var form_data = new FormData();
        form_data.append("first-name", f_name);
        form_data.append("last-name", l_name);
        form_data.append("email", email);
        form_data.append("password", password);

        var ajax = new XMLHttpRequest();

        ajax.onload = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                var result = this.responseText;
                var split_result = result.split("~");
                document.getElementById("fname-error").innerText = split_result[0];
                document.getElementById("lname-error").innerText = split_result[1];
                document.getElementById("email-error").innerText = split_result[2];
                document.getElementById("password-error").innerText = split_result[3];
                document.getElementById("message-info").innerText = split_result[4];
                var bit = split_result[5];

                if(bit == 1)
                {
                    setTimeout(redirect, 2000);
                }

                function redirect()
                {
                    window.location.replace("http://192.168.0.18:8080/painball-sremcica/index.php");
                }               
            }
            else if(this.status == 500)
            {

            }
        }
        ajax.open("POST", "method/provera-forme-2.php", true);
        ajax.send(form_data);
    }
    else
    {
        document.getElementById("message-info").innerText = "Jedno ili više polja imaju grešku. Molimo Vas proverite i pokušajte ponovo.";
        document.getElementById("message-info").style.color = "red";
    }
}

function login()
{
    var email = document.getElementById("tbEmail").value;
    var password = document.getElementById("tbPassword").value;

    var email_message = "";
    var password_message = "";

    var email_error = false;
    var password_error = false;

    if(email == "")
    {
        email_message = "Email je obavezan!";
    }
    else
    {
        var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(regex.test(email) == false)
        {
            email_message = "Neispravan email format";
        }
        else
        {
            email_message = "";
            email_error = true;
        }
    }

    if(password == "")
    {
        password_message = "Password je obavezan!";
    }
    else
    {
        if(password.length <= 4)
        {
            password_message = "Password mora imati najmanje 5 karaktera!";
        }
        else
        {
            var numbers = [1,2,3,4,5,6,7,8,9];
            var counter_numbers = 0;

            for(var i=0; i<numbers.length; i++)
            {
                var number = password.search(numbers[i]);
                
                if(number == -1)
                {
                    counter_numbers += 1;
                }
                else
                {
                    counter_numbers -= 1;
                }

                if(counter_numbers == 9)
                {
                    password_message = "Password mora sadržati makar jedan broj bez nule!";
                }
                else
                {
                    password_message = "";
                    password_error = true;
                }
            }            
        }
    }

    document.getElementById("email-error").innerText = email_message;
    document.getElementById("password-error").innerText = password_message;

    if(email_error == true && password_error)
    {
        document.getElementById("message-info").innerText = "";
        document.getElementById("message-info").style.color = "green";

        var form_data = new FormData();
        form_data.append("email", email);
        form_data.append("password", password);

        var ajax = new XMLHttpRequest();

        ajax.onload = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                var result = this.responseText;
                var split_result = result.split("~");
                document.getElementById("email-error").innerText = split_result[0];
                document.getElementById("password-error").innerText = split_result[1];
                document.getElementById("message-info").innerText = split_result[2];
                var bit = split_result[3];

                if(bit == 1)
                {
                    setTimeout(redirect, 2000);
                }

                function redirect()
                {
                    window.location.replace("http://192.168.0.18:8080/painball-sremcica/index.php");
                }               
            }
            else if(this.status == 500)
            {

            }
        }
        ajax.open("POST", "method/provera-forme-za-prijavu.php", true);
        ajax.send(form_data);
    }
    else
    {
        document.getElementById("message-info").innerText = "Jedno ili više polja imaju grešku. Molimo Vas proverite i pokušajte ponovo.";
        document.getElementById("message-info").style.color = "red";
    }
}





function contact(){
    var f_name = document.getElementById("tbIme").value;
    var l_name = document.getElementById("tbPrezime").value;
    var email = document.getElementById("tbEmail").value;

    var f_name_message = "";
    var l_name_message = "";
    var email_message = "";

    var f_name_error = false;
    var l_name_error = false;
    var email_error = false;

    if(f_name == "")
    {
        f_name_message = "Ime je obavezno!";
    }
    else
    {
        var regex = /^[a-zA-Z ]*$/;

        if(regex.test(f_name) == false)
        {
            f_name_message = "Samo su slova i razmaci dozvoljeni!";
        }
        else
        {
            f_name_message = "";
            f_name_error = true;
        }
    }

    if(l_name == "")
    {
        l_name_message = "Prezime je obavezno!";
    }
    else
    {
        var regex = /^[a-zA-Z ]*$/;

        if(regex.test(l_name) == false)
        {
            l_name_message = "Samo su slova i razmaci dozvoljeni!";
        }
        else
        {
            l_name_message = "";
            l_name_error = true;
        }
    }

    if(email == "")
    {
        email_message = "Email je obavezan!";
    }
    else
    {
        var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(regex.test(email) == false)
        {
            email_message = "Neispravan email format";
        }
        else
        {
            email_message = "";
            email_error = true;
        }
    }

    document.getElementById("fname-error").innerText = f_name_message;
    document.getElementById("lname-error").innerText = l_name_message;
    document.getElementById("email-error").innerText = email_message;

    if(f_name_error == true && l_name_error == true && email_error == true)
    {
        document.getElementById("message-info").innerText = "";
        document.getElementById("message-info").style.color = "green";

        var form_data = new FormData();
        form_data.append("first-name", f_name);
        form_data.append("last-name", l_name);
        form_data.append("email", email);

        var ajax = new XMLHttpRequest();

        ajax.onload = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                var result = this.responseText;
                var split_result = result.split("~");
                document.getElementById("fname-error").innerText = split_result[0];
                document.getElementById("lname-error").innerText = split_result[1];
                document.getElementById("email-error").innerText = split_result[2];
                document.getElementById("message-info").innerText = split_result[3];
                var bit = split_result[5];

                if(bit == 1)
                {
                    setTimeout(redirect, 2000);
                }

                function redirect()
                {
                    window.location.replace("http://192.168.0.18:8080/painball-sremcica/index.php");
                }               
            }
            else if(this.status == 500)
            {

            }
        }
        ajax.open("POST", "method/provera-forme-kontakt.php", true);
        ajax.send(form_data);
    }
    else
    {
        document.getElementById("message-info").innerText = "Jedno ili više polja imaju grešku. Molimo Vas proverite i pokušajte ponovo.";
        document.getElementById("message-info").style.color = "red";
    }
}
