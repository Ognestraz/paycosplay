<?php namespace App\Models;

class Site extends \Model\Site
{
    const ROOT_ID = 1;
    
    public function title()
    {
        if (static::ROOT_ID == $this->id) {
            return parent::title();
        }

        $root = static::find(static::ROOT_ID)->name;
        $items = array();

        foreach ($this->breadCrumbs() as $k => $item) {
            if (!$k) continue;
            $items[] = $item['title'] ? $item['title'] : $item['name'];
        }

        $title = parent::title();
        $title .= $items ? ' - '.implode(' - ', array_reverse($items)) : '';
        $title .= $root ? ' - '.$root : '';

        return $title;
    }
}
