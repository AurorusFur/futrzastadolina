let menu = 1;

function hidemenu()
{
    document.getElementById("mobilemenu").style.display = "none";
}

function showmenu()
{
    document.getElementById("mobilemenu").style.display = "block";
}

function togglemenu()
{
    if(menu == 0)
    {
        hidemenu();
        menu = 1;
    }
    else if(menu == 1)
    {
        showmenu();
        menu = 0;
    }
}