window.onload = init;

var currentLocation = window.location.pathname;
var links = document.querySelectorAll('.nav');

var signupForm = document.forms['signupForm'];
var signupLink = document.querySelector('#signupLink');
var signupPanel = document.querySelector('#signupPanel');

var loginForm = document.forms['loginForm'];
var loginLink = document.querySelector('#loginLink');
var loginPanel = document.querySelector('#loginPanel');

function init() {

    /**
     * set style for current nav link
     * @return {Null}
     */
    function setActiveLink() {
        links.forEach(function (link) {
            if (link.getAttribute('href') === currentLocation) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    /**
     * handle form errors
     * @param {Object} errors
     * @return {Null}
     */
    function handleFormError(errors) {
        if (!typeof errors === 'object') return false;

        for (var field in errors) {
            var ourField = document.getElementById(field);
            ourField.classList.add('invalid-input');
        }
    }

    /**
     * handle form validation
     * @param {Object} event - form submit event
     * @return {Null}
     */
    function validateForm(event) {
        event.preventDefault();

        var errorFields = {};
        var validationFields = getValidationFields(event.target.name);

        if (!validationFields) {
            // if (event.target.name === 'signupForm')return (event['target']['name']).submit();
        }


        for (var field in validationFields) {
            if (!validationFields[field]) {
                errorFields[field] = field + ' cannot be empty!';
            }
        }

        if (Object.keys(errorFields).length < 1) {
            if (event.target.name === 'signupForm') {
                signupForm.submit();
            } else {
                loginForm.submit();
            }

        } else {
            handleFormError(errorFields);
        }

    }

    /**
     * return validation fields based on form type
     * @param {Object} errors
     * @return {Null}
     */
    function getValidationFields(formName) {
        var validationFields = {};

        switch (formName) {
            case 'signupForm':
                validationFields = {
                    username: event.target[0].value,
                    email: event.target[1].value,
                    password: event.target[2].value
                };
                break;
            case 'loginForm':
                validationFields = {
                    userid: event.target[0].value,
                    password: event.target[1].value
                };
                break;
            default: return false;
        }

        return validationFields;
    }

    function toggleforms(event) {
        var id = event.target.id;

        switch (id) {
            case 'signupLink':
                signupPanel.style.display = 'block';
                loginPanel.style.display = 'none';
                break;
            case 'loginLink':
                signupPanel.style.display = 'none';
                loginPanel.style.display = 'block';
                break;
        }
    }

    // calls
    setActiveLink();
    signupPanel.style.display = 'none';
    signupForm.addEventListener('submit', validateForm);
    loginForm.addEventListener('submit', validateForm);
    signupLink.addEventListener('click', toggleforms);
    loginLink.addEventListener('click', toggleforms);

}




