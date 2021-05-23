function validateName(name) {
    if (hasNumber(name)) return false;

    return name.split(' ').length === 2;
}

function validatePhoneNr(phoneNr) {
    return /\+?[0-9]{3}-?[0-9]{3}-?[0-9]{4}/.test(phoneNr);
}

// @see https://regexr.com/2rhq7
function validateEmail(email) {
    const re = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g;
    return re.test(String(email).toLowerCase());
}

function hasNumber(string) {
    return /\d/.test(string);
}
