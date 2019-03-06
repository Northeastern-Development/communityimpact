<?php

  // Northeastern Blank navigation
  function northeastern_nav()
  {
    wp_nav_menu(
    array(
      'theme_location'  => 'header-menu',
      'menu'            => '',
      'container'       => 'div',
      'container_class' => 'menu-{menu slug}-container',
      'container_id'    => '',
      'menu_class'      => 'main-navigation',
      'menu_id'         => 'nav',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s" role="list">%3$s</ul>',
      'depth'           => 0,
      'walker'          => new Aria_Walker_Nav_Menu(),
      )
    );
  }



  // Register northeastern Navigation
  function register_northeastern_menu()
  {
      register_nav_menus(array( // Using array to specify more menus if needed
          'header-menu' => __('Header Menu', 'northeastern'), // Main Navigation
          'sidebar-menu' => __('Sidebar Menu', 'northeastern'), // Sidebar Navigation
          'extra-menu' => __('Extra Menu', 'northeastern') // Extra Navigation if needed (duplicate as many as you need!)
      ));
  }

  // Remove the <div> surrounding the dynamic navigation to cleanup markup
  function my_wp_nav_menu_args($args = '')
  {
      $args['container'] = false;
      return $args;
  }

  // Remove Injected classes, ID's and Page ID's from Navigation <li> items
  function my_css_attributes_filter($var)
  {
      return is_array($var) ? array() : '';
  }






  class Aria_Walker_Nav_Menu extends Walker_Nav_Menu {


  	/**
  	 * Start the element output.
  	 *
  	 * @see Walker_Nav_Menu::start_el() for parameters and longer explanation
  	 */
  	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
  		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
  		$classes[] = 'menu-item-' . $item->ID;
  		/**
  		 * Filter the arguments for a single nav menu item.
  		 *
  		 * @since 4.4.0
  		 *
  		 * @param array  $args  An array of arguments.
  		 * @param object $item  Menu item data object.
  		 * @param int    $depth Depth of menu item. Used for padding.
  		 */
  		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
  		/**
  		 * Filter the CSS class(es) applied to a menu item's list item element.
  		 *
  		 * @since 3.0.0
  		 * @since 4.1.0 The `$depth` parameter was added.
  		 *
  		 * @param array  $classes The CSS classes that are applied to the menu item's `<li>` element.
  		 * @param object $item    The current menu item.
  		 * @param array  $args    An array of {@see wp_nav_menu()} arguments.
  		 * @param int    $depth   Depth of menu item. Used for padding.
  		 */
  		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
  		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
  		/**
  		 * Filter the ID applied to a menu item's list item element.
  		 *
  		 * @since 3.0.1
  		 * @since 4.1.0 The `$depth` parameter was added.
  		 *
  		 * @param string $menu_id The ID that is applied to the menu item's `<li>` element.
  		 * @param object $item    The current menu item.
  		 * @param array  $args    An array of {@see wp_nav_menu()} arguments.
  		 * @param int    $depth   Depth of menu item. Used for padding.
  		 */
  		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
  		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
  		$output .= sprintf( '%s<li%s%s%s>',
  			$indent,
  			$id,
  			$class_names,
  			in_array( 'menu-item-has-children', $item->classes ) ? ' aria-haspopup="true" aria-expanded="false" tabindex="0"' : ''
  		);
  		$atts = array();
  		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
  		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
  		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
  		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';
  		/**
  		 * Filter the HTML attributes applied to a menu item's anchor element.
  		 *
  		 * @since 3.6.0
  		 * @since 4.1.0 The `$depth` parameter was added.
  		 *
  		 * @param array $atts {
  		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
  		 *
  		 *     @type string $title  Title attribute.
  		 *     @type string $target Target attribute.
  		 *     @type string $rel    The rel attribute.
  		 *     @type string $href   The href attribute.
  		 * }
  		 * @param object $item  The current menu item.
  		 * @param array  $args  An array of {@see wp_nav_menu()} arguments.
  		 * @param int    $depth Depth of menu item. Used for padding.
  		 */
  		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
  		$attributes = '';
  		foreach ( $atts as $attr => $value ) {
  			if ( ! empty( $value ) ) {
  				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
  				$attributes .= ' ' . $attr . '="' . $value . '"';
  			}
  		}
  		/** This filter is documented in wp-includes/post-template.php */
  		$title = apply_filters( 'the_title', $item->title, $item->ID );
  		/**
  		 * Filter a menu item's title.
  		 *
  		 * @since 4.4.0
  		 *
  		 * @param string $title The menu item's title.
  		 * @param object $item  The current menu item.
  		 * @param array  $args  An array of {@see wp_nav_menu()} arguments.
  		 * @param int    $depth Depth of menu item. Used for padding.
  		 */
  		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

      $attributes = '  target="'.$item->target.'" href="'.$item->url.'" title="'.$item->attr_title.'" aria-label = "'.$item->attr_title.'" ';


  		$item_output = $args->before;
  		$item_output .= '<a'. $attributes .' >';
  		$item_output .= $args->link_before . $title . $args->link_after;
  		$item_output .= '</a>';
  		$item_output .= $args->after;
  		/**
  		 * Filter a menu item's starting output.
  		 *
  		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
  		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
  		 * no filter for modifying the opening and closing `<li>` for a menu item.
  		 *
  		 * @since 3.0.0
  		 *
  		 * @param string $item_output The menu item's starting HTML output.
  		 * @param object $item        Menu item data object.
  		 * @param int    $depth       Depth of menu item. Used for padding.
  		 * @param array  $args        An array of {@see wp_nav_menu()} arguments.
  		 */
  		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  	}
  }

?>
