<?php
namespace DarklupLite\Admin;
/**
 *
 * @package    DarklupLite - WP Dark Mode
 * @version    1.1.2
 * @author
 * @Websites:
 *
 */


class Exclude_Settings_Tab extends Settings_Fields_Base {

  public function get_option_name() {
    return 'darkluplite_settings'; // set option name it will be same or different name
  }

    public function tab_setting_fields() {

      $this->start_fields_section([
          'title' => 'EXCLUDE SETTINGS',
          'class' => 'darkluplite-exclude-settings darkluplite-d-hide darkluplite-settings-content',
          'icon'  => esc_url( DARKLUPLITE_DIR_URL. 'assets/img/color.svg' ),
          'dark_icon'  => esc_url( DARKLUPLITE_DIR_URL. 'assets/img/color-white.svg' ),
          'id' => 'darkluplite_exclude_settings'
      ]);

      $color_modes = [
        'exclude_posts_pages' => 'Pages/Posts/Categories',
        'exclude_html_elements' => 'HTML Elements',
        'exclude_wooCommerce' => 'WooCommerce',
      ];

      $this->button_radio_field([
          'title' => esc_html__( 'Choose Option', 'darklup' ),
          // 'sub_title' => esc_html__( 'Select the front-end darkmode color.', 'darklup' ),
          'class' => 'settings-color-preset',
          'name' => 'exclude_modes',
          'options' => $color_modes,
          'default' => 'exclude_posts_pages',
      ]);

      

      ?>
    <!------->
    <div class="darklup-row" data-condition='{"key":"exclude_modes","value":"exclude_posts_pages"}'>
       
      <div class="darklup-col-lg-12 darklup-col-md-12 darklup-col-12 align-self-center">
              
        <?php
        $this->Multiple_select_box([
          'title' => esc_html__('Exclude Pages', 'darklup-lite'),
          'sub_title' => esc_html__('Select the pages where you don\'t want to show the dark mode switch', 'darklup-lite'),
          'name' => 'exclude_pages',
          'wrapper_class' => 'pro-feature',
          'is_pro' => 'yes',
          'options' => \DarklupLite\Helper::getPages()
        ]);
        $this->Multiple_select_box([
            'title' => esc_html__('Include Pages', 'darklup'),
            'sub_title' => esc_html__('Select the pages where you want to show the dark mode switch except all other pages', 'darklup'),
            'name' => 'include_pages',
            'wrapper_class' => 'pro-feature',
            'is_pro' => 'yes',
            'options' => \DarklupLite\Helper::getPages()
        ]);

        $this->Multiple_select_box([
            'title' => esc_html__('Exclude Posts', 'darklup-lite'),
            'sub_title' => esc_html__('Select the posts where you don\'t want to show the dark mode switch', 'darklup-lite'),
            'name' => 'exclude_posts',
            'wrapper_class' => 'pro-feature',
            'is_pro' => 'yes',
            'options' => \DarklupLite\Helper::getPosts()
        ]);
        $this->Multiple_select_box([
            'title' => esc_html__('Include Posts', 'darklup'),
            'sub_title' => esc_html__('Select the posts where you want to show the dark mode switch except all other posts', 'darklup'),
            'name' => 'include_posts',
            'wrapper_class' => 'pro-feature',
            'is_pro' => 'yes',
            'options' => \DarklupLite\Helper::getPosts()
        ]);

        $this->Multiple_select_box([
            'title' => esc_html__('Exclude Categories', 'darklup-lite'),
            'sub_title' => esc_html__('Select the categories to exclude dark mode switch on the selected category posts', 'darklup-lite'),
            'name' => 'exclude_categories',
            'wrapper_class' => 'pro-feature',
            'is_pro' => 'yes',
            'options' => \DarklupLite\Helper::getCategories()
        ]);
        $this->Multiple_select_box([
            'title' => esc_html__('Include Categories', 'darklup'),
            'sub_title' => esc_html__('Select the categories where you want to show the dark mode switch except all other category posts', 'darklup'),
            'name' => 'include_categories',
            'wrapper_class' => 'pro-feature',
            'is_pro' => 'yes',
            'options' => \DarklupLite\Helper::getCategories()
        ]);  
        ?>

      </div>

    </div>

    <!------->
    <div class="darklup-row" data-condition='{"key":"exclude_modes","value":"exclude_html_elements"}'>
      <div class="darklup-col-lg-12 darklup-col-md-12 darklup-col-12 align-self-center">
      <?php
      $this->switch_field([
        'title' => esc_html__( 'Add Overlay to all Background Images', 'darklup' ),
        'sub_title' => esc_html__( 'Enable the overlay option to add a visually appealing effect to all background images, enhancing their appearance without the need for image replacement.', 'darklup' ),
        'name' => 'apply_bg_overlay'
      ]);
        $this->text_field([
          'title' => esc_html__('Exclude Element', 'darklup-lite'),
          'sub_title' => esc_html__('Set the element like div, section, class, id which you want to ignore darkmode. Add comma separated CSS selectors (classes, ids)', 'darklup-lite'),
          'class' => 'settings-switch-position',
          'name' => 'exclude_element',
          'wrapper_class' => 'pro-feature',
          'is_pro' => 'yes',
          'placeholder' => esc_html__('e.g: .className,#id,div', 'darklup-lite')
      ]);
              
      $this->text_field([
          'title' => esc_html__('Exclude Background Image Overlay', 'darklup'),
          'sub_title' => esc_html__("When 'image overlay' enabled, all background images receive an overlay in dark mode. To remove the overlay from a specific element, please provide the class or ID of that element. Include comma-separated CSS selectors (classes, IDs) for multiple elements.", 'darklup'),
          'class' => 'settings-switch-position',
          'name' => 'exclude_bg_overlay',
          'condition' => ["key" => "apply_bg_overlay", "value" => "yes"],
          // 'condition' => ["key" => "time_based_darkmode", "value" => "yes"],
          'is_pro' => 'yes',
          'wrapper_class' => 'pro-feature',
          'placeholder' => esc_html__('e.g: .className,#id,div', 'darklup')
      ]);
        ?>
        </div>
    </div>
        <!------->
    <div class="darklup-row" data-condition='{"key":"exclude_modes","value":"exclude_wooCommerce"}'>
      <div class="darklup-col-lg-12 darklup-col-md-12 darklup-col-12 align-self-center">
        <?php
        $this->Multiple_select_box([
          'title' => esc_html__('Exclude WooCommerce Products', 'darklup-lite'),
          'sub_title' => esc_html__('Select the products where you don\'t want to show the dark mode switch', 'darklup-lite'),
          'name' => 'exclude_woo_products',
          'wrapper_class' => 'pro-feature',
          'is_pro' => 'yes',
          'options' => \DarklupLite\Helper::getWooProducts()
        ]);
        $this->Multiple_select_box([
            'title' => esc_html__('Include WooCommerce Products', 'darklup'),
            'sub_title' => esc_html__('Select the products where you want to show the dark mode switch except all other products', 'darklup'),
            'name' => 'include_woo_products',
            'wrapper_class' => 'pro-feature',
            'is_pro' => 'yes',
            'options' => \DarklupLite\Helper::getWooProducts()
        ]);
        $this->Multiple_select_box([
            'title' => esc_html__('Exclude WooCommerce Categories', 'darklup'),
            'sub_title' => esc_html__('Select the categories where you don\'t want to show the dark mode switch', 'darklup'),
            'name' => 'exclude_woo_categories',
            'wrapper_class' => 'pro-feature',
            'is_pro' => 'yes',
            'options' => \DarklupLite\Helper::getWooCategories()
        ]);
        $this->Multiple_select_box([
            'title' => esc_html__('Include WooCommerce Categories', 'darklup'),
            'sub_title' => esc_html__('Select the categories where you want to show the dark mode switch except all other categories', 'darklup'),
            'name' => 'include_woo_categories',
            'wrapper_class' => 'pro-feature',
            'is_pro' => 'yes',
            'options' => \DarklupLite\Helper::getWooCategories()
        ]);
        ?>
      </div>
    </div>



    <?php

        $this->end_fields_section(); // End fields section

   }




}

new Exclude_Settings_Tab();