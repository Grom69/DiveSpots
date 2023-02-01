const targetDiv = document.getElementById('allDives')

let search = 'empty';

Api(search)

function Api(search) {
    fetch('/api/dives/' + search)
        .then(response => response.json())
        .then(data => {
            targetDiv.innerHTML = ''
            if (data == '') {
                const p = document.createElement('p')
                targetDiv.append(p)
                p.innerHTML = 'Aucun résultat'
                p.className = 'text-center text-white m-5 fs-1'

            } else {
                for (const dive of data) {
                    const htmlCard = dive.html.content
                    targetDiv.innerHTML += htmlCard
                }
            }
        })
}

document.getElementById('country').addEventListener('input', function (e) {
    let search = e.target.value;
    Api(search)
});



