const targetDiv = document.getElementById('allDives')


fetch('/api/dives')
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
        if (search.length > 1) {
            const divs = document.querySelectorAll('#card-profile')
            divs.forEach(div => {
                div.classList.remove('animate__fadeInUp')
            });
        }
    })

