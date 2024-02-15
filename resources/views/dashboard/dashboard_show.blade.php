<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Dashboards: {{$db->title}}"/>
    @endslot
    
    @slot('body')
        <x-conteiner>
            @if ($db->link_desktop)                
                <div class="d-none d-lg-block">
                    <div class="row">
                        <iframe title="{{$db->title}}" src="{{$db->link_desktop}}" frameborder="0" allowFullScreen="true" class="col-12 showHome"></iframe>
                    </div>
                </div>
            @else
                <div class="d-none d-lg-block">
                    <h3 class="py-5 text-center">Dashboard em Construção</h3>
                </div>
            @endif

            @if ($db->link_mobile)
                <div class="d-lg-none">
                    <div class="row">
                        <iframe title="{{$db->title}}" src="{{$db->link_mobile}}" frameborder="0" allowFullScreen="true" class="col-12 showHome"></iframe>
                    </div>
                </div>
            @else
                <div class="d-lg-none">
                    <h3 class="py-5 text-center">Dashboard Mobile em Construção</h3>
                </div>
            @endif

            
        </x-conteiner>
    @endslot

</x-pages.index>
