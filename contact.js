	let f = document.querySelector('#contact_form');
	f.onsubmit = postForm;
	
	async function postForm(e) {
		e.preventDefault();
		
		let formData = new FormData(document.querySelector('#contact_form'));
		
		let response = await fetch('contact-form.php', {
			method: 'POST',
			body: formData
		});
		
		let result = await response.json();
		
		let msg = document.createElement('div')
		f.append(msg)
		
		if(result) {
		    msg.style.color = 'green';
		    msg.innerText = 'Сообщение отправлено';
		} else {
		    msg.style.color = 'red';
		    msg.innerText = 'Ошибка при отправке';
		};
		
		setTimeout(() => msg.remove(), 2000);
	}