// Função para alternar o tema
function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-bs-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
  
    // Atualiza o atributo data-bs-theme do elemento raiz (html) para o novo tema
    document.documentElement.setAttribute('data-bs-theme', newTheme);
  }
  
  // Adiciona um ouvinte de evento para o botão de alternar tema
  document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
  