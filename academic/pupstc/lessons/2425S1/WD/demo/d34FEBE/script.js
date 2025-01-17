var cardContainer = document.getElementById("cardContainer");

const loadUsers = async () => {
  const response = await fetch('http://localhost/Personal/cjdeclaro.github.io/academic/pupstc/lessons/2425S1/WD/demo/d32BE_API/users.php');
  const users = await response.json(); //extract JSON from the http response

  for (var i = 0; i <= users.length; i++) {
    cardContainer.innerHTML += `
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card rounded my-3 shadow p-3">
        ` + users[i].firstName + `
      </div>
    </div>
   `;
  }
}

loadUsers();
