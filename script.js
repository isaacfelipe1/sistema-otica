function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-bs-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
  
    document.documentElement.setAttribute('data-bs-theme', newTheme);
  }
  
  document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
  
