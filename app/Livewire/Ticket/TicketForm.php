<?php

namespace App\Livewire\Ticket;

use App\Models\Ticket\TicketTypeCategory;
use App\Models\Ticket\TicketTypeService;
use App\Models\Ticket\TicketTypeSubService;
use Livewire\Component;

class TicketForm extends Component
{
    public $showTypeSubService = FALSE;
    public $selectedTypeCategory = NULL;
    public $selectedTypeService = NULL;
    public $selectedTypeSubService = NULL;
    public $typeCategories= [];
    public $typeServices = [];
    public $typeSubServices = [];

    public function mount()
    {
        $this->typeCategories = TicketTypeCategory::all();
    }

    public function formTypeCategory()
    {
        
        $this->showTypeSubService = FALSE;
        
        if ($this->selectedTypeCategory != "") {
            $this->typeServices = TicketTypeService::where('ticket_type_category_id',$this->selectedTypeCategory)->get();
        }
    }

    public function fromTypeService()
    {
        $this->typeSubServices = TicketTypeSubService::where('ticket_type_service_id',$this->selectedTypeService)->get();
        $this->showTypeSubService = TRUE;
    }

    public function render()
    {
        return view('livewire.ticket.ticket-form',[
            'typeCategories'=>$this->typeCategories,
            'typeServices'=>$this->typeServices,
            'typeSubServices'=>$this->typeSubServices,
        ]);
    }
}
