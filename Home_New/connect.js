window.onload = function() {
    apiFetch()
  }
  
  $("button").click(function() {
    var fired_button = $(this).val();
    apiFetch(fired_button);
  });
  
  var apiFetch = function(fired_button) {
    var baseUrl = 'https://pixabay.com/api/';
    var key = '2022970-be88b0f8e25d6d2c5d51db517';
    var orientation = "horizontal";
    var min_height = 500;
    var colors = "gray";
    var per_page = 9;
    var category = fired_button;
    var q = "";
    var finalURL = baseUrl + "?key=" + key + "&orientation=" + orientation + "&min_height=" + min_height + "&colors=" + colors + "&per_page=" + per_page + "&q=" + q + "&category=" + category;
  
    fetch(finalURL)
      .then((res) => res.json())
      .then((data) => {
        let output = '<h5 hidden>Images</h5>'
        data.hits.forEach(function(image){
          output += `
            <p class="item">
              <a class="image-link" href="${image.largeImageURL}">
                <img src="${image.largeImageURL}" alt="${image.tags}" >
              </a>    
            </p>
          `;
        });
        document.getElementById('output').innerHTML = output;
        // Magnific Popup Initialization + Zoom in effect
  
            $('.image-link').magnificPopup({
              type:'image', mainClass: 'mfp-with-zoom',
              zoom: {enabled: true, duration: 300, easing: 'ease-in-out', opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
              }}
            });
  
        // Finishs of Magnific Popup
      })
  }