var form = document.getElementById("barrel_order_form");

form.onsubmit = function(e) {
	e.preventDefault();

	console.log("Barrel Size: " + form.barrel_size.value);
	console.log("Hoop Type: " + form.hoop_type.value);
	console.log("Varnish?: " + form.add_varnish.value);
	console.log("Custom Logo?: " + form.add_logo.value);
	console.log("Customer name: " + form.customer_name.value);
	console.log("Customer email: " + form.customer_email.value);
	console.log("Customer message: " + form.customer_message.value);
};