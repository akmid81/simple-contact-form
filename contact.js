	let f = document.querySelector('#contact_form');
	f.onpointerdown = checkHuman;
	
	function checkHuman(e) {
		f.email.value = 'a@b.c';
		f.onsubmit = postForm;
	}
	
	async function postForm(e) {
		e.preventDefault();
		
		if(f.email.value + f.name.value == 'a@b.c') {
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
				msg.innerText = 'Message was sent successfully';
			} else {
				msg.style.color = 'red';
				msg.innerText = 'Sending Error';
			};
			
			setTimeout(() => msg.remove(), 2000);
		};
	}