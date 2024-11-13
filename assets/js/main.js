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
    let authorInfo = document.getElementsByClassName("author-info")[0];

    // Create the img element separately to avoid using innerHTML
    const authorPhoto = document.createElement("img");
  
    authorPhoto.alt = plainpost_author_info.authorName;
    authorPhoto.className = "author_photo";
    authorPhoto.src = plainpost_author_info.authorPhoto;

    // Append the img element as the first child of the authorInfo container
    authorInfo.prepend(authorPhoto);
}

