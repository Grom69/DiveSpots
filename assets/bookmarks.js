const targetDiv = document.getElementById('allBookmarks')

Api()

function Api() {
    fetch('/api/bookmarks')
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
    Api()
});



