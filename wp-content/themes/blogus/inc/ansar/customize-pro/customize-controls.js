<<<<<<< HEAD
( function( api ) {

	// Extends our custom "campus-lite" section.
	api.sectionConstructor['blogus'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

=======
( function( api ) {

	// Extends our custom "campus-lite" section.
	api.sectionConstructor['blogus'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

>>>>>>> origin/main
} )( wp.customize );