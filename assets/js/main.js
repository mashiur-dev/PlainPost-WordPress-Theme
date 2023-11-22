/**
 * Add Author photo in author page
 */

let page = document.querySelector("body");

if (page.classList.contains('author')) {
    let authorInfo = document.getElementsByClassName("author-info");
    
    authorInfo[0].innerHTML =
      '<img alt="' +
      plainpost_author_info.authorName +
      '" class="author_photo" src="' +
      plainpost_author_info.authorPhoto +
      '" />' +
      authorInfo[0].innerHTML;
}
