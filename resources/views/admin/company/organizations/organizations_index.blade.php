<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Organograma" route="{{ route('organizations.create') }}" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.company.organizations.partials.organizations_table')
    @endslot
</x-pages.index>
