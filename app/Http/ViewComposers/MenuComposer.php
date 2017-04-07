<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

use App\Category; // use our Model class for categories

class MenuComposer
{
    private $menuTree;

    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // load all categories using Model class
        $rowMenu = Category::all();

        // use parseTree method to create a list of categories
        $this->menuTree = $this->parseTree($rowMenu,1);

        // send prepared menu structure to view and bind it to $menuArray variable
        $view->with('menuArray', $this->menuTree);
    }

    public function parseTree($tree, $root = null) {

        $return = array();

        // Traverse the tree and search for direct children of the root
        foreach($tree as $key => $item) {
            // A direct child is found
            if($item->category_id == $root) {
                // Remove item from tree (we don't need to traverse this again)
                unset($tree[$key]);
                // Append the child into result array and parse its children
                $return[] = array(
                    'item' => $item,
                    'children' => $this->parseTree($tree, $item->id)
                );
            }
        }

        return empty($return) ? null : $return;
    }
}

?>
