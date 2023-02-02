/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
require("bootstrap")

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';
import 'animate.css';
import 'bootstrap-icons/font/bootstrap-icons.css';

// start the Stimulus application
import './bootstrap';

document.getElementById('bookmarks').addEventListener('click', addToBookmarks);

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
            });
    } catch (err) {
        console.error(err);
    }

    return false
}
