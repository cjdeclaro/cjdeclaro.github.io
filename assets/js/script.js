function loadData(content = 'about') {
  const maincontent = document.getElementById('maincontent');
  fetch(`content/${content}.html`)
    .then(response => response.text())
    .then(data => {
      maincontent.innerHTML = data;
    })
    .catch(error => console.error('Error fetching file:', error));
}
