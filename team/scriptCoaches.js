let select = document.querySelector("#gym");
let cards = document.querySelector(".cardTeam");

async function f(value) {
    console.log(value);

    let response = await fetch(`query.php?id=${value}`);
    let data = await response.json();

    console.log(`query.php?id=${value}`);
    console.log(data);

    let text = ``;
    data.forEach(item => {
        text += `
                    <div class="card mb-4 shadow-sm" style="min-width: 320px; padding: 1%">
                        <div class="row g-0">
                            <div class="card-header">
                              <img src="/files/image/team/${item.photo}" class="pic" draggable="false">
                            </div>
                        </div>

                        <div class="card-body">
                           <h2>${item.name}</h2>
                           <hr>
                           <h5>${item.title}</h5>
                           <br>
                           <p>${item.add_info}</p>
                        </div>
                    </div>`
    })
    if (value == '') {
        text = `<img src="/files/image/muscular-manW.png" id="img-filter">`;
    }

    cards.innerHTML = text;
}

select.addEventListener('change', async function () {
    await f(select.value);
});

 