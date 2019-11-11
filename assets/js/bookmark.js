function getBookmarks() {
    fetch('/aura1/api/bookmarks', {credentials:'include'})
        .then(result => result.json())
        .then(data => {
           displayBookmarks(data.bookmarks);
        });

}

function addBookmark(productId) {
    fetch('/aura1/api/bookmarks/add/' + productId, {credentials: 'include'})
        .then(result => result.json())
        .then(data => {
            if (data.error === 0){
                getBookmarks();
            }

        });
}
    function clearBookmark(productId) {
        fetch('/aura1/api/bookmarks/clear' , {credentials:'include'})
            .then(result => result.json())
            .then(data => {
                if (data.error === 0){
                    getBookmarks();
                }

            });


    }
    function displayBookmarks(bookmarks) {
        const bookmarkDiv = document.querySelector('.bookmarks');
        bookmarkDiv.innerHTML = '';

        if (bookmarks.length === 0) {
            bookmarkDiv.innerHTML = 'No bookmarks';
            return;
        }

        for (bookmark of bookmarks) {
            const bookmarkLink = document.createElement('a');
            bookmarkLink.style.display = 'block';
            bookmarkLink.innerHTML =bookmark.pol  + ". " + bookmark.naziv;
            bookmarkLink.href = '/aura1/product/' + bookmark.proizvod_id;

            bookmarkDiv.appendChild(bookmarkLink);
        }

    }
        addEventListener('load', getBookmarks);