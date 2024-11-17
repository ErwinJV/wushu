<?php 


use theme\php\actions\EnqueueScript;
use theme\php\actions\EnqueueStyle;
use theme\php\actions\AddThemeSupport;

$dir_path = get_template_directory();
$dir_uri = get_template_directory_uri();
$site_name = get_bloginfo('name');

define('DIR_PATH',$dir_path);
define('DIR_URI',$dir_uri);
define('SITE_NAME',$site_name);


function view(string $path)
{
   $path = str_replace('.','/',$path);
   $path_view = DIR_PATH . '/theme/php/views/' . $path . '.php'; 
   if($path_view)
   {
      require $path_view;
   }
}


spl_autoload_register(function(string $className){
      $path = str_replace('\\','/',$className);
      $classPath = DIR_PATH . "/$path" . ".php";
       if(file_exists($classPath)){
        require $classPath;
       }   
});




//----Add Custom Post Types-----

// $cpt_args = [
// 	"sushi" => [
// 		"plural" => "sushis",
// 		"icon"   => "dashicons-food",       
// 	],
	
// ];

// $cpt = new GenericCPT($cpt_args);
// $cpt->run();


//--------Add Taxonomies---------


// $taxonomies_args = [

//    'varieties'=>[
//         'object_type'=>['cpt-sushi'],
//         'args'=>[
//             'hierarchical'=>true,
//             'show_ui'=>true,
//             'show_admin_column'=>true,
//             'query_var'=>true,
//             'rewrite'=>array('slug'=>'varieties'),
//             'show_in_rest'=>true,
//             'rest_base'=> 'varieties',
//             'rest_controller_class'=>'WP_REST_Terms_Controller',   
//         ]
//     ]
// ];
// $taxonomy = new Taxonomy($taxonomies_args);
// $taxonomy->run();


//--------Enqueue scripts--------



$enqueue_scripts = new EnqueueScript(
   [
      [
        'name'=>'bundle-theme-js',
        'path_uri'=> DIR_URI . '/dist/bundle.js',
        'deps'=>[],
        'version'=> '1.0',
        'args'=> ['strategy'=>'defer']
      ],
   ]
);
$enqueue_scripts->run();

//--------Enqueue styles----------




$enqueue_styles = new EnqueueStyle(
   [
      [
         'name'=>'tailwind-css',
         'path_uri'=> DIR_URI.'/dist/styles.min.css',
         'deps'=> [],
         'version'=> '3.4.10',
         'media'=>'all'
      ],
  ]
);
$enqueue_styles->run();

// Add theme support

$custom_logo = [
   'flex-width'=>true,
   'flex-height'=>true,
   'header-text'=>array(SITE_NAME,ucfirst(SITE_NAME) . ' logo')
];

$theme_support = new AddThemeSupport(
   [
      'post-thumbnails',
      'widgets',
      ['custom-logo',$custom_logo],
   
   ]
);
$theme_support->run();














