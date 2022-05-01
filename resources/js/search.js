function getQuery() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    return urlParams.get('q')
}

books_search.value = getQuery();

books_search.addEventListener('keypress', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault()
        searchBooks()
    }
})

submit_search.addEventListener('click', () => {
    searchBooks()
});

function searchBooks() {
    let searchUrl = `/search?q=${books_search.value}`;
    window.location.replace(searchUrl)
}
