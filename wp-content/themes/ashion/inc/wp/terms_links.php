<?php
/**
 * Get taxonomies terms links.
 *
 * @see get_object_taxonomies()
 */
function ashion_custom_taxonomies_terms_links() {
	// Get post by post ID.
	if ( ! $post = get_post() ) {
		return '';
	}

	// Get post type by post.
	$post_type = $post->post_type;

	// Get post type taxonomies.
	$taxonomies = get_object_taxonomies( $post_type, 'objects' );

	$out = array();

	foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){

		// Get the terms related to post.
		$terms = get_the_terms( $post->ID, $taxonomy_slug );

		if ( ! empty( $terms ) ) {
			$out[] = "<dt>" . $taxonomy->labels->singular_name . ":</dt>\n<dd class='term-list'>";
			foreach ( $terms as $term ) {
				$out[] = sprintf( '<span class="term-list--item"><a href="%1$s">%2$s</a></span>',
					esc_url( get_term_link( $term->slug, $taxonomy_slug ) ),
					esc_html( $term->name )
				);
			}
			$out[] = "\n</dd>\n";
		}
	}
	return implode( '', $out );
}

