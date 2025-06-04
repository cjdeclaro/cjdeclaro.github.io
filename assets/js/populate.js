function renderCards(containerId, data) {
  const container = document.getElementById(containerId);

  if(!container) return;
  if(!data) return;

  data.forEach(item => {
    const col = document.createElement("div");
    col.className = "col-12 col-lg-6 my-2";

    let buttonIcon = item.buttonIcon ? item.buttonIcon : "globe";
    let buttonName = item.buttonName ? item.buttonName : "View";

    col.innerHTML = `
        <div class="card about-card rounded-4 overflow-hidden">
          <div class="card-image overflow-hidden position-relative">
            <img src="${item.image}" class="card-img-top position-absolute top-50 start-50 translate-middle">
          </div>
          <div class="card-body">
            <h5 class="card-title">${item.title}</h5>
            <p class="card-text">${item.description}</p>
            ${item.viewLink ? `<a target="_blank" href="${item.viewLink}" class="btn btn-secondary btn-sm"><i class="mx-2 fa fa-${buttonIcon}"></i>${buttonName}</a>` : ''}
            ${item.docLink ? `<a target="_blank" href="${item.docLink}" class="btn btn-secondary btn-sm"><i class="mx-2 fa fa-github"></i>Documentation</a>` : ''}
          </div>
        </div>
      `;

    container.appendChild(col);
  });
}
