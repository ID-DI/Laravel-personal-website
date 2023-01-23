let page = window.location.pathname.split('/')[1];
if(page =='')
{
    document.getElementById('home').classList.add('active');
    document.getElementById('about').classList.remove('active');
    document.getElementById('post').classList.remove('active');
    document.getElementById('contact').classList.remove('active');
}
else if(page =='about')
{
    document.getElementById('home').classList.remove('active');
    document.getElementById('about').classList.add('active');
    document.getElementById('post').classList.remove('active');
    document.getElementById('contact').classList.remove('active');
}
else if(page =='post')
{
    document.getElementById('home').classList.remove('active');
    document.getElementById('about').classList.remove('active');
    document.getElementById('post').classList.add('active');
    document.getElementById('contact').classList.remove('active');
}
else if(page =='contact')
{
    document.getElementById('home').classList.remove('active');
    document.getElementById('about').classList.remove('active');
    document.getElementById('post').classList.remove('active');
    document.getElementById('contact').classList.add('active');
}