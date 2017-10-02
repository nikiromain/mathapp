var correctCards = 0;
$( init );
 
function init() {
 
  // Hide the success message
  $('#successMessage').hide();
  $('#successMessage').css( {
    left: '580px',
    top: '250px',
    width: 0,
    height: 0
  } );
 
  // Reset the game
  correctCards = 0;
  $('#numberCards').html( '' );
  $('#wordCards').html( '' );
  
  $('#correctsound').hide();
 
  // Create the pile of shuffled cards
  var numberArray = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
  numberArray.sort( function() { return Math.random() - .5 } );
 
  for ( var i=0; i<10; i++ ) {
    $('<div>' + numberArray[i] + '</div>').data( 'number', numberArray[i] ).attr( 'id', 'card'+numberArray[i] ).appendTo( '#numberCards' ).draggable( {
      containment: '#gameSpace',
      stack: '#numberCards div',
      cursor: 'pointer',
      revert: true
    } );
  }
 
  // Create the card slots
  var words = [ 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten' ];
  for ( var i=1; i<=10; i++ ) {
    $('<div>' + words[i-1] + '</div>').data( 'number', i ).appendTo( '#wordCards' ).droppable( {
      accept: '#numberCards div',
      hoverClass: 'hovered',
      drop: handleCardDrop
    } );
  }
 
}


function handleCardDrop( event, ui ) {
  var ansNumber = $(this).data( 'number' );
  var cardNumber = ui.draggable.data( 'number' );
 
  // If the card was dropped to the correct slot,
  // change the card colour, position it directly
  // on top of the slot, and prevent it being dragged
  // again
 
  if ( ansNumber == cardNumber ) {
    ui.draggable.addClass( 'correct' );
    ui.draggable.draggable( 'disable' );
    $(this).droppable( 'disable' );
    ui.draggable.position( { of: $(this), my: 'left top', at: 'left top' } );
    ui.draggable.draggable( 'option', 'revert', false );
    correctCards++;
  } 
   
  // If all the cards have been placed correctly then display a message
  // and reset the cards for another go
 
  if ( correctCards == 10 ) {
	$('#correctsound')[0].play();
    $('#successMessage').show();
    $('#successMessage').animate( {
      left: '380px',
      top: '200px',
      width: '400px',
      height: '100px',
      opacity: 1
    } );
  }
 
}