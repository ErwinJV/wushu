
  <header class="bg-slate-400 flex flex-row items-center absolute left-0 top-0 h-[50px] z-100 w-full" id="siteHeader">
    <nav class="flex justify-between items-center w-[92%]  mx-auto">
        <!-- Site Logotype -->
      <div class="custom-logo">
        <!-- TODO: put site icon here -->
         <!-- <img class="w-16" src="" alt="h"> -->

         <?php echo get_custom_logo(); ?>
      </div>

      <form action="<?php echo home_url('/'); ?>" role="search" method="get" class="inline-flex"  >

        <input
           class="rounded focus:outline-none indent-1 w-36 sm:w-48 h-7 "
           name="s" id=""
           placeholder="Search..."
           value="<?php echo get_search_query(); ?>"
           type="search"
          >

          <button type="submit"
                  value="Send"
                  class="ms-2 bg-transparent flex flex-row items-center"
           >
                <i class="bx bx-search text-2xl text-white"></i>
          </button>
     </form>

        <!-- Menu Links -->
      <?php
wp_nav_menu(
    [
        'theme_location' => 'navigation-links',
        'container_id' => 'navigationLinks',
        'menu_id'=>'navigationList',
    ]
);
?>

    <!-- Toggle menu -->
     
        <div class="xl:hidden">
            <i class="bx bx-menu text-4xl cursor-pointer text-white" @click='onToggleMenu'></i>
        </div>
     </div>
    </nav>
 </header>

 <div class="absolute left-0 top-0 w-[100vw] h-[100vh] bg-black opacity-70  xl:hidden " x-show="open">
        
  <i class='bx bx-x absolute right-4 top-4 text-8xl text-white cursor-pointer' @click="onToggleMenu">
  </i>

 <?php 
  wp_nav_menu(
    [
        'theme_location' => 'navigation-links-sm',
        'container_id' => 'navigationLinksSm',
        'menu_id'=>'navigationListSm',   
    ]
  );
 ?>
 </div>

