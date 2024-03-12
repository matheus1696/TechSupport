<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Organigrama: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')

        <x-conteiner>
            <div>
                <x-form.form method="create" route="{{route('organization_linked_users.store')}}">
                    <input type="hidden" name="organizational_id" value="{{$db->id}}">
                
                    <x-form.select col="12" label="Usuário" id="user_id">
                        @foreach ($dbUsers as $dbUser)
                            <option value="{{$dbUser->id}}">{{$dbUser->name}}</option>                           
                        @endforeach
                    </x-form.select>
                </x-form.form>
            </div>
        </x-conteiner>
        <hr>
        <div class="mt-3">
            <h3 class="text-lg font-semibold text-center">Usuários Vinculados</h3>

            @foreach ($dbLinkedUsers as $dbLinkedUser)
                {{$dbLinkedUser->Users->name}}
            @endforeach
        </div>

    @endslot
</x-pages.index>