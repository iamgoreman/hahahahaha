// once our window loads in the dom, we are listening for it to load. once it does, we load a function 

window.addEventListener("load", function()
{
	// console.log("I hate all of you meat bags :/")
	
	// the window has loaded. we want to check the submit button from the html page. 
	// we need to create a variable and assign the value of the submit button to that variable.  
	
	var submitBtn = document.getElementById("submit");
	
	// the vaiable will now listen for a click from the user.
	// if and when a click has happened, we will run a function call onSubmitForm.
	
	submitBtn.addEventListener("click", onSubmitForm);
	
	// we will now declare the function. 
	// we will prevent the submit button from its default activity so we can test it and see the result in the console.
	
	function onSubmitForm(evt)
	{
		evt.preventDefault();
		console.log("STOP TOUCHING ME!");
	};
})