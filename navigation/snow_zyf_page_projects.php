<?php
$signature_options = signature_get_options('signature_wp');
wp_enqueue_script('navmenu-init');
?>

    <!--Snow 2019-06-11-->
    <!--admin@xuefeng.space-->
    <style>
        .menu_Area {
            display: inline-block;
            padding: 0 5px;
            margin-left: 30px;
        }

        .menu_Area button {
            background: transparent;
            font-size: 16px;
            line-height: 16px;
            padding: 0;
            padding-bottom: 4px;
        }

        .menu_Area a {
            display: block;
            padding: 0 10px;
        }

        .menu_Area.snow-form input {
            border: none;
            border-bottom: 1px solid #ced4da;
            border-radius: 0;
            background-color: transparent;
            box-shadow: none;
            font-size: 14px;
            line-height: 14px;
            padding: 5px 10px;
            height: auto;
            font-family: inherit;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        }

        .menu_Area.snow-form input:focus{
            border-color: #66afe9;
            outline: 0;
            box-shadow: 0 1px 0 0 #4285f4;
            border-bottom: 1px solid #4285f4;
            /*-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);*/
            /*box-shadow: none;*/
            /*box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);*/
        }

    </style>


    <header class="masthead signature-leon leon-trans-header" style="padding: 30px 25px; background: white !important; display: block !important;">
        <div class="container-fluid" style="padding-left: 0">
            <div class="row">

                <article class="col-xs-6 col-md-3">
                    <a href="<?php echo esc_url(home_url( '/' )); ?>"><img alt="<?php echo esc_attr(get_bloginfo('name')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" class="nav-logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/_resources/snow_zyf_logo_black.svg"/></a>
                </article>

                <acticle class="col-md-8 hidden-xs hidden-sm text-right">
                    <div class="dropdown menu_Area">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            所有领域 <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_1">
                            <a class="dropdown-item" id="projects-filter-button-WebApp" href="#">Web/App</a>
                            <a class="dropdown-item" id="projects-filter-button-book" href="#">书籍</a>
                            <a class="dropdown-item" id="projects-filter-button-video" href="#">视频</a>
                            <a class="dropdown-item" id="projects-filter-button-plane" href="#">平面</a>

                        </div>
                    </div>

                    <div class="menu_Area dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton_2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            所有时间 <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton_2">
                            <a class="dropdown-item" id="projects-filter-button-year2019" href="#">2019</a>
                            <a class="dropdown-item" id="projects-filter-button-year2018" href="#">2018</a>
                            <a class="dropdown-item" id="projects-filter-button-year2017" href="#">2017</a>
                            <a class="dropdown-item" id="projects-filter-button-year2016" href="#">2016</a>
                            <a class="dropdown-item" id="projects-filter-button-year2015" href="#">2015</a>
                        </div>
                    </div>

                    <div class="menu_Area snow-form" style="margin-right: -30px;">
                        <input class="form-control" type="text" placeholder="搜索" aria-label="Search">
                    </div>
                </acticle>

                <article class="col-xs-6 col-md-1 notification-icon-wrap">
                    <div class="menu-notification">
                        <div id="snow-icon-menu" class="">
                            <span style="background: #000; !important"></span>
                            <span style="background: #000; !important"></span>
                            <span style="background: #000; !important"></span>
                            <span style="background: #000; !important"></span>
                            <span style="background: #000; !important"></span>
                            <span style="background: #000; !important"></span>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </header>




<!-- main menu : starts (please refer to PDF user-guide for setting up the menu)-->
<section class="menu-panel signature-quartz fullheight">

<div class="row">
  

  <!-- main menu container-->
  <article class="col-md-12 fullheight nav-list-holder signature-quartz">
    <div class="valign">
      <nav class="nav-item-wrap signature-quartz">
          <?php
            if($signature_options['navigation_opt'] == "0")
            {
              $nav_args = array(
                'theme_location'  => 'primary',
                'container'       => false,
                'menu_class'      => 'main-nav-menu signature-quartz main-nav-menu-effect default-wp-nav',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu'
              );

              wp_nav_menu( $nav_args );
            }
            else
            {
              signature_quartz_nav();
            }
          ?>
        </nav>

    </div>
  </article>





</div>


</section>
<!-- main menu : ends -->




<!--<header id="masthead" class="masthead signature-quartz">  -->
<!--  <div class="container-fluid">-->
<!--    <div class="row">-->
<!--        <article class="text-left col-md-2">-->
<!--            <a href="--><?php //echo esc_url(home_url( '/' )); ?><!--"><img alt="--><?php //echo esc_attr(get_bloginfo('name')); ?><!--" title="--><?php //echo esc_attr(get_bloginfo('name')); ?><!--" class="nav-logo img-responsive" src="--><?php //echo esc_url($signature_options['quartz-nav-bar-logo']['url']); ?><!--"/></a>-->
<!--        </article>-->
<!--    </div>-->
<!--  </div>-->
<!--</header>-->
    

    

    

    

    

<?php 

function signature_quartz_nav(){
  $locations = get_nav_menu_locations();
  $is_home = signature_is_home_page();

  if ($is_home == false)
  {
    $nav_class = " ";
    $root_url = site_url().'/';
    $scroll_class = '';
  }
  else
  {
    $nav_class = " front-page";
    $root_url = '';
    $scroll_class = 'scroll';
  }

  if(!isset($locations['primary']))
  {
    $return = '<h5 class="clearfix text-center white '.esc_attr($nav_class).'">'.esc_html__('Please configure the navigation menu','signature').'</h5>';
  }
  else
  {
    $menu = wp_get_nav_menu_object($locations['primary']);

    $return = '';

    if(empty($menu))
    {
      $return = '<h5 class="clearfix text-center white '.esc_attr($nav_class).'">'.esc_html__('Please configure the navigation menu','signature').'</h5>';
    }

    else
    {
      $menu_items = wp_get_nav_menu_items($menu->term_id);

      _wp_menu_item_classes_by_context( $menu_items );

      $return = '<ul class="main-nav-menu signature-quartz main-nav-menu-effect '.esc_attr($nav_class).'">' . "\n";

      $menunu = array();
      foreach((array)$menu_items as $key => $menu_item )
      {
        $menunu[ (int) $menu_item->db_id ] = $menu_item;
      }
      unset($menu_items);

      foreach ( $menunu as $i => $men ){
        if($men->menu_item_parent == '0')
        {
            //Specific additions

            $has_sub_menu = 0;
            $parent_class = '';
            $parent_link_class = '';
            foreach ( $menunu as $submenu )
            {
              if($submenu->menu_item_parent == $men->ID)
              {
                $has_sub_menu = 1;
                $parent_class = 'menu-item-has-children';
                $parent_link_class = ' sub-menu-trigger';
              }
            }

            if(( 'page' == $men->object ))
            {
                    $incl_onepage = get_post_meta($men->object_id,'_signature_one_page',true);
                    $small_title  = signature_get_the_slug($men->object_id);

                if($incl_onepage == 'yes' OR $incl_onepage == 'Yes')
                {
                  $href =  $root_url.'#'.$small_title;
                  $identifyClass = $scroll_class." is_onepage";
                  $link_target = '';
                }
                else
                {
                   $href = $men->url;
                   $identifyClass = "not_onepage";
                   if($men->target != '')
                    {
                      $link_target = 'target="_blank"';
                    }
                    else{
                      $link_target = '';
                    }
                }
            }
            else
            {
              $href =  $men->url;
              $identifyClass = "not_onepage";
              $small_title  = strtolower(preg_replace('/\s+/', '-', $men->title));
              if($men->target != '')
              {
                $link_target = 'target="_blank"';
              }
              else{
                $link_target = '';
              }
            }

            $return .='<li class="'.esc_attr($parent_class).'">';
            $return .= '<a href="'. esc_url($href) .'" '.esc_attr($link_target).' class="main-link font2 white '.esc_attr($identifyClass.$parent_link_class).'">'. esc_html($men->title) .'</a>';



            if($has_sub_menu == 1)
            {
              $return .= '<ul class="sub-menu">' . "\n";

              foreach ( $menunu as $submenu )
              {
                if($submenu->menu_item_parent == $men->ID)
                {
                  if(( 'page' == $submenu->object ))
                  {
                    $incl_onepage = get_post_meta($submenu->object_id,'_signature_one_page',true);
                    $small_title  = signature_get_the_slug($submenu->object_id);

                    if($incl_onepage == 'yes' OR $incl_onepage == 'Yes')
                    {
                      $href =  $root_url.'#'.$small_title;
                      $identifyClass = $scroll_class." is_onepage";
                      $link_target = '';
                    }
                    else
                    {
                     $href = $submenu->url;
                     $identifyClass = "not_onepage";
                     if($men->target != '')
                      {
                        $link_target = 'target="_blank"';
                      }
                      else{
                        $link_target = '';
                      }
                    }
                  }
                  else
                  {
                    $href =  $submenu->url;
                    $identifyClass = "not_onepage";
                    $small_title  = strtolower(preg_replace('/\s+/', '-', $submenu->title));
                    if($men->target != '')
                    {
                      $link_target = 'target="_blank"';
                    }
                    else{
                      $link_target = '';
                    }
                  }
                  $return .= '<li><a href="'. esc_url($href) .'" '.esc_attr($link_target).' class="font2 white '.esc_attr($identifyClass).'">'. esc_html($submenu->title) .'</a></li>';

                }
              }
              $return .= '</ul>' . "\n";
            }
          $return .= '</li>' . "\n";
        }
      }

      unset($menunu);

      if (function_exists('icl_get_languages')) {
        $lang_list = icl_get_languages();

        $return .= '<li>';
        
        foreach ($lang_list as $lang) {
            if($lang['active'] == '1'):
            $return .= '<a href="'.esc_url($lang['url']).'">'.esc_html($lang['native_name']).' ('.esc_html($lang['translated_name']).')</a>';
            endif;
        }
        $return .= "<ul>";

        foreach ($lang_list as $lang) {
            if($lang['active'] == '0'):
            $return .= "<li>";
            $return .= '<a href="'.esc_url($lang['url']).'">'.esc_html($lang['native_name']).' ('.esc_html($lang['translated_name']).')</a>';
            $return .= "</li>";
            endif;
        }

        $return .= "</ul>";
        $return .= "</li>";
      }

      $return .= '</ul>' . "\n";
    }
  }
  echo $return;
}

?>