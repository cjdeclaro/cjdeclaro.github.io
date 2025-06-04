function clearNavButton() {
  const navbuttons = document.getElementsByClassName('navbutton');
  Array.from(navbuttons).forEach(navbutton => {
    navbutton.style.fontWeight = 'normal';
    navbutton.style.textDecoration = 'unset';
  });
}

function activateNavButton(btnname) {
  const navbuttons = document.getElementsByClassName('btn-' + btnname);
  Array.from(navbuttons).forEach(navbutton => {
    navbutton.style.fontWeight = 'bold';
    navbutton.style.textDecoration = 'underline';
  });
}

function loadPage(content = 'about') {
  const maincontent = document.getElementById('maincontent');
  const loadingElement = document.getElementById('loading');

  loadingElement.classList.remove("d-none");

  fetch(`content/${content}.html`)
    .then(response => response.text())
    .then(data => {
      maincontent.innerHTML = data;
      renderCards(content + '-container', siteData[content]);
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
      loadingElement.classList.add("d-none");
    })
    .catch(error => console.error('Error fetching file:', error));

  clearNavButton();
  activateNavButton(content);
}
