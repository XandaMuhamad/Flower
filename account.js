function validate()
{
    if(document.streg.passwords.value=="")
    {
        alert("please enter your password")
        document.streg.passwords.focus();
        return false;
    }
    

    if(document.streg.emails.value=="")
    {
        var c;
        c=confirm("submit form without email !!!!");
        if(c==true)
        {
            document.onsubmit();
        }
        else
        {
            alert(" please try again")
        }
        return false
    }
}

 


