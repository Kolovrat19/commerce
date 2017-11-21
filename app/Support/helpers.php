<?php
/**
 * Created by PhpStorm.
 * User: A.Klapchuk
 * Date: 06.11.2017
 * Time: 11:36
 */
/**
 * Created an nested unordered list from a multidimensional array
 *
 * @param  array
 * @return string
 */
function tree(array $nodes, Closure $render = null)
{
    $output = '<ol class="dd-list">';
    foreach($nodes as $node)
    {
        // Get name
        $name = (is_null($render)) ? $node['name'] : $render($node);

        // Render node
        $output .= '<li class="dd-item" data-id='.$node['id'].'>
                        <div class="dd-handle">
                            <span class="label h-bg-navy-blue"><i class="fa fa-users"></i></span>'.$name.'</div>';

        // Render children
        if($node['children'])
            $output .= tree($node['children'], $render);

        $output .= '</li> ';
    }

    return $output .'</ol>';
}