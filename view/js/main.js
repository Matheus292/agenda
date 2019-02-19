$( '#myModal' ).on
				(
					'show.bs.modal', 
					function( event )
					{
						var button = $( event.relatedTarget );
						var id = button.data( 'customer' );
						var modal = $( this ) ;
						
						modal.find( '#confirmar' ).attr( 'href' , 'delete.php?id=' + id );
					}

				)
				
				
				
				
				
				
				
