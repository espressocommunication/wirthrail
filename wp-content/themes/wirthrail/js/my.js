
jQuery(document).ready(function(){
	jQuery(".dropdown").hover(function(){
		var dropdownMenu = jQuery(this).children(".dropdown-menu");
		if(dropdownMenu.is(":visible")){
			dropdownMenu.parent().toggleClass("open");
		}
	});
	jQuery('.dropdown-menu a.dropdown-toggle' ).on( 'click', function ( e ) {

		$width = jQuery(document).width();
		if ($width < 768) {
			var $el = jQuery( this );
			$el.toggleClass('active-dropdown');
			var $parent = jQuery( this ).offsetParent( ".dropdown-menu" );
			if ( !jQuery( this ).next().hasClass( 'show' ) ) {
				jQuery( this ).parents( '.dropdown-menu' ).first().find( '.show' ).removeClass( "show" );
			}
			var $subMenu = jQuery( this ).next( ".dropdown-menu" );
			$subMenu.toggleClass( 'show' );
			jQuery( this ).parent( "li" ).toggleClass( 'show' );
			jQuery( this ).parents( 'li.nav-item.dropdown.show' ).on( 'hidden.bs.dropdown', function ( e ) {
				jQuery( '.dropdown-menu .show' ).removeClass( "show" );
				$el.removeClass('active-dropdown');
			});
			if ( !$parent.parent().hasClass( 'navbar-nav' ) ) {
				$el.next().css( { "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
			}
		};

		return false;
	});
});
