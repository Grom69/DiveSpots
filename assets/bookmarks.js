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
                p.innerHTML = 'Aucun favoris'
                p.className = 'text-center m-5 fs-1'

            } else {
                for (const dive of data) {
                    const htmlCard = dive.html.content
                    targetDiv.innerHTML += htmlCard
                    document.getElementById('bookmarks').addEventListener('click', addToBookmarks);
                }
            }
        })
}

document.getElementById('country').addEventListener('input', function (e) {
    Api()
});

// document.getElementById('bookmarks').addEventListener('click', addToBookmarks);

function addToBookmarks(e) {
    e.preventDefault();

    const bookmarkLink = e.currentTarget;
    const link = bookmarkLink.href;
    // Send an HTTP request with fetch to the URI defined in the href
    try {
        fetch(link)
            // Extract the JSON from the response
            .then(res => res.json())
            // Then update the icon
            .then(data => {
                const bookmarkIcon = bookmarkLink.firstElementChild;
                if (data.isInBookmarks) {
                    bookmarkIcon.classList.remove("bi-heart");
                    bookmarkIcon.classList.add("bi-heart-fill");

                } else {
                    bookmarkIcon.classList.remove("bi-heart-fill");
                    bookmarkIcon.classList.add("bi-heart");
                }
                Api()
            });
    } catch (err) {
        console.error(err);
    }

    return false
}



