<?php

namespace App\View\Components\Sidebar;

use Illuminate\View\Component;

class SidebarMenuGroup extends Component
{
    public \App\Services\Sidebar\SidebarItem $item;

    public function __construct(\App\Services\Sidebar\SidebarItem $item)
    {
        $this->item = $item;
    }

    public function render()
    {
        return view('components.sidebar.sidebar-menu-group');
    }
}
