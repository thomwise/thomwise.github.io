(function() {
// SLIDE EFFECT
function debounce(func, wait = 20, immediate = true) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  }

const sliderImages = document.querySelectorAll('.slide-in');
  console.log(sliderImages);
function checkSlide(e) {
sliderImages.forEach(sliderImage => {
  // half way through the image
  const slideInAt = (window.scrollY + window.innerHeight) - sliderImage.style.height;
  // bottom of the image
  const imageBottom = sliderImage.offsetTop + sliderImage.style.height;
  const isHalfShown = slideInAt > sliderImage.offsetTop;
  const isNotScrolledPast = window.scrollY < imageBottom;

  console.log(slideInAt);
  console.log(isHalfShown);
  console.log(isNotScrolledPast);

  if (isHalfShown && isNotScrolledPast) {
    sliderImage.classList.remove('active2');
  } else {
    sliderImage.classList.add('active2');
  }
});
}


window.addEventListener('scroll', debounce(checkSlide));


// FORM SECTION
  var myForm = document.getElementById('emailForm'),
      submitButton = document.querySelector('form button'),

      nameInput = document.getElementById('name'),
      emailInput = document.getElementById('email'),
      phoneInput = document.getElementById('phone'),
      commentInput = document.getElementById('comment'),
      maxCharacters = document.getElementById('maxCharacters');

commentInput.addEventListener('keydown', function(e) {
  maxCharacters.textContent = "Charcters Remaining: " + (150 - commentInput.value.length);
});

nameInput.addEventListener('blur', function(e) {
  var myName = nameInput.value,
      validName = /^[0-9a-zA-Z\s]+$/.test(myName);

      if (!validName) {
        nameInput.classList.add('danger');
        submitButton.disabled = true;
      } else {
        nameInput.classList.remove('danger');
        submitButton.disabled = false;
      }
});

emailInput.addEventListener('blur', function(e) {
  var myEmail = emailInput.value,
      validEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(myEmail);

  if (!validEmail) {
    emailInput.classList.add('danger');
  } else {
    emailInput.classList.remove('danger');
  }
});

myForm.addEventListener('submit', function(e) {
  document.getElementById('comment').value.trim();
  myForm.setAttribute('action', 'https://formspree.io/thomas.ja.wise@gmail.com');
});

}());
