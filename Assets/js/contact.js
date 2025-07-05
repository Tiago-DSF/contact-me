// Preenche os links de contato dinamicamente usando a API PHP
fetch('Assets/js/contact.php')
  .then(res => res.json())
  .then(data => {
    document.getElementById('whatsapp-link').href = data.whatsapp;
    document.getElementById('whatsapp-link').target = '_blank';
    document.getElementById('email-link').href = 'mailto:' + data.email;
    document.getElementById('instagram-link').href = data.instagram;
    document.getElementById('instagram-link').target = '_blank';
    document.getElementById('linkedin-link').href = data.linkedin;
    document.getElementById('linkedin-link').target = '_blank';
  });
