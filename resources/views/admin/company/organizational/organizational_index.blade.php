<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Organograma" route="{{ route('organizational.create') }}" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.company.organizational.partials.organizational_table')
    @endslot
</x-pages.index>
