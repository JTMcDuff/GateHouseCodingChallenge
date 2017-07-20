// After document load, our jQuery comes online.
$( document ).ready( ()=> {
	  // Append data boxes to our container div.
for ( let i = 0; i < dataArr.length; i ++) {
  	let itemDiv = '<div class="databox" id=' + (i + 1) + '>' + dataArr[i] + '</div>';
  	$( itemDiv ).appendTo( '.container' );
	}

	//Append our desktop box after box four
	let titleBoxDiv = '<div class="currentview"> <h2> DESKTOP VIEW </h2> </div> ';
	$( titleBoxDiv ).insertAfter( '#4' ) ;

// *** Event Listeners ***

// Event listener for click events on our data boxes
// Use unique id attribute to determine if even / odd, etc.
$( '.databox' ).click( (element)=> {
    let boxNum = Number( element.target.id );
    // Feed our number into our determiner function.
    boxClick(boxNum);
});

//Event Listener for header click event
$( '.titlebox' ).click( ()=> {
	// Fire reset function.
  	resetScreen();
});

//Event listener for current view click event
$('.currentview').click( ()=> {
	//fire endGame function.
	endGame();
});

});