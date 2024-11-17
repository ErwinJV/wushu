<?php 

namespace theme\php\actions;

use theme\php\interfaces\Action;

class RegisterTaxonomy implements Action {
    private array $settings;
    public function __construct($settings)
    {
        $this->settings = $settings;

    }

    private function create_taxonomy():void
    {
        foreach($this->settings as $type => $data){
             $labels = array(
                'name'=>_x(ucfirst($type),'taxonomy general name',SITE_NAME),
                'singular_name'=>_x(ucfirst($type),'taxonomy singular name',SITE_NAME),
                'search_items'=>__("Search $type",SITE_NAME),
                'all_items'=>__("All",'sushi',SITE_NAME),
                'parent_item'=>__("Main $type",SITE_NAME),
                'parent_item_colon'=>__("Main $type:",SITE_NAME),
                'edit_item'=>__('Edit','sushi',SITE_NAME),
                'update_item'=>__('Update',SITE_NAME),
                'add_new_item'=>__('Add new',SITE_NAME),
                'new_item_name'=>__('New name',SITE_NAME),
                'menu_name'=>__(ucfirst($type),SITE_NAME),
             );

             $args = array(
               'labels'=>$labels,
                ...$data['args'],
             );

             register_taxonomy(
                       $type,
                       
                       array(...$data['object_type']),
                       $args
                    );

           
        }
    }

    #[\Override]
    public function run():void
    {
        add_action('init',$this->create_taxonomy(...));
    }
}