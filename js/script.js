(function() {
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

}());
