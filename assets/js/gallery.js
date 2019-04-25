/* ekko-lightbox */
$(document).on('click', '[data-toggle="lightbox"]', function (event) {
 event.preventDefault();
 $(this).ekkoLightbox();
});

/* scrollspy */
$('body').scrollspy({ target: '#sidebar', offset: 400});