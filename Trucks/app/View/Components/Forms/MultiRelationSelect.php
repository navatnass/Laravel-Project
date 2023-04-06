<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class MultiRelationSelect extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Model $model,
        public string $tagname,
        public Collection|array $relationItems,
        public string $relationName = '',
        public string $optionName = 'name',
        public string $tagId = '',
    ) {
        // dd($relationItems);
        if(!$this->relationName){
            $this->relationName = $this->tagname;
        }

        // if(!$this->tagId) {
        //     $this->tagId = $this->tagname;
        // }
}
    public function selected($relationItem)
    {
        return $this->model->{$this->relationName}->contains($relationItem->id);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.multi-relation-select');
    }
}
