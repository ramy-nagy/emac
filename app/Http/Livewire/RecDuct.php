<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\RecDuct as Duct;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class RecDuct extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('Name')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable(),
            Column::make('Verified', 'email_verified_at')
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Duct::query();
    }
}
