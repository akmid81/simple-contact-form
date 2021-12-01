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
		alert(result.message);
	}