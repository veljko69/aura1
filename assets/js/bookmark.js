function getBookmarks() {
    fetch('http://localhost/aura1/api/bookmarks', {credentials:'include'})
        .then(result => result.json())
        .then(data => {

          displayBookmarks(data.bookmarks);
        });

     }

function addBookmark(productId) {
    fetch('http://localhost/aura1/api/bookmarks/add/' + productId, {credentials: 'include'})
        .then(result => result.json())
        .then(data => {
            if (data.error === 0) {
                getBookmarks();
            }

        });

     }
     function clearBookmark(){
        fetch('http://localhost/aura1/api/bookmarks/clear/', {credentials: 'include'})
        // fetch('http://localhost/aura1/api/bookmarks/clear/'+ bookmark.proizvod_id, {credentials: 'include'})
            .then(result => result.json())
            .then(data => {
                if (data.error === 0) {
                    getBookmarks();
                }

            });

    }

    function displayBookmarks(bookmarks) {
        const bookmarkDiv = document.querySelector('.korpa');
        // const cijenaDiv = document.querySelector('.cijena');
               bookmarkDiv.innerHTML = '';
               // cijenaDiv.innerHTML = '';

        if(bookmarks.length === 0) {
            bookmarkDiv.innerHTML = 'No bookmarks';
            return;
        }


        for (bookmark of bookmarks) {
            const proizvod = document.createElement('div');

            // proizvod.style.fontSize='18px';
            // proizvod.style.fontWeight = 'light';
            // // proizvod.style.margin = '20px';
            // proizvod.style.border = '1px solid silver';
            proizvod.className = 'font-weight-light text-decoration-none border-bottom';

            const korpaIme = document.createElement('a');
            const korpaCijena = document.createElement('span');
            const korpaSlika = document.createElement('img');
            const korpaIzbrisi = document.createElement('button');


            korpaSlika.src ="http://localhost/aura1/assets/img/"+ bookmark.slika+ ".jpg";
            korpaSlika.style.width = '150px';
            korpaSlika.style.margin = '7px';
            korpaSlika.className = 'col-4'

            korpaIme.innerHTML =bookmark.pol + "." + bookmark.naziv;
            korpaIme.style.textTransform='uppercase';
            korpaIme.style.margin = '10px';
            korpaIme.href = 'http://localhost/aura1/product/' + bookmark.proizvod_id;
            korpaIme.className = 'col-4';

            korpaCijena.innerHTML = "CIJENA"+bookmark.cijena;
            // korpaCijena.style.margin = '100px';
            korpaCijena.className= 'col-4';

            korpaIzbrisi.innerHTML = '<div ><a href="" onclick="clearBookmark()"> Izbrisi</a></div>';
            korpaIzbrisi.className= 'btn btn-outline-secondary btn-sm';
            bookmarkDiv.appendChild(proizvod);
            proizvod.appendChild(korpaSlika);

            proizvod.appendChild(korpaIme);
            proizvod.appendChild(korpaCijena);
            proizvod.appendChild(korpaIzbrisi);



        }

    }

    addEventListener('load', getBookmarks);

