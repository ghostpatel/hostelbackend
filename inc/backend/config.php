<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$one->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$one->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$one->inc_header                 = 'inc/backend/views/inc_header.php';
$one->inc_footer                 = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$one->main_nav                   = array(
    
    array(
        'name'  => 'Blocks',
        'icon'  => 'si si-energy',
        'sub'   => array(
            array(
                'name'  => 'Styles',
                'url'   => 'be_blocks_styles.php'
            ),
            array(
                'name'  => 'Options',
                'url'   => 'be_blocks_options.php'
            ),
            array(
                'name'  => 'Forms',
                'url'   => 'be_blocks_forms.php'
            ),
            array(
                'name'  => 'Themed',
                'url'   => 'be_blocks_themed.php'
            ),
            array(
                'name'  => 'API',
                'url'   => 'be_blocks_api.php'
            )
        )
    ),
    array(
        'name'  => 'Sliders',
        'icon'  => 'si si-badge',
        'sub'   => array(
           array(
            'name'  => 'Slider Form',
            'url'   => 'create_sliders.php'
           ),
           array(
            'name'  => 'Slider Details',
            'url'   => 'show_sliders_details.php'
           )
        )
    ),
    array(
        'name'  => 'Facility',
        'icon'  => 'si si-wrench',
        'sub'   => array(
            array(
                'name'  => 'Facility Form',
                'url'   => 'create_facility.php'
            ),
            array(
                'name'  => 'Facility Details',
                'url'   => 'show_facility_details.php'
            )
        )
    ),
    array(
        'name'  => 'Gallery',
        'icon'  => 'si si-wrench',
        'sub'   => array(
            array(
                'name'  => 'Gallery Form',
                'url'   => 'create_gallery.php'
            ),
            array(
                'name'  => 'Gallery Details',
                'url'   => 'show_gallery_details.php'
            )
        )
    ),
    array(
        'name'  => 'Student List',
        'icon'  => 'si si-badge',
        'sub'   => array(
            array(
                'name'  => 'Student Form',
                'url'   => 'create_student.php'
            ),
            array(
                'name'  => 'Student Details',
                'url'   => 'show_student_details.php'
            )    )
    ),
    array(
        'name'  => 'Login',
        'icon'  => 'si si-grid',
        'sub'   => array(
            array(
                'name'  => 'Sign Up',
                'url'   => 'create_login.php'
            ),
    
            array(
                'name'  => 'Login Table',
                'url'   => 'show_login.php'
            )
        )
    ),
    array(
        'name'  => 'Contact',
        'icon'  => 'si si-note',
        'sub'   => array(
            array(
                'name'  => 'Contact Form',
                'url'   => 'create_contact.php'
            ),
            array(
                'name'  => 'Contact Details',
                'url'   => 'show_contact.php'
            ),
           
        )
    ),
    array(
        'name'  => 'Subscribe',
        'icon'  => 'si si-wrench',
        'sub'   => array(
            array(
                'name'  => 'Subscribe Form',
                'url'   => 'create_subscribe.php'
            ),
            array(
                'name'  => 'Subscribe Details',
                'url'   => 'show_subscribe_details.php'
            )
        )
    ),

    array(
        'name'  => 'Setting',
        'icon'  => 'si si-wrench',
        'sub'   => array(
            array(
                'name'  => 'Setting Form',
                'url'   => 'create_setting.php'
            ),
            array(
                'name'  => 'Setting Details',
                'url'   => 'show_setting_details.php'
            )
        )
    ),
 
    array(
        'name'  => 'Reporting',
        'icon'  => 'si si-wrench',
        'sub'   => array(
            array(
                'name'  => 'Reporting Form',
                'url'   => 'create_report.php'
            ),
            array(
                'name'  => 'Reporting Details',
                'url'   => 'show_report_details.php'
            )
        )
    ),
);
