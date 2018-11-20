// once window loads, run function code

window.addEventListener("load", function()
{	
	var submitBtn  = document.getElementById("submit");		//Button variables track button values
	var resetBtn = document.getElementById("reset");
	
	submitBtn.addEventListener("click", onSubmit);	//listens for button is 'Clicked'
	resetBtn.addEventListener("click", onReset);
	
	function onSubmit(evt)	//function controling 'click' event
	{
		var valid = true;	// variable to track the form validation
		
		var headlineField = document.getElementById("headline");
		var headlineError = document.getElementById("headlineError");
		
		var storyTextField = document.getElementById("storyText");
		var storyTextError = document.getElementById("storyTextError");
		
		var dateField = document.getElementById("date");
		var dateError = document.getElementById("dateError");				//variables used to track values in text fields and store values inside funtion
		
		var timeField = document.getElementById("time");
		var timeError = document.getElementById("timeError");
		
		var authorField = document.getElementById("author");
		var authorError = document.getElementById("authorError");
		
		
		var headline = headlineField.value;
		var storyText = storyTextField.value;
		var date = dateField.value;					//variables used to find values inside fields
		var time = timeField.value;
		var author = authorField.value;
		
		
		
		if (headline === "")
		{
			headlineError.innerHTML = "The article needs a headline"		// if statements inject error text into error fields and set vaild to false
			valid = false;
		}
		
		if (storyText === "")
		{
			storyTextError.innerHTML = "The article needs text to publish "
			valid = false;
		}
		
		if (date === "")
		{
			dateError.innerHTML = "The article needs a submission date"
			valid = false;
		}
		
		if (time === "")
		{
			timeError.innerHTML = "The article needs a submission time"
			valid = false;
		}
		
		if (author === "")
		{
			authorError.innerHTML = "The article needs know the author of the article"
			valid = false;
		}
		
		if (!valid)
		{
			evt.preventDefault();		//prevents page from pushing content to database
		}
		
	
	}
	
	function onReset
	{
				
		var headline = document.getElementById("headline").value;
		var storyText = document.getElementById("storyText").value;
		var date = document.getElementById("date").value;					//variables used to find values inside fields
		var time = document.getElementById("time").value;
		var author = document.getElementById("author").value;
		
		var headlineError = document.getElementById("headlineError");
		var storyTextError = document.getElementById("storyTextError");
		var dateError = document.getElementById("dateError");				//variables used to track values in text fields and store values inside funtion
		var timeError = document.getElementById("timeError");
		var authorError = document.getElementById("authorError");
		
		author.innerHTML = "" ;
		headline.innerHTML = "" ;
		storyText.innerHTML = "" ;
		date.innerHTML = "" ;
		time.innerHTML = "" ;
		
		authorError.innerHTML = "" ;
		headlineError.innerHTML = "" ;
		storyTextError.innerHTML = "" ;
		dateError.innerHTML = "" ;
		timeError.innerHTML = "" ;
		
	}
	
	
})