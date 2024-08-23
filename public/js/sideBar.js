function showSection(sectionId) {
    // Oculta todas as seções
    var sections = document.querySelectorAll('.content-section');
    sections.forEach(function(section) {
        section.classList.remove('active');
    });

    // Mostra a seção clicada
    var activeSection = document.getElementById(sectionId);
    activeSection.classList.add('active');

    // Remove a classe 'active' de todos os links
    var navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(function(link) {
        link.classList.remove('active');
    });

    // Adiciona a classe 'active' ao link clicado
    var clickedLink = document.querySelector(`a[onclick="showSection('${sectionId}')"]`);
    clickedLink.classList.add('active');
}

// Mostra a primeira seção por padrão
document.addEventListener('DOMContentLoaded', function() {
    showSection('home');
});

// Adiciona o efeito de hover para abrir e fechar o sidebar
document.getElementById('sidebarMenu').addEventListener('mouseenter', function() {
    this.classList.add('open');
});

document.getElementById('sidebarMenu').addEventListener('mouseleave', function() {
    this.classList.remove('open');
});