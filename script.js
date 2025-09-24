const form = document.getElementById('guestbook-form');

form.addEventListener('submit', function(event) {

    const nameValue = document.querySelector('input[name="name"]').value.trim();
    const messageValue = document.querySelector('textarea[name="message"]').value.trim();

    if (nameValue == "" || messageValue == "") {
        event.preventDefault();
        alert("Please fill in both fields.");
    }
});