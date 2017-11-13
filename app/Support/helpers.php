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
    $output = '<ul>';
    foreach($nodes as $node)
    {
        // Get name
        $name = (is_null($render)) ? $node['name'] : $render($node);

        // Render node
        $output .= '<li>' . $name;

        // Render children
        if($node['children'])
            $output .= tree($node['children'], $render);

        $output .= '</li> ';
    }

    return $output .'</ul>';
}