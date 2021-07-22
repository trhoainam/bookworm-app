document.querySelector(document).addEventListener('click', '.number-spinner button', function () {    
	var btn = document.querySelector(this),
		oldValue = btn.closest('.number-spinner').querySelector('input').value.trim(),
		newVal = 0;
	
	if (btn.attr('data-dir') == 'up') {
		newVal = parseInt(oldValue) + 1;
	} else {
		if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		} else {
			newVal = 1;
		}
	}
	btn.closest('.number-spinner').querySelector('input').val(newVal);
});