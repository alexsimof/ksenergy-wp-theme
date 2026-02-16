

document.getElementById('energy-form').addEventListener('submit', function(e) {
    e.preventDefault();
    let result = document.querySelector('.form-result');
    let formData = new FormData(this);
    formData.append('action', 'send_energy_form');
    formData.append('nonce', energyFormData.nonce);

    // Проверка email
    let email = formData.get('email');
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        result.innerHTML = '<span style="color:red;">Invalid email address</span>';
        return;
    }

    // Проверка телефона (только цифры, пробелы, +, -)
    let phone = formData.get('phone');
    let phonePattern = /^[0-9+\-\s]+$/;
    if (!phonePattern.test(phone) || phone.trim().length < 5) {
        result.innerHTML = '<span style="color:red;">Invalid phone number</span>';
        return;
    }


    // Отправка AJAX
    fetch(energyFormData.ajax_url, {
        method: 'POST',
        body: formData
    })
    .then(r => r.json())
    .then(data => {
        console.log(data);
        if (data.success) {
            result.innerHTML = '<span style="color:green;">Message sent successfully!</span>';
            document.getElementById('energy-form').reset(); // очистка формы
        } else {
            result.innerHTML = '<span style="color:red;">Error sending message</span>';
        }
    })
    .catch(err => {
        console.error(err);
        result.innerHTML = '<span style="color:red;">AJAX error</span>';
    });
});
