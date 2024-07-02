jQuery(document).ready(function() {

  function activateMenu() {
    // Navbar Logic
    jQuery(".menu > li.menu-item-has-children > a").click(function(e) {
      e.preventDefault();
      // <a> logic
      jQuery(".menu > li.menu-item-has-children > a").not(jQuery(this)).removeClass("active");
      jQuery(this).toggleClass("active");
      // Dropdown Logic
      jQuery(".sub-menu").not(jQuery(this).next()).slideUp("fast");
      jQuery(this).next().slideToggle("fast");
    });

    // Click Outside Detection
    jQuery(document).click(function(e) {
      let listItems = jQuery(".menu li.menu-item-has-children");
      if(!(jQuery(e.target).closest(listItems).length)) {
        jQuery(".sub-menu").slideUp("fast");
        jQuery(".menu > li > a.active").removeClass("active");
      }
    });

    // Mobile Hamburger Menu Toggler
    jQuery("#menu-toggler").click(function() {
      jQuery(this).children(".feather-x").toggle();
      jQuery(this).children(".feather-menu").toggle();
      jQuery(".menu").slideToggle("fast");
    });
  }

  activateMenu();

  
});