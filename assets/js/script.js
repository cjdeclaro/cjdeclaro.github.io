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

function loadData(content = 'about') {
  const maincontent = document.getElementById('maincontent');
  fetch(`content/${content}.html`)
    .then(response => response.text())
    .then(data => {
      maincontent.innerHTML = data;
    })
    .catch(error => console.error('Error fetching file:', error));

  clearNavButton();
  activateNavButton(content);
}
