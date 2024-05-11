<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Medicamentos" route="{{ route('medications.create') }}"/>
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.medication.medication.partials.medication_table')
    @endslot
</x-pages.index>
