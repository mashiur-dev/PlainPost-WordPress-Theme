/**
 * Common Variables
 */
let page = document.querySelector("body");


/**
 * Add Author photo in author page
 */

if (page.classList.contains("single-post")) {
  let postURL = plainpost_single_post_info.postUrl,
    postShareFacebook = document
      .getElementsByClassName("plainpost-share-to-facebook")[0]
      .getElementsByTagName("a")[0],
    postShareTwitter = document
      .getElementsByClassName("plainpost-share-to-twitter")[0]
      .getElementsByTagName("a")[0],
    postSentEmail = document.getElementsByClassName("plainpost-sent-to-email")[0].getElementsByTagName("a")[0];
    postCopyURL = document.getElementsByClassName("plainpost-copy-link")[0];

  //share on facebook
  postShareFacebook.href =
    "https://www.facebook.com/sharer/sharer.php?u=" + postURL;

  //share on Twitter
  postShareTwitter.href = "https://www.twitter.com/share?url=" + postURL;

  //share on email
  postSentEmail.href = "mailto:" + postURL;

  //Copy URL
  postCopyURL.addEventListener("click", (e) => {
    e.preventDefault();
    navigator.clipboard.writeText(postURL);
  });
}


/**
 * Add Author photo in author page
 */

if (page.classList.contains("author")) {
  let authorInfo = document.getElementsByClassName("author-info");

  authorInfo[0].innerHTML =
    '<img alt="' +
    plainpost_author_info.authorName +
    '" class="author_photo" src="' +
    plainpost_author_info.authorPhoto +
    '" />' +
    authorInfo[0].innerHTML;
}
