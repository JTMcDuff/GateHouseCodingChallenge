// boxClick accepts the box id and fires the appropriate box change function.
function boxClick(boxNum) {
   
   if ( boxNum === 3 ) {
      boxFade();
      return;
   }
   // If the box number is even, we want to change out odd boxes.
   if ( boxNum % 2 === 0 ) {
   		oddBox();
   		return;
   }
   // if the box number is odd, we want to change our even boxes.
   if ( boxNum % 2 === 1 ) {
   	evenBox();
   	return;
   }
   
   // Error handling.
   console.log('boxNum is not an integer:  '+boxNum);
}

// boxFade makes databoxes fade out and in sequentially.
function boxFade() {
	// Cache data length to save lookups.
	let len = dataArr.length;
	for ( let i = 1; i <= len; i ++){
	  let id = '#'+i;
    $( id ).delay(i * 210).fadeToggle( '100' );

	}
	//Fires once all changes to the databoxes are complete.
  $('.databox').promise().done( ()=> {
    for ( let j = 1; j <= len; j ++){
	  let id = '#'+j;
    $( id ).delay(j * 210).fadeToggle( '100' );

	  }
  })
}

// oddBox is fired when an odd box that is not 3 is clicked.
// Turns all even boxes blue and text white.
function evenBox() {
	// Cache data length to save lookups.
	let len = dataArr.length;
	for ( let i = 2; i <= len; i += 2){
		let id = '#'+i;
		$( id ).addClass('changedeven');
	}
}

// evenBox is fired when an even box is clicked.
// Turns odd boxes red and their text white.
function oddBox() {
	// Cache data length to save lookups.
	let len = dataArr.length;

	for ( let i = 1; i <= len; i += 2){
		let id = '#'+i;
		$( id ).addClass('changedodd');
	}
}

// Resets the screen by swapping the endedGame class on the appropriate divs.
function resetScreen() {
	// Remove any instances of the databox changing classes.
	$('.databox').removeClass('changedodd');
	$('.databox').removeClass('changedeven');
	$('.databox').removeClass('endedGame');

	// Display the thank you.
	$('.thankyou').addClass('endedGame');
}

// Ends the game by swapping the endedGame class on the appropriate divs.
function endGame() {
	// Turn off display of the boxes by appending the endedGame class.
	$('.databox').addClass('endedGame');
  $('.thankyou').removeClass('endedGame');
}
